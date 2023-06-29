<?php

include("includes/db.php");


    $customer_email=$_GET['customer_email'];
    $customer_id_followed=$_GET['customer_id_followed'];

	$get_product_details="DELETE FROM follow WHERE customer_email='$customer_email' && customer_id_followed='$customer_id_followed'";
	$data=mysqli_query($con,$get_product_details);
	if ($data) {
		echo "<font color='green'>Seller with Seller ID: "."$customer_id_followed"." is removed from Following list. <br>";

		echo "Redirecting to Favourite in 3 Seconds.";
		?>

<META HTTP-EQUIV="Refresh" CONTENT="3; url=stores_followed.php"> 

		<?php
	}else {
		echo "<font color='red'>Delete process failed. <br>";
		echo "Redirecting to Favourite in 3 Seconds.";

	}

?>
<META HTTP-EQUIV="Refresh" CONTENT="2; url=stores_followed.php"> 
