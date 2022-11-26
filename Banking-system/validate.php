<?php 
$input_login = $_POST['UserLoginID'];
$input_UserName = $_POST['UserName'];
$input_pass = $_POST['password'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlinebank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

$sql_query = "select * from customer where UserLoginID = '$input_login'" ;

$query_result = $conn->query($sql_query);

if($query_result->num_rows > 0 && !empty($input_pass)){
	while($row = $query_result->fetch_assoc()) {
		if($row['password'] === $input_pass){
			session_start();
			$_SESSION['Customer_firstName'] = $row['Customer_firstName'];
			//$_SESSION['f_name'] = $row['fname'];
			// $_SESSION['db_connect'] = $conn;

			//header('Location:../login_home.php');
		}

		else{
			// session_start();
			// $_SESSION['pass_error'] = 'Password Incorrect';
			// $error['password'] = 'Password is incorrect';
			break;
		}
	}

//	include('../login.php');

	

} else{
	
	//include('/login.php');
	
}


?>