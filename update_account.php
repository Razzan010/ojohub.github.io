<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        header('Location: http://www.store.ojohub.com/UpdateAccount-m');
    }
?>

<body style="background:#F4F4F4;">
    
<?php
    session_start();
    include("includes/db.php");

        include 'functions.php'; 
?> 

<?php
    session_start();
    include("includes/db.php");
    include("redirect_desktop.php");
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


<div style="">
<?php
    $customer_email=$_SESSION['customer_email'];
    $get_customer="select * from customers where customer_email='$customer_email'";
    $run_cust=mysqli_query($con,$get_customer);
    $row_cust=mysqli_fetch_array($run_cust);
    
    $customer_name=$row_cust['customer_name'];
    $customer_email=$row_cust['customer_email'];
    $customer_pass=$row_cust['customer_pass'];
    $customer_city=$row_cust['customer_city'];
    $customer_dist=$row_cust['customer_dist'];
?>
      
<h3 style="font-weight: bold;text-align: center; color: grey; ">Update Account</h3>

<div class="" style="background:white; width: 70%;padding-left:15%;padding-right:15%;margin-left:15%;">
	<form action="" method="POST" enctype="multipart/form-data">

	<div class="form-group">
		<label style="padding-top: 20px;">Customer Name : </label>
		<input style="border: 2px solid #19BC15 ;" type="text" name="c_name" class="form-control" value="<?php echo $customer_name;  ?>" required="">
	</div>

	<div class="form-group">
		<label>Customer Email : </label>
		<input style="border: 2px solid #19BC15 ;" type="text" name="c_email" class="form-control" value="<?php echo $customer_email;  ?>" required="">
	</div>

	<div class="form-group">
		<label>Customer Password : </label>
		<input style="border: 2px solid #19BC15 ;" type="text" name="c_pass" class="form-control" value="<?php echo $customer_pass;  ?>" required="">
	</div>
	<br>

		<div class="form-group">
		<label style="font-weight: bold; text-decoration: underline;">Current Address</label> 
		<br>
		<br>
		<label>Current District : </label>
		<input style="border: 2px solid #19BC15 ;" type="text" name="c_address" class="form-control" value="<?php echo $customer_dist;  ?>" >
		<br>
		<label>Current city : </label>
		<input style="border: 2px solid #19BC15 ;" type="text" name="c_city" class="form-control" value="<?php echo $customer_city;  ?>" >	
	</div>

<br>
	
	<div class="text-center" style="padding-bottom:10px;">
		<button class=" login-btn-login-page" name="update" style="color:white; font-weight:bold; width:auto;">
			Update Now
		</button>
	</div>
	</form>
</div>

<?php
if(isset($_POST['update'])){

	$c_name=htmlspecialchars($_POST['c_name']);
	$c_email=htmlspecialchars($_POST['c_email']);
	$c_pass=htmlspecialchars($_POST['c_pass']);
	$c_city=htmlspecialchars($_POST['c_city']);
	$c_address=htmlspecialchars($_POST['c_address']);

	$update_customer= "UPDATE customers set customer_name='$c_name', customer_email='$c_email',customer_pass='$c_pass',temp_pass='####',customer_city='$c_city',customer_dist='$c_address' where customer_email='$customer_email'";

	$run_customer=mysqli_query($con,$update_customer);
	if($run_customer){
		echo "<script>alert('Your details updated.')</script>";
		echo "<script>window.open('logout.php','_self')</script>";
	}
}

?>
</div>	

<div class="col-md-12">
        <?php  
            include 'footer.php'; 
        ?>  

</div>

</body>
</html>



