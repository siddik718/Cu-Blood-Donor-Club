<?php
    session_start();
    if(!isset($_SESSION['id'])) {
        header('location: login.php');
    }
    include 'config.php';
    $id = $_SESSION['id'];            
    $sql = "select *from `user` where `id` = '$id'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
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
                        <!---dropdown container--->
                  <li><a href="update_info.php">Update Personal Info</a></li>
                 <li><a href="about.php">About</a></li>
                 <li><a href="logout.php">Log Out</a></li>
             </ul>
               <div class="reserved">
                <p class="copy-right-text text-center">Copy Right 2022, All Rights <span>Reserved.</span></p>
               </div>
     </div>  
<!-----Left Side End----->

      <div class="right_side">
          <div class="right_side_wrap">
              <h1>Hello <span><?php echo $row['name'];?></span></h1>
              <p>You Can take Help and Give also Help .</p>


                <div class="search_bar">
                    <form action="search.php" method="post">
                        <input type="text"  placeholder="Search Your Donor" name="srch">
                    </form>
                </div>


          </div>

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