<?php
    session_start();
    include("includes/db.php");
                  include 'topbar2_stores-mobile.php';         


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
    
    $image=$_GET['image'];
    
    
if($customer_id_login==$customer_id_product){
  
if($image==1 && $product_image1!==default_product.png){
	$get_product_details="UPDATE products set product_image1='default_product.png' where product_id='$product_id'";
	$data=mysqli_query($con,$get_product_details);
	unlink(product_images . "/" . $product_image1);
}

if($image==2 && $product_image2!==default_product.png){
	$get_product_details="UPDATE products set product_image2='default_product.png' where product_id='$product_id'";
	$data=mysqli_query($con,$get_product_details);
	unlink(product_images . "/" . $product_image2);
}

if($image==3 && $product_image3!==default_product.png){
	$get_product_details="UPDATE products set product_image3='default_product.png' where product_id='$product_id'";
	$data=mysqli_query($con,$get_product_details);
	unlink(product_images . "/" . $product_image3);
}
	
	if ($data) {
		echo "<font color='green'>Image from the list of Product Id "."$product_id"." is removed from the Database . <br>";

		echo "Redirecting to Product Updating Page in 3 Seconds.";
		?>

<META HTTP-EQUIV="Refresh" CONTENT="1; url=update_product-mobile.php?product_id=<?php echo $product_id ?>"> 

		<?php
	}else {
		echo "<font color='red'>Delete process failed. <br>";
		echo "Redirecting to your Store in 3 Seconds.";

	}
}

?>
<META HTTP-EQUIV="Refresh" CONTENT="1; url=update_product-mobile.php?product_id=<?php echo $product_id ?>"> 
