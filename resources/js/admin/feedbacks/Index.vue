<template>
  <div class="w-full">
    <div class="flex w-full mt-10 justify-end">
      <a href="/dashboard/feedback/export"
         class="text-white text-base rounded bg-purple-500 shadow text-center font-semibold px-4 py-2">
        Export
      </a>
    </div>

    <h1 class="text-2xl font-semibold w-full">Feedback Submissions</h1>


    <div class="flex flex-col mt-6">
      <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
          <table class="min-w-full">
            <thead>
            <tr>
              <th
                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Feedback type
              </th>
              <th
                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Email
              </th>
              <th
                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Message
              </th>
              <th
                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Created At
              </th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(feedback, index) in feedbacks" :key="feedback.id"
                :class="{ 'bg-white': index % 2  === 0, 'bg-gray-50': index % 2  !== 0, }">
              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                {{ feedback.feedback_type }}
              </td>
              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                <a :href="'mailto:'+feedback.email" class="hover:font-semibold">
                  {{ feedback.email }}
                </a>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                {{ feedback.message }}
              </td>
              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                {{ feedback.timestamp }}
              </td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
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
      feedbacks () {
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
