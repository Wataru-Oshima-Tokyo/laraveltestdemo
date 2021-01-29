<?php
$message_sent= false;
if (isset($_POST['email']) && $_POST['email'] != '') {
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");
  // submit the form
  // if ($_POST['flexRadioDefault1'] == 'on') {
  //   $subject = "お仕事の依頼に関して";
  // }else if ($_POST['flexRadioDefault2'] == 'on') {
  //   $subject = "作品に関して";
  // } else {
  //     $subject = "その他";
  // }
  $subject = $_POST['flexRadio'];
  $userName = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "lihappymakesa@gmail.com";
  $body = "";

  $body .= "From: ".$userName."\r\n";
  $body .= "email: ".$email."\r\n";
  $body .= "Subject: ".$subject."\r\n";
  $body .= "Content: ".$message."\r\n";

  mb_send_mail($to, $subject, $body);

  $message_sent = true;
}

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">

 <head>
   <title>Lisa_HP</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="main.css">
   <script type="text/javascript" src="index.js"></script>
   <script type="text/javascript" src="jquery-3.5.1.min.js"></script>

   <style>
     [class*="col"] {
       padding: 1rem;
       /* background-color: #033332;
       border: 2px solid gray;
       color: #fff; */
       text-align: center;
     }

     [class*="con"] {
       padding: 1rem;
       /* background-color: #82d418;
       border: 2px solid gray;
       color: #fff; */
       text-align: center;
     }
   </style>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 </head>

 <body>
   <?php if ($message_sent): ?>
     <div class="container-md px-5">
       <h3>Thank you for sending an e-mail, I will be in touch soon!</h3>
        <p>Please do not refresh this page; otherwise, your message will be sent again.</p>
        <a href="http://pgserver.php.xdomain.jp/webForm.php" class="btn btn-primary">
          Go back
        </a>
      </div>
     <?php else: ?>
   <div class="wrap">
     <div class="container-fluid text-start">
       <h1>Lisa Yokojima</h1>
     </div>
     <header>
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container-fluid">
           <a class="navbar-brand" href="#">
             <img src="images/home_icon.jpg" alt="" style="width: 100px; height: 100px;">
           </a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item">
                 <a class="nav-link active" aria-current="page" href="http://pgserver.html.xdomain.jp/">Home</a>
               </li>
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Link
                 </a>
                 <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <li><a class="dropdown-item" href="https://www.instagram.com/chibi_risa_/">Instagram</a></li>
                 </ul>
               </li>
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Sitemap
                 </a>
                 <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <li><a class="dropdown-item" href="http://pgserver.html.xdomain.jp/videos.html">Make up Videos</a></li>
                   <li><a class="dropdown-item" href="http://pgserver.html.xdomain.jp/portfolio.html">Portfolio</a></li>
                   <li>
                     <hr class="dropdown-divider">
                   </li>
                   <li><a class="dropdown-item" href="http://pgserver.php.xdomain.jp/webForm.php">Contact me</a></li>
                 </ul>
               </li>
             </ul>
           </div>
         </div>
       </nav>
     </header>

     <!-- contact form area -->
     <!-- Need to enable it to submit an email through the website -->
     <div class="mx-auto py-2 text-center">
       <h1>Contact Form</h1>
     </div>
     <form class="" action="webForm.php" method="post">
       <div class="container-md" style="width: 80%;">
         <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Your Name</label>
           <input name="name" class="form-control" id="exampleFormControlInput1" placeholder="John　Smith">
         </div>
         <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Your email address</label>
           <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
         </div>


         <div class="mb-3">
           <label for="exampleFormControlTextarea1" class="form-label">ご用件</label>
           <div class="form-check">
             <input class="form-check-input" type="radio" value="お仕事の依頼に関して" name="flexRadio" id="flexRadioDefault1" checked>
             <label class="form-check-label" for="flexRadioDefault1">
               お仕事の依頼に関して
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="作品に関して" name="flexRadio" id="flexRadioDefault2" >
            <label class="form-check-label" for="flexRadioDefault2">
              作品に関して
            </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" value="その他" name="flexRadio" id="flexRadioDefault3" >
          <label class="form-check-label" for="flexRadioDefault3">
            その他
          </label>
      </div>

      </div>
         <div class="mb-3 py -3">
           <label for="exampleFormControlTextarea1" class="form-label">The content</label>
           <textarea name="message" class="form-control text-start" id="exampleFormControlTextarea1" rows="3"></textarea>
         </div>
         <button type="submit" value="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>
       </div>

     </form>



     <footer>
       <div class="cnotainer-fluid" style="margin: 10px 0px 0px 0px;">
         <div class="rowR" style="background-color: rgba(0, 0, 0, 0.2);">
           <div class="col-md-8 mx-auto pt-4" style="font-size: 18px;">
             <p>© 2021 Wataru Oshima. All rights reserved</p>
           </div>

           <div class="col-md-4" style="padding: 0px;">
             <div class="row justify-content-end" style="padding: 0px 40px 0px 0px;">
               <div class="col-2 _contentEnd">
                 <a href="https://www.instagram.com/chibi_risa_/">
                   <img src="images/iconfinder_SocialMedia_Instagram-Outline_2959748.png" alt="Instagram icon" style="width: 100%; height: auto;">
                 </a>
               </div>
             </div>


           </div>
         </div>
       </div>
     </footer>
   </div>
   <?php endif; ?>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


 </body>

 </html>
