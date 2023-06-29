<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.modal {
  display: none;
  position: fixed;
  z-index: 1; 
  padding-top: 100px; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
}

.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>

<button id="myBtn" style="color:purple;border: 2px solid purple;float: right;font-weight: bold;font-size: 18px; margin-bottom: 5px;">Feedback</button>

<div id="myModal" class="modal">

  <div class="modal-content">
    <span class="close">&times;</span>



<div class="text-center step-1-login step-auth" style="padding-top: 1%">

    <form action="sidebar-home.php" method="post" enctype="multipart/form-data">
        <div>
             <p>We really appreciate your suggestions and feedbacks. Thank you !</p>
        </div>

        <div class="form-group">
             <input class="login-input-login-page"  autocomplete="off" type="text" name="name" required="" class=" " placeholder="Name..." required="" style="  border: 2px solid #19BC15; color: black; width: auto; " >
        </div>

        <div class="form-group">
            <input class="login-input-login-page" id="login-email" autocomplete="off" type="email" name="email" required="" class="" placeholder="Your email..." required="" style=" border: 2px solid #19BC15 ; color: black;width: auto;  
        ">
        </div>

        <div class="form-group ">
            <textarea  class="login-input-login-page" id="" autocomplete="off" type="text" name="feedbacks" required="" class="" placeholder="Feedbacks..." required="" style="border: 2px solid #19BC15 ;color: black; width: 70%;min-height: 100px;resize: none;  
        "></textarea>
        </div>

        <br>
        <br>

        <div class="form-group" style="float: center; color: white; font-weight:bold;">
            <button id="" class="login-btn-login-page" name="submit">
            <span>Send <i class="fa fa-smile-o"></i></span>                 
            </button>
        </div>

        <br>

    </div>
    </div>
    </form>
 </div>
</div>

<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>

<?php
if (isset($_POST['submit_feedback'])) {
    $c_name=htmlspecialchars($_POST['name']);
    $c_email=htmlspecialchars($_POST['email']);
    $date = date("Y.m.d");

    $sel_cart="select * from feebacks where customer_email='$c_email'";
    $run_customer=mysqli_query($con,$sel_cart);
    $check_cart=mysqli_num_rows($run_customer);
    if ($check_cart>0) {

      $_SESSION['customer_email']=$c_email;
      echo "<script> alert('You have already sent us your Feedback. Thank you for staying with us !')</script>";
      echo "<script>window.open('signup.php','_self')</script>";

      }else{
    $insert_customer="insert into customers (date_of_reg,un_verified,verification_key,customer_name,customer_email,customer_pass) values('$date','Unverified','$verification_key','$c_name','$c_email','$c_password')";
    $run_customer=mysqli_query($con,$insert_customer);

    echo "<script>window.open('signup_success.php','_self')</script>";
}
}
