<?php
   $First_Name=$_POST['First Name']
   $Last_Name=$_POST['Last Name']
   $Mobile_Number=$_POST['Mobile Number']
   $DOB=$_POST['date of birth']
   $Gender=$_POST['Gender']
   $country=$_POST['country']
   $User_ID=$_POST['User ID']
   $Password=$_POST['Password']
   $State=$_POST['State']
   $Email=$_POST['Email']
   $Aadhar_Number=$_POST['Aadhar Number']
   $Pan_Number=$_POST['Pan Number']
   
   //Database Connection
   $conn=new mysqli('localhost','root','','db_evoting');
   if($conn->connect_error){
      die('connection Failed:'.$conn->connect_error);
   }else{
      $stmt= $conn->prepare("insert into registration()
      values(?,?,?,?,?,?,?,?,?,?,?,?)");
      $stmt->bind_param("sssssssssssi",$First_Name,$Last_Name,$Mobile_Number,$DOB,$Gender,$Country,$User_ID,$Password,$State,$Email,$Aadhar_Number,$Pan_Number);
      $stmt->execute();
      echo "registartion successfully completed....";
      $stmt->close();
      $conn->close();

   }
   
?>

   

 