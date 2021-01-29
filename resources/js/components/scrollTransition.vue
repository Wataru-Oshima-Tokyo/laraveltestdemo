<template>
  <div id="scrolltransition">
    <div :class="{fadeIn: visible}">
      <slot v-show="visible"></slot>
    </div>
  </div>

</template>

<script>
  export default {
    data() {
      return {
        visible: false
      };
    },
    created() {
      window.addEventListener("scroll", this.handleScroll);
    },
    destroyed() {
      window.removeEventListener("scroll", this.handleScroll);
    },
    methods: {
      handleScroll() {
        if (!this.visible) {
          var top = this.$el.getBoundingClientRect().top;
          this.visible = top < window.innerHeight + 10;
        }
      }
    }
  }
</script>

<style>

.fadeIn {
  animation: fadeIn 2s;
}
@keyframes fadeIn {
  0% {
    opacity: 0;
    transform: translateY(100px);
  }
  100% {
    opacity: 1;
    transform: translateY(0px);
  }
}
</style>
