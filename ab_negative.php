<?php
   include "config.php";
   $type = "AB-";
   $sql = "select *from `user` where `bgroup` = '$type'";
   $result = mysqli_query($con,$sql);
   $num = mysqli_num_rows($result);
?>
<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <title>CU BDC Home Page</title>
      <meta name="keywords" content="">
      <link rel="shortcut icon" type="image/png" href="">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/fontawesome.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
      <!-- Add your site or application content here -->
      <!-----Lest Side Start----->
      <div class="left_side Text-center">
         <div class="logo ">
            <img class="img-fluid" alt="Responsive image" src="assets/img/logoo.png" alt="">
         </div>
         <ul class="mainmenu">
            <li><a href="home.php">Home</a></li>
            <!---dropdown container--->
            <div class="dropdown_container">
               <li><a href="">Find Donor</a></li>
               <div class="dropdown_content">
                  <li><a href="a_possitive.php">A+ Possitive</a></li>
                  <li><a href="a_negative.php">A- Negative</a></li>
                  <li><a href="b_possitive.php">B+ Possitive</a></li>
                  <li><a href="b_negative.php">B- Negative</a></li>
                  <li><a href="o_possitive.php">O+ Possitive</a></li>
                  <li><a href="o_negative.php">O- Negative</a></li>
                  <li><a href="ab_possitive.php">AB+ Possitive</a></li>
                  <li><a href="ab_negative.php">AB- Negative</a></li>
               </div>
            </div>
            <li><a href="update_info.php">Update Donor Info</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="logout.php">Log Out</a></li>
         </ul>
         <div class="social_links">
            <a href="" target=""><i class="fa fa-facbook"></i></a>
            <a href="" target=""><i class="fa fa-facbook"></i></a>
            <a href="" target=""><i class="fa fa-facbook"></i></a>
         </div>
         <div class="reserved">
            <p class="copy-right-text text-center">Copy Right 2022, All Rights <span>Reserved</span>.</p>
         </div>
      </div>
      <!-----Left Side End----->
      <div class="right_side">
         <div class="grp_container">
            <h5 class="grp_title">AB- Negative Donor List</h5>
            <p class="donor_count">Total Donor <?php
               echo $num;
            ?></p>
         </div>
         <table class="table table-hover table-dark table_padding">
            <thead>
               <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Name</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Blood Group</th>
                  <th scope="col">Address</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  if($num > 0) {
                     $index = 1;
                      while($row = mysqli_fetch_assoc($result)) {
                           echo "<tr><td>" . $index++ ."</td><td>".$row['name'] . "</td><td>" .$row['phone'] . "</td><td>" .$row['bgroup'] . "</td><td>" .$row['address']."</td></tr>";
                }
                  }
               ?>
            </tbody>
         </table>
      </div>
      <script src="assets/js/modernizr-3.7.1.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
      <script>
         window.jQuery || document.write('<script src="assets/js/jquery-3.4.1.min.js"><\/script>')
         
      </script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/css/fontawesome.min.css"></script>
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