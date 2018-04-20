<?php

include 'config.php';

    if ($_SERVER['HTTPS'] !== 'on') {
		$redirectURL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		header("Location: $redirectURL");
		exit;
	}
	

	if(!session_start()) {
		header("Location: error.php");
		exit;
	}
	
	
	// Check to see if the user has already logged in
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	
	if ($loggedIn) {
		header("Location: page1.php");
		exit;
	}
	
	
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'do_login') {
		handle_login();
	} else {
		login_form();
	}
	
	function handle_login() {
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];

        $mysqli = new mysqli(host, testuse, testpass, dbname);
        
        // Check for errors
        if ($mysqli->connect_error) {
            $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
			require "login_form.php";
            exit;
        }
        
 
        $username = $mysqli->real_escape_string($username);
        $password = $mysqli->real_escape_string($password);
        

       
        
  
		$query = "SELECT usersinfo.username, usersinfo.password FROM usersinfo WHERE username = '$username' AND password = '$password'";
		
  
        
	
		$mysqliResult = $mysqli->query($query);
		
    
        if ($mysqliResult) {
         
            $match = $mysqliResult->num_rows;
            $mysqliResult->close();
            $mysqli->close();

  		    if ($match == 1) {
                $_SESSION['loggedin'] = $username;
                header("Location: page1.php");
                exit;
            }
            else {
                $error = 'Error: Incorrect username or password';
                require "login_form.php";
                exit;
            }
        }
        else {
          $error = 'Login Error: Please contact the system administrator.';
          require "login_form.php";
          exit;
        }
	}
	
	function login_form() {
		$username = "";
		$error = "";
		require "login_form.php";
        exit;
	}
?>
