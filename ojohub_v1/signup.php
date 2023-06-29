<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        header('Location: http://www.store.ojohub.com/BeingMember-m');
    }
?>

<body style="background:#F4F4F4;">
    
<?php
    session_start();
    include("includes/db.php");
    include 'functions.php'; 
    include('UserInformation.php');
?> 


<table class="mainbody" width="1024" border="0" align="center" cellpadding="0" cellspacing="0">

    <td>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <?php
              include 'topbar2_stores.php';         
            ?> 
          </tr>      
        </table>

<div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
</div>        
        
<table class="mainbody" width="1024" border="0" align="center" cellpadding="0" cellspacing="0">

    <td>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <?php
              include 'topbar1_stores.php';         
            ?> 
          </tr>      
        </table>     

<div class="" style="padding-top: 10px;padding-bottom:10px; color: black; font-weight: bold; text-align: center; background-color:white;">
    <h3 style="font-weight:bold; ">Signup with Email</h3>   
</div>

<div class="text-center step-1-login step-auth" style="padding-top: 1%; background-color:white;">


<div class="m-t-30 auth-width">
<p class="m-t-20 m-b-20 fs-17 av-roman color-black"></p>


<form action="signup.php" method="post" enctype="multipart/form-data">

<div class="form-group m-b-0">
<div class="text-center cred-form p-relative m-b-20">
<input class="login-input-login-page"  autocomplete="off" type="text" name="name" required="" class=" " placeholder="Name..." required="" style="  border: 2px solid #19BC15; color: black; width: 300px; " >
</div>
</div> 

<div class="form-group m-b-0">
<div class="text-center cred-form p-relative m-b-20">
<input class="login-input-login-page" id="login-email" autocomplete="off" type="email" name="email" required="" class="w-100 auth-option input-ph fs-17 av-roman color-black" placeholder="Your email..." required="" style=" border: 2px solid #19BC15 ; color: black;width: 300px;  
">
</div>
</div>

<div class="form-group m-b-0 m-t-20">
<div class="text-center cred-form p-relative m-b-20">
<input class="login-input-login-page" id="password" autocomplete="off" type="password" name="password" required="" class="w-100 auth-option input-ph fs-17 av-roman color-black" placeholder="Password..." required="" style="border: 2px solid #19BC15 ;color: black; width: 300px;  
">
</div>
</div>


<div class="form-group" style="float: center; color: white; font-weight:bold;">
<button id="login-submit-modal" class="login-btn-login-page" name="submit">
<span>Register</span>                 
</button>
</div>


<h4>
 <p class="m-b-0 text-center m-t-30 fs-16 color-black av-roman">
Already have an Account?  <a href="EnteringNow" class="" style="color: blue;">Login</a>
</p>
</h4>

<p class="color-788 av-roman fs-14 m-t-40 l-h-22 m-b-0" style="padding-bottom:20px;">By signing up, you are agree to our <u class="p-relative"><a href="https://www.buymeacoffee.com/terms" class="p-absolute p-b-wrap" target="_blank"></a>terms</u> and <u class="p-relative"><a href="https://www.buymeacoffee.com/privacy-policy" class="p-absolute p-b-wrap" target="_blank"></a>privacy</u> <u class="p-relative dis-inline-block"><a href="https://www.buymeacoffee.com/privacy-policy" class="p-absolute p-b-wrap" target="_blank"></a>policy</u>. We do not allow adult content. You must at least 18 years old to start a page.</p>

</div>
</div>


</form>


<div class="col-md-12">
<?php  
                    include 'footer.php'; 
                 ?>     
</div> 
<!--Signup formxxx end-->

<?php
$ip= UserInfo::get_ip();
$os= UserInfo::get_os();
$browser= UserInfo::get_browser();
$device= UserInfo::get_device();
?>

<?php

if (isset($_POST['submit'])) {
    $c_name=htmlspecialchars($_POST['name']);
    $c_email=htmlspecialchars($_POST['email']);
    $c_password=htmlspecialchars($_POST['password']);
    $date = date("Y.m.d");

    //Generate verification key
    $verification_key=md5(time().$c_name);

    $sel_cart="select * from customers where customer_email='$c_email'";
    $run_customer=mysqli_query($con,$sel_cart);
    $check_cart=mysqli_num_rows($run_customer);
    
    if(preg_match("~@gmail\.com$~",$c_email)){    
        if ($check_cart>0) {
              $_SESSION['customer_email']=$c_email;
              echo "<script> alert('This email is already registered. Try logging in. Thank you!')</script>";
              echo "<script>window.open('signup.php','_self')</script>";
         }else{
        $insert_customer="insert into customers (date_of_reg,un_verified,verification_key,customer_name,customer_phone,customer_email,customer_pass,customer_dist,customer_city,customer_street,ip_address,os,browser,device) values('$date','Unverified','$verification_key','$c_name','--','$c_email','$c_password','--','--','--','$ip','$os','$browser','$device')";
         $run_customer=mysqli_query($con,$insert_customer);
         echo "<script>window.open('signup_success.php','_self')</script>";
    

        $to=$c_email;
        $subject="Ojohub - Please Verify your email address";
        $message=" 
        
    <h2 style='font-weight: bold;color: green; text-align:center;width:100%; background-color:lightgreen'>Ojohub.com</h2> 

   	    <span style='font-weight:bold;'>Hello</span> <span style='color:#1478d9; font-weight:bold;'> $c_name, </span>
		<br>
		        Thank you for creating an ojohub account.
		<br>
	    <p>Click to confirm your Email address. <a href='http://store.ojohub.com/verify_account.php?verification_key=$verification_key'>Verify account Now.</a> 
	    </p>
            <p style='color:grey;font-weight:bold;'>
                You’re receiving this email because you recently created a new Ojohub account. 
            <br>
                If this wasn’t you, please ignore this email.
            </p>
         
            <h5 style='font-weight: bold;color: #67a9e9; width:100%; height:4px;'>Your Sincerly, 
                    <br>
                    Your Ojohub Team
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
        
    }else{
        echo "<script>alert('We allow only Gmails for now. Thank you for your understanding !')</script>";
    }


  }
?>

</body>






