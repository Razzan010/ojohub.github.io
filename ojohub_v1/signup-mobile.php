<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        
    }else{
        header('Location: http://www.store.ojohub.com/BeingMember');        
    }
?>

<style>
    html, body {
        max-width: 100%;
        overflow-x: hidden;
        
    }
</style>

          <?php
              include 'topbar2_stores-mobile.php';         
            ?> 

<body style="background:#F4F4F4;">
<?php
    session_start();
    include("includes/db.php");
    include('UserInformation.php');
?> 
    
<?php
    if (isset($_SESSION['customer_email'])) {
	$customer_email=$_SESSION['customer_email'];
    }
?>


<div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
</div>

<?php 

 if (isset($_SESSION['customer_email'])) {

    $customer_email=$_SESSION['customer_email'];
    $sel_cart="select * from customers where customer_email='$customer_email'";
    $run_customer=mysqli_query($con,$sel_cart);
    $row_customer=mysqli_fetch_array($run_customer);
    $check_cart=mysqli_num_rows($run_customer); 
    
    $customer_name=$row_customer['customer_name'];
    $customer_id=$row_customer['customer_id'];
    $date_of_reg=$row_customer['date_of_reg'];
    
    
    $sel_cart_2="select * from products where customer_id='$customer_id'";
    $run_customer_2=mysqli_query($con,$sel_cart_2);
    $row_customer_2=mysqli_fetch_array($run_customer_2);
    $check_cart_2=mysqli_num_rows($run_customer_2); 
     
        }    
      ?>

<table class="table-a">
  <tr class="tr-a">
        <td>
            <a href="OwnAccount-m" style="color:orange;">
                <i class="fa fa-user-o" aria-hidden="true"></i>
            </a>        
        </td>
        <td>
            <a href="OwnStore-m">
                <i class="fa fa-square-o" aria-hidden="true"></i>
            </a>        
        </td>
        <td>
            <a href="Favourites-m">
                <i class="fa fa-heart-o" aria-hidden="true"></i>
            </a>            
        </td>
        <td>
            <a href="Followed-m">
                <i class="fa fa-plus-square-o" aria-hidden="true"></i>
            </a>        
        </td>
        <td>
        <a href="Settings-m">
            <i class="fa fa-cogs" aria-hidden="true"></i>
        </a>             
        </td>
  </tr>
  
  <tr class="tr-b">
    <td class="td-a" style="color:orange;">Profile</td>
    <td class="td-a">Store</td>
    <td class="td-a">Favourites</td>
    <td class="td-a">Follows</td>
    <td class="td-a">Settings</td>
  </tr>
  
</table>  


<style>
    .table-a{
        width:95%;
        margin-left:3%;
        margin-right:5%;
        margin-top:7%;
    }
    .tr-a{
        font-size:30px;
        text-align:center;
        color:#61ae43;
    }
    
    .tr-b{
        font-size:12px;
        text-align:center;
    } 
    
    .td-a{
        width:20%;
        font-weight:bold;
    }

</style>

<div style="background:white; margin-top:5%;padding-top:10px;padding-bottom:30px;">
    
	<?php 
 if (isset($_SESSION['customer_email'])) {
    $customer_email=$_SESSION['customer_email'];

    $sel_cart="select * from customers where customer_email='$customer_email'";
    $run_customer=mysqli_query($con,$sel_cart);
    $check_cart=mysqli_num_rows($run_customer);
    $row_customer=mysqli_fetch_array($run_customer); 

    	$customer_id=$row_customer['customer_id'];
    	$customer_name=$row_customer['customer_name'];
    	$customer_email=$row_customer['customer_email'];
    	$date_of_reg=$row_customer['date_of_reg'];
    	$un_verified=$row_customer['un_verified'];
    	$customer_pass=$row_customer['customer_pass'];
		$customer_city=$row_customer['customer_city'];
		$customer_dist=$row_customer['customer_dist'];

    	}else{
    		echo "";
    	}		
 ?>
 
 
 <div style="background:white;">
      
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
Already have an Account?  <a href="EnteringNow-m" class="" style="color: blue;">Login</a>
</p>
</h4>

