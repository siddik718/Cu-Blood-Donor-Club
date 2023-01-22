<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>CU blood Donor Club</title>
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="shortcut icon" type="image/png" href="">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>
        
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
      <!-- Add your site or application content here -->
      <div class="background_img">

         <div class="container">

            <div class="section-padding">
               <div class="row justify-content-md-center">
                  <div class="col-md-4 frm ">
                     <!--- Section title start ---->
                     <div class="section-title text-center">
                        <h5 class="">Wellcome To </h5>
                        <h5 class="color_chng">City University Blood Donor Club</h5>
                     </div>
                        <?php
                           if(isset($_GET['error'])) {
                              echo '<p class = "text-center text-danger">'.'*'.$_GET['error'].'</p>';
                           }
                       ?>
                     <!--- Form start ---->
                     <form action="validation.php" method="post">
                        <div class="form-group form_text">
                           <label for="id">ID:</label>
                           <input type="id" class="form-control" id="name" placeholder="Enter your ID" name="id" required>
                        </div>
                        <div class="form-group form_text">
                           <label for="pwd">Password:</label>
                           <input type="password" class="form-control" id="pwd" placeholder="Enter your PassWord" name="pass" required>
                        </div>
                        <div class="text-center">
                           <button class="btn" type="submit"> Login </button>
                        </div>
                     </form>
                     <!--- Registration Link ---->
                     <div class="section-bottom text-center" role="alert">
                        <p>Not a Mumber ? <a href="registration.php" class="alert-link">Registration</a></p>
                     </div>
                  </div>
                  <!--- Col End ---->
               </div>
               <!--- Row End ---->
            </div>
            <!--- Section padding end---->
         </div>
         <!--- Container End ---->
      </div>
      <script src="assets/js/modernizr-3.7.1.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
      <script>
         window.jQuery || document.write('<script src="assets/js/jquery-3.4.1.min.js"><\/script>')
         
      </script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/plugins.js"></script>
      <script src="assets/js/main.js"></script>
      <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
      <script>
         window.ga = function() {
             ga.q.push(arguments)
         };
         ga.q = [];
         ga.l = +new Date;
         ga('create', 'UA-XXXXX-Y', 'auto');
         ga('set', 'transport', 'beacon');
         ga('send', 'pageview')
         
      </script>
      <script src="https://www.google-analytics.com/analytics.js" async></script>
   </body>
</html>