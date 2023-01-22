<?php

	$uname = $_POST['uname'];
	$id = $_POST['id'];
	$phn = $_POST['phn'];
	$address = $_POST['address'];
	$bgroup = $_POST['bgroup'];
	$dept = $_POST['dept'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];

	if ($pass !=  $cpass) {
        header("location: registration.php?error=Incorrect Password!");
        exit();
    }
    
    $org = $pass;
    $pass = password_hash($pass,PASSWORD_DEFAULT);

    if(isset($_POST['radio'])) {
    	include "config.php";

    	$radio = $_POST['radio'];
    	$type = null;
    	if($radio == 'student') {
    		$sql = "select *from std where `id` = '$id'";
    		$result = mysqli_query($con,$sql);
    		if(mysqli_num_rows($result) == 1) {
    			header("location: registration.php?error=ID already taken");
    			exit();
    		}else {
                $type = 'student';
    			$sql = "insert into `std`(name,id,phone,address,bgroup,dept,pass) values ('$uname','$id','$phn','$address','$bgroup','$dept','$pass')";
                $result = mysqli_query($con,$sql);
    		}
    	}else if($radio == 'faculty') {
    		$sql = "select *from fac where `id` = '$id'";
    		$result = mysqli_query($con,$sql);

    		if(mysqli_num_rows($result) == 1) {
    			header("location: registration.php?error=ID already taken");
    			exit();
    		}else {
                $type = 'faculty';
    			$sql = "insert into `fac`(name,id,phone,address,bgroup,dept,pass) values ('$uname','$id','$phn','$address','$bgroup','$dept','$pass')";
                $result = mysqli_query($con,$sql);
    		}
    	}else {
    		$sql = "select *from other where `id` = '$id'";
    		$result = mysqli_query($con,$sql);

    		if(mysqli_num_rows($result) == 1) {
    			header("location: registration.php?error=ID already taken");
    			exit();
    		}else {
                $type = 'Others';
    			$sql = "insert into `other`(name,id,phone,address,bgroup,dept,pass) values ('$uname','$id','$phn','$address','$bgroup','$dept','$pass')";
                $result = mysqli_query($con,$sql);
    		}
    	}
        if($type != null) {
            $sql = "insert into `user`(name,id,phone,address,bgroup,dept,pass,type,reserve) values ('$uname','$id','$phn','$address','$bgroup','$dept','$pass','$type','$org')";
            $result = mysqli_query($con,$sql);
            header("location: login.php?Succesful Registration.");
        }
    }else {
    	header("location:registration.php?error=You Must choose any of the option bettween Student , Faculty and Others");
    }
?>