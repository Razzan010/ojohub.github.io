<body style="background:#F4F4F4;">

    <?php
      session_start();
      include("includes/db.php");
      include 'functions.php'; 
    ?> 

<head>
<title>My Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Spectral:200,300,400,500,600,700,800&amp;display=swap">
    <meta name="msapplication-TileColor" content="#ffffff">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css"href="css/css-1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="OjOhub.com ist the Best place to list your new or second-hand product. It is free , simple and unlimited. This platform can be used as a Job-portal as well. Find your appropriate Job on Job Category.">
    <meta name="robots" content="">
    
 </head> 

    <div class="" style="padding:10px 10px;" >
        <a class="" href="index.php" style="float:left;">
            <img src="logos/logo-desktop.png" style="height: 60px;">
        </a>
      
        <img src="logos/flag.gif" style="height: 30px;">    
    </div>    

<?php 
if (isset($_GET['verification_key'])) {
	$verification_key=$_GET['verification_key'];

	$getun_verified="SELECT * from customers where verification_key='$verification_key' AND un_verified='Unverified'";
	$run_verify=mysqli_query($con,$getun_verified);
		$check_verify=mysqli_num_rows($run_verify);

		if ($check_verify>0) {
			echo "<center>		
			<div style='color:green; margin-top: 10%; font-size:25px;'>			
				Thank You for verifying your account.
			</div>
			<br>
			<p style='font-size:16px;font-weight:bold;'>Go Home</p>
				<a href='index.php' style='font-size:20px;font-weight:bold;'><button>www.ojohub.com</button></a>	
			</center>";
			   $update_verify= "UPDATE customers set un_verified='Verified' where verification_key='$verification_key'";
            $run_verify=mysqli_query($con,$update_verify);
		
		}else{
			echo "<center>
			<div style='color:red; margin-top: 10%; font-size:25px;'>
			You have already verified or this link has expired.
			<br>
			<div style='color:green;'>
			Contact us, 
			<br>
			if you could not verify your account.
			</div>
			<br>
			<p style='font-size:16px;font-weight:bold;color:blue;'>Go Home</p>
				<a href='index.php' style='font-size:20px;font-weight:bold;'><button>www.ojohub.com</button></a>
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
			<p style='font-size:16px;font-weight:bold;color:blue;'>Go Home</p>
				<a href='index.php' style='font-size:20px;font-weight:bold;'><button>www.ojohub.com</button></a>
			</div>	

			</center>";
			die("");
}
 ?>
 
    <br>
    <br>
 <br><br>
 <br>
  <br><br>
 
<div class="col-md-12">
    <?php  
        include 'footer.php'; 
    ?>  