<template>
  <div class="w-full bg-white rounded px-8">
    <div @click="toggleData" class="w-full flex flex-wrap justify-between py-8 cursor-pointer items-center">
      <slot name="header">
        <h3 class="font-extrabold text-2xl flex items-center w-full lg:w-4/6 text-gray-800">{{ title }}</h3>
        <span class="text-base text-mmablue font-semibold w-full lg:w-2/6 text-right">
          {{ show ? 'Close' : subTitle }}
          <arrow-icon :position="show ? 'up' : 'down'" class="ml-2"/>
        </span>
      </slot>
    </div>
    <transition name="fade">
      <div v-if="expand" class="border-t border-red-200 w-full py-6 border-mmablue text-sm lg:text-base">
        <slot/>
      </div>
    </transition>
  </div>
</template>

<script>
  export default {
    name: 'AccordionComponent',
    props: {
      title: {type: String, default: null},
      subTitle: {type: String, default: null},
      parentShow: {type: Boolean, default: false}
    },
    data: () => ({
      show: false
    }),
    methods: {
      toggleData () {
        this.show = !this.show
      }
    },
    computed: {
      expand () {
        return this.show || this.parentShow
      }
    }
  }
</script>

<style scoped>
  .fade-enter-active, .fade-leave-active {
    transition: opacity .3s;
  }
  .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
    opacity: 0;
  }
</style>