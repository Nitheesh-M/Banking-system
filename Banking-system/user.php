<?php
$customerid = $_POST['customerid'];


if(!empty($customerid))
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
    $INSERT = "select * from customer inner join cus_mobile WHERE customerid ='$customerid' and customer.customerid = cus_mobile.Customer_id";
   // $INSERT1 = "select * from cus_mobile WHERE customer-d = '$customerid";
    $result = mysqli_query($conn,$INSERT);
  //  $result1 = new  mysqli_query($conn,$INSERT1);
    if($result ){
        while($row = mysqli_fetch_assoc($result)){
            $accountid = $row['accountid'];
            $userloginid = $row['userloginid'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $dob = $row['dob'];
            $gender = $row['gender'];
            $address = $row['address'];
            $email = $row['email'];
            $mobile = $row['Mobile_no'];
    $INSERT1 = "select * from account_details WHERE AccountID='$accountid'";
    $result1=mysqli_query($conn,$INSERT1);
            if($result1){
                while($row1=mysqli_fetch_assoc($result1)){
                    $bal = $row1['CurrentBalance'];
                    $status = $row1['AccountStatus'];
                    $rate = $row1['SavingsInterestRate'];
                    $type = $row1['AccountType'];
                }
            }
            $INSERT2 = "select * from loan_details inner join loan_num WHERE Customer_id = '$customerid' and loan_details.LoanNumber = loan_num.LoanNumber";
            $result2=mysqli_query($conn,$INSERT2);
                    if($result2->num_rows>0){
                        while($row2=mysqli_fetch_assoc($result2)){
                            $num = $row2['LoanNumber'];
                            $date = $row2['LoanApprovalDate'];
                            $ltype = $row2['Loan_Type'];
                            $amt = $row2['LoanAmount'];
                        }
                        
                    }


           
         echo "<html>";
         echo "<body style=background-color:silver; background-size: 100%;>";
         echo "<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css rel=stylesheet>";
         echo "<div class=container mt-3 >";
       echo "<center>";
      //   echo "<form action=mainPage.html ;method=post style=border:1px>";
      echo "<table border=1; cellpadding=50px ; cellspacing:200px><tr><td>";
           echo "<p>PERSONAL DETAILS";
            echo "<p >First Name : ".$fname."</p>";
            echo "<p>Last  Name : ".$lname."</p>";
            echo "<p> DOB : ".$dob."</p>";
            echo "<p> GENDER : ".$gender."</p>";
            echo "<p> ADDRESS : ".$address."</p></td>";
            echo "<br><br><br>";
            echo "<div float:right>";
            echo "<td >CONTACT DETAILS<br>";
            echo "<p>E-MAIL : ".$email."</p>";
            echo "<p>MOBILE NUMBER : ".$mobile."</p></td>";
            echo "<td><p>ACCOUNT DETAILS<p>";
            echo "<p>Account Number : ".$accountid."<p>";
            echo "<p>Account Status : ".$status."<p>";
            echo "<p>Account Type : ".$type."<p>";
            echo "<p>Savings Interest Rate : ".$rate."<p>";
            echo "<p>Current Balance : ".$bal."<p></td>";
            echo "<td>LOAN DETAILS";
            echo "<p>Loan Number : ".$num."<p>";
            echo "<p>Approval Date : ".$date."<p>";
            echo "<p>Loan Type : ".$ltype."<p>";
            echo "<p>Loan Amount : ".$amt."<p></td>";
            echo "</div>";
            echo "<hr><hr><hr>";
            echo"<tr></table>";

         //   echo "<button type=submit>Go back to home</button>";
       //     echo "</form>";
            echo "</center>";
           echo "</div>";
           echo "</body>";
           echo "</html>";
        }
    }
    else{
        echo "No records";
    }
//include('C:\xampp\htdocs\PROJECT\PHP\mainPage.php');

$conn->close();
   

}
}
?>
