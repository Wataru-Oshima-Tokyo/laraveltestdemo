<template>
  <div class="container-fluid" style="margin: 10px; padding: 0% 20%;">
    <div id="_carousel">
      <!-- the slide timing might need to be changed -->
      <b-carousel id="carousel-fade" style="text-shadow: 0px 0px 2px #000" fade indicators img-width="1024" img-height="480">
        <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=10"></b-carousel-slide>
        <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=12"></b-carousel-slide>
        <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=22"></b-carousel-slide>
      </b-carousel>
    </div>
  </div>

</template>

<script>
export default {}
</script>

<style lang="css" scoped>
</style>
