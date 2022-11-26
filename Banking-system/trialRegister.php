<?php
$customerid = $_POST['customerid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$accountid = $_POST['accountid'];
$userloginid = $_POST['userloginid'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$Mobile_no = $_POST['Mobile_no'];
$address = $_POST['address'];
$zipcode = $_POST['zipcode'];
$password = $_POST['password'];
$security_ans =  $_POST['security_ans'];
$username = $_POST['username'];

if(!empty($userloginid) || !empty($username) || !empty($password))
{
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "onlinebank";

$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
    die('Connect Error ('.mysqli_connect_errno() .') '. mysqli_connect_error());

}
else{
  //  $SELECT = "SELECT userloginid from customer where userloginid = ? Limit 1"
    $INSERT = $conn->prepare("INSERT INTO customer (customerid,fname,lname,accountid,
    userloginid,dob,gender,email,address,zipcode) values
    (?,?,?,?,?,?,?,?,?,?)");
    $INSERT->bind_param("isssissssi",$customerid,$fname,$lname,$accountid,
$userloginid,$dob,$gender,$email,$address,$zipcode);
$INSERT->execute();

$INSERT->close();
$INSERT1 = $conn->prepare("INSERT INTO userlogins (userloginid,username,password) values
(?,?,?)");
$INSERT1->bind_param("iss",$userloginid,$username,$password);
$INSERT1->execute();

$INSERT1->close();
$INSERT2 = $conn->prepare("INSERT INTO cus_mobile (Customer_id,Mobile_no) values
(?,?)");
$INSERT2->bind_param("ii",$customerid,$Mobile_no);
$INSERT2->execute();

$INSERT2->close();
$INSERT3 = $conn->prepare("INSERT INTO security_anss (userloginid,security_ans) values
(?,?)");
$INSERT3->bind_param("is",$userloginid,$security_ans);
$INSERT3->execute();

$INSERT3->close();
include('C:\xampp\htdocs\PROJECT\PHP\accountcreationsuccess.php');
  
$conn->close();
   
}
}
?>
