<template>
  <i :class="className" class="arrow__icon border"></i>
</template>

<script>
  export default {
    name: 'ArrowIcon',
    props: {
      position: { type: String, default: 'right' }
    },
    computed: {
      className () {
        const className = {}
        className[this.position] = !!this.position
        return className
      }
    }
  }
</script>

<style scoped>
  .arrow__icon {
    border-width: 0 2px 2px 0;
    display: inline-block;
    padding: 3px;
    z-index: 0;
  }
  .right {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
  }

  .left {
    transform: rotate(135deg);
    -webkit-transform: rotate(135deg);
  }

  .up {
    transform: rotate(-135deg);
    -webkit-transform: rotate(-135deg);
  }

  .down {
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
  }
</style>