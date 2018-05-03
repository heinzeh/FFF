<html>
<head>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","fq_backend.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Select your Gametype:</option>
  <option value=1>Duos</option>
  <option value=2>Squads</option>
  </select>
</form>
<br>
<div id="txtHint"><b>User's info will be listed here...</b></div>
<br>
<div class="logoutWrapper roundBox">
       		<?php echo  "<p>Logged in as: " . $loggedIn . "</p>"?>
       		<br>
       		<br>
       		<button class="logoutButton" onclick="location.href='logout.php';">Log Out</button>

</div>
</body>
</html>
