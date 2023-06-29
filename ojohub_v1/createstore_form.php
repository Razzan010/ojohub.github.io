<?php
session_start();
include("includes/db.php");
 ?> 
 <?php
        include 'functions.php'; 
?> 

<!--------------------------------------------------------->

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
<!--------------------------------------------->


<?php

$customer_email=$_SESSION['customer_email'];
$get_customer="select * from Customers where customer_email='$customer_email'";
$run_cust=mysqli_query($con,$get_customer);
$row_cust=mysqli_fetch_array($run_cust);

$customer_email=$row_cust['customer_email'];
$customer_id=$row_cust['customer_id'];
$customer_name=$row_cust['customer_name'];
?>


<!--------------------------------------------->


<div class="col-md-12">
	  <div class="col-md-1">  
	  </div>

<!--Latest storesxxx-->
		<div class="col-md-10"> 

					<div class="box-header"><!--box-header start-->
						<center>
							<h2 style="color:#19BC15; text-decoration:underline;">Create your own Store and Promote your Bussiness here.</h2>
							<h3></h3>
							

							 <h4 class="text-muted" style="color: green;"> Only the real store, shop or bussiness owner are recommended to create Store.</h4>
							 <h4 class="text-muted" style="color: green;"> Please Provide only the Correct Informations.</h4>
						</center>						
					</div><!--box-header end-->
					<br>


		<div class="col-md-6"> 
					<form action="createstore_form.php" method="post" enctype="multipart/form-data">

						<div class="form-group">
							<i class='fa fa-envelope'></i>
							<label>Registered Email</label>					
							<input style="border: 2px solid #19BC15 ;" type="text" name="reg_email" class="form-control" required="" value="<?php echo $customer_email;  ?>"  >
												
						</div>

						<div class="form-group">
							<i class='fa fa-shopping-bag'></i>
							<label>Shop/Company (optional)</label>
							<input style="border: 2px solid #19BC15 ;" type="text" name="shop_name" class="form-control" placeholder="eg. Ojohub Pvt. Ltd." required="">			
						</div>
						<div class="form-group">
							<i class='fa fa-user'></i>
							<label>Owner</label>
							<input style="border: 2px solid #19BC15 ;" type="text" name="owner_name" class="form-control" required="" >			
						</div>
						<div class="form-group">
							<i class='fa fa-map-marker'></i>
							<label>Address</label>
							<h5>District</h5>
							<input style="border: 2px solid #19BC15 ;" type="text" name="shop_district" maxlength="20" class="form-control" required="">	
					
							<h5>City</h5>
							<input style="border: 2px solid #19BC15 ;" type="text" name="shop_city" maxlength="25" class="form-control" required="">			
					
							<h5>Street/ZIP</h5>
							<input style="border: 2px solid #19BC15 ;" type="text" name="shop_street" maxlength="30" class="form-control" required="">		
						</div>

						<div class="form-group">
							<i class='fa fa-globe'></i>
							<label>Website (optional)</label>
							<input style="border: 2px solid #19BC15 ;" type="text" name="website" class="form-control" placeholder="www.">							
						</div>
						
											

					
				
		</div>

		<div class="col-md-6">
						
						<div class="form-group" >
							<i class='fa fa-envelope'></i>
							<label>Business Email (editable)</label>
							<input style="border: 2px solid #19BC15 ;" type="text" name="shop_email" class="form-control" required="" value="<?php echo $customer_email;  ?>">
							
						</div>
						
						
						<div class="form-group">
							<i class='fa fa-phone-square'></i>
							<label>Contact Number</label>
							<input style="border: 2px solid #19BC15 ;" type="number" name="shop_contact" class="form-control" required="">						
						</div>

						<div class="form-group">
							<i class='fa fa-home'></i>
							<label>Shop Description incl. Items/Services provided</label>
							<textarea type="text" name="items_services" class="form-control" style="resize: none;height: 15%; border: 2px solid #19BC15 ;" required="" >	
							</textarea>	
						</div>

						<br>

						<div>						
							
							<label style="color: brown;">
							<i class='fa fa-truck'></i>
							We have Delivery services for this product.
							<input  type="checkbox" name="delivery" value="Yes" style="margin-left: 47px;">
							</label>
						
						<?php 
							 if(isset($_POST['delivery'])){
							  $delivery="Yes";      
							 }else{
							   $delivery="No";      
							  }
					    ?> 
				</div>

					
