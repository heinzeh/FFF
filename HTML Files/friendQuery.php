<!DOCTYPE html>

<html lang="en">
<head>
  <title>Fortnite Friend Finder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">

    .container {
      position:absolute;
      top:50%; left:50%; width:50%; height:50%;
      overflow:hidden;
      /*background-color:#FC0;*/
      margin-top:-150px;margin-left:-350px;}

  </style>
</head>
<body>
  
<form action="fq_backend.php" method="POST">
            <div class="stack">
            	<label for="console" >Platform:</label>
           		<select name="console" id="console">
		   		<option disabled selected value></option>	      
				<option value="pc">PC</option>
  				<option value="xbox">Xbox One</option>
  				<option value="ps4">PS4</option>
		   	</select>
            </div>
  
            <div class="stack">
            	<label for="gameType" >Preferred Gametype:</label>
           		<select name="gameType" id="gameType">
		   		<option disabled selected value></option>
				<option value="1">Duos</option>
  				<option value="2">Squads</option>
  					   
		   	</select>
            </div>
  
            <div class="stack">
                <input type="submit" value="Submit">
            </div>
  </form>

</body>
</html>

<!--References:
  https://www.w3schools.com/bootstrap
  http://aspdotnet.tistory.com/1015
-->
