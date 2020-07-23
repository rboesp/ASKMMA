<template>
  <div class="w-full min-h-screen fixed pin flex py-10 overflow-auto bg-grey-200 z-50" @click="closeClicked">
    <div class="relative flex-col m-auto bg-white rounded shadow-lg" :class="className" @click.stop="">
      <button
        class="absolute top-0 right-0 p-4 text-xl text-white cursor-pointer focus:outline-none"
        @click="closeClicked"
      >
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
          <g data-name="Layer 2">
            <path d="M13.41 12l4.3-4.29a1 1 0 10-1.42-1.42L12 10.59l-4.29-4.3a1 1 0 00-1.42 1.42l4.3 4.29-4.3 4.29a1 1 0 000 1.42 1 1 0 001.42 0l4.29-4.3 4.29 4.3a1 1 0 001.42 0 1 1 0 000-1.42z" data-name="close"/>
          </g>
        </svg>

      </button>
      <div class="w-full">
        <slot />
      </div>
    </div>
  </div>
</template>

<script>

export default {
  name: 'AppModal',
  props: {
    heading: { type: Boolean, default: true },
    widthClass: { type: String, default: 'w-full' }
  },
  computed: {
    className() {
      const className = {}
      className[`${this.widthClass}`] = !!this.widthClass

      if (this.widthClass === 'w-full') {
        className[`lg:max-w-xl`] = true
      }
      return className
    }
  },
  methods: {
    closeClicked() {
      this.$emit('close')
    }
  }
}
</script>
