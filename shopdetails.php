<?php
include 'functions.php'; 
include("includes/db.php");
session_start();
 ?>


	<head>
		<title>Shop Details</title>
		<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=613f19daa5292d0019cb2a48&product=sticky-share-buttons" async="async"></script>
	</head>
<div class="sharethis-sticky-share-buttons"></div>


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



<table class="mainbody" width="1024" border="0" align="center" cellpadding="0" cellspacing="0">

    <td>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
<!--------------------------------------------->

  <!------------------------------------>
        <table>
        	<?php  
			if (isset($_GET['shop_id'])) {
			$shop_id=$_GET['shop_id'];
			$get_product="select * from stores where shop_id='$shop_id'";
			$run_products=mysqli_query($db,$get_product);
			$row_product=mysqli_fetch_array($run_products);


			$shop_id=$row_product['shop_id'];
			$customer_name=$row_product['customer_name'];
			$shop_name=$row_product['shop_name'];
							}
			?>	

		
        </table>

    <!------------------------------------>

        <table>
  				<?php  
					if (isset($_GET['shop_id'])) {
					$shop_id=$_GET['shop_id'];
					$get_product="select * from stores where shop_id='$shop_id'";
					$run_products=mysqli_query($db,$get_product);
					$row_product=mysqli_fetch_array($run_products);


						$shop_id=$row_product['shop_id'];
					}
				?>		

        </table>
 <!------------------------------------------------>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
					<?php  
					if (isset($_GET['shop_id'])) {
					$shop_id=$_GET['shop_id'];
					$get_product="select * from stores where shop_id='$shop_id'";
					$run_products=mysqli_query($db,$get_product);
					$row_product=mysqli_fetch_array($run_products);


						$shop_id=$row_product['shop_id'];
						$owner_image=$row_product['owner_image'];		
						$cover_image=$row_product['cover_image'];
																	
								}
					?>

		<div class="col-md-12 col-xs-12 col-sm-12">
		    

			<div class="" style="text-align: center;margin-left: 10%" >
			    			

						
				<div style="background-color: #CDB99C;background-repeat: no-repeat; min-height: 300px; max-width: 800px;background-size: cover; border-radius: 10px; background-image: url('cover_images/<?php echo $cover_image?>');">

				<span class="main" style="float: left; font-weight: bold; margin-top: 10px;margin-left: 10px;color:#1E1E1E;">Shop Id: <?php echo $shop_id; ?></span>				    

					<a href="#section2" class="main" id="section1" style="float: right; font-weight: bold; margin-top: 10px;">Get Shop Infos <i class='fa fa-info-circle' style="color: blue; margin-right: 10px;"></i>
			</a>
			

				<style>
					html {
					  scroll-behavior: smooth;
					}
				</style>

	<br>
			<div class="" style="padding-top: 200px; padding-right: 0%;">
									
				<?php  
					if (isset($_GET['shop_id'])) {
					$shop_id=$_GET['shop_id'];
					$get_product="select * from stores where shop_id='$shop_id'";
					$run_products=mysqli_query($db,$get_product);
					$row_product=mysqli_fetch_array($run_products);


						$shop_id=$row_product['shop_id'];
						$owner_image=$row_product['owner_image'];		
						$cover_image=$row_product['cover_image'];
						$shop_name=$row_product['shop_name'];

						$shop_street=$row_product['shop_street'];
						$shop_city=$row_product['shop_city'];
						$shop_district=$row_product['shop_district'];
						$shop_contact=$row_product['shop_contact'];
						$shop_email=$row_product['shop_email'];
						$website=$row_product['website'];
						$date_of_reg=$row_product['date_of_reg'];
						$un_verified=$row_product['un_verified'];
						$delivery=$row_product['delivery'];
						$pay_on_delivery=$row_product['pay_on_delivery'];
						$online_payment=$row_product['online_payment'];
						$desc=$row_product['items_services'];

																		
		echo "<img src='owner_images/$owner_image' class='img-responsive'
				style='	max-height: 100px;
				width: auto; 
				border-radius: 5% 0 6% 0;
				float:right;				
				overflow-x:hidden;
				border: 2px white solid'>";					
											}
						?>						
					</div>

				</div>
				

			<!--			<div class="mg-l-16 p-relative tran-02s home-search-wrap col-md-12" style="">
						<h4 class="col-md-4 col-xs-6 col-sm-6" style="font-weight: bold;color: grey;"> Shop Id: <?php echo $shop_id; ?></h4>
						
						<a href="#Behappy" style="" class="">
						<h4 class="col-md-4 update" style="font-weight: bold;color: grey; float: right;">  
								<?php
									echo date("Y/m/d")
								?>
							</h4>	
						</a>	
					</div>	 -->

			
			<span class="col-md-4 col-xs-4 col-sm-4" style="font-weight: bold;color: #1E1E1E;padding-top: 10px;">Shop : <?php echo $shop_name; ?></span>
			
			
			
			<span class="col-md-4 col-xs-4 col-sm-4" style="font-weight: bold;color: #1E1E1E;padding-top: 10px;">Owner : <?php echo $customer_name; ?></span>	
			

			</div>	
		</div>
   </table>
