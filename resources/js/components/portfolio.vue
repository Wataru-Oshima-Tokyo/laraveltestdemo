<template >
<div id="myportfolio">
  <div class="container-fluid fadeIn" style="width: 80%;">
    <h1>My portfolio</h1>
    <div class="b-col">
      <div class="text-center mx-auto py-3" style="width: 50%;">
        <p>There are some smaples I did. I have been experienced as an make up artist for 8 years. I hope you enjoy my collection.</p>
      </div>
    </div>
      <div class="b-col" style="width:100%; position: relative">
          <b-img :src="'/assets/sample0.jpg'" fluid alt="Responsive image"></b-img>
      </div>
  </div>

  <div class="" style="height: 100px">

  </div>

  <ScrollTransition>
    <ModalZoom>
      <div class="container-fluid" style="width: 80%; height: auto; padding: 10px;">
        <div class="py-5">
          <h2>My Gallery</h2>
        </div>

        <section class="displayGrid">
          <!-- left -->
          <div class="b-row" style="width:100%;">
            <div class="b-col" style="padding:5px;width:100%; position: relative;">
              <a href="" @click.prevent="zoom('../assets/sample1.jpg')">
                <b-img :src="'/assets/sample1.jpg'" fluid alt="Responsive image"></b-img>
                <span class="b-col gallery-item-hover">
                  <i class="fas fa-search-plus"></i>
                </span>
              </a>
            </div>
            <div class="b-col" style="padding:5px; width:100%; position: relative;">
              <a href="" @click.prevent="zoom('/assets/sample2.jpg')">
                <b-img :src="'../assets/sample2.jpg'" fluid alt="Responsive image"></b-img>
                <span class="b-col gallery-item-hover">
                  <i class="fas fa-search-plus"></i>
                </span>
              </a>
            </div>
            <div class="b-col" style="padding:5px; width:100%; position: relative;">
              <a href="" @click.prevent="zoom('/assets/sample8.jpg')">
                <b-img :src="'/assets/sample8.jpg'" fluid alt="Responsive image"></b-img>
                <span class="b-col gallery-item-hover">
                  <i class="fas fa-search-plus"></i>
                </span>
              </a>
            </div>
          </div>
          <!-- center -->
          <div class="b-row" style="width:100%; ">
            <div class="b-col" style="padding:5px;width:100%;position: relative;">
              <a href="" @click.prevent="zoom('/assets/sample2.jpg')">
                <b-img :src="'/assets/sample2.jpg'" fluid alt="Responsive image"></b-img>
                <span class="b-col gallery-item-hover">
                  <i class="fas fa-search-plus"></i>
                </span>
              </a>
            </div>
            <div class="b-col" style="padding:5px; width:100%; position: relative;">
              <a href="" @click.prevent="zoom('/assets/sample3.jpg')">
                <b-img :src="'/assets/sample3.jpg'" fluid alt="Responsive image"></b-img>
                <span class="b-col gallery-item-hover">
                  <i class="fas fa-search-plus"></i>
                </span>
              </a>
            </div>
            <div class="b-col" style="padding:5px; width:100%; position: relative;">
              <a href="" @click.prevent="zoom('/assets/sample4.jpg')">
                <b-img :src="'/assets/sample4.jpg'" fluid alt="Responsive image"></b-img>
                <span class="b-col gallery-item-hover">
                  <i class="fas fa-search-plus"></i>
                </span>
              </a>
            </div>
          </div>
          <!-- right -->
          <div class="b-row" style="width:100%;">
            <div class="b-col" style="padding:5px;width:100%;position: relative;">
              <a href="" @click.prevent="zoom('/assets/sample5.jpg')">
                <b-img :src="'/assets/sample5.jpg'" fluid alt="Responsive image"></b-img>
                <span class="b-col gallery-item-hover">
                  <i class="fas fa-search-plus"></i>
                </span>
              </a>
            </div>
            <div class="b-col" style="padding:5px; width:100%; position: relative;">
              <a href="" @click.prevent="zoom('/assets/sample6.jpg')">
                <b-img :src="'/assets/sample6.jpg'" fluid alt="Responsive image"></b-img>
                <span class="b-col gallery-item-hover">
                  <i class="fas fa-search-plus"></i>
                </span>
              </a>
            </div>
            <div class="b-col" style="padding:5px; width:100%; position: relative;">
              <a href="" @click.prevent="zoom('/assets/sample7.jpg')">
                <b-img :src="'/assets/sample7.jpg'" fluid alt="Responsive image"></b-img>
                <span class="b-col gallery-item-hover">
                  <i class="fas fa-search-plus"></i>
                </span>
              </a>
            </div>
          </div>
        </section>
      </div>

      <transition name="fade">
      <div class="bg" @click.self="close" v-show="isShow">
        <div class="zoomImage slideIn">
          <b-img :src="src" fluid class="responsiveHeight" alt="Responsive image"></b-img>
          <button class="modal-btn" @click="close">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
    </transition>

    </ModalZoom>
  </ScrollTransition>
</div>
</template>

<script>
import ScrollTransition from '../components/ScrollTransition'
export default {
  name: 'myportfolio',
  components: {
    ScrollTransition,
  },
  data() {
    return {
      src: null,
      isShow: false
    };
  },
  methods: {
    zoom: function(src) {
      this.src = src;
      this.isShow = true;
      console.log(this.src);
    },
    close: function() {
      this.isShow = false;
    },
  }
}
</script>

<style>
#myportfolio {
  justify-content: center;
  align-items: center;
  text-align: center;
}
 .fade-enter-active,
.fade-leave-active {
  transition: opacity .5s ease;
}

.fade-enter,
.fade-leave-to {
  opacity: 0;
}

/* .slide-enter-active,
.slide-leave-active {
  transition: top 2s ease;
  top: 0;
}

.slide-fade-enter-active {
  transition: all .3s ease;
}

.slide-fade-leave-active {
  transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}

.slide-fade-enter,
.slide-fade-leave-to

   {
  transform: translateX(10px);
  opacity: 0;
}


.slide-enter {
  top: -100px;
}

.slide-leave-to {
  top: 300px;
} */


.fadeIn {
  animation: fadeIn 2s;
}
.slideIn {
  animation: slideIn 1s;
}

@keyframes slideIn {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    transform: translateY(0px);
  }
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


.displayGrid {
  display: grid;
  grid-auto-flow: column;
}


.gallery-item-hover {
  display: flex;
  background: rgba(0, 0, 0, .6);
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  justify-content: center;
  align-items: center;
  opacity: 0;
  transition: opacity 0.2s;
}

.gallery-item-hover:hover {
  opacity: 1;
}

.gallery-item-hover i {
  color: #fff;
  font-size: 40px;
}

.bg {
  position: fixed;
  display: flex;
  background: rgba(0, 0, 0, .8);
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  justify-content: center;
  align-items: center;
  cursor: pointer;
}

.zoomImage {
  position: relative;
  max-width: 80%;
  max-height: 80%;

}

.responsiveHeight {
  height: 650px;
  border: 3px solid #fff;
}

.modal-btn {
  position: absolute;
  top: -25px;
  right: -25px;
  background: #111;
  color: #fff;
  border-radius: 50%;
  font-size: 20px;
  border: 3px solid #fff;
  width: 50px;
  height: 50px;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}

.modal-btn:hover,
.modal-btn:focus,
.modal-btn:active {
  border-color: #fff;
}

@media (max-width: 768px) {
  .displayGrid {
    display: inline;
    grid-auto-flow: column;
  }
}

@media (max-width: 1400px) {
  .responsiveHeight {
    height: 500px;
  }
}
</style>
