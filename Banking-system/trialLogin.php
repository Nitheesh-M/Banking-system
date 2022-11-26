<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "onlinebank";

$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
if(isset($_POST['userloginid'])){
    $userloginid = $_POST['userloginid'];
    $username = $_POST['username'];
    $password = $_POST['password'];

   // $sql = ;
    $result = $conn->prepare("select * from userlogins where userloginid = ? AND username = ? AND password = ?");
    $result->bind_param("iss",$userloginid,$username,$password);
    $result->execute();
    $result1 = $result->get_result();

    if($result1 -> num_rows >0)
{
       //  echo "YES";
       // echo <a href="mainpage.html">HERE</a>
      // header("Location : http://localhost/PROJECT/PHP/index.php");
      include('C:\xampp\htdocs\PROJECT\PHP\security_Check.html');
         exit();
    }
    else{
      //  echo "NO";
     //   <a href="trialLogin.html">HERE</a>
    // $_SESSION["error"] = "Username does not found";
     include('C:\xampp\htdocs\PROJECT\PHP\index.php');
        exit();
    }
}
    ?>

