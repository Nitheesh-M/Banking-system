<?php
$cardnumber = $_POST['cardnum'];
$holdername = $_POST['holder'];
$ccv = $_POST['ccv'];
$expirydate = $_POST['date'];
$accountid = $_POST['acc'];
$amount = $_POST['amount'];
$order = $_POST['ord'];


if(!empty($holdername) || !empty($ccv) || !empty($cardnumber))
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
    $INSERT = $conn->prepare("INSERT INTO bill_payments (BillPayment_no,PaymentAmount) values
    (?,?)");
    $INSERT->bind_param("si",$order,$amount);
$INSERT->execute();

$INSERT->close();
$INSERT1 = $conn->prepare("INSERT INTO bill (AccountID,BillPayment_no) values
    (?,?)");
    $INSERT1->bind_param("ss",$accountid,$order);
$INSERT1->execute();

$INSERT1->close();
$INSERT2 = $conn->prepare("INSERT INTO card_details (CardNumber,CardHolder,CCV,ExpirtDate) values
    (?,?,?,?)");
    $INSERT2->bind_param("ssis",$cardnumber,$holdername,$ccv,$expirydate);
$INSERT2->execute();

$INSERT2->close();
include('C:\xampp\htdocs\PROJECT\PHP\pay_s.html');
}
}
?>
