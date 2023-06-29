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

<div style="min-width:50;padding-bottom:65px;">
    <div style="background:white;">
    <div class="" style="padding-top: 10px;padding-left: 5%;width: 95%;">
    
        <div class="box-header">
        	<h4 class="text-muted " style="color: green; font-weight: bold;"> Feedbacks</h4>
        </div>
        
<div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
</div> 


    <div class="text-center step-1-login step-auth" style="padding-top: 1%">
    <div>
         <h4>We really appreciate your suggestions and feedbacks. Thank you !</h4>
    </div>    
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group ">
            <textarea  class="" id="password" autocomplete="off" type="text" name="feedback" required="" class="" placeholder="Feedbacks..." required="" style="border: 2px solid #19BC15 ;color: black; width: 100%;min-height: 100px;resize: none;  
        "></textarea>
        </div>

        <br>
        <br>
        
        <div class="form-group" style="float: center; color: white; font-weight:bold;">
            <button id="" class="login-btn-login-page" name="submit_feedback">
            <span>Send <i class="fa fa-smile-o"></i></span>                 
            </button>
        </div>
    <br>

    </div>
    </div>
    </form>
</div>

<?php
if (isset($_POST['submit_feedback'])) {
    $c_name=htmlspecialchars($_POST['name']);
    $c_email=htmlspecialchars($_POST['email']);
    $feedback=htmlspecialchars($_POST['feedback']);
    $date = date("Y.m.d");

    $sel_cart="select * from feebacks where customer_email='$c_email'";
    $run_customer=mysqli_query($con,$sel_cart);
    $check_cart=mysqli_num_rows($run_customer);
    
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Your Feedback is important for us. We want to improve our  Website constantly for you. Thank you !")';  
    echo '</script>';   
    
    #if ($check_cart>0) {
    #  $_SESSION['customer_email']=$c_email;
     # echo "<script> alert('You have already sent us your Feedback. Thank you for staying with us !')</script>";
    #  echo "<script>window.open('signup.php','_self')</script>";

    #  }else{
    $insert_customer="insert into feedbacks (feedbacks) values('$feedback')";
    $run_customer=mysqli_query($con,$insert_customer);
}
#}

?>

<style>
    .login-btn-login-page{
  background: #19BC15; 
  height:40px; 
  width:90px; 
  border:none;
  border-radius: 5px; 
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>

</div>   
    <?php
        include 'bottom_bar-mobile.php'; 
    ?>

</body>











