<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SVS</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    

<script type="text/javascript">
         function showLocation(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            var latlongvalue = position.coords.latitude + ","
            + position.coords.longitude;
            var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="
            +latlongvalue+"&amp;zoom=14&amp;size=400x300&amp";
            key
            ="AIzaSyAa8HeLH2lQMbPeOiMlM9D1VxZ7pbGQq8o";
            document.getElementById("mapholder").innerHTML =
            "<img src='"+img_url+"'>";
         }
         function errorHandler(err) {
            if(err.code == 1) {
               alert("Error: Access is denied!");
            } else if( err.code == 2) {
               alert("Error: Position is unavailable!");
            }
         }
         function getLocation(){
            if(navigator.geolocation){
               // timeout at 60000 milliseconds (60 seconds)
               var options = {timeout:60000};
               navigator.geolocation.getCurrentPosition
               (showLocation, errorHandler, options);
            } else{
               alert("Sorry, browser does not support geolocation!");
            }
         }
    
      </script>

    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }
      iframe.map {
    width: 259px !important;
    height: 200px !important;
}
    </style>


  </head>
  <body>
    
  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <marque><a href=""class="index.htmlavbar-brand headerFont text-lg">E-VOTING SYSTEM</a></marque>
            </textarea>
          
        </div>

        

      </div> <!-- end of container -->
    </nav>

    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6" style="border:2px inset gray;">
          
          <div class="page-header">
            <h2 class="specialHead text-center">Choose Your Candidate!</h2>
          </div>
          
          <form action="saveVote.php" method="POST">
          <div class="form-group">
            <label>Voter's Full Name :</label><br>
            
            <input type="text" name="voterName" placeholder="Enter Your Full Name" class="form-control"/><br>

            <label>Voter's Registered Email ID :</label><br>
            <input type="email" name="voterEmail" placeholder="Enter Your Email ID" class="form-control"/><br>

            <label>Voter's Card Number :</label><br>
            <input type="number" name="voterID" placeholder="Enter Your Voter Uniquie ID" class="form-control"/><br>
            <label>Aadhar Number :</label><br>
            <input type="number" name="AadharNumber" placeholder="Enter Your AadharId" class="form-control"/><br>
            
            
            <h3 class="normalFont text-center">Selet Any One of Them:</h3>
            <div class="radio text-center">           <label for="">
                <input type="radio" name="selectedCandidate" value="JM"> <strong>BJP</strong> <img src="./images/BJP.jpg" class="img img-thumbnail" style="width:30px;height:30px;" alt="">
              </label><br>

              <label for="">
                <input type="radio" name="selectedCandidate" value="JRZ"> <strong>TRS</strong> <img src="./images/TRS.jpg" class="img img-thumbnail" style="width:30px;height:30px;" alt="">
  
              </label><br>
              
              <label for="">
                <input type="radio" name="selectedCandidate" value="MAD"> <strong>Congress</strong> <img src="./images/CONGRESS.png" class="img img-thumbnail" style="width:30px;height:30px;" alt="">
              </label><br>

              <label for="">
                <input type="radio" name="selectedCandidate" value="JW"> <strong>TDP</strong><img src="./images/tdp.jpg" class="img img-thumbnail" style="width:30px;height:30px;" alt="">
              </label><br>

              <label for="">
                <input type="radio" name="selectedCandidate" value="DM"> <strong>YSR telangana party</strong><img src="./images/YSR telangana.jpg" class="img img-thumbnail" style="width:30px;height:30px;" alt="">
              </label><br>
              <br>
         

<p id="demo"></p>


              <hr>
              <button type="submit" name="submit" class="btn btn-success" style="border-radius:0%">Submit Votes</button>
              <button type="submit" class="btn btn-danger" style="border-radius:0%">Decline</button>
            </div>

         
         

      <script type="text/javascript" charset="utf-8">
        let a;
        let time;
        setInterval(() => {
          a = new Date();
          time = a.getHours() + ':' + a.getMinutes() + ':' + a.getSeconds();
          document.getElementById('time').innerHTML = time;
        }, 1000);
      </script>
      <span id="time"></span>

        </div>
        <div class="col-sm-3"></div>
      </div>
    </div>
  </div>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
    
function showPosition(position) {
    x.innerHTML="Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
	
	$_SESSION['lattitude']= position.coords.latitude;
	$_SESSION['longitude']= position.coords.longitude;
}
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
