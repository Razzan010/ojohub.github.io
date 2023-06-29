<?php
session_start();
include("includes/db.php");
 ?> 
 
 <?php
    $customer_email=$_SESSION['customer_email'];
    $get_customer="select * from customers where customer_email='$customer_email'";
    $run_cust=mysqli_query($con,$get_customer);
    $row_cust=mysqli_fetch_array($run_cust);
    
    $customer_email=$row_cust['customer_email'];
    $customer_id=$row_cust['customer_id'];
    $customer_name=$row_cust['customer_name'];
?>

 <?php 
 if (isset($_SESSION['customer_email'])) { 

 	$customer_email=$_SESSION['customer_email'];

    $verification_key=md5(time().$customer_email);

	$insert_customer="UPDATE customers set
				verification_key='$verification_key' WHERE customer_email='$customer_email' AND un_verified='Unverified' ";
    $run_customer=mysqli_query($con,$insert_customer);

  echo "<script>alert('A verification link is sent to your Email. Please use the latest link to verify. Thank you !')</script>";
  echo "<script>window.open('myaccount.php','_self')</script>";

    	$to=$customer_email;
        $subject="Ojohub - Please Verify your email address";
        $message=" 
        
<h2 style='font-weight: bold;color: green; text-align:center;width:100%; background-color:lightgreen'>Ojohub.com</h2> 

   	    <span style='font-weight:bold;'>Hello</span> <span style='color:#1478d9; font-weight:bold;'> $customer_name, </span>
		<br>
		        You attempt to verify your OjOhub account.
		<br>
	    <p>Click to confirm your Email address. <a href='http://store.ojohub.com/verify_account.php?verification_key=$verification_key'>Verify account Now.</a> 
	    </p>
            <p style='color:grey;font-weight:bold;'>
                You’re receiving this email because you attempt to verify your Ojohub account. 
            <br>
                If this wasn’t you, please check your account.
            </p>
         
            <h5 style='font-weight: bold;color: #67a9e9; width:100%; height:4px;'>Your Sincerly, 
<br>
Ojohub Team
</h5>

<br>
<h1 style='font-weight: bold;color: green; text-align:center;width:100%; background-color:lightgreen;height:4px;'></h1>	
<br>
<br>
<br>
";
        $headers="From: ojohub20@gmail.com \r\n";
        $headers .="MIME-Version: 1.0" . "\r\n";
        $headers .="Content-type:text/html;charset=UTF-8"."\r\n";

        mail($to, $subject, $message,$headers);
    }
?>
						
						
    