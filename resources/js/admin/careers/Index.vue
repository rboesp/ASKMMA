<template>
  <div class="w-full">
    <transition name="fade">
      <CareerList :careers="careers" @add="createScreen" @delete="deleteCareer" v-if="state === 'list'"/>

      <CareerItem v-model="newCareer" @back="listScreen" v-else-if="state === 'create'">
        <template slot="footer">
          <div class="flex justify-center md:justify-end w-full mt-6">
            <button
              class="w-4/5 md:w-1/3 lg:w-1/4 bg-mmared hover:bg-mmalightblue focus:shadow-outline focus:outline-none text-center text-white hover:text-white font-bold py-3 px-2 rounded-lg"
              @click="createCareer"
              :class="{'btn--loading': loading}"
            >
              Create Career
            </button>
          </div>
        </template>
      </CareerItem>
    </transition>
  </div>
</template>

<script>
  import CareerList from './CareerList'
  import CareerItem from './CareerItem'
  import axios from 'axios'
  import Swal from 'sweetalert2'

  export default {
    name: 'Index',
    components: {
      CareerItem,
      CareerList
    },
    data: () => ({
      state: 'list',
      loading: false,
      newCareer: {
        title: '',
        location: '',
        department: '',
        extra: '',
        responsibilities: '',
        requirements: '',
        core_competencies: '',
        notes: ''
      },
      careerList: [],
    }),
    computed: {
      careers () {
        return this.careerList
      }
    },
    methods: {
      createCareer () {
        this.loading = true
        axios.post('/api/careers', this.newCareer).then(() => {
          Swal.fire({
            type: 'success',
            title: 'Career has been saved',
            showConfirmButton: false,
            timer: 1500
          })
          this.listScreen()
        }).catch(e => {
          Swal.fire({
            type: 'error',
            title: 'Error Trying to save Career please verify your data',
            showConfirmButton: false,
            timer: 1500
          })
        }).finally(() => {
          this.loading = false
        })
      },
      deleteCareer ({id}) {
        Swal.fire({
          title: 'Are you sure?',
          text: 'You won\'t be able to revert this!',
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.value) {
            axios.delete(`/api/careers/${id}`).then(() => {
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
              this.getList()
            }).catch(() => {
              Swal.fire(
                'Error!',
                'Your file has not been deleted. Please verify connenction or contact team',
                'error'
              )
            })
          }
        })
      },
      getList () {
        axios.get('/api/careers').then(({data}) => {
          this.careerList = data.data
        })
      },
      listScreen () {
        this.state = 'list'
        this.getList()
      },
      createScreen () {
        this.state = 'create'
      }
    },
    mounted () {
      this.listScreen()
    }
  }
</script>
<style scoped>
  .fade-enter-active, .fade-leave-active {
    transition: opacity .3s;
  }

  .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */
  {
    opacity: 0;
  }
</style>
