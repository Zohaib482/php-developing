<?php
session_start();
include_once 'datatacle/connect.php';

if (isset($_POST['login'])) {
	$email = $_POST['uemail'];
$pass = md5($_POST['upass']) ;
	
	$query = "SELECT * FROM `users` WHERE email = '$email' and pass = '$pass'";
	$result = mysqli_query($con,$query);
	$row = mysqli_num_rows($result);
	if($row > 0)
	{
	while($row = mysqli_fetch_array($result)){
		$eamil = $row['email'];
	if ($row['role']=="tutor" && $row['status']=="Approve") {
		mysqli_query($con,"UPDATE `users` SET log_in='Online' WHERE email ='$email'");
		$_SESSION['role'] = $row['role'];
		
		$_SESSION['email'] = $row['email'];
	
		// $_SESSION['check_trial'] =null;
		// $_SESSION['check_student'] =null;
		// $_SESSION['check_tutor'] =1;
			header('location:users/index.php');
		
	}
	elseif ($row['role']=="student" && $row['status']=="Trial"){
		mysqli_query($con,"UPDATE `users` SET log_in='Online' WHERE email ='$email'");
		$_SESSION['std_role'] = $row['role'];
		$_SESSION['std_status'] = $row['status'];
		$_SESSION['std_email'] = $row['email'];
		$_SESSION['check_trial'] =1;
$_SESSION['welcome']="Welcome Trial";
$_SESSION['welcome_code']="success";
		$_SESSION['welcome_text']='This is a trial version which is available for 1 minutes,awating admin approval for permanent login.';
		// $_SESSION['check_student'] =null;
		// $_SESSION['check_tutor'] = null;
		header('location:student/index.php');
	}
	elseif ($row['role']=="student" && $row['status']=="Approve"){
		mysqli_query($con,"UPDATE `users` SET log_in='Online' WHERE email ='$email'");
		$_SESSION['std_role'] = $row['role'];	
		$_SESSION['std_email'] = $row['email'];
		$_SESSION['check_trial'] =null;
		// $_SESSION['check_student'] =1;
		// 		$_SESSION['check_tutor'] =null;
		header('location:student/index.php');
	}
	elseif ($row['role']=='student' && $row['status']=='Not Approve') {
		$_SESSION['email'] = '';
		$_SESSION['check_trial'] =null;
		$_SESSION['check_student'] =null;
				$_SESSION['check_tutor'] =null;
		header('location:index.php');
	}
		elseif ($row['role']=='tutor' && $row['status']=='Not Approve') {
		$_SESSION['email'] = '';
		$_SESSION['check_trial'] =null;
		$_SESSION['check_student'] =null;
				$_SESSION['check_tutor'] =null;
		header('location:index.php');
	}
		else
		{
			header('location:index.php');
		}
	
	
	}
	}
	else
	{
		header('location:index.php');
	}
	
}
?>