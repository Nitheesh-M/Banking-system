<?php
$transactno = $_POST['receiverno'];
$amount = $_POST['amount'];
$sender = $_POST['senderno']

if(!empty($transactno) || !empty($amount) )
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
    $INSERT = $conn->prepare("INSERT INTO transaction (TransactionID,TransactionAmount) values
    (?,?)");
    $INSERT->bind_param("si",$transactno,$amount);
$INSERT->execute();

$INSERT->close();
$INSERT1 = $conn->prepare("INSERT INTO transact (AccountID,TransactionID) values
(?,?)");
$INSERT1->bind_param("ss",$sender,$transactno);
$INSERT1->execute();

$INSERT1->close();

include('C:\xampp\htdocs\PROJECT\PHP\amountsuccessfullytransferred.html');
}
}
?>
