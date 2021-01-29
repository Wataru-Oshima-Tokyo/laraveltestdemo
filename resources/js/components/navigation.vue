<template>
<div id="_navbar">
    <!-- <b-nav pills style="padding: 10px;">
      <b-nav-item >
        <router-link class="text-white px-3" to="/">
          <b-img :src="'/assets/home_icon.jpg'" fluid rounded style="width: 100px; height: 100px;" alt="Responsive image"></b-img>
        </router-link>
      </b-nav-item>
      <b-nav-item-dropdown class="centering" id="my-nav-dropdown" text="Link" toggle-class="nav-link-custom">
        <b-dropdown-item href="https://www.instagram.com/chibi_risa_" target="_blank">
          <div class="text-primary">
            Instagram
          </div>
        </b-dropdown-item>
        <b-dropdown-item>
          <a href="#">Twitter(not yet linked)</a>
        </b-dropdown-item>
      </b-nav-item-dropdown>
      <b-nav-item-dropdown class="centering" id="my-nav-dropdown" text="Sitemap" toggle-class="nav-link-custom">
        <b-dropdown-item>
          <router-link class="text-black px-3" to="/portfolio">portfolio</router-link>
        </b-dropdown-item>
        <b-dropdown-item>
          <router-link class="text-black px-3" to="/makeupvideos">Make-up Videos</router-link>
        </b-dropdown-item>
        <b-dropdown-divider></b-dropdown-divider>
        <b-dropdown-item class="text-black px-3" href="/contact">
          Contact
        </b-dropdown-item>
      </b-nav-item-dropdown>
    </b-nav> -->
  <b-navbar toggleable="lg" type="light">
    <b-navbar-brand>
      <router-link class="text-primary px-3" to="/">
        <b-img :src="'/assets/home_icon.jpg'" fluid rounded style="width: 100px; height: 100px;" alt="Responsive image"></b-img>
      </router-link>
      </b-nav-item>
    </b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav >
      <b-navbar-nav>
        <b-nav-item-dropdown  class="text-black" text="Link" id="my-nav-dropdown"  toggle-class="nav-link-custom">
          <b-dropdown-item href="https://www.instagram.com/chibi_risa_" target="_blank">
            <div class="text-primary">
              Instagram
            </div>
          </b-dropdown-item>
          <b-dropdown-item href="#">
            <div class="text-primary">
              Twitter(not yet linked)
            </div>
          </b-dropdown-item>
        </b-nav-item-dropdown>
        <b-nav-item-dropdown id="my-nav-dropdown" text="Sitemap" toggle-class="nav-link-custom">
          <b-dropdown-item>
            <router-link class="text-black px-3" to="/portfolio">portfolio</router-link>
          </b-dropdown-item>

          <b-dropdown-item>
            <router-link class="text-black px-3" to="/makeupvideos">Make-up Videos</router-link>
          </b-dropdown-item>
          </b-dropdown-item>
          <b-dropdown-divider></b-dropdown-divider>
          <b-dropdown-item class="text-black px-3" href="/contact">
            Contact
          </b-dropdown-item>
        </b-nav-item-dropdown>
      </b-navbar-nav>

      <!-- Right aligned nav items -->
      <!-- <b-navbar-nav class="ml-auto">
        <b-nav-item-dropdown text="Lang" right>
          <b-dropdown-item href="#">EN</b-dropdown-item>
          <b-dropdown-item href="#">ES</b-dropdown-item>
          <b-dropdown-item href="#">RU</b-dropdown-item>
          <b-dropdown-item href="#">FA</b-dropdown-item>
        </b-nav-item-dropdown>

        <b-nav-item-dropdown right>
          Using 'button-content' slot
          <template #button-content>
            <em>User</em>
          </template>
          <b-dropdown-item href="#">Profile</b-dropdown-item>
          <b-dropdown-item href="#">Sign Out</b-dropdown-item>
        </b-nav-item-dropdown>
      </b-navbar-nav> -->
    </b-collapse>
  </b-navbar>
</div>
</template>

<script>
export default {

}
</script>

<style>

</style>