<div class="form-group">

					<div>									
							<label>
							<i class='fa fa-dot-circle-o'></i>					
							Possible Payment System for the Product.
							</label>

							<br>

							<i class='fa fa-credit-card'></i>
							Online Payment<input type="checkbox" name="online_payment" value="Yes" style="margin-left: 80px;">
							<br>

							<i class='fa fa-money'></i>					
							Pay on Delivery<input  type="checkbox" name="pay_on_delivery" value="Yes" style="margin-left: 82px;">
							
						
						<?php 
							 if(isset($_POST['online_payment'])){
							  $online_payment="Yes";      
							 }else{
							   $online_payment="No";      
							  }
					    ?> 
						<?php 
							 if(isset($_POST['pay_on_delivery'])){
							  $pay_on_delivery="Yes";      
							 }else{
							   $pay_on_delivery="No";      
							  }
					    ?> 					    
				</div>


					<br>
						
						<div class="form-group">
							<i class='fa fa-picture-o'></i>
							<label>Profile Picture (optional)</label>
							<input style="border: 2px solid #19BC15 ;" type="file" name="owner_image" class="form-control">	
						</div>

						
			
		</div>
		<div class="text-center">
		<button type="submit" name="submit" class="login-btn-login-page" style="width: 160px; height: 30px; font-weight: bold; font-size: 15px; color:white;">
		Create Store								
		</button>							
		</div>	


		</form>			
			<br>		
		<style type="text/css">
			.form-group{
				color: brown;			
			}
			.form-control{
				color: green;
			}			
		</style>

		</div>			
				

		 <div class="col-md-1">  
		  </div>

     </div>


	    </tr>      
        </table>
<?php
if (isset($_POST['submit'])) {
    $c_email=$_POST['reg_email'];
    $shop_name=$_POST['shop_name'];
    $owner_name=$_POST['owner_name'];
    $shop_district=$_POST['shop_district'];
    $shop_city=$_POST['shop_city'];
    $shop_street=$_POST['shop_street'];
    $website=$_POST['website'];
    $shop_email=$_POST['shop_email'];
    $shop_contact=$_POST['shop_contact'];
    $items_services=$_POST['items_services'];
    $delivery=$_POST['delivery'];
    $pay_on_delivery=$_POST['pay_on_delivery'];
    $online_payment=$_POST['online_payment']; 

    	$owner_image=$_FILES['owner_image']['name'];
		$owner_tmp_image=$_FILES['owner_image']['tmp_name'];   

     $date = date("Y.m.d");


     //Generate verification key
    $verification_key=md5(time().$shop_name);


    //Email sending starts


    	$to=$shop_email;
        $subject="Ojohub - Please Verify your Shop";
        $message=" Thank you for creating a Shop with us.
            <br> 
            <br>
            Click to confirm your Email address. <a href='http://localhost/verify_shop.php?verification_key=$verification_key'>Verify account Now.</a> 
            <br> 
            <br>
            Sincerely,
            <br>
            The OjOhub Team.
            <br>
            <br>

        You’re receiving this email because you recently created a new Ojohub account. 
        <br>
        If this wasn’t you, please ignore this email.";
        $headers="From: ojohub20@gmail.com \r\n";
        $headers .="MIME-Version: 1.0" . "\r\n";
        $headers .="Content-type:text/html;charset=UTF-8"."\r\n";

        mail($to, $subject, $message,$headers);


    move_uploaded_file($owner_tmp_image, "customer_images/$owner_image");

 
   $insert_customer="insert into stores (customer_id,customer_email,customer_name,shop_name,shop_owner,shop_district,shop_city,shop_street,website,shop_email,date_of_reg,verification_key,un_verified,shop_contact,items_services,delivery,pay_on_delivery,online_payment,owner_image,cover_image) values('$customer_id','$customer_email','$customer_name','$shop_name','$owner_name','$shop_district','$shop_city','$shop_street','$website','$shop_email','$date','$verification_key','unverified','$shop_contact','$items_services','$delivery','$pay_on_delivery','$online_payment','default_pp.jfif','default_cover.png')";
    $run_customer=mysqli_query($con,$insert_customer);    

    echo "<script>window.open('signup_success.php','_self')</script>";
         }




?>



			