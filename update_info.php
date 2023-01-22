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
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   </head>
   <body>
      <?php
         if(isset($_GET['error']) && !empty($_GET['error'])) {
            echo $_GET['error'];
         }
      ?>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
      <div class="background_img">
         <div class="container ">
            <div class="section-padding">
               <div class="row justify-content-md-center">
                  <div class="col-md-6 Regi">
                     <!-- --Section Title Start-- -->
                     <div class="section-title text-center">
                        <h5>Update Your Informations</h5>
                        <h5 class="color_chng">CU Blood Donor Club</h5>
                     </div>
                     <!-- Form Start -->
                     <form action="update.php" method="post">
                        <div class="row">
                           <div class="form-group form_text col-6">
                              <label for="Number">Phone No:</label>
                              <input type="text" class="form-control" id="Number" placeholder="Enter your Number" name="phn">
                           </div>
                           <div class="form-group col-6">
                              <label for="text">Present Adress</label>
                              <input type="text" class="form-control" id="text" placeholder="Enter Present Address" name="address">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group form_text col-6">
                              <label for="last_donation_date">Last Date of Blood Donate:</label>
                              <input type="date" class="form-control" id="Depertment" placeholder="Enter Your last_donation_date." name="dt">
                           </div>
                           <div class="form-group form_text col-6">
                              <label for="no_dopnation">Number Of Donation:</label>
                              <input type="number" class="form-control" id="Address" placeholder="How Many Time You Donated Blood" name="dn_bl">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group form_text col-6">
                              <label for="pwd">Password:</label>
                              <input type="password" class="form-control" id="pwd" placeholder="Enter your New PassWord" name="pass">
                           </div>
                           <div class="form-group form_text col-6">
                              <label for="pwd">Confirm Password:</label>
                              <input type="password" class="form-control" id="pwd" placeholder="Enter your New PassWord Again" name="cpass">
                           </div>
                        </div>
                        <!--- button start ---->
                        <div class="text-center"> 
                           <button class="btn" type="submit">Submit</button>
                        </div>
                        <!--- button End ---->
                     </form>
                     <!-- ---Form End ------->
                  </div>
                  <!-- ---Col End ------->
               </div>
               <!-- ---Row End ------->
            </div>
            <!-- ---Section Padding End ------->
         </div>
         <!-- ---Container End------->
      </div>
      <!-- Add your site or application content here --> <script src="assets/js/modernizr-3.7.1.min.js"></script>
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