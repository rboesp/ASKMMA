<template>
  <div class="w-full">
    <h1 class="text-4xl font-semibold mt-10 w-full">Feedback Submissions</h1>
    <div class="w-full mt-6">
      <table class="border border-2 w-full">
        <thead>
        <tr>
          <td class="border font-bold border-2 px-4 py-2">Feedback type</td>
          <td class="border font-bold border-2 px-4 py-2">Email</td>
          <td class="border font-bold border-2 px-4 py-2">Message</td>
        </tr>
        </thead>
        <tbody>
          <tr v-for="feedback in feedbackList" :key="feedback">
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
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
  import axios from 'axios'
  export default {
    name: 'Index',
    data: () => ({
      feedbackList: [],
    }),
    mounted () {
      axios.get('/api/feedback').then(({data}) => {
        this.feedbackList = data.data
      })
    }
  }
</script>

<style scoped>

</style>
