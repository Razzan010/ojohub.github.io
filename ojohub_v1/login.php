<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        header('Location: http://www.store.ojohub.com/EnteringNow-m');
    }
?>

<body style="" class="body-style">
    
    <?php
        session_start();
        include("includes/db.php");
        include 'functions.php'; 
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

<div style="" class="divider-thin">
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
  
<div class="bg-color-w">
    <div class="text-center p-t-10">
      <h3 class="f-w-b p-b-30">Login With Email</h3>
    </div> 

    <form action="login.php" method="post">
        <div class="form-group">
            <div class="text-center">
                <input class="login-input-login-page b-2-g f-color-b w-300" id="login-email" autocomplete="off" type="email" name="email" required="" placeholder="Your email...">
            </div>
        </div>
    
        <div class="form-group">
            <div class="text-center">
                <input class="login-input-login-page b-2-g f-color-b w-300" id="password" autocomplete="off" type="password" name="password" required="" placeholder="Password...">
            </div>
        </div>
    
        <div class="form-group f-color-w f-w-b">
            <div class="text-center">
                <button id="login-submit-modal" class="login-btn-login-page" name="login">
                    <span>Login</span>                 
                </button>
            </div>
        </div>
    </form>
    
    <form action="login.php" method="post">
        <div >    
           <p class="m-b-0 text-center m-t-30 fs-16 color-black av-roman">
              <a href="#" onclick="myFunction()" class="">Forget Password? <i class='fa fa-meh-o'></i>
              </a>
            </p>
        </div>
    </form>

    <h4 class="p-b-20">
         <p class="m-b-0 text-center m-t-30 fs-16 color-black av-roman">
        I don't have an Account.  <a href="BeingMember" class="openLoginModal av-heavy color-black  ul-on-hover no-hover-anchor f-color-bl" >Register</a>
        </p>
    </h4>

<form action="" method="post">
    <div class="text-center p-l-30-p p-r-30-p">
        <div class="dsp-nn f-f-av-r" id="myDIV1">
            <h3  class="">Recover Password
            </h3>
            
            <div class="form-group f-w-b">
                <input type="text" class="form-control" placeholder="Registered email..." name="c_email" required="">
            </div>
        
            <div>
                <button name="submit_recovery" value="Login" class="btn btn-primary m-b-10">
                    Submit      
                </button>     
            </div> 
        </div>
    </div>
</form>    
            <?php  
                include 'footer.php'; 
            ?> 

</body>
</html>

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
        echo "<script> alert('You are logged in.')</script>";     
        echo "<script> window.open('UpdateAccount','_self')</script>";
      }
      if(!$check_customer_temp==0) {  
      $_SESSION['customer_email']=$customer_email;
            
      echo "<script> window.open('Home','_self')</script>";
      exit(); 

    }   
  }
 ?>

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
  echo "<script>window.open('login.php','_self')</script>";

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



