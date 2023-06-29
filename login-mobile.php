<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        
    }else{
        header('Location: http://www.store.ojohub.com/EnteringNow');        
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
      
<div class="text-center" style="padding-top: 10px;">
  <h3 style="font-weight:bold; padding-bottom:30px;">Login With Email</h3>
<div class="m-t-30 auth-width">
<p class="m-t-20 m-b-20 fs-17 av-roman color-black"></p>

<form action="EnteringNow-m" method="post">
<div class="form-group m-b-0">
<div class="text-center cred-form p-relative m-b-20">
<input class="login-input-login-page" id="login-email" autocomplete="off" type="email" name="email" required="" class="w-100 auth-option input-ph fs-17 av-roman color-black" placeholder="Your email..." style="  border: 2px solid #19BC15 ;  color: black;width: 300px;">
</div>
</div>

<div class="form-group m-b-0 m-t-20">
<div class="text-center cred-form p-relative m-b-20">
<input class="login-input-login-page" id="password" autocomplete="off" type="password" name="password" required="" class="w-100 auth-option input-ph fs-17 av-roman color-black" placeholder="Password..." style="  border: 2px solid #19BC15 ;color: black; width: 300px;">
</div>
</div>

<div class="form-group" style="float: center; color: white;font-weight: bold;">
<div class="text-center cred-form p-relative m-b-20">
<button id="login-submit-modal" class="login-btn-login-page" name="login">
<span>Login</span>                 
</button>
</div>
</div>

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
  if (isset($_POST['login'])) {
    $customer_email=mysqli_real_escape_string($con,$_POST['email']);
    $customer_pass=mysqli_real_escape_string($con,$_POST['password']);
    $temp_pass=mysqli_real_escape_string($con,$_POST['password']);

    $select_customers="SELECT * from customers where customer_email='$customer_email' AND temp_pass='$temp_pass'";
    $run_cust=mysqli_query($con,$select_customers);
    $check_customer=mysqli_num_rows($run_cust);

    $select_customers_temp="SELECT * from customers where customer_email='$customer_email' AND customer_pass='$temp_pass'";
    $run_cust_temp=mysqli_query($con,$select_customers_temp);
    $check_customer_temp=mysqli_num_rows($run_cust_temp); 

    if ($check_customer==0 && $check_customer_temp==0) {
      echo "<script> alert('Password/Email wrong.') </script>";
      }
      
      if(!$check_customer==0) {   
        $_SESSION['customer_email']=$customer_email;
        echo "<script> alert('You are logged in. Please Update your Account. Thank you !')</script>";     
        echo "<script> window.open('UpdateAccount-m','_self')</script>";
        
      }
      if(!$check_customer_temp==0) {  
      $_SESSION['customer_email']=$customer_email;
            
      echo "<script> window.open('Home-m','_self')</script>";
      exit(); 
    }   
  }
 ?>

<form action="EnteringNow-m" method="post">
    <div >    
   <p class="m-b-0 text-center m-t-30 fs-16 color-black av-roman" style="color: green;">
      <a href="#" onclick="myFunction()" class="">Forget Password? <i class='fa fa-meh-o'></i></a></a>
      </p>
    </div>
</form>

<h4 style="padding-bottom:20px;">
 <p class="m-b-0 text-center m-t-30 fs-16 color-black av-roman">
I don't have an Account.  <a href="BeingMember-m" class="openLoginModal av-heavy color-black  ul-on-hover no-hover-anchor" style="color: blue;">Register</a>
</p>
</h4>

</div>
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
  echo "<script>alert('A 5 digit Temporary password is sent to your Email. Sometimes it may take some Minutes. Use it for logging to your Account ! .')</script>";
  echo "<script>window.open('EnteringNow-m','_self')</script>";

        $to=$c_email;
        $subject="Ojohub - Password Recovery";
        $message=" 
        
        <h2 style='font-weight: bold;color: green; text-align:center;width:100%; background-color:lightgreen'>Ojohub.com</h2>
        
        Use the below 5 digits temporary password to login your account and reset new one.
          <br>
           Temporary Password: <a href='#'> $temp_pass</a>
              <br> 
            <br>
            Your Sincerely,
            <br>
            OjOhub Team.
            <br>

<h1 style='font-weight: bold;color: green; text-align:center;width:100%; background-color:lightgreen;height:4px;'></h1>	

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

<div style="height:100px;">
</div>  

    <?php
        include 'bottom_bar-mobile.php';         
    ?>

</body>


