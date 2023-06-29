<?php
include("includes/db.php");
 ?>

<?php 
if (isset($_GET['verification_key'])) {
	$verification_key=$_GET['verification_key'];

	$getun_verified="SELECT * from stores where verification_key='$verification_key' AND un_verified='Unverified'";
	$run_verify=mysqli_query($con,$getun_verified);
		$check_verify=mysqli_num_rows($run_verify);

		if ($check_verify>0) {
			echo "<center>		
			<div style='color:green; margin-top: 15%; font-size:25px;'>			
			Thank You for verifying your account.
			</div>		
			</center>";
			$update_verify= "UPDATE stores set un_verified='Verified' where verification_key='$verification_key'";
            $run_verify=mysqli_query($con,$update_verify);
		
		}else{
			echo "<center>
			<div style='color:red; margin-top: 15%; font-size:25px;'>
			You have already verified or this link has expired.
			<br>
			<div style='color:green;'>
			Contact us.
			<br>
			If you could not verify your account.
			</div>
			<p style='font-size:16px;font-weight:bold;'>Go Home</p>
				<a href='index.php' style='font-size:16px;font-weight:bold;'>www.ojohub.com</a>
			</div>
			</center>";
		}
}else {
	
	echo "<center>
			<div style='color:red; margin-top: 15%; font-size:25px;'>			
			Verification Error.
			<div style='color:green;'>
			Contact us.
			<br>
			If you could not verify your account.
			</div>
			<p style='font-size:16px;font-weight:bold;'>Go Home</p>
				<a href='index.php' style='font-size:16px;font-weight:bold;'>www.ojohub.com</a>
			</div>	

			</center>";
			die("");
}
 ?>