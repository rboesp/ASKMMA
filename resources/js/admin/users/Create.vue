<template>
  <div>
    <div>
      <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <user-info />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import AppInput from '../../components/common/AppInput'
  import UserInfo from './components/UserInfo'
  export default {
    name: 'Create',
    components: {UserInfo, AppInput},
    data: () => ({
      form: {}
    })
  }
</script>

<style scoped>

</style>