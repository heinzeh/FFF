<?php


session_start();


  		    if ($_SESSION['loggedin'] == FALSE) {
              
               
				header("Location:index.php");
                
            }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link href="page1.css" rel="stylesheet" type="text/css">
<link href="attendance.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  
  


<!-- Favicon here!!! -->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="ico"  href="/favicon.ico">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<link href="attendance.css" rel="stylesheet" type="text/css">
<meta name="theme-color" content="#ffffff">
<!-- Favicon here!!! -->






</head>
	
<body>


<!-- Nav Bar -->

 
 <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="resume.php">Resume</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      <li class="nav-item">
        <a class="nav-link" href="page1.php">Home <span class="sr-only">(current)</span></a>
      </li>
<li class="nav-item active">        
     <a class="nav-link" href="myInformation.php">Information</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="feedback.php">Feedback</a>
      </li>
    
      <li>
      	<a class="nav-link" id="Logout" href="logout.php">Logout</a>
      </li>
    </ul>
    
 
  </div>
</nav>
<!-- Nav Bar -->

      
	
	
           
           
   <div class="userinfo">    
                  <div class="row">
                      <div class="panel panel-default" style="border-radius: 30px;">
                      <div class="panel-heading" style="border-radius: 30px;">  <h4>MU-Student</h4></div>
                       <div class="panel-body">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                       <img alt="User Pic" src="static_assets/Det_440.png" id="profile-image1" class="img-circle img-responsive"> 
                     
                 
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                          <div class="userinfo" >
                            <h1><?php echo $_SESSION['f_name']?></h1>
                            <h3><?php echo $_SESSION['l_name']?></h3>
                            <p>AS CLASS:<b> <?php echo $_SESSION['as_class']?></b></p>
                          
                           
                          </div>
                          <div>
                            <p>I am a specialist at producing novelty cocktials with at a high volume. I've previously worked at Sub Zero Vodka Bar as a Bartender and a Bar Back for the past three years. I've learned many skills such as time management and customer service while spending my time with Sub Zero. I currently am a student at the University of Missouri. I'm studying Informtation Technology with a minor in Spanish. I plan on graduating in December of 2018.</p>
                          </div>
                 
                        
                      </div>
                </div>
            </div>
            </div>
	</div>















<!-- Footer -->
<div>
<div class="footer" style="display: inline-block;"><p id="phrase">Austin Parrish (MU-Student)</p></div>


</div>


<!-- Footer -->
</body>
		
		
		
		

</html>
