<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$customerid = $_POST['customerid'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$Mobile_no = $_POST['pno'];
$address = $_POST['address'];
$zipcode = $_POST['zipcode'];
$accountid = $_POST['accountid'];
$userloginid = $_POST['userloginid'];
$gender = $_POST['gender'];


if(!empty($userloginid) || !empty($email) || !empty($Mobile_no))
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
    $INSERT = $conn->prepare("UPDATE customer SET fname ='$fname', lname = '$lname',dob='$dob',email='$email',address='$address',zipcode='$zipcode' ,userloginid = '$userloginid',accountid = '$accountid',gender = '$gender' WHERE customerid ='$customerid'");
  //  $INSERT->bind_param('sssssisis',$fname,$lname,$dob,$email,$address,$zipcode,$accountid,$userloginid,$gender);
$INSERT->execute();

$INSERT->close();
/*$INSERT1 = $conn->prepare("INSERT INTO userlogins (userloginid,username,password) values
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

$INSERT3->close();*/
include('C:\xampp\htdocs\PROJECT\PHP\mainPage.php');
  
$conn->close();
   
}
}
?>