<p class="color-788 av-roman fs-14 m-t-40 l-h-22 m-b-0" style="padding-bottom:20px;">By signing up, you are agree to our <u class="p-relative"><a href="https://www.buymeacoffee.com/terms" class="p-absolute p-b-wrap" target="_blank"></a>terms</u> and <u class="p-relative"><a href="https://www.buymeacoffee.com/privacy-policy" class="p-absolute p-b-wrap" target="_blank"></a>privacy</u> <u class="p-relative dis-inline-block"><a href="https://www.buymeacoffee.com/privacy-policy" class="p-absolute p-b-wrap" target="_blank"></a>policy</u>. We do not allow adult content. You must at least 18 years old to start a page.</p>

</div>
</div>


</form>




<style>
.login-btn-login-page{
  background: #19BC15; 
  height:40px; 
  width:90px; 
  border:none;
  border-radius: 5px; 
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.login-input-login-page{
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
}
  
</style>


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

    $verification_key=md5(time().$c_name);

    $sel_cart="select * from customers where customer_email='$c_email'";
    $run_customer=mysqli_query($con,$sel_cart);
    $check_cart=mysqli_num_rows($run_customer);
    
    if(preg_match("~@gmail\.com$~",$c_email)){     
        if ($check_cart>0) {
          $_SESSION['customer_email']=$c_email;
              echo "<script> alert('This email is already registered. Try logging in. Thank you!')</script>";
              echo "<script>window.open('BeingMember-m','_self')</script>";
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

</div>

<script>
function myFunction() {
  var x = document.getElementById("myDIV1");  
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</div>

<form action="" method="post">
<div class="" style="width:auto; text-align:center; "> 
    <div class="passrecover " id="myDIV1" style="background:white;font-family:av-roman;">
      <div>
             <h3  style="padding-top:2px;">Recover Password</h3>
          <div class="form-group" style="padding:2px 50px 2px 50px;font-weight:bold;">
              
            <input type="text" class="form-control" placeholder="Registered email..." name="c_email" required=""> 
          </div>
          <div>
              <button name="submit_recovery" value="Login" class="btn btn-primary" style="margin-bottom: 10px;">
                Submit      
              </button>     
          </div>  
      </div>    
</div>
</div>

</form>
<style type="text/css">
  .passrecover{
    display: none;
  }
</style>

<?php
include("includes/db.php");
if(isset($_POST['submit_recovery'])){
  $c_email=$_POST['c_email'];
  
  $temp_pass=rand(10000,99999);

  $select_cust="select * from customers where customer_email='$c_email'";
  $run_q=mysqli_query($con,$select_cust);
  $check_old_pass=mysqli_num_rows($run_q);  

  if($check_old_pass==0){
    echo "<script>alert('Account doesnot exist. Check your Email or create new one.')</script>";
    exit();
  }else{
    $update_q="update customers set temp_pass='$temp_pass' where customer_email='$c_email'";
  $run_q=mysqli_query($con,$update_q);
  echo "<script>alert('A 5 digit Temporary password is sent to your Email. Use it to login.')</script>";
  echo "<script>window.open('EnteringNow-m','_self')</script>";


        $to=$c_email;
        $subject="Ojohub - Password Recovery";
        $message=" Use the below 5 digits temporary password to login your account and reset new one.
          <br>
           Temporary Password: <a href='#'> $temp_pass</a>
              <br> 
            <br>
            Sincerely,
            <br>
            The OjOhub Team.
            <br>
            <br>

        You’re receiving this email because you recently requested yor the password recovery on Ojohub. 
        <br>
        If this wasn’t you, please ignore this email.";        


        $headers="From: ojohub20@gmail.com \r\n";
        $headers .="MIME-Version: 1.0" . "\r\n";
        $headers .="Content-type:text/html;charset=UTF-8"."\r\n";

        mail($to, $subject, $message,$headers);

  }

}

?>

</div>

</body>
</html>

    <style>
      .blink {
        animation: blink-animation 1s steps(5, start) infinite;
        -webkit-animation: blink-animation 1s steps(5, start) infinite;
      }
      @keyframes blink-animation {
        to {
          visibility: hidden;
        }
      }
      @-webkit-keyframes blink-animation {
        to {
          visibility: hidden;
        }
      }
    </style>    
    
 
<div style="height:100px;">
</div>  

          <?php
              include 'bottom_bar-mobile.php';         
            ?>

</body>




