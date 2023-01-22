<?php
	
	include 'config.php';

	session_start();
	$id = $_SESSION['id'];
	
	$sql = "select *from `user` where `id` = '$id'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);

    if( ($_POST["pass"] === $_POST["cpass"]) ){	
		if(isset($_POST['pass']) && !empty($_POST['pass'])) {
			$pass = $_POST['pass'];
			$org = $pass;
			$pass = password_hash($pass,PASSWORD_DEFAULT);
			$sql = "update `user` SET `pass` = '$pass' WHERE `id` = '$id'";
			mysqli_query($con,$sql);
			$sql = "update `user` SET `reserve` = '$org' WHERE `id` = '$id'";
			mysqli_query($con,$sql);
			
			if($row['type'] == "student") {
				$sql = "update `std` SET `pass` = '$pass' WHERE `id` = '$id'";
				mysqli_query($con,$sql);
			}else if($row['type'] == "faculty") {
				$sql = "update `fac` SET `pass` = '$pass' WHERE `id` = '$id'";
				mysqli_query($con,$sql);
			}else {
				$sql ="update `other` SET `pass` = '$pass' WHERE `id` = '$id";
				mysqli_query($con,$sql);
			}
		}    	
    }else {
    	header("location:update_info.php?error=You can't Enter One Password");
    	exit();
    }

	if(isset($_POST['phn']) && !empty($_POST['phn'])) {
		$phn = $_POST['phn'];
		$sql = "update `user` SET `phone` = '$phn' WHERE `id` = '$id'";
		mysqli_query($con,$sql);
		if($row['type'] == "student") {
			$sql = "update `std` SET `phone` = '$phn' WHERE `id` = '$id'";
			mysqli_query($con,$sql);
		}else if($row['type'] == "faculty") {
			$sql = "update `fac` SET `phone` = '$phn' WHERE `id` = '$id'";
			mysqli_query($con,$sql);
		}else {
			$sql ="update `other` SET `phone` = '$phn' WHERE `id` = '$id";
			mysqli_query($con,$sql);
		}
	}
	if(isset($_POST['address']) && !empty($_POST['address'])) {
		$address = $_POST['address'];
		$sql = "update `user` SET `address` = '$address' WHERE `id` = '$id'";
		mysqli_query($con,$sql);
		if($row['type'] == "student") {
			$sql = "update `std` SET `address` = '$address' WHERE `id` = '$id'";
			mysqli_query($con,$sql);
		}else if($row['type'] == "faculty") {
			$sql = "update `fac` SET `address` = '$address' WHERE `id` = '$id'";
			mysqli_query($con,$sql);
		}else {
			$sql ="update `other` SET `address` = '$address' WHERE `id` = '$id";
			mysqli_query($con,$sql);
		}
	}
	if(isset($_POST['dt']) && !empty($_POST['dt'])) {
		$dt = $_POST['dt'];
		$sql = "update `user` SET `last_donation` = '$dt' WHERE `id` = '$id'";
		mysqli_query($con,$sql);
		if($row['type'] == "student") {
			$sql = "update `std` SET `last_donation` = '$dt' WHERE `id` = '$id'";
			mysqli_query($con,$sql);
		}else if($row['type'] == "faculty") {
			$sql = "update `fac` SET `last_donation` = '$dt' WHERE `id` = '$id'";
			mysqli_query($con,$sql);
		}else {
			$sql ="update `other` SET `last_donation` = '$dt' WHERE `id` = '$id";
			mysqli_query($con,$sql);
		}
	}
	if(isset($_POST['dn_bl']) && !empty($_POST['dn_bl'])) {
		$dn_bl = $_POST['dn_bl'];
		$sql = "update `user` SET `no_donation` = '$dn_bl' WHERE `id` = '$id'";
		mysqli_query($con,$sql);
		if($row['type'] == "student") {
			$sql = "update `std` SET `no_donation` = '$dn_bl' WHERE `id` = '$id'";
			mysqli_query($con,$sql);
		}else if($row['type'] == "faculty") {
			$sql = "update `fac` SET `no_donation` = '$dn_bl' WHERE `id` = '$id'";
			mysqli_query($con,$sql);
		}else {
			$sql ="update `other` SET `no_donation` = '$dn_bl' WHERE `id` = '$id";
			mysqli_query($con,$sql);
		}
	}
	header("location:home.php");

?>