<template>
  <div class="w-full bg-white rounded px-8">
    <div @click="toggleData" class="w-full flex flex-wrap justify-between py-8 cursor-pointer items-center">
      <slot name="header">
        <h3 class="font-extrabold text-2xl flex items-center w-full lg:w-4/6 text-gray-800">{{ title }}</h3>
        <span class="text-base text-mmablue font-semibold w-full lg:w-2/6 text-right">
          {{ show ? 'Close' : subTitle }}
          <arrow-icon :position="show ? 'up' : 'down'" class="ml-2" />
        </span>
      </slot>
    </div>
    <div v-if="show" class="border-t border-red-200 w-full py-6 border-mmablue text-sm lg:text-base">
      <slot />
    </div>
  </div>
</template>

<script>
  export default {
    name: 'AccordionComponent',
    props: {
      title: {type: String, default: null},
      subTitle: {type: String, default: null},
    },
    data: () => ({
      show: false
    }),
    methods: {
      toggleData () {
        this.show = !this.show
      }
    }
  }
</script>

<style scoped>
  .panel {
    display: none;
    background-color: white;
    overflow: hidden;
  }
</style>