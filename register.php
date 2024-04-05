<?php
include 'database-connection.php';
error_reporting( E_STRICT );
$surname = $_POST['surname'];
$given_name = $_POST['given_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$landline = $_POST['landline'];
$occupation = $_POST['occupation'];
$street = $_POST['street'];
$suburb = $_POST['suburb'];
$state = $_POST['state'];
$postcode = $_POST['postcode'];
$password = $_POST['password'];
$encryptedpassword = md5($password);



if($surname!='' || $given_name!='' || $email!='' || $mobile!='' || $street!='' || $suburb!=''
|| $state!='' || $postcode!='' || $encryptedpassword!='') {
     $sql1 = "INSERT INTO customers ( Surname, Given_Name, Email, Mobile, Landline, Occupation) 
              VALUES ('$surname', '$given_name', '$email', '$mobile', '$landline', '$occupation')";
     $sql2 = "INSERT INTO login ( Email, Password) VALUES ('$email', '$encryptedpassword')";
     $sql3 = "INSERT INTO address ( Street, Suburb, State, Postcode) VALUES ('$street', '$suburb', '$state', '$postcode')";
     $result1 = $connection->query($sql1);
     $result2 = $connection->query($sql2);
     $result3 = $connection->query($sql3);
     //echo "$sql"; die();
  

if ($result1 && $result2 && $result3 ) {
     header('Location: login.html');
}

     else{
          echo "Sorry  <a href='register.html'>Register</a> again";
     }

}
?>