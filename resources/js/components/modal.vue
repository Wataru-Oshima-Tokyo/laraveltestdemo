<template lang="html">
<div id="modalZoom">
<div class="bg" @click.self="close" v-show="isShow">
  <div class="modal" v-show="isShow">
    <b-img :src="src" alt=""></b-img>
    <button class="modal-btn" @click="close">
      <i class="fas fa-times"></i>
    </button>
  </div>
</div>
<div>
<button @click="$emit('parentMessage', 'Here you go')">message</button>
</div>
</div>
</template>

<script>
export default {
  el: 'modalZoom',
  data: {
    src: null,
    isShow: false
  },
  methods: {
    zoom: function(event) {
      this.src = event.currentTarget.getAttribute('href');
      this.isShow = true;
    },
    close: function() {
      this.isShow = false;
    },
  }

}
</script>

<style lang="css" scoped>
</style>
