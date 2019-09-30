<template>
  <div>
    <h1 class="font-extrabold text-4xl font-black text-mmablue font-futura leading-tight ">
      Current Openings <span class="ml-3 text-gray-400">({{careers.length}})</span>
    </h1>
    <TheCareer
      :key="career"
      v-for="career in careers"
      :title="career.title"
      :location="career.location"
      :department="career.department"
      :extra="career.extra"
      class="mt-10"
    >
      <div class="w-full text-mmadescription">
        <h3 class="font-extrabold text-lg">
          Responsibilities
        </h3>
        <p class="mt-4">
          {{ career.responsibilities }}
        </p>
        <h3 class="mt-10 font-extrabold text-lg">
          Requirements
        </h3>
        <div class="w-full mt-4" v-html="career.requirements"></div>

        <h3 class="mt-10 font-extrabold text-lg">
          Core Competencies
        </h3>
        <div class="w-full mt-4" v-html="career.core_competencies"></div>
      </div>
      <p class="mt-12 font-bold text-lg text-mmadescription">
        For Agents interested in joining our organization: Call toll free
        <a class="font-extrabold font-black text-mmablue font-futura" href="+18008103859">
          1-800-810-3859
        </a>
        to speak with our National Recruiter, Shelia Woods
      </p>
      <p>
        {{ career.notes }}
      </p>

      <div class="flex justify-center lg:justify-start w-full mt-6">
        <a
          target="_top"
          href="mailto:careers@mma.com?Subject=Apply"
          class="w-4/5 md:w-2/3 lg:w-1/4 bg-mmared hover:bg-mmalightblue focus:shadow-outline focus:outline-none text-center text-white hover:text-white font-bold py-3 px-2 rounded-lg"
        >
          Apply for This Position
        </a>
      </div>
    </TheCareer>
  </div>
</template>

<script>
  import axios from 'axios'
  import TheCareer from './TheCareer'
  export default {
    name: 'CareerList',
    components:{
      TheCareer
    },
    data: () =>({
      careers: []
    }),
    mounted(){
      axios.get('/api/careers').then(({data}) => {
        this.careers = data.data
      })
    }
  }
</script>
