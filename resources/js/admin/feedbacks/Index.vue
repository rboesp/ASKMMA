<template>
  <div class="w-full">
    <div class="flex w-full mt-10 justify-end">
      <a href="/management/feedback/export" class="text-white text-base rounded bg-mmared shadow text-center font-semibold px-4 py-2">
        Export
      </a>
    </div>

    <h1 class="text-4xl font-semibold mt-10 w-full">Feedback Submissions</h1>
    <div class="w-full mt-6">
      <table class="border border-2 w-full">
        <thead>
        <tr>
          <td class="border font-bold border-2 px-4 py-2">Feedback type</td>
          <td class="border font-bold border-2 px-4 py-2">Email</td>
          <td class="border font-bold border-2 px-4 py-2">Message</td>
          <td class="border font-bold border-2 px-4 py-2">Created At</td>
        </tr>
        </thead>
        <tbody>
          <tr v-for="feedback in feedbacks" :key="feedback.id">
            <td class="border border-2 px-4 py-2">{{ feedback.feedback_type }}</td>
            <td class="border border-2 px-4 py-2">
                <a
                    :href="'mailto:'+feedback.email"
                    class="hover:font-semibold"
                >
                    {{ feedback.email }}
                </a>
            </td>
            <td class="border border-2 px-4 py-2">{{ feedback.message }}</td>
            <td class="border border-2 px-4 py-2">{{ feedback.timestamp }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
  import axios from 'axios'
  import moment from 'moment'
  export default {
    name: 'Index',
    data: () => ({
      feedbackList: [],
    }),
    computed: {
      feedbacks(){
        return this.feedbackList.map(feedback => {
          feedback.timestamp = moment(feedback.created_at).format('LLL')
          return feedback
        })
      }
    },
    mounted () {
      axios.get('/api/feedback').then(({data}) => {
        this.feedbackList = data.data
      })
    }
  }
</script>

<style scoped>

</style>
