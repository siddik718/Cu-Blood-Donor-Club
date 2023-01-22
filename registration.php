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
      <div class="background_img">
         <div class="container ">
            <div class="section-padding">
               <div class="row justify-content-md-center">
                  <div class="col-md-6 Regi">
                     <!-- --Section Title Start-- -->
                     <div class="section-title text-center">
                        <h5>Fill in the Blanks for </h5>
                        <h5 class="color_chng">City University Blood Donor Club</h5>
                     </div>
                     <?php
                           if(isset($_GET['error'])) {
                              echo '<p class = "text-center text-danger">'.'*'.$_GET['error'].'</p>';
                           }
                       ?>
                     <!-- Form Start -->
                     <form action="register.php" method="post">
                        <div class="row">
                           <div class="form-group form_text col-6">
                              <label for="name">Name:</label>
                              <input type="name" class="form-control" id="name" placeholder="Enter your Username" name="uname" required>
                           </div>
                           <div class="form-group form_text col-6">
                              <label for="text">Student Id / NID:</label>
                              <input type="text" class="form-control" id="text" placeholder="Enter your Student Id / NID" name="id" required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group form_text col-6">
                              <label for="text">Phone No:</label>
                              <input type="text" class="form-control" id="text" placeholder="Enter your Number" name="phn" required>
                           </div>
                           <div class="form-group col-6">
                              <label for="Blood_group">Blood Group</label>
                              <select class="form-control" id="Blood_group"  placeholder="Enter your Blood Group" name="bgroup" required>
                                 <option>Blood Group Select</option>
                                 <option>A+</option>
                                 <option>A-</option>
                                 <option>B+</option>
                                 <option>B-</option>
                                 <option>O+</option>
                                 <option>O-</option>
                                 <option>AB+</option>
                                 <option>AB-</option>
                              </select>
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group form_text col-6">
                              <label for="Depertment">Depertment:</label>
                              <input type="Depertment" class="form-control" id="Depertment" placeholder="Enter your Dept." name="dept" required>
                           </div>
                           <div class="form-group form_text col-6">
                              <label for="Address">Address:</label>
                              <input type="Address" class="form-control" id="Address" placeholder="Enter your Address" name="address" required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group form_text col-6">
                              <label for="pwd">Password:</label>
                              <input type="password" class="form-control" id="pwd" placeholder="Enter your PassWord" name="pass" required>
                           </div>
                           <div class="form-group form_text col-6">
                              <label for="pwd">Confirm Password:</label>
                              <input type="password" class="form-control" id="pwd" placeholder="Enter your Confirm PassWord" name="cpass" required>
                           </div>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="radio" id="inlineRadio1" value="faculty">
                           <label class="form-check-label" for="inlineRadio1">Faculty</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="radio" id="inlineRadio2" value="student">
                           <label class="form-check-label" for="inlineRadio2">Student</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="radio" id="inlineRadio2" value="others">
                           <label class="form-check-label" for="inlineRadio2">Others</label>
                        </div>
                        <!--- button start ---->
                        <div class="text-center"> 
                           <button class="btn" type="submit">Registration</button>
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