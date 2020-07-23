<template>
  <button
    class="relative"
    :disabled="disabled"
    :class="className"
  >
    <span class="block">
      <span v-if="icon" class="mr-3" /> <slot name="icon" /> </span>
       <slot />
    </span>
  </button>
</template>

<script>
export default {
  name: 'AppButton',
  props: {
    busy: { type: Boolean, default: false },
    variant: { type: String, default: 'purple-500' },
    inputClass: { type: String, default: 'flex items-center justify-center h-8 px-4 rounded-full focus:outline-none' },
    outline: { type: Boolean, default: false },
    border: { type: Boolean, default: false },
    hideBorder: { type: Boolean, default: false },
    icon: { type: String, default: null },
    disabled: { type: Boolean, default: false }
  },
  computed: {
    className() {
      const border = `${(this.border || this.outline) && !this.hideBorder ? 'border-2' : null} border-${this.variant}`
      const text = this.outline ? `text-${this.variant}` : 'text-white'
      const background = `bg-${this.variant}`
      const className = {}

      className[border] = true
      className[text] = true
      className[background] = !this.outline
      className['btn-loading'] = this.busy
      className['cursor-not-allowed pointer-events-none'] = this.disabled
      className[`${this.inputClass}`] = true

      return className
    }
  }
}
</script>

<style scoped>
.btn-loading {
  pointer-events: none;
}

.btn-loading span {
  pointer-events: none;
  color: transparent !important;
}

.btn-loading:before {
  content: '';
  display: block;
  width: 1em;
  height: 1em;
  border-width: 2px;
  border-color: currentColor;
  border-style: solid;
  border-right-color: transparent;
  border-top-color: transparent;
  position: absolute;
  left: calc(50% - (1em / 2));
  top: calc(50% - (1em / 2));
  border-radius: 50%;
  animation: rotate 0.5s infinite linear;
}
@keyframes rotate {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}
</style>
