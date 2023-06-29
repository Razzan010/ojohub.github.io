<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        
    }else{
        header('Location: http://www.store.ojohub.com/UpdateAccount');        
    }
?>

<?php
    session_start();
    include("includes/db.php");
    include("redirect_mobile.php");
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

<div style="background:white; ;">
        <h3 style='font-weight: bold;text-align: center; color: grey; padding-top:10px;'>Update Account</h3>
        
<div class="" style="background:white;margin-left:20px; margin-right:20px; >
    
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
		echo "<script>alert('Your details updated. Use updated details to login. Thank you !')</script>";
		echo "<script>window.open('logout.php','_self')</script>";
	}
}
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

<div style="height:100px;">
</div>  

        <?php
            include 'bottom_bar-mobile.php';         
        ?>

</body>














