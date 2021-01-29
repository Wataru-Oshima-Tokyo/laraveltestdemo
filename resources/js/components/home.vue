<template>
<div id="homeView">


  <div class="container-fluid fadeIn" style="margin: 100px 10px; padding: 0% 20%;">
    <div id="_carousel">
      <!-- the slide timing might need to be changed -->
      <b-carousel id="carousel-fade" style="text-shadow: 0px 0px 2px #000" fade indicators img-width="1024" img-height="480">
        <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=10"></b-carousel-slide>
        <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=12"></b-carousel-slide>
        <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=22"></b-carousel-slide>
      </b-carousel>
    </div>
  </div>


  <ScrollTransition>
    <div class="container-fluid centering">
      <b-row>
        <div class="col mx-auto" style="width: 50%;">
          <div style="padding: 20px;">
            <b-img :src="'/assets/sample0.jpg'" class="rounded" style="width:50%; height:auto;" alt="..."></b-img>
          </div>
          <div class="borderBottomGray mx-auto"></div>
          <div style="padding-top: 10px;">
            <h3>Profile</h3>
          </div>
          <div class="textWrap mx-auto py-2 centering adjustPecentage">
            <div>
              <p>My name is Lisa Yokojima the most outstanding hair-makeup artist in Japan.</p>
            </div>
          </div>
        </div>
      </b-row>
    </div>
  </ScrollTransition>

  <ScrollTransition>
    <div class="container-fluid" style="margin-top: 50px;">
      <b-row class="mx-2 py-2">
        <b-col md="5" class="centering orderReverseBottom" style="border: 2px solid rgb(175, 177, 169);">
          <section style="padding:0px;">
            <b-container>
              <b-row cols="3" class="my-auto centering">
                <!-- if you you mind the order of pictures, I can fix it very soon -->
                <b-col style="padding:10px;">
                  <b-img :src="'../assets/sample0.jpg'" class="rounded" fluid thumbnail alt="..."></b-img>
                </b-col>
                <b-col style="padding:10px;">
                  <b-img :src="'/assets/sample1.jpg'" class="rounded" fluid thumbnail alt="..."></b-img>
                </b-col>
                <b-col style="padding:10px;">
                  <b-img :src="'../assets/sample2.jpg'" class="rounded" fluid thumbnail alt="..."></b-img>
                </b-col>
                <b-col style="padding:10px;">
                  <b-img :src="'../assets/sample3.jpg'" class="rounded" fluid thumbnail alt="..."></b-img>
                </b-col>
                <b-col style="padding:10px;">
                  <b-img :src="'../assets/sample4.jpg'" class="rounded" fluid thumbnail alt="..."></b-img>
                </b-col>
                <b-col style="padding:10px;">
                  <b-img :src="'../assets/sample5.jpg'" class="rounded" fluid thumbnail alt="..."></b-img>
                </b-col>
              </b-row>
            </b-container>
          </section>


        </b-col>
        <b-col md="7" class="centering orderReverseTop" style="background-color: rgb(175, 177, 169);">
          <div class="py-5">
            <h3>
              <a class="text-white px-3" href="/portfolio">My portfolio</a>
            </h3>
            <div class="borderBottomGray mx-auto" style="width: 50%;">
            </div>
            <div class="textWrap mx-auto adjustPecentage1024" style="padding-top: 10px;">
              <p>This is my portfolio <br>
                I spent a lot of time to make my art galary in order to show my talent.
              </p>
            </div>
          </div>

        </b-col>
      </b-row>
    </div>
  </ScrollTransition>
  <ScrollTransition>
    <div class="container-fluid" style="margin-top: 100px;">
      <b-row class="mx-2 py-2">
        <b-col md="7" order="1" class="centering" style="background-color: rgb(175, 177, 169);">
          <div class="py-5">
            <h3>
              <router-link class="text-white px-3" to="/makeupvideos">Make-up Videos</router-link>
            </h3>
            <div class="borderBottomGray mx-auto" style="width: 30%;">
            </div>
            <div class="textWrap mx-auto adjustPecentage1024" style="padding-top: 10px;">
              <p>I have bunch of videos which show how I do makeup for you. <br>
                If you were intrested in it, I'm so glad you hit the like. Should you have questions, please don't hesitate to contact me.

              </p>
            </div>
          </div>
        </b-col>
        <b-col md="5" order="2" class="centering" style="border: 2px solid rgb(175, 177, 169);">
          <p>Coming soon...</p>
        </b-col>
      </b-row>
    </div>
  </ScrollTransition>



</div>
</template>

<script>
import ScrollTransition from '../components/ScrollTransition'
export default {
  name: 'homeView',
  components: {
    ScrollTransition,
  },
}
</script>

<style lang="css" scoped>
#homeView {
  text-align: center;
}
[class*="col"] {
  /* padding: 1rem; */
  /* background-color: #033332; */
  /* border: 2px solid gray; */
  /* color: #fff;
  text-align: center; */
}

[class*="con"] {
  /* padding: 1rem; */
  /* background-color: #82d418; */
  /* border: 2px solid gray; */
  /* color: #fff;
  text-align: center; */
}
.fadeIn {
  animation: fadeIn 3s;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
    transform: translateY(100px);
  }
}

.orderReverseTop {
  order: 2;
}
.orderReverseBottom {
  order: 1;
}

.adjustPecentage {
  width: 50%;
}
.adjustPecentage1024 {
  width: 50%;
}
.textWrap {
  display: flex;
  flex-wrap: wrap;
}
.borderBottomGray {
  border-bottom: 1px solid gray;
  width: 30%
}
.centering {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}

@media (max-width: 1024px) {
  .adjustPecentage1024 {
    width: 70%
  }
}


@media (max-width: 768px){
  .adjustPecentage {
    width: 70%;
  }
  .orderReverseTop {
    order: 1;
  }
  .orderReverseBottom {
    order: 2;
  }
}

</style>
