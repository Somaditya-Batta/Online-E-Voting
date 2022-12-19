<!DOCTYPE html>
<html>

<head>
	<title>Registration page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "db_evoting");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$First_Name = $_REQUEST['first_name'];
		$Last_Name = $_REQUEST['last_name'];
        $mobile_number=$_REQUEST['mobile_number'];
        $DOB=$_REQUEST['DOB'];
        $Gender=$_REQUEST['Gender'];
        $country=$_REQUEST['country'];  
        $UserID=$_REQUEST['UserID'];
        $password=$_REQUEST['password'];
        $State=$_REQUEST['State'];
        $email=$_REQUEST['email'];
   $aadhar_number=$_REQUEST['aadhar_number'];
   $pan_number=$_REQUEST['pan_number'];
		
		
	
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO voter VALUES ('$first_name',
			'$last_name','mobile_number','$DOB','$Gender','$country','$UserID','$password','$State','$email','$aadhar_number','$pan_number')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$first_name\n $last_name\n "
				. "$gender\n $address\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
