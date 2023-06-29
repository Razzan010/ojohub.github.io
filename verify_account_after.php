<body style="background:#F4F4F4;">

    <?php
      session_start();
      include("includes/db.php");
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
        

</div>  

<?php 
if (isset($_GET['verification_key'])) {
	//Process verification
	$verification_key=$_GET['verification_key'];

	$getun_verified="SELECT * from customers where verification_key='$verification_key' AND un_verified='Unverified'";
	$run_verify=mysqli_query($con,$getun_verified);
		$check_verify=mysqli_num_rows($run_verify);

		if ($check_verify>0) {
			echo "<center>		
			<div style='color:green; margin-top: 15%; font-size:25px;'>			
			Thank You for verifying your account.
			</div>
			<p style='font-size:16px;font-weight:bold;'>Go Home</p>
				<a href='index.php' style='font-size:16px;font-weight:bold;'>www.ojohub.com</a>		
			</center>";
			   $update_verify= "UPDATE customers set un_verified='Verified' where verification_key='$verification_key'";
            $run_verify=mysqli_query($con,$update_verify);
		
		}else{
			echo "<center>
			<div style='color:red; margin-top: 10%; font-size:25px;'>
			You have already verified or this link has expired.
			<br>
			<div style='color:green;'>
			Contact us.
			<br>
			If you could not verify your account.
			</div>
			<p style='font-size:16px;font-weight:bold;'>Go Home</p>
			
				<a href='index.php' style='font-size:20px;font-weight:bold;'>www.ojohub.com</a>
			</div>
			</center>";
		}
}else {
	
	echo "<center>
			<div style='color:red; margin-top: 10%; font-size:25px;'>			
			Verification Error.
			<div style='color:green;'>
			Contact us, 
			<br>
			if you could not verify your account.
			</div>
			<br>
			<p style='font-size:16px;font-weight:bold;'>Go Home</p>
			
				<a href='index.php' style='font-size:20px;font-weight:bold;'>www.ojohub.com</a>
			</div>	

			</center>";
		
}
 ?>
 
<br>
<br>
<br>
<br>
<br>
<div class="col-md-12">
<?php  
                    include 'footer.php'; 
                 ?>  
