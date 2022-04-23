<template>
  <div>
    <h1 class="font-extrabold text-4xl font-black text-mmablue font-futura leading-tight ">
      Current Openings <span class="ml-3 text-gray-400">({{careers.length}})</span>
    </h1>
    <TheCareer
      :key="career.id"
      v-for="career in careers"
      :career-title="career.title"
      :location="career.location"
      :department="career.department"
      :extra="career.extra"
      class="mt-10"
    >
      <div class="w-full text-mmadescription">
        <h3 class="font-extrabold text-lg">
          Responsibilities
        </h3>
        <div class="w-full mt-4" v-html="career.responsibilities"></div>
        <h3 class="mt-10 font-extrabold text-lg">
          Requirements
        </h3>
        <div class="w-full mt-4" v-html="career.requirements"></div>

        <h3 class="mt-10 font-extrabold text-lg">
          Core Competencies
        </h3>
        <div class="w-full mt-4" v-html="career.core_competencies"></div>
      </div>
      <div class="mt-10">
        <h3 class="font-extrabold text-lg">
          Notes
        </h3>
        <p class="font-medium text-base mt-4 text-gray-700">
          {{ career.notes }}
        </p>
      </div>

      <div class="flex justify-center lg:justify-start w-full mt-6">
        <a
          target="_top"
          href="mailto:jobapplication@askmma.com?Subject=Apply"
          class="w-4/5 md:w-2/3 lg:w-1/4 bg-mmared hover:bg-mmalightblue focus:shadow-outline focus:outline-none text-center text-white hover:text-white font-bold py-3 px-2 rounded-lg"
        >
          Apply for This Position
        </a>
      </div>
      <p class="text-sm mt-10">
        * Medicare Medicaid Advisors, Inc. does not discriminate in employment on the basis of race, color, religion, sex
        (including pregnancy and gender identity), national origin, political affiliation, sexual orientation, marital
        status, disability, genetic information, age, membership in an employee organization, retaliation, parental
        status, military service, or other non-merit factor.
      </p>
    </TheCareer>
  </div>
</template>

<script>
  import axios from 'axios'
  import TheCareer from './TheCareer'

  export default {
    name: 'CareerList',
    components: {
      TheCareer
    },
    data: () => ({
      careers: []
    }),
    mounted () {
      axios.get('/api/careers').then(({data}) => {
        this.careers = data.data
      })
    }
  }
</script>
