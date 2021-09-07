<?php

session_start();
include 'include/dbconnect.php';

if(isset($_POST['addcos'])){
    date_default_timezone_set("Asia/kolkata");
    $time = date(" H:i:s");    
    $today = date("d-m-Y");    
    echo $time;
$fname = $_POST['lname'];
$lname = $_POST['fname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$code = $_POST['code'];

$sql = " INSERT INTO costomer_table (fname,lname,mobile,email,gender,address,zip,cdate,ctime) VALUES 
('$fname','$lname','$phone','$email','$gender','$address','$code','$today','$time')";
 
if(mysqli_query($conn,$sql)){
      $_SESSION['save'] = 'added successfully';
    header('Location:add.php');
}else{
    echo mysqli_error($conn);
}
}

if (isset($_POST['cosdelete'])){
    $id = $_POST['id'];
    $sql = " DELETE FROM  costomer_table WHERE id = '$id' ";
   if (mysqli_query($conn,$sql)){
      header('Location:display.php');
  }else{
      echo mysqli_error($conn);
  }

}

if(isset($_POST['update'])){

    $fname = $_POST['lname'];
    $lname = $_POST['fname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $code = $_POST['code'];
     $id = $_POST['id'];
    
   $sql = "UPDATE costomer_table SET fname = '$fname',lname = '$lname', mobile = '$phone' ,email = '$email', gender = '$gender', address = '$address' , zip = '$code' where id = $id ";
   
   if (mysqli_query($conn,$sql)){
    header('Location:display.php');
}else{
    echo mysqli_error($conn);
}

}

if (isset($_POST['costomerlog'])){
    $email = $_POST['email'];
    $phone = $_POST['phone'];
  $sql = "SELECT * FROM costomer_table where  mobile = '$phone' && email = '$email' ";
    $result = mysqli_query($conn,$sql);
    if( mysqli_num_rows($result) > 0 ) {
      $row = mysqli_fetch_assoc($result);
      $_SESSION['id'] = $row['id'];
      $_SESSION['who'] = 'costomer';

     // echo $_SESSION['id'];
   header('Location:index.php');
  } else{
    header('Location:login.php');
  }      
}
if (isset($_POST['adminlog'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
  $sql = "SELECT * FROM admin where  username = '$user' && password = '$pass' ";
  $result = mysqli_query($conn,$sql);
  if( mysqli_num_rows($result) > 0 ) {
      $_SESSION['who'] = 'admin';
    header('Location:index.php');
  } else{
    header('Location:login.php');
  }      

}

if (isset($_POST['costomercom'])){
  $id = $_POST['cid'];
  $complain = $_POST['complain'];
  $discription = $_POST['discription'] ; 
  $today = date("d-m-Y");  
$sql = " insert into complain (name,discription,cid,cdate) values('$complain','$discription','$id','$today') ";

if(mysqli_query($conn,$sql)){  
  header('Location:index.php');
}else{
  echo mysqli_error($conn);
}

}



?>