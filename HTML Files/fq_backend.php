<?php
	require "friendQuery.html";

	if(!session_start()) {
		header("Location: error.php");
		exit;
	}
	
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	
	/*if ($loggedIn) {
		header("Location: fq_backend.php");
		exit;
	}*/
	
	
	/*$action = empty($_POST['action']) ? '' : $_POST['action'];
	//If user didn't get to this page from registration_form.php, send them there	
	if ($action == 'do_registration') {
		handle_registration();
	} else {
		registration_form();
	}*/

	function handle_query() {
		
		$console = empty($_POST['console']) ? '' : $_POST['console'];
		$gameType = empty($_POST['gameType']) ? '' : $_POST['gameType'];
		
		$con = mysqli_connect('localhost' ,'root','cs4320','CS4320_Final_Project');
		
		if (!$con) {
		    die('Could not connect: ' . mysqli_error($con));
		}
		
		//define $query_sql
				
		if($console != "" && $gameType != "") {
			
			if(!mysqli_query($con,$query_sql)){
				$error = "Could not make list";
				require "friendQuery.php";
				return;
			}
			else {
			
			}
			
			$sql="SELECT * FROM members WHERE console = '" . $console . "' AND gameType = '" . $gameType . "';

			$result = mysqli_query($con,$sql);
			
			echo ($result);
			
		}
		else {
			$error = "Please fill out all fields.";
			require "friendQuery.php";
			return;
		}
	}
				


	
	/*function registration_form() {
		$username = "";
		$error = "";
		require "friendQuery.php";
		return;
	}*/
	
?>
