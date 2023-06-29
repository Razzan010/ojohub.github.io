<?php
session_start();
include("includes/db.php");
 ?> 
 
<?php 

 if (isset($_SESSION['customer_email'])) { 

 	$customer_email=$_SESSION['customer_email'];
    $verification_key=md5(time().$customer_email);

	$insert_customer="UPDATE stores set
				verification_key='$verification_key' WHERE customer_email='$customer_email' AND un_verified='Unverified' ";
    $run_customer=mysqli_query($con,$insert_customer);

  echo "<script>alert('A verification link is sent to your Email. Thank you !')</script>";
  echo "<script>window.open('mystore.php','_self')</script>";

    	$to=$customer_email;
        $subject="Ojohub - Please Verify your email address";
        $message=" Attempt to verify Email
            <br> 
            <br>
            Click to confirm your Email address. <a href='http://localhost/verify_shop_after.php?verification_key=$verification_key'>Verify account Now.</a> 
            <br> 
            <br>
            Sincerely,
            <br>
            The OjOhub Team.
            <br>
            <br>

        You’re receiving this email because you recently created a new Ojohub account. 
        <br>
        If this wasn’t you, please ignore this email.";
        $headers="From: ojohub20@gmail.com \r\n";
        $headers .="MIME-Version: 1.0" . "\r\n";
        $headers .="Content-type:text/html;charset=UTF-8"."\r\n";

        mail($to, $subject, $message,$headers);
    }
?>