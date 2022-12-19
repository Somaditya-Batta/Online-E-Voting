<!DOCTYPE html>
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
            background-image: url("v4.jpg" );         background-size: cover;
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
    $file = $_FILES['profile_image']['name'];
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    $validExt = array ('png', 'jpg', 'jpeg');
    if (empty($file)) 
	{
echo "<script>alert('You need to Attach a file');</script>";
    }
    else if ($_FILES['profile_image']['size'] <= 0 || $_FILES['profile_image']['size'] > 30720000 )
    {
echo "<script>alert('file size is not proper');</script>";
    }
    else if (!in_array($ext, $validExt)){
        echo "<script>alert('Not a valid file');</script>";
    }
    else 
	{	    
		$folder  = 'allfiles/';
        $fileext = strtolower(pathinfo($file, PATHINFO_EXTENSION) );
        $notefile = rand(1000 , 1000000) .'.'.$fileext;
		
	   $DB_HOST= "localhost";
       $DB_USER="root";
       $DB_PASSWORD="";
       $DB_NAME="db_evoting";
	

        $conn= @mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME);
		
        if(move_uploaded_file($_FILES['profile_image']['tmp_name'], $folder.$notefile)) 
		{
   
    $fname=$_POST['first_name'];
	$lname=$_POST['last_name'];
	$gender=$_POST['gender'];
	$fatname=$_POST['father_name'];
    $email=$_POST['email'];
    $contact=$_POST['mobile_no'];
    $dob=$_POST['dob'];
	$state=$_POST['state'];
    $aadhar=$_POST['aadhar'];
	$pan=$_POST['pan'];
	$uid=$_POST['uid'];
	$pswd=$_POST['password'];
    $query=mysqli_query($conn, "insert into Acc_info values('$fname','$lname','$gender', '$fatname', '$email', '$contact','$state','$aadhar','pan','$dob','$notefile','$uid','$pswd','Deactivated')");
    if ($query) {
   
   $msg="You have successfully registered";
   
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  }
	}
}
?>
<body>
	
	<div class="container">
		<div class="row pt-2">
			<div class="col-xl-12 col-lg-12 col-md-12 w-100">
				<div class="bg-info text-center">
					<div class="table-one flex-wrap flex-md-no-wrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
						<h4>Registration Form</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="row m-3">
			<div class="col-md-12">
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="row mt-3">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">First Name:*</label>
								<input type="text" name="first_name" class="form-control" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1" required>Last Name:*</label>
								<input type="text" name="last_name" class="form-control">
							</div>
						</div>
					<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Gender:</label>
								<select class="browser-default custom-select" name="gender">
									<option>Select Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
						</div>	
					</div>
										<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Father Name:*</label>
								<input type="text" name="father_name" class="form-control" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Applicant Email:*</label>
								<input type="email" name="email" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Mobile No:*</label>
								<input type="number" name="mobile_no" class="form-control" required>
							</div>
						</div>
					</div>
				
					
					<div class="row">
						
						<div class="col-md-4">
							<div class="form-group">
								<label for="state">State:</label>
								<select class="browser-default custom-select" name="state">
									<option value="ST">State</option>
    <option value="AN">Andaman and Nicobar Islands</option>
    <option value="AP">Andhra Pradesh</option>
    <option value="AR">Arunachal Pradesh</option>
    <option value="AS">Assam</option>
    <option value="BR">Bihar</option>
    <option value="CH">Chandigarh</option>
    <option value="CT">Chhattisgarh</option>
    <option value="DN">Dadra and Nagar Haveli</option>
    <option value="DD">Daman and Diu</option>
    <option value="DL">Delhi</option>
    <option value="GA">Goa</option>
    <option value="GJ">Gujarat</option>
    <option value="HR">Haryana</option>
    <option value="HP">Himachal Pradesh</option>
    <option value="JK">Jammu and Kashmir</option>
    <option value="JH">Jharkhand</option>
    <option value="KA">Karnataka</option>
    <option value="KL">Kerala</option>
    <option value="LA">Ladakh</option>
    <option value="LD">Lakshadweep</option>
    <option value="MP">Madhya Pradesh</option>
    <option value="MH">Maharashtra</option>
    <option value="MN">Manipur</option>
    <option value="ML">Meghalaya</option>
    <option value="MZ">Mizoram</option>
    <option value="NL">Nagaland</option>
    <option value="OR">Odisha</option>
    <option value="PY">Puducherry</option>
    <option value="PB">Punjab</option>
    <option value="RJ">Rajasthan</option>
    <option value="SK">Sikkim</option>
    <option value="TN">Tamil Nadu</option>
    <option value="TG">Telangana</option>
    <option value="TR">Tripura</option>
    <option value="UP">Uttar Pradesh</option>
    <option value="UT">Uttarakhand</option>
    <option value="WB">West Bengal</option>
								</select>
							</div>
						</div>	
					
						<div class="col-md-4">
							<div class="form-group">
								<label for="Inaddress">Aadhar Number: </label>
								<input type="text" name="aadhar" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="doh">PAN Number: </label>
								<input type="text" name="pan" class="form-control">
							</div>
						</div>
						</div>
							<div class="row">
						
					<div class="col-md-4">
							<div class="form-group">
								<label for="dob">Date of Birth: </label>
								<input type="date" name="dob" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Photo:</label>
								<input type="file" name="profile_image" class="form-control">
							</div>
						</div>
					</div>
					
					<div class="row">
						
					<div class="col-md-4">
							<div class="form-group">
								<label for="dob">User ID: </label>
								<input type="text" name="uid" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="passwoed">Password:</label>
								<input type="password" name="password" class="form-control">
							</div>
						</div>
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