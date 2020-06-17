<template>
  <div class="relative inline-block text-left">
    <div>
      <button
        class="flex items-center text-base font-normal italic text-gray-800 hover:text-gray-900 focus:outline-none focus:text-gray-900"
        aria-label="Options" id="options-menu" aria-haspopup="true" aria-expanded="true" @click="toggleDisplay">
        <span><slot name="username" /></span>
        <svg class="-mr-1 ml-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
        </svg>
      </button>
    </div>
    <transition
      enter-class="transform opacity-0 scale-95"
      enter-active-class="transform opacity-100 scale-100"
      leave-class="transform opacity-100 scale-100"
      leave-active-class="transform opacity-0 scale-95"
    >
      <div v-if="show" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg">
        <div class="rounded-md bg-white shadow-xs">
          <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            <slot>
              <a href="#"
                 class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                 role="menuitem">Account settings
              </a>
              <a href="#"
                 class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                 role="menuitem">Support
              </a>
              <a href="#"
                 class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                 role="menuitem">License
              </a>
              <form method="POST" action="#">
                <button type="submit"
                        class="block w-full text-left px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                        role="menuitem">
                  Sign out
                </button>
              </form>
            </slot>
          </div>
        </div>
      </div>
    </transition>
  </div>
</template>

<script>
  export default {
    name: 'UserDropdown',
    data: () => ({
      show: false
    }),
    methods: {
      toggleDisplay () {
        this.show = !this.show
      }
    }
  }
</script>

<style scoped>

</style>