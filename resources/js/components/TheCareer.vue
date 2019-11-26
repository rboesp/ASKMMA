<template>
  <div>
    <accordion-component :parent-show="details">
      <template slot="header">
        <div class="w-full flex flex-wrap text-base bg-white rounded-lg items-center">
          <div class="w-full lg:w-4/5 flex flex-wrap">
            <div class="w-full flex justify-between mb-6" v-if="details">
              <div class="flex flex-col lg:flex-row lg:items-center w-1/2 lg:w-full">
                <div>
                  <h1 class="font-extrabold text-4xl font-black text-mmablue font-futura leading-tight">
                    {{careerTitle}}
                  </h1>
                </div>
                <h1 class="ml-0 lg:ml-10 font-semibold text-mmagray lg:text-3xl">
                  {{ location }}
                </h1>
              </div>
            </div>

            <div class="w-full mt-2 lg:m-0 lg:w-1/5" v-else>
              <span class="text-grey-dark">Job Title</span><br>
              <span class="font-semibold text-mmadescription">{{ careerTitle }}</span>
            </div>

            <div class="w-full mt-2 lg:m-0 lg:w-1/5">
              <span class="text-grey-dark">Location</span><br>
              <span class="font-semibold text-mmadescription">{{ location }}</span>
            </div>
            <div class="w-full mt-2 lg:m-0 lg:w-1/5">
              <span class="text-grey-dark">Department</span><br>
              <span class="font-semibold text-mmadescription">{{ department }}</span>
            </div>
            <div class="w-full mt-2 lg:m-0 lg:w-1/5">
              <span class="text-grey-dark">Salary</span><br>
              <span class="font-semibold text-mmadescription">{{ extra }}</span>
            </div>
          </div>
          <div class="flex flex-wrap items-center w-full mt-2 lg:m-0 lg:w-1/5 justify-end font-semibold">
            <slot name="actions">
              <a
                target="_top"
                class="hover:underline"
                href="mailto:danielle@askmma.com?Subject=Apply"
              >Apply Here</a>
              <button class="pl-4 pr-2 text-mmabrown font-semibold" @click="toggleDetails">
                {{ details ? 'View Less' : 'View More' }}

              </button>
              <span class="text-xl pt-1 text-mmabrown">
              <i class="fa fa-angle-down" v-if="!details"></i>
              <i class="fa fa-angle-up" v-if="details"></i>
            </span>
            </slot>
          </div>
        </div>
      </template>

      <slot/>
    </accordion-component>
  </div>
</template>

<script>
  export default {
    name: 'TheCareer',
    props: {
      careerTitle: {type: String, default: ''},
      location: {type: String, default: ''},
      department: {type: String, default: ''},
      extra: {type: String, default: ''}
    },
    data: () => ({
      details: false
    }),
    methods: {
      toggleDetails () {
        this.details = !this.details
      }
    }
  }
</script>

<style scoped>

</style>
