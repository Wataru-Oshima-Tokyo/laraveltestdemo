<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>{{ config('app.name', 'Vue Laravel SPA') }}</title>

     <!-- Styles -->
     <link href="{{ mix('/css/app.css') }}" rel="stylesheet">


     <script type="text/javascript">
     window.onload = function() {
       const spinner = document.getElementById('loading');
       spinner.classList.add('loaded');
     }

     </script>
 </head>
 <body>
   <h1>Lisa Yokojima</h1>
 <div id="app">
   <div>
     <navigation-component></navigation-coomponent>
   </div>
   <router-view></router-view>


   <div id="loading" class="centering">
     <div class="spinner">
    <div class="dot1"></div>
    <div class="dot2"></div>
  </div>
   </div>

 </div>
 <footer>
   <div class="cnotainer-fluid" style="margin: 10px 0px 0px 0px;">
     <div class="row" style="background-color: rgba(0, 0, 0, 0.2);">
       <div class="col-md-8 mx-auto pt-4 centering" style="font-size: 18px;">
         <p> 2021 Wataru Oshima. All rights reserved</p>
       </div>
     </div>

   </div>
 </footer>

 <!-- Scripts -->

 <script src="{{ mix('/js/app.js') }}" defer></script>
 </body>
 </html>
