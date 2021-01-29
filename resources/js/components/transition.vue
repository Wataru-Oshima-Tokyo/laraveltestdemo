<template lang="html">
  <div id="sample">
    <b-btn v-b-modal.modal1>Launch demo modal</b-btn>

  <b-modal ref="myModalRef" id="modal1" title="Bootstrap-Vue" @shown="shown" no-fade class="hidden" @ok="hidden" @cancel="hidden">
    <p class="my-4">Hello from modal!</p>
  </b-modal>
  </div>

</template>

<script>
export default {
  methods: {
    shown: function() {
      let modal = document.getElementById('modal1');
      modal.parentElement.parentElement.classList.remove('hidden');
      modal.classList.add('slideInLeft');
      modal.classList.add('animated');
    },
    hidden: function(evt) {
      let modal = document.getElementById('modal1');
      evt.preventDefault();
      modal.classList.add('slideOutLeft');
      setTimeout(() => {
        this.$refs.myModalRef.hide();
        modal.parentElement.parentElement.classList.add('hidden');
        console.log('test');
      }, 1000)
    }
  }
}
</script>

<style lang="css" scoped>
.hidden {
  display: none;
}
</style>
