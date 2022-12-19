<!DOCTYPE html>

<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


</head>
    <style>
        .submit:hover{
            color:blue;
            background-color: blanchedalmond;

            
        }
        h1{
            text-align:center;
            color: black;
        }
        body{
            background-image: url("feedback.jpg" );         background-size: cover;
            text-align: center;
    width: 800px;
    height: 300px;
    margin-top: 50px;
    margin-bottom: auto;
    margin-left: auto;
    margin-right: auto;
        font-size: 20px;
        text-align: justify;
        color:black;
    
        }
    </style>


<?php

if (isset($_POST['btn_save'])) 
{
       $DB_HOST= "localhost";
       $DB_USER="root";
       $DB_PASSWORD="";
       $DB_NAME="db_evoting";
	   $conn= @mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME);
	   $vname=$_SESSION['vname'];
	   //$vname='ss';
	   $fed=$_POST['comment'];
    $query=mysqli_query($conn, "insert into feedback(votername,feedback) values('$vname','$fed')");
    if ($query) 
	{
   echo "You have successfully registered";
	header( 'Location: index.html' ) ;
    }
}
?>
<body>
	<div class="container">
		<div class="row pt-2">
			<div class="col-xl-12 col-lg-12 col-md-12 w-100">
				<div>
					<div>
						<h2>PLz Submit Your Valuable Feedback..</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row m-3">
			<div class="col-md-12">
				<form action="" method="POST" enctype="multipart/form-data">
					
							<div class="form-group">
								<textarea name="comment" rows="4" cols="50"></textarea>
							</div>
			</div>
											
				<div class="modal-footer">
						<input type="submit" class="btn btn-primary px-5" name="btn_save">
					</div>
				</form>
			</div>
		</div>
			
	</div>
</body>
</html>