<!--------------------------------------------->


   <table width="100%" border="0" cellpadding="0" cellspacing="0">
			
				<div class="col-md-12 col-sm-12 col-xs-12" style="background-color: white;margin-top: 10px;margin-bottom: 10px; background-color: #19BC15; border: 2px solid #19BC15;">

				
						<div class="desktop-show" style="float: right;">
							<input type="search" placeholder="Search Products..." class="" style="padding: 6px 16px 7px 42px; ">
							<button class="btn btn-primary"><i class='fa fa-search' style='height:23px;font-size: 23px;'></i></button>
						</div>			

							<a href="" class="" >
							<button class="btn btn-default" style="margin-top: 2px; border-color: brown;float:left">All Article </button>
							</a>

						 
					
						<div class="mobile-show" style="float: right;">
							<input type="search" placeholder="Search..." class="home-input av-roman home-search" style="padding: 6px 16px 7px 42px;width: 150px; ">
							<button class="btn btn-primary"><i class='fa fa-search' style='height:23px;font-size: 23px;'></i></button>	
						</div>

					</div>

						<?php
						    getProducts_selectedstore();        
				     	?>			
  
			</div>	
   </table>

   <!--------------------------------------------->
   <table width="100%" border="0" cellpadding="0" cellspacing="0">
   	<div class="col-md-12 col-xs-12 col-sm-12 only-in-desk-md">
					<a href="#section1" class="main" id="section2" style="float: right;font-weight: bold;">Go to Top
  					</a>
				</div>

			<div class="desktop-how col-md-12 col-xs-12 col-sm-12">
				<div class="col-md-4 col-xs-12 col-sm-6" style="font-weight: bold;  color: #19BC15;background-color: #C0C0C0; min-height: 200px;">
					<h3 style="text-align: center;">Contact Details</h3> 
					<br>

					<div style="font-size: 15px; color: black;">
						<i class='fa fa-map-marker' style="color: white;">..</i>	     <?php echo $shop_street.", ".$shop_city.", ".$shop_district; ?> 
					<br>	

						<i class='fa fa-phone' style="color: white;">...</i>
						<?php echo $shop_contact; ?>
					<br>	
					
						<i class='fa fa-envelope' style="color: white;">....</i>
						<?php echo $shop_email; ?> 
					<br>						

						
						
					</div>	 
						
				</div>	

				<div class="col-md-4 col-xs-12 col-sm-6" style="font-weight: bold;  color: #A52A2A;font-size: 20px; margin-bottom: 10px; margin-top: 10px;background-color: #b0b0b0;min-height: 200px; text-align: center;padding-top: 40px;">
					

					<div style="font-size: 15px; color: black;">
						<i class='' style="color: white;">
						<?php echo $desc; ?>	</i>			
					</div>
											

					<div style=" text-align: center;padding-top: 10px;">
						<a href="https://<?php echo $website; ?>/" style="color: pink;">
							<?php echo $website; ?>
						</a>

					</div>

				</div>

				<div class="col-md-4 col-xs-12 col-sm-6" style="font-weight: bold;  color: #19BC15;background-color: #C0C0C0; min-height: 200px; text-align: center;">
					<h3>Payment and Infos</h3>

					<div style="font-size: 15px; color: black; padding-top: 10px;">
					<i class='' style="color: white;">Date of Reg. : </i>
						<?php echo $date_of_reg; ?>				
					</div>

					<div style="font-size: 15px; color: black;">
					<i class='' style="color: white;">Status : </i>
						<?php echo $un_verified; ?>				
					</div>	

					<div style="font-size: 15px; color: black;">
					<i class='' style="color: white;">Delivery Service : </i>
						<?php echo $delivery; ?>				
					</div>

					<div style="font-size: 15px; color: black;">
					<i class='' style="color: white;">Pay on Delivery : </i>
						<?php echo $pay_on_delivery; ?>				
					</div>

					<div style="font-size: 15px; color: black;">
					<i class='' style="color: white;">Online Payment : </i>
						<?php echo $online_payment; ?>				
					</div>					
					
				</div>				
			</div>

		

			<!--Sharing start----------->
<?php
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo "Share this Store";
?>

<br>

<?php
echo '<iframe src="https://www.facebook.com/plugins/share_button.php?href='.$actual_link.'&layout=button_count&size=large&mobile_iframe=true&width=83&height=28&appId" width="83" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>';
?>
   </table>



   </td>
</table>


<!------------------------------------------>
        </tr>      
        </table>
   </td>
</table>