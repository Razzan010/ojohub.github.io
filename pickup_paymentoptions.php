<?php
session_start();
include("includes/db.php");
 ?> 
 <?php
        include 'functions.php'; 
?> 
<!------------------------------------------->

<table class="mainbody" width="90%" border="0" align="center" cellpadding="0" cellspacing="0">

    <td>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <?php
              include 'topbar2_stores.php';         
            ?> 
          </tr>      
        </table>


<!--------------------------------------------->


<div class="mg-l-16 p-relative tran-02s home-search-wrap only-in-desk-md" style="padding-top: 10px; color: white; font-weight: bold; text-align: center;">
		<h4 style="color: white; font-weight: bold;">Step 1</h4>


</div>
</div>







<?php  
	if (isset($_GET['product_id'])) {
	$product_id=$_GET['product_id'];
	$get_product="select * from products where product_id='$product_id'";
	$run_products=mysqli_query($db,$get_product);
	$row_product=mysqli_fetch_array($run_products);


		$product_id=$row_product['product_id'];
		$shop_id=$row_product['shop_id'];

		$product_id=$row_product['product_id'];
		$product_title=$row_product['product_title'];
		$product_image1=$row_product['product_image1'];

		$product_currentprice=$row_product['product_currentprice'];
		$product_priceafterdis=$row_product['product_priceafterdis'];
		$discount=$row_product['product_reducedamt'];

		$product_delivery=$row_product['product_delivery'];



	$get_shop="select * from stores where shop_id='$shop_id'";
	$run_shops=mysqli_query($db,$get_shop);
	$row_shop=mysqli_fetch_array($run_shops);


	$shop_name=$row_shop['shop_name'];	
	}
?>	









<?php  
    if (isset($_SESSION['customer_email'])) {
    	$customer_email=$_SESSION['customer_email'];

    $get_customer="select * from customers where customer_email='$customer_email'";
	$run_customer=mysqli_query($db,$get_customer);
	$row_customer=mysqli_fetch_array($run_customer);


	$customer_name=$row_customer['customer_name'];
		$customer_id=$row_customer['customer_id'];

}
?>	


<div class="col-md-12" style="text-align: center; ">
	<h3 style="color: black;">How do you want to Pay?</h3>

	<div class="col-md-1">		
	</div>





<div class="col-md-9" style="border: solid 5px #bdecd9;">
	<?php  
		echo " <a href='productdetails.php?product_id=$product_id' style='text-decoration:none;'>



	<div class='br-r-8 md-space  tran-008s p-relative m-b-20 col-md-3 col-xs-3 col-sm-3 only-in-mob-md ' style='background: #F8FDFB;margin-left: 1%; height: 250px; width:48%;margin-left:5%; margin-top:3%;border: solid 1px #bdecd9;>

		<div class='av-roman w-100 color-0d0 rg-box  m-t-10' style='background: #F8FDFB;'>	

		<i class='fa fa-chevron-circle-right' style=' font-weight:bold;color:#7C532C;margin-top:8px; 
	
 	display: inline-block;
    width: 100%;
    white-space: nowrap;
    min-height: 1.3em;
 	max-height: 1.3em;
    overflow: hidden;
    text-overflow: ellipsis;
 	'> $product_title </i>

		<img src='product_images/$product_image1' class='img-responsive'

									style='	max-height:180px;
											min-height:100px; 
											min-width: auto;
											max-height:auto; 
											margin-bottom: 5px; 		
											float:center;
											text-align:center;'>

		<div style= 'position: absolute;bottom: 0;right:10px;;left:10px;'>			
		
						<p style='float: right; font-weight: bold; font-size: 18px;'>Rs: $product_priceafterdis /- </p>	

		</div>
	</div>

	</a>

";
?>		

<table width="100%" height="50" style="margin-bottom: 1%;">


	<h4 style="font-weight: bold;color: green;"><?php echo $shop_name; ?></h4> 
	<br>
	
<?php 
	echo "<a href='eSewa_checkout_pickup.php?product_id=$product_id '>
  <button class='btn btn-primary' style=''>eSewa Transfer</button>
  </a>"
  ?>
    <br>

<?php 
echo "<a href='pay_on_pickup.php?product_id=$product_id '>
  <button class='btn btn-primary' style='margin-top:15px;'>Pay on Pickup</button>
  </a>"
  ?>


<?php
		if (isset($_SESSION['customer_email'])) {
			$customer_email=$_SESSION['customer_email'];	
		}else{
			echo "<script> alert('Please login to complete your order.') </script>";
			echo "<script>window.open('checkout.php?product_id=$product_id','_self')</script>";
		}
?>






