<?php
    session_start();
    include("includes/db.php");
                  include 'topbar2_stores.php';         


if (isset($_SESSION['customer_email'])) { 
    $customer_email=$_SESSION['customer_email'];
        $get_customer_id_login="select * from customers where customer_email='$customer_email'";
        $run_customer_id_login=mysqli_query($con,$get_customer_id_login);
        $row_customer_id_login=mysqli_fetch_array($run_customer_id_login);	
    	$customer_id_login=$row_customer_id_login['customer_id'];
}

	$product_id=$_GET['product_id'];
    $get_product="select * from products where product_id='$product_id'";
    $run_product=mysqli_query($con,$get_product);	
	$row_product=mysqli_fetch_array($run_product);
	$customer_id_product = $row_product['customer_id'];
		
    $product_image1=$row_product['product_image1'];
    $product_image2=$row_product['product_image2'];
    $product_image3=$row_product['product_image3'];
    
 
if($customer_id_login==$customer_id_product){
	$get_product_details="DELETE FROM products WHERE product_id='$product_id'";
	$data=mysqli_query($con,$get_product_details);

	if(($product_image1=='default_product.png') && ($product_image2=='default_product.png') && ($product_image3=='default_product.png')){
	   
	}
	

	if(($product_image1!=='default_product.png') && ($product_image2=='default_product.png') && ($product_image3=='default_product.png')){
	    	unlink(product_images . "/" . $product_image1);	   
	}
	if(($product_image1=='default_product.png') && (!$product_image2=='default_product.png') && ($product_image3=='default_product.png')){
	    	unlink(product_images . "/" . $product_image2);	   
	}
	if(($product_image1=='default_product.png') && ($product_image2=='default_product.png') && ($product_image3!=='default_product.png')){
	    	unlink(product_images . "/" . $product_image3);	   
	}
	
	
	if(($product_image1!=='default_product.png') && ($product_image2!=='default_product.png') && ($product_image3=='default_product.png')){
	    	unlink(product_images . "/" . $product_image1);	
	    	unlink(product_images . "/" . $product_image2);		    	
	}
	if(($product_image1!=='default_product.png') && ($product_image2=='default_product.png') && ($product_image3!=='default_product.png')){
	    	unlink(product_images . "/" . $product_image1);	 
	    	unlink(product_images . "/" . $product_image3);		    	
	}
	if(($product_image1=='default_product.png') && ($product_image2!=='default_product.png') && ($product_image3!=='default_product.png')){
	    	unlink(product_images . "/" . $product_image2);	
	    	unlink(product_images . "/" . $product_image3);		    	
	}
	
	
	if(($product_image1!=='default_product.png') && ($product_image2!=='default_product.png') && ($product_image3!=='default_product.png')){
	    	unlink(product_images . "/" . $product_image1);	    
	    	unlink(product_images . "/" . $product_image2);	
	    	unlink(product_images . "/" . $product_image3);		    	
	}	

	
	if ($data) {
		echo "<font color='green'>Product you selected is successfully deleted. <br>";

		echo "Redirecting to your Store in 3 Seconds.";
		?>

<META HTTP-EQUIV="Refresh" CONTENT="3; url=mystore.php"> 

		<?php
	}else {
		echo "<font color='red'>Delete process failed. <br>";
		echo "Redirecting to your Store in 3 Seconds.";

	}
}
?>

<META HTTP-EQUIV="Refresh" CONTENT="3; url=mystore.php"> 
