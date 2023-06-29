<?php
session_start();
include("includes/db.php");
 ?> 
 <?php
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

<div class="mg-l-16 p-relative tran-02s home-search-wrap only-in-mob-md" style="padding-top: 10px; color: grey; font-weight: bold; text-align: center;">

</div>
</div>

<?php
    $customer_email=$_SESSION['customer_email'];
    $get_customer="select * from Customers where customer_email='$customer_email'";
    $run_cust=mysqli_query($con,$get_customer);
    $row_cust=mysqli_fetch_array($run_cust);
    
    $customer_email=$row_cust['customer_email'];
    $customer_id=$row_cust['customer_id'];
    $customer_name=$row_cust['customer_name'];
?>

<?php
    $customer_email=$_SESSION['customer_email'];
    $get_customer="select * from stores where customer_email='$customer_email'";
    $run_cust=mysqli_query($con,$get_customer);
    $row_cust=mysqli_fetch_array($run_cust);
    
    $shop_name=$row_cust['shop_name'];
    $shop_owner=$row_cust['shop_owner'];
    $shop_id=$row_cust['shop_id'];
?>

<div class="box-header">
	<center >
		<h4 class="text-muted only-in-mob-md" style="color: green; font-weight: bold;"></h4>
	</center>						
</div>

<div class="col-md-12">
	<div class="col-md-4">		
	</div>

<form action="upload_cover_image.php" method="post" enctype="multipart/form-data">

	<div class="col-md-4">
	<h3 style="text-align: center;font-weight: bold; padding-top: 10%;padding-bottom: 5%;">Upload Cover Image</h3>
							
							
	<P style="border: 1px solid; color: green; text-align: center;">
	<i class='fa fa-picture-o'></i> Required
	<input style="border: 2px solid #19BC15;" type="file" name="image1" class="form-control" placeholder="required" style="padding-left: 15px;" required="">
							</P>	
						
	<button  class="login-btn-login-page" name="submit" style="margin-left: 40%;font-weight: bold;color: white;">
			Upload               
	</button>
	</div>	

		</form>			
	</div>
</form>	

	<div class="col-md-4">		
	</div>
</div>

<?php

if (isset($_SESSION['customer_email'])) {
	$customer_email=$_SESSION['customer_email'];
if (isset($_POST['submit'])) {      

		$image1=$_FILES['image1']['name'];
		$image1_tmp=$_FILES['image1']['tmp_name'];

		    $sel_cart="select * from stores where customer_email='$customer_email'";
		    $run_customer=mysqli_query($con,$sel_cart);
		    $check_cart=mysqli_num_rows($run_customer);

		move_uploaded_file($image1_tmp, "cover_images/$image1");		 
		    
		    $insert_customer="update stores set cover_image='$image1' where customer_email='$customer_email'";

		    $run_customer=mysqli_query($con,$insert_customer);

 	 		}
 	 	}
 ?>



