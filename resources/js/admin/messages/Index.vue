<template>
  <div class="w-full">
    <div class="flex w-full mt-10 justify-end">
      <a href="/dashboard/messages/export" class="text-white text-base rounded bg-mmared shadow text-center font-semibold px-4 py-2">
        Export
      </a>
    </div>
    <h1 class="text-4xl font-semibold mt-10 w-full">Contact Messages</h1>
    <div class="w-full mt-6">
      <table class="border border-2 w-full">
        <thead>
          <tr>
            <td class="border font-bold border-2 px-4 py-2">First Name</td>
            <td class="border font-bold border-2 px-4 py-2">Last Name</td>
            <td class="border font-bold border-2 px-4 py-2">Email</td>
            <td class="border font-bold border-2 px-4 py-2">Phone</td>
            <td class="border font-bold border-2 px-4 py-2">Zip Code</td>
            <td class="border font-bold border-2 px-4 py-2">Interest</td>
            <td class="border font-bold border-2 px-4 py-2">Subscribed</td>
            <td class="border font-bold border-2 px-4 py-2">Created At</td>
          </tr>
        </thead>
        <tbody>
          <tr v-for="message in messages" :key="message.id">
            <td class="border border-2 px-4 py-2">{{ message.first_name }}</td>
            <td class="border border-2 px-4 py-2">{{ message.last_name }}</td>
            <td class="border border-2 px-4 py-2">
                <a :href="`mailto:${message.email}`" class="hover:font-semibold">{{ message.email }}</a>
            </td>
            <td class="border border-2 px-4 py-2">{{ message.phone }}</td>
            <td class="border border-2 px-4 py-2">{{ message.zip_code }}</td>
            <td class="border border-2 px-4 py-2">{{ message.interest }}</td>
            <td class="border border-2 px-4 py-2">{{ message.subscribed }}</td>
            <td class="border border-2 px-4 py-2">{{ message.timestamp }}</td>
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
      contactMessages: [],
    }),
    computed: {
      messages(){
        return this.contactMessages.map(message => {
          message.subscribed = message.receive_newsletter === '1' ? 'Yes' : 'No'
          message.timestamp = moment(message.created_at).format('LLL')


          return message
        })
      }
    },
    mounted () {
      axios.get('/api/messages').then(({data}) => {
        this.contactMessages = data.data
      })
    }
  }
</script>

<style scoped>

</style>
