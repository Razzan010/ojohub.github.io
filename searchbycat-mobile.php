<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        
    }else{
        header('Location: http://www.store.ojohub.com/SearchByCategory');        
    }
?>

<style>
    html, body {
        max-width: 100%;
        overflow-x: hidden;
    }
</style>

          <?php
              include 'topbar2_stores-mobile.php';         
            ?> 

<body style="background:#F4F4F4;">

    
<?php
    if (isset($_SESSION['customer_email'])) {
	$customer_email=$_SESSION['customer_email'];
    }
?>

<body style="background:;">

<div class="box-header">
		<h4 class="text-muted " style="color: green; font-weight: bold;padding-top:10px;padding-left:10px;"> Products Search by Category</h4>
</div>

<div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
</div>


<?php

if (isset($_GET['category_id'])){
	$category_id=$_GET['category_id'];
	$get_product="select * from products where category_id='$category_id'";
	$run_products=mysqli_query($db,$get_product);
        
    	while ($row_product=mysqli_fetch_array($run_products)) {
	    
		$shop_id=$row_product['shop_id'];
		$product_title=$row_product['product_title'];
		$product_id=$row_product['product_id'];
		$product_image1=$row_product['product_image1'];
		$location_dist=$row_product['location_dist'];
		$post_date=$row_product['post_date'];

		$product_desc=$row_product['product_desc'];
		$product_price=$row_product['product_price'];
		$price_type=$row_product['price_type'];
		$product_price=$row_product['product_price'];		
		
		$product_selling=$row_product['product_selling'];
	
	echo "
	<a href = 'ProductDetailed-m?product_id=$product_id'>
    <table class='table'>
	<tr>
	<td>
	<div class=' div1'>
	     <div class='div2'>	
			<img src='product_images/$product_image1' class='img-responsive image-size'>
	    </div>

	    <p class='price'>Rs : $product_price</p>
	
    </div>
</td>

<style>  
        .table{
   
            background-color:white;
            margin-bottom:10px;
        }
        
		.div1{
			min-height: 23%; 
			margin-top:1%;
			min-width:23%;
			box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2);
			border-radius:5px 5px 0px 0px;
			background-image: linear-gradient(90deg, #a9cbc2 0%, #9FACE6 100%);
			float:left;
			width:120px;
			height:150px;
			background:white;
			} 
			
    @media all and (max-width: 320px) {
        .div1{
			min-height: 23%; 
			margin-top:1%;
			min-width:23%;
			box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2);
			border-radius:5px 5px 0px 0px;
			background-image: linear-gradient(90deg, #a9cbc2 0%, #9FACE6 100%);
			float:left;
			width:95px;
			height:120px;
			background:white;
        }
    }			
			
		.div2{
            width:100%;
            height:125px;
            background:white;
			} 
			
    @media all and (max-width: 320px) {
        .div2{
            width:100%;
            height:100px;
            background:white;
        }
    }
    
    
		.div3{
          
           
			} 
			
    @media all and (max-width: 320px) {
        .div3{
           
      
        }
    }
    
        .product-title{
                font-weight:bold;
                font-size:20px; 
				 display: inline-block;
			    width: 100%;
			    white-space: nowrap;
			    min-height: 2em;
				max-height: 2em;
			    overflow: hidden;
			    text-overflow: ellipsis;			    
			    color:#1aa515;
	           
        }   
        
    @media all and (max-width: 320px) {
        .product-title{
                font-weight:bold;
                font-size:16px; 
				 display: inline-block;
			    width: 100%;
			    white-space: nowrap;
			    min-height: 2em;
				max-height: 2em;
			    overflow: hidden;
			    text-overflow: ellipsis;			    
			    color:#1aa515;
		
        }
    }     
    
        .product-desc{
	                background-color:white;
					color:brown;         
					line-height: 1.3em;
					min-height: 1.8em;
		 			max-height: 2.6em; 
					overflow: hidden;
		 			text-overflow: ellipsis;
		 			font-size:14px;            
        }
        
    @media all and (max-width: 320px) {
        .product-desc{
	                background-color:white;
					color:brown;         
					line-height: 1.3em;
					min-height: 2.8em;
		 			max-height: 2.8em; 
					overflow: hidden;
		 			text-overflow: ellipsis;
		 			font-size:14px;  
		
        }
    }   
    
        .sold{
	               padding-top:5px;	
        }
        
    @media all and (max-width: 320px) {
        .sold{
	               font-size:14px;
	               padding-top:5px;
		
        }
    } 
    
        .edit{
	               padding-top:5px;	
           
        }
        
    @media all and (max-width: 320px) {
        .edit{
	               font-size:14px;
	               padding-top:5px;		
        }
    }     
    
        .location-dist{
                font-size:15px;
                padding-right:10px; 
                color:grey;
                float:left;
        }   
        
    @media all and (max-width: 320px) {
        .location-dist{
                font-size:13px;
                padding-right:10px; 
                color:grey;
                float:left; 
        }
    }     
    
        .post-date{
            font-size:15px;
            padding-right:10px; 
            color:grey;
            float:right;
        }
        
    @media all and (max-width: 320px) {
        .post-date{
                font-size:13px;
                padding-right:10px; 
                color:grey;
                float:right; 
        }
    }          
			
        .image-size{
              width: 100%;
              height:130px;
              object-fit: cover;
              object-position: 50% 50%;
        }

    @media all and (max-width: 320px) {
        .image-size{
              width: 90%;
              height:100px;
              object-fit: cover;
              object-position: 50% 50%;
        }
    }
    
        .price{
                text-align: center;
                color:green; 
                font-weight:bold;
                font-size:15px;
                padding-top:5px;            
        }

    @media all and (max-width: 320px) {
        .price{
                text-align: center;
                color:green; 
                font-weight:bold;
                font-size:13px;
                padding-top:0px;  
        }
    }
</style>



<td style=''>  

<div class='div3'>
					<div>					
						<span class='location-dist'>
							<i class='fa fa-map-marker' >
							</i>
								$location_dist
						</span>
					
						<span class='post-date'>
	                       <i class='fa fa-calendar-o ' >	</i>	
	                        $post_date
	                    </span>	
					</div>
					
			<span class='product-title' > $product_title </span>					
					
	<div class='product-desc'>
					$product_desc
	</div>
						<span style='size:30px;color:#5fcaed;padding-right:10px;float:left;font-weight:bold;'>
	                        $product_selling
	                    </span>	
						<span style='size:30px;color:#5fcaed;padding-right:10px;float:right;font-weight:bold;'>
	                        $price_type
	                    </span>	
	
</td>	
</tr>
</table>
</div>	
</a>
";
}

}else{
       echo "<div >
        		<h4 style='color: green; font-weight: bold;text-decoration:;padding-left:20%;'> No Articles Found.</h4>
            </div>";	    
}

?>

<div style="height:75px;">
</div>

          <?php
              include 'bottom_bar-mobile.php';         
            ?>

</body>


		