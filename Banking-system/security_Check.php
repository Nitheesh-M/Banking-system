<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "onlinebank";


$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
if(isset($_POST['userloginid'])){
  //  $userloginid = $_POST['userloginid'];
    $security_ans = $_POST['security_ans'];
$result = new mysqli("select * from security_anss where security_ans = ?");
        // echo "YES";
       // echo <a href="mainpage.html">HERE</a>
      // header("Location : http://localhost/PROJECT/PHP/index.php");
      include('C:\xampp\htdocs\PROJECT\PHP\mainPage.html');
         exit();
 
}
    ?>