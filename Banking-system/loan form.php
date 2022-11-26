<?php
$customerid = $_POST['customerid'];
$loanamount = $_POST['loanamount'];
$loan = $_POST['loantype'];


if(!empty($customerid) || !empty($loanamount) || !empty($loan))
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
    $INSERT = $conn->prepare("INSERT INTO loan_details (LoanAmount,Loan_Type) values
    (?,?)");
    $INSERT->bind_param("is",$loanamount,$loan);
$INSERT->execute();

$INSERT->close();
$INSERT1 = $conn->prepare("INSERT INTO loan_num (Customer_id) values
    (?)");
    $INSERT1->bind_param("s",$customerid);
$INSERT1->execute();

$INSERT1->close();
include('C:\xampp\htdocs\PROJECT\PHP\loanformsubmissionsuccess.html');
}
}
?>
