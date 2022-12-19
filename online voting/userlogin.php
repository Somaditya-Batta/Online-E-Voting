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

    <style>
    .headerFont {
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
    }

    .subFont {
        font-family: 'Raleway', sans-serif;
        font-size: 14px;

    }

    .specialHead {
        font-family: 'Oswald', sans-serif;
    }

    .normalFont {
        font-family: 'Roboto Condensed', sans-serif;
    }
    </style>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                    <a href="index.html" class="navbar-brand headerFont text-lg">E-VOTING SYSTEM</a>
                </div>

                <div class="collapse navbar-collapse" id="example-nav-collapse">
                    <ul class="nav navbar-nav">
                        <!-- 
            <li><a href="#featuresTab"><span class="subFont"><strong>Features</strong></span></a></li>
            <li><a href="#feedbackTab"><span class="subFont"><strong>Feedback</strong></span></a></li>
            <li><a href="#"><span class="subFont"><strong>About</strong></span></a></li>
          -->
                    </ul>


                    <button type="submit" class="btn btn-success navbar-right navbar-btn"><span
                            class="normalFont"><strong>User Login</strong></span></button>
                </div>

            </div> <!-- end of container -->
        </nav>


        <div class="container" style="padding-top:150px;">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 text-center" style="border:2px solid gray;padding:50px;"><h4>User Login</h4>
                    <?php

session_start();
          // Credentials
      

if(isset($_POST['submit']))
  {
	   $DB_HOST= "localhost";
       $DB_USER="root";
       $DB_PASSWORD="";
       $DB_NAME="db_evoting";
	   $con= @mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME);
	  echo "entered here";
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $query=mysqli_query($con,"select * from acc_info where  uid='$Email' && password='$Password' && status='Activate'");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['uid']=$ret['ID'];
     header('location:vault.html');
    }
    else{
      $msg="Invalid Details.";
	  echo "Invalid Details";
    }
  }

          ?>

                </div>
                <div class="col-sm-4"></div>
				
				  <form method="post" action="">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="Email" name="Email" aria-describedby="emailHelp" placeholder="Enter User Id..." required="true">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="Password" name="Password" placeholder="Password" required="true">
                    </div>
                    
                  
                    <p> <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="login"></p>

                    <hr>
                  
                  </form>
            </div>
        </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>