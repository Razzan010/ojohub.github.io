
<?php
    include("includes/db.php");
    
    $record_per_page = 32;
    
    $page = '';
            if(isset($_GET["page"]))
            {
             $page = $_GET["page"];
            }
            else
            {
             $page = 1;
            }
        $start_from = ($page-1)*$record_per_page;
        $get_product = "SELECT * FROM products order by product_id DESC LIMIT $start_from, $record_per_page";
       
        $run_products = mysqli_query($con, $query);
?>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
<?php
    $run_products=mysqli_query($con,$get_product);
	while ($row_product=mysqli_fetch_array($run_products)) {

		$shop_id=$row_product['shop_id'];
		$product_title=$row_product['product_title'];
		$product_id=$row_product['product_id'];
		$product_image1=$row_product['product_image1'];
		$location_dist=$row_product['location_dist'];

		$product_price=$row_product['product_price'];
		$product_priceafterdis=$row_product['product_priceafterdis'];

echo " 
<a href='ProductDetailed?product_id=$product_id'>
	<div class=' a' style='float:left;width:150px;height:200px;background:#e2f7f9;'>
	
	     <div class=' ' style='width:100%;height:150px;background:white;'>	
		<style type='text/css'>
			.a{
			min-height: 23%; 
			margin-top:1%;
			margin-left:2%;
			min-width:23%;
			border: 1px solid #E0E0E0;
			box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2);
			
			border-radius:5px 5px 0px 0px;
			background-image: linear-gradient(90deg, #a9cbc2 0%, #9FACE6 100%);

			}
			.a:hover{
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}					
		</style> 
				<img src='product_images/$product_image1' class='img-responsive'

			style='	
              width: 100%;
              height: 150px;
              object-fit: cover;
              object-position: 50% 50%;
			     '>
	    </div>
            <div style='
              margin-top:5px;
              margin-left:10px;
              color:black;
              font-size:13px;
              font-weight:bold;
              font-family:Arial, serif;
              text-overflow: ellipsis;
              overflow: hidden; 
              width: 160px; 
              height: 1.2em; 
              white-space: nowrap;
            '>
            	 $product_title
            </div>	
           <div style='margin-top:5px;margin-left:10px;color:black;font-size:12px;font-family:Arial, serif;'>
                <div>$location_dist <span style='float:right;font-weight:bold;margin-right:5px;color:#6b6b6b;';>Rs: $product_price</span></div>
                
            </div>	
    </div>
</a>";

     }
?>

    
    
