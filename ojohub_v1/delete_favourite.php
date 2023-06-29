<?php

include("includes/db.php");


    $product_id=$_GET['product_id'];
    $customer_id=$_GET['customer_id'];

	$get_product_details="DELETE FROM favourite WHERE customer_id='$customer_id' && product_id='$product_id'";
	$data=mysqli_query($con,$get_product_details);
	if ($data) {
		echo "<font color='green'>Product with Product ID: "."$product_id"." is deleted. <br>";

		echo "Redirecting to Favourite in 3 Seconds.";
		?>

<META HTTP-EQUIV="Refresh" CONTENT="3; url=myfavourites.php"> 

		<?php
	}else {
		echo "<font color='red'>Delete process failed. <br>";
		echo "Redirecting to Favourite in 3 Seconds.";

	}

?>
<META HTTP-EQUIV="Refresh" CONTENT="2; url=myfavourites.php"> 
