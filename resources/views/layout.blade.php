<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <script type="text/javascript">
    window.onload = function() {
      const spinner = document.getElementById('loading');
      spinner.classList.add('loaded');
    }

    </script>
    <title></title>

    <style>
    #_navbar {
      font-family: 'Avenir', Helvetica, Arial, sans-serif;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      text-align: center;
      color: rgb(25, 77, 76);
      margin: 10px;
      background-color: rgba(215, 243, 247, 0.44);
    }
    .centering {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    </style>
  </head>
  <body>
    <h1>Lia Yokojima</h1>
    <div id="app">
    <div id="_navbar">
      <b-navbar toggleable="lg" type="light">
        <b-navbar-brand>
          <!-- <router-link class="text-primary px-3" to="/">
            <b-img :src="'/assets/home_icon.jpg'" fluid rounded style="width: 100px; height: 100px;" alt="Responsive image"></b-img>
          </router-link> -->
          <b-nav-item class="text-white px-3" href="/">
              <b-img :src="'/assets/home_icon.jpg'" fluid rounded style="width: 100px; height: 100px;" alt="Responsive image"></b-img>
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
              <b-dropdown-item  class="text-info px-3" href="/portfolio">
                <div class="text-primary">
                  portfolio
                </div>
              </b-dropdown-item>
              <b-dropdown-item class="px-3" href="/makeupvideos">
                <div class="text-primary">
                  makeupvideos
                </div>
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
    <div class="text-center">
      @yield('content')
    </div>

  </div>
  <footer>
    <div class="cnotainer-fluid" style="margin: 10px 0px 0px 0px;">
      <div class="row" style="background-color: rgba(0, 0, 0, 0.2);">
        <div class="col-md-8 mx-auto pt-4" style="font-size: 18px;">
          <p> 2021 Wataru Oshima. All rights reserved</p>
        </div>

      </div>
    </div>
  </footer>

  <div id="loading" class="centering">
    <div class="spinner">
   <div class="dot1"></div>
   <div class="dot2"></div>
 </div>
  </div>
    <script src="{{ mix('/js/app.js') }}" defer></script>
  </body>
</html>
