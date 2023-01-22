<?php
	
	include "config.php";

	$id = $_POST['id'];
	$pass = $_POST['pass'];

	$sql = "select *from `user` where `id` = '$id'";
    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result) == 1) {
	    $row = mysqli_fetch_assoc($result);
	    $hash = $row['pass'];
	    $verify = password_verify($pass, $hash);
	    if($verify) {
		    session_start();
	        $_SESSION['id'] = $id;
	        header("location: home.php");	
	    }else {
	    	header("location: login.php?error=Incorrect Password");
	    	exit();
	    }
    }else {
    	header("location: login.php?error=Incorrect ID");
    }
?>