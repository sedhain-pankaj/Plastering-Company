<?php
include 'database-connection.php';
error_reporting( E_STRICT );


$fullname = $_POST['fullname'];
$email = $_POST['email'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$cardname = $_POST['cardname'];
$cardnumber = $_POST['cardnumber'];
$expdate = $_POST['expdate'];
$cvv = $_POST['cvv'];
$encryptedcvv = md5 ($cvv);


if($fullname!='' || $email!='' || $street!='' || $city!='' || $state!='' || $zip!='' || $cardname!='' || $cardnumber!=''
   || $expdate!='' || $encryptedcvv!='') {
  $sql1 = "INSERT INTO orders (Fullname, Email, Street, City, State, Zip, Card_Name, Card_Number, Expiry_Date, CVV) 
            VALUES ('$fullname', '$email', '$street', '$city', '$state', '$zip', '$cardname', '$cardnumber', '$expdate', '$encryptedcvv')";
  
  $sql2 = "INSERT INTO invoices (Email) VALUES ('$email')";
  $result1 = $connection->query($sql1);
  $result2 = $connection->query($sql2);
}

if ($result1 && $result2) {
        echo "Your order is being processed.";
   }
   
        else{
             echo "Sorry, something went wrong. Please finish the <a href='payment.html'>checkout</a> again.
             We apologise for the inconnvenience.";
        }

?>

