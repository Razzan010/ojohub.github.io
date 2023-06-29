<?php
$db=mysqli_connect("localhost:3306","ojohubco_store-users","Me@fastcomet2021store","ojohubco_store");


function getSub_Categories1(){
	global $db;
    $_GET['category_page'];
	$category_page=$_GET['category_page'];
	if ($category_page==1) {
	$get_product="select * from category where cat_id='1' && sub_cat_id='1' && active='0'"; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
        	echo "
            <div style='margin-left:10px;'>
                  <a href='SearchByCategory?category_id=	$category_id'>
                    $sub_category
                  </a>
                    <br>
            </div>	";
        }
	}else{
	$get_product="select * from category where cat_id='1' && sub_cat_id='1' && active='0'LIMIT 0,3 "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
    	echo "
        <div style='margin-left:10px;'>
              <a href='SearchByCategory?category_id=	$category_id'>
                $sub_category
              </a>
                <br>
    </div>	";
    	}
    echo " <a href='Categories?category_page=1'>More...</a>";
	}
}


function getSub_Categories2(){
	global $db;
    $_GET['category_page'];
	$category_page=$_GET['category_page'];
	if ($category_page==1) {
	$get_product="select * from category where cat_id='2' && sub_cat_id='2' && active='0'"; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
        	echo "
            <div style='margin-left:10px;'>
                  <a href='SearchByCategory?category_id=	$category_id'>
                    $sub_category
                  </a>
                    <br>
            </div>	";
        }
	}else{
	$get_product="select * from category where cat_id='2' && sub_cat_id='2' && active='0' LIMIT 0,3 "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
    	echo "
        <div style='margin-left:10px;'>
              <a href='SearchByCategory?category_id=	$category_id'>
                $sub_category
              </a>
                <br>
    </div>	";
    	}
    echo " <a href='Categories?category_page=1'>More...</a>";
	}
}


function getSub_Categories3(){
	global $db;
    $_GET['category_page'];
	$category_page=$_GET['category_page'];
	if ($category_page==1) {
	$get_product="select * from category where cat_id='3' && sub_cat_id='3'  && active='0' "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
        	echo "
            <div style='margin-left:10px;'>
                  <a href='SearchByCategory?category_id=	$category_id'>
                    $sub_category
                  </a>
                    <br>
            </div>	";
        }
	}else{
	$get_product="select * from category where cat_id='3' && sub_cat_id='3' && active='0'  LIMIT 0,3 "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
    	echo "
        <div style='margin-left:10px;'>
              <a href='SearchByCategory?category_id=	$category_id'>
                $sub_category
              </a>
                <br>
    </div>	";
    	}
    echo " <a href='Categories?category_page=1'>More...</a>";
	}
}


function getSub_Categories4(){
	global $db;
    $_GET['category_page'];
	$category_page=$_GET['category_page'];
	if ($category_page==1) {
	$get_product="select * from category where cat_id='4' && sub_cat_id='4' && active='0'"; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
        	echo "
            <div style='margin-left:10px;'>
                  <a href='SearchByCategory?category_id=	$category_id'>
                    $sub_category
                  </a>
                    <br>
            </div>	";
        }
	}else{
	$get_product="select * from category where cat_id='4' && sub_cat_id='4' && active='0' LIMIT 0,3 "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
    	echo "
        <div style='margin-left:10px;'>
              <a href='SearchByCategory?category_id=	$category_id'>
                $sub_category
              </a>
                <br>
    </div>	";
    	}
    echo " <a href='Categories?category_page=1'>More...</a>";
	}
}


function getSub_Categories5(){
	global $db;
    $_GET['category_page'];
	$category_page=$_GET['category_page'];
	if ($category_page==1) {
	$get_product="select * from category where cat_id='5' && sub_cat_id='5'  && active='0' "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
        	echo "
            <div style='margin-left:10px;'>
                  <a href='SearchByCategory?category_id=	$category_id'>
                    $sub_category
                  </a>
                    <br>
            </div>	";
        }
	}else{
	$get_product="select * from category where cat_id='5' && sub_cat_id='5' && active='0'  LIMIT 0,3 "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
    	echo "
        <div style='margin-left:10px;'>
              <a href='SearchByCategory?category_id=	$category_id'>
                $sub_category
              </a>
                <br>
    </div>	";
    	}
    echo " <a href='Categories?category_page=1'>More...</a>";
	}
}


function getSub_Categories6(){
	global $db;
    $_GET['category_page'];
	$category_page=$_GET['category_page'];
	if ($category_page==1) {
	$get_product="select * from category where cat_id='6' && sub_cat_id='6' && active='0' "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
        	echo "
            <div style='margin-left:10px;'>
                  <a href='SearchByCategory?category_id=	$category_id'>
                    $sub_category
                  </a>
                    <br>
            </div>	";
        }
	}else{
	$get_product="select * from category where cat_id='6' && sub_cat_id='6' && active='0'  LIMIT 0,3 "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
    	echo "
        <div style='margin-left:10px;'>
              <a href='SearchByCategory?category_id=	$category_id'>
                $sub_category
              </a>
                <br>
    </div>	";
    	}
    echo " <a href='Categories?category_page=1'>More...</a>";
	}
}



function getSub_Categories7(){
	global $db;
    $_GET['category_page'];
	$category_page=$_GET['category_page'];
	if ($category_page==1) {
	$get_product="select * from category where cat_id='7' && sub_cat_id='7'  && active='0' "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
        	echo "
            <div style='margin-left:10px;'>
                  <a href='SearchByCategory?category_id=	$category_id'>
                    $sub_category
                  </a>
                    <br>
            </div>	";
        }
	}else{
	$get_product="select * from category where cat_id='7' && sub_cat_id='7' && active='0'  LIMIT 0,3 "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
    	echo "
        <div style='margin-left:10px;'>
              <a href='SearchByCategory?category_id=	$category_id'>
                $sub_category
              </a>
                <br>
    </div>	";
    	}
    echo " <a href='Categories?category_page=1'>More...</a>";
	}
}



function getSub_Categories8(){
	global $db;
    $_GET['category_page'];
	$category_page=$_GET['category_page'];
	if ($category_page==1) {
	$get_product="select * from category where cat_id='8' && sub_cat_id='8'  && active='0' "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
        	echo "
            <div style='margin-left:10px;'>
                  <a href='SearchByCategory?category_id=	$category_id'>
                    $sub_category
                  </a>
                    <br>
            </div>	";
        }
	}else{
	$get_product="select * from category where cat_id='8' && sub_cat_id='8' && active='0'  LIMIT 0,3 "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
    	echo "
        <div style='margin-left:10px;'>
              <a href='SearchByCategory?category_id=	$category_id'>
                $sub_category
              </a>
                <br>
    </div>	";
    	}
    echo " <a href='Categories?category_page=1'>More...</a>";
	}
}


function getSub_Categories9(){
	global $db;
    $_GET['category_page'];
	$category_page=$_GET['category_page'];
	if ($category_page==1) {
	$get_product="select * from category where cat_id='9' && sub_cat_id='9' && active='0'  "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
        	echo "
            <div style='margin-left:10px;'>
                  <a href='SearchByCategory?category_id=	$category_id'>
                    $sub_category
                  </a>
                    <br>
            </div>	";
        }
	}else{
	$get_product="select * from category where cat_id='9' && sub_cat_id='9' && active='0'  LIMIT 0,3 "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
    	echo "
        <div style='margin-left:10px;'>
              <a href='SearchByCategory?category_id=	$category_id'>
                $sub_category
              </a>
                <br>
    </div>	";
    	}
    echo " <a href='Categories?category_page=1'>More...</a>";
	}
}


function getSub_Categories10(){
	global $db;
    $_GET['category_page'];
	$category_page=$_GET['category_page'];
	if ($category_page==1) {
	$get_product="select * from category where cat_id='10' && sub_cat_id='10' && active='0' "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
        	echo "
            <div style='margin-left:10px;'>
                  <a href='SearchByCategory?category_id=	$category_id'>
                    $sub_category
                  </a>
                    <br>
            </div>	";
        }
	}else{
	$get_product="select * from category where cat_id='10' && sub_cat_id='10' && active='0'  LIMIT 0,3 "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
    	echo "
        <div style='margin-left:10px;'>
              <a href='SearchByCategory?category_id=	$category_id'>
                $sub_category
              </a>
                <br>
    </div>	";
    	}
    echo " <a href='Categories?category_page=1'>More...</a>";
	}
}


function getSub_Categories11(){
	global $db;
    $_GET['category_page'];
	$category_page=$_GET['category_page'];
	if ($category_page==1) {
	$get_product="select * from category where cat_id='11' && sub_cat_id='11'  && active='0' "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
        	echo "
            <div style='margin-left:10px;'>
                  <a href='SearchByCategory?category_id=	$category_id'>
                    $sub_category
                  </a>
                    <br>
            </div>	";
        }
	}else{
	$get_product="select * from category where cat_id='11' && sub_cat_id='11'  && active='0'  LIMIT 0,3 "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
    	echo "
        <div style='margin-left:10px;'>
              <a href='SearchByCategory?category_id=	$category_id'>
                $sub_category
              </a>
                <br>
    </div>	";
    	}
    echo " <a href='Categories?category_page=1'>More...</a>";
	}
}



function getSub_Categories12(){
	global $db;
    $_GET['category_page'];
	$category_page=$_GET['category_page'];
	if ($category_page==1) {
	$get_product="select * from category where cat_id='12' && sub_cat_id='12'  && active='0' "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
        	echo "
            <div style='margin-left:10px;'>
                  <a href='SearchByCategory?category_id=	$category_id'>
                    $sub_category
                  </a>
                    <br>
            </div>	";
        }
	}else{
	$get_product="select * from category where cat_id='12' && sub_cat_id='12' && active='0'  LIMIT 0,3 "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
    	echo "
        <div style='margin-left:10px;'>
              <a href='SearchByCategory?category_id=	$category_id'>
                $sub_category
              </a>
                <br>
    </div>	";
    	}
    echo " <a href='Categories?category_page=1'>More...</a>";
	}
}



function getSub_Categories13(){
	global $db;
    $_GET['category_page'];
	$category_page=$_GET['category_page'];
	if ($category_page==1) {
	$get_product="select * from category where cat_id='13' && sub_cat_id='13'  && active='0' "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
        	echo "
            <div style='margin-left:10px;'>
                  <a href='SearchByCategory?category_id=	$category_id'>
                    $sub_category
                  </a>
                    <br>
            </div>	";
        }
	}else{
	$get_product="select * from category where cat_id='13' && sub_cat_id='13' && active='0'  LIMIT 0,3 "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
    	echo "
        <div style='margin-left:10px;'>
              <a href='SearchByCategory?category_id=	$category_id'>
                $sub_category
              </a>
                <br>
    </div>	";
    	}
    echo " <a href='Categories?category_page=1'>More...</a>";
	}
}



function getSub_Categories14(){
	global $db;
    $_GET['category_page'];
	$category_page=$_GET['category_page'];
	if ($category_page==1) {
	$get_product="select * from category where cat_id='14' && sub_cat_id='14'  && active='0' "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
        	echo "
            <div style='margin-left:10px;'>
                  <a href='SearchByCategory?category_id=	$category_id'>
                    $sub_category
                  </a>
                    <br>
            </div>	";
        }
	}else{
	$get_product="select * from category where cat_id='14' && sub_cat_id='14' && active='0'  LIMIT 0,3 "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
    	echo "
        <div style='margin-left:10px;'>
              <a href='SearchByCategory?category_id=	$category_id'>
                $sub_category
              </a>
                <br>
    </div>	";
    	}
    echo " <a href='Categories?category_page=1'>More...</a>";
	}
}


function getSub_Categories15(){
	global $db;
    $_GET['category_page'];
	$category_page=$_GET['category_page'];
	if ($category_page==1) {
	$get_product="select * from category where cat_id='15' && sub_cat_id='15' && active='0'  "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
        	echo "
            <div style='margin-left:10px;'>
                  <a href='SearchByCategory?category_id=	$category_id'>
                    $sub_category
                  </a>
                    <br>
            </div>	";
        }
	}else{
	$get_product="select * from category where cat_id='15' && sub_cat_id='15' && active='0'  LIMIT 0,3 "; 	
	$run_products=mysqli_query($db,$get_product);
    	while ($row_product=mysqli_fetch_array($run_products)) {
        	$sub_category=$row_product['sub_category']; 
        	$category_id=$row_product['category_id'];
    	echo "
        <div style='margin-left:10px;'>
              <a href='SearchByCategory?category_id=	$category_id'>
                $sub_category
              </a>
                <br>
    </div>	";
    	}
    echo " <a href='Categories?category_page=1'>More...</a>";
	}
}












function getProducts_index_desktop(){

	global $db;
	$get_product="select * from products where ad_type='top'"; /*0,6...max 6 products displayed*/
	$run_products=mysqli_query($db,$get_product);
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
	<div class=' a' style='float:left;width:150px;height:200px;background:#f1da8d;'>
	
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


</a>


";

}
}



function getShops_index_mobile(){

		global $db;
	$get_product="select * from stores order by shop_id DESC ";/*0,6...max 6 products displayed*/
	$run_products=mysqli_query($db,$get_product);
	while ($row_product=mysqli_fetch_array($run_products)) {
		$shop_id=$row_product['shop_id'];
		$shop_name=$row_product['shop_name'];
		$items_services=$row_product['items_services'];
		$shop_owner=$row_product['shop_owner'];
		$shop_district=$row_product['shop_district'];
		$shop_city=$row_product['shop_city'];
		$shop_street=$row_product['shop_street'];
		


echo " <a href='shopdetails.php?shop_id=$shop_id'  >

		<div class='col-xs-5 col-sm-5 col-md-5 a' style='float:right;'>
			<style type='text/css'>
			.a{
			min-height: 150px; 
			margin-top:1%;

			border-radius:5px;
			background-image: linear-gradient(90deg, #a9cbc2 0%, #9FACE6 100%);
			}
			.a:hover{
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}					
			</style>  

			<div class=' ' style=''>
			 <i class='fa fa-chevron-circle-right' style=' font-weight:bold;font-size:15px; 

			 	display: inline-block;
			    width: 80%;
			    white-space: nowrap;
			    min-height: 2em;
			 	max-height: 2em;
			    overflow: hidden;
			    text-overflow: ellipsis;
			    text-align:center;
			    color:#1aa515;
			    padding-top:10px;

			 '> $shop_name </i>  
			</div>

			<div class='  ' style='
							margin-top:2%; 
							color:brown;         
							line-height: 1.3em;
							min-height: 3.3em;
		 					max-height: 3.3em; 
							overflow: hidden;
		 					text-overflow: ellipsis;'>
			<i class='fa fa-map-marker' style=size:30px;color:black;padding-right:10px;> </i>   $shop_district $shop_city $shop_street
			</div>

			<div class=' ' style='
						 margin-top:2%; 
						 color:brown;
						 font-weight:bold;        
						line-height: 1.3em;
						min-height: 3.3em;
		 				max-height: 3.3em; 
						overflow: hidden;
		 				text-overflow: ellipsis;'>
			<i class='fa fa-th-list' style=size:30px;color:black;> </i> 
			$items_services
			</div> 
		</div>	


</a>

";
}
}

function getmybasket(){

global $db;
if (isset($_SESSION['customer_email'])) { 
  $customer_email=$_SESSION['customer_email'];

  $get_mybasket="SELECT * from mybasket WHERE customer_email='$customer_email'";


    $run_mybasket=mysqli_query($db,$get_mybasket);

    $check_mybasket=mysqli_num_rows($run_mybasket);
    
    while ($row_mybasket=mysqli_fetch_array($run_mybasket)) {
    $product_id=$row_mybasket['product_id'];
    $shop_id=$row_mybasket['shop_id'];


  $get_product="SELECT * from products WHERE product_id='$product_id'";
   $run_product=mysqli_query($db,$get_product);
   $row_product=mysqli_fetch_array($run_product);
   $product_title=$row_product['product_title'];
   $product_image1=$row_product['product_image1'];
   $product_priceafterdis=$row_product['product_priceafterdis'];


   if ($check_mybasket>0) {

      echo " 
      <a href='productdetails.php?product_id=$product_id' style='text-decoration:none;'>

            <div class='br-r-8 md-space  tran-008s p-relative m-b-20 col-md-6 col-xs-3 col-sm-3 only-in-desk-md getProducts' style='background: #F8FDFB;margin-left: 2%; height: 250px; width:24%;border: solid 5px #bdecd9; margin-top:1%;>

            <div class='av-roman w-100 color-0d0 rg-box  m-t-10' style='background: #F8FDFB;'>  

            <i class='fa fa-chevron-circle-right' style=' font-weight:bold;color:#7C532C;margin-top:8px; 
         
         display: inline-block;
          width: 100%;
          white-space: nowrap;
          min-height: 1.3em;
         max-height: 1.3em;
          overflow: hidden;
          text-overflow: ellipsis;
         '> $product_title </i>

            <img src='product_images/$product_image1' class='img-responsive'

                 style='  max-height:180px;
                      min-height:100px; 
                      min-width: auto;
                      max-height:auto; 
                      margin-bottom: 5px;     
                      float:center;
                       text-align:center;'>

            <div style= 'position: absolute;bottom: 0;right:10px;;left:10px;'>         
            
            <p style='float: right; font-weight: bold; font-size: 18px;'>Rs: $product_priceafterdis /- </p> 

            </div>
         </div>
         </a>     


         ";

 }   
}
}
}



function getProducts_selectedstore(){
global $db;

if (isset($_GET['shop_id'])) {
	$shop_id=$_GET['shop_id'];
	$get_product="select * from products where shop_id='$shop_id'";
	$run_products=mysqli_query($db,$get_product);
	while ($row_product=mysqli_fetch_array($run_products)) {

		$shop_id=$row_product['shop_id'];
		$product_id=$row_product['product_id'];
		$product_title=$row_product['product_title'];
		$product_image1=$row_product['product_image1'];

		$product_currentprice=$row_product['product_currentprice'];
		$product_priceafterdis=$row_product['product_priceafterdis'];	

if ($product_currentprice==$product_priceafterdis) {


echo "
 <a href='productdetails.php?product_id=$product_id' style='text-decoration:none;'>

<div class='col-md-3 col-sm-6 col-xs-6 only-in-desk-md getProducts' style='background: #F8FDFB;margin-top:1%; height: 250px; border: solid 1px #bdecd9; border-bottom: 8px solid #bbb; border-right: 8px solid #bbb;>

	<div class='' style='background: #F8FDFB;'>	

	<i class='fa fa-chevron-circle-right' style=' font-weight:bold;color:#7C532C;margin-top:8px; 
	
 	display: inline-block;
    width: 100%;
    white-space: nowrap;
    min-height: 1.3em;
 	max-height: 1.3em;
    overflow: hidden;
    text-overflow: ellipsis;
 	'> $product_title </i>

		<img src='product_images/$product_image1' class='img-responsive'

			style='	max-height:180px;
				min-height:100px; 
				min-width: auto;
				max-height:auto; 
				margin-bottom: 5px; 		
				float:center;
				text-align:center; '>

		<div style= 'position: absolute;bottom: 0;right:10px;left:10px;'>			
		
		<p style='float: right; font-weight: bold; font-size: 18px;'>Rs: $product_priceafterdis /- </p>	

		</div>
</div>

";/*to medium 3, small screen 2  products displayed...col 4 und col 6*/
}else{
	echo " <a href='productdetails.php?product_id=$product_id' style='text-decoration:none;'>

	

<div class='col-md-3 col-sm-6 col-xs-6 getProducts' style='background: #F8FDFB; height: 250px; border: solid 1px #bdecd9;border-bottom: 8px solid #bbb; border-right: 8px solid #bbb;margin-top:1%;>

		<div class='av-roman w-100 color-0d0 rg-box  m-t-10' style='background: #F8FDFB;'>
		
		<i class='fa fa-chevron-circle-right' style=' font-weight:bold;color:#7C532C;margin-top:8px; 
	
 	display: inline-block;
    width: 100%;
    white-space: nowrap;
    min-height: 1.3em;
 	max-height: 1.3em;
    overflow: hidden;
    text-overflow: ellipsis;
 	'> $product_title </i>

		<img src='product_images/$product_image1' class='img-responsive'

		style='	max-height:180px;
			min-height:100px; 
			min-width: auto;
			max-height:auto; 
			margin-bottom: 5px; 		
			float:center;
			text-align:center;'>	

		<div style= 'position: absolute;bottom: 0;right:10px;;left:10px;'>
			<p style='float: left; text-decoration: line-through; font-size: 15px; color: brown;'> Rs: $product_currentprice /-</p>	
		
			<p style='float: right; font-weight: bold; font-size: 18px;'>Rs: $product_priceafterdis /- </p>	

		</div>
</div>

";/*to medium 3, small screen 2  products displayed...col 4 und col 6*/
}
}
}
}




function getShops_viewall(){

		global $db;
	$get_product="select * from stores order by shop_id DESC LIMIT 0,6";/*0,6...max 6 products displayed*/
	$run_products=mysqli_query($db,$get_product);
	while ($row_product=mysqli_fetch_array($run_products)) {
		$shop_id=$row_product['shop_id'];
		$shop_name=$row_product['shop_name'];
		$items_services=$row_product['items_services'];
		$shop_owner=$row_product['shop_owner'];
		$shop_district=$row_product['shop_district'];
		$shop_city=$row_product['shop_city'];
		$shop_street=$row_product['shop_street'];
		


echo " 

	<div class='col-xs-12 col-sm-4 col-md-4 a' style='float:right;'>

<a href='shopdetails.php?shop_id=$shop_id'  >
	
			<style type='text/css'>
			.a{
			min-height: auto; 
			margin-top:1%;
			margin-left:1%;

			border-radius:5px;
			background-image: linear-gradient(90deg, #a9cbc2 0%, #9FACE6 100%);

			}
			.a:hover{
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}					
			</style>  

			<div class=' ' style=''>
			 <i class='fa fa-chevron-circle-right' style=' font-weight:bold;font-size:20px; 

			 	display: inline-block;
			    width: 80%;
			    white-space: nowrap;
			    min-height: 2em;
			 	max-height: 2em;
			    overflow: hidden;
			    text-overflow: ellipsis;
			    text-align:center;
			    color:#1aa515;
			    padding-top:10px;

			 '> $shop_name </i>  
			</div>

			<div class='  ' style='
							margin-top:2%; 
							color:brown;         
							line-height: 1.3em;
							min-height: 3.3em;
		 					max-height: 3.3em; 
							overflow: hidden;
		 					text-overflow: ellipsis;'>
			<i class='fa fa-map-marker' style=size:30px;color:black;padding-right:10px;> </i>   $shop_district $shop_city $shop_street
			</div>

			<div class=' ' style='
						 margin-top:2%; 
						 color:brown;
						 font-weight:bold;        
						line-height: 1.3em;
						min-height: 3.3em;
		 				max-height: 3.3em; 
						overflow: hidden;
		 				text-overflow: ellipsis;'>
			<i class='fa fa-th-list' style=size:30px;color:black;padding-right:10px;> </i> 
			$items_services
			</div> 
		
</a>
</div>	

";
}
}

function getAllstores(){

		global $db;
	$get_product="select * from stores order by shop_id DESC";/*0,6...max 6 products displayed*/
	$run_products=mysqli_query($db,$get_product);
	while ($row_product=mysqli_fetch_array($run_products)) {
		$shop_name=$row_product['shop_name'];
		$items_services=$row_product['items_services'];
		$shop_owner=$row_product['shop_owner'];
		$shop_district=$row_product['shop_district'];
		$shop_city=$row_product['shop_city'];
		$shop_street=$row_product['shop_street'];
		


		echo " <a href='shopdetails.php' style='text-decoration:none;''> <div>
		<div class='lg-box br-r-8 m-t-10 md-space  tran-008s p-relative m-b-20 col-md-5' style='background: #B3DEB6;margin-left: 3%; margin-right:3%; height: 250px;'>


<div class='w-100'style= 'text-align:center; '>
     
    <p style=font-weight:bold;color:#7C532C;><i class='fa fa-chevron-circle-right fa-md'></i> $shop_name </p>

</div>



<div class='md-box m-t-10 br-r-8 md-space' style='background: #F8FDFB;'>
  <div class='flex m-t-12 sm-space'>
    <div class='av-heavy color-0d0 rg-text' style='color: black; font-style: italic;'>
<i class='fa fa-th-list' style=size:30px;color:#7C532C;></i> $items_services 
    </div>
  </div>

<div class='flex m-t-12 sm-space'>
<div class='av-heavy color-0d0 rg-text' style='color: black; font-style: italic;''>
<i class='fa fa-user' style=size:30px;color:#7C532C;></i> $shop_owner 
</div>
</div>

</div>
<div class='av-roman md-text color-0d0 rg-box  m-t-10' style='background: #F8FDFB;'>
<i class='fa fa-map-marker' style=size:30px;color:#7C532C;></i> $shop_district $shop_city $shop_street
</div>
</div>
</a>

";/*to medium 3, small screen 2  products displayed...col 4 und col 6*/
}
}


function getProducts_shopdetails(){

		global $db;
	$get_product="select * from stores order by shop_id DESC LIMIT 0,16";/*0,6...max 6 products displayed*/
	$run_products=mysqli_query($db,$get_product);
	while ($row_product=mysqli_fetch_array($run_products)) {
		$shop_name=$row_product['shop_name'];
		$items_services=$row_product['items_services'];
		$shop_owner=$row_product['shop_owner'];
		$shop_district=$row_product['shop_district'];
		$shop_city=$row_product['shop_city'];
		$shop_street=$row_product['shop_street'];
		


		echo " <a href='productdetails.php' style='text-decoration:none;'>


<div class='md-box br-r-8 md-space  tran-008s p-relative m-b-20 col-md-3 col-xs-3 col-sm-3 only-in-desk-md getProducts_mystore' style='background: #F8FDFB;margin-left: 1%; height: 250px; width:24%;border: solid 1px #bdecd9;>

		<div class='av-roman w-100 color-0d0 rg-box  m-t-10' style='background: #F8FDFB;'>
		<p style=font-weight:bold;color:#7C532C;> $shop_name </p>

		<i class='fa fa-th-list' style=size:30px;color:#7C532C;></i> $items_services	
</div>



<div class='md-box br-r-8 md-space  tran-008s p-relative m-b-20 col-xs-6 only-in-mob-md getProducts_mystore' style='background: #F8FDFB;margin-left: 2%; height: 250px; width:48%; border: solid 1px #bdecd9;' >
	
		<p style=font-weight:bold;color:#7C532C;> $shop_name </p>

		<i class='fa fa-th-list' style=size:30px;color:#7C532C;> </i>$items_services 	
	
</div>



</a>

";/*to medium 3, small screen 2  products displayed...col 4 und col 6*/
}
}






function getProducts_mystore(){

if (isset($_SESSION['customer_email'])) {
	$customer_email=$_SESSION['customer_email'];
}

		global $db;
	$get_product="select * from products where customer_email='$customer_email' order by product_id DESC ";/*0,6...max 6 products displayed*/
	$run_products=mysqli_query($db,$get_product);
	while ($row_product=mysqli_fetch_array($run_products)) {

		$shop_id=$row_product['shop_id'];
		$product_title=$row_product['product_title'];
		$product_id=$row_product['product_id'];
		$product_image1=$row_product['product_image1'];

		$product_currentprice=$row_product['product_currentprice'];
		$product_priceafterdis=$row_product['product_priceafterdis'];
		


if ($product_currentprice==$product_priceafterdis) {
	echo " <a href='productdetails.php?product_id=$product_id' style='text-decoration:none;'>

<div class='col-md-3 col-sm-6 col-xs-6 only-in-desk-md getProducts' style='background: #F8FDFB;margin-top:1%; height: 250px; border: solid 1px #bdecd9;  border-bottom: 8px solid #bbb; border-right: 8px solid #bbb;>

	<div class='' style='background: #F8FDFB;'>	



	<i class='fa fa-chevron-circle-right' style=' font-weight:bold;color:#7C532C;margin-top:8px; 
	
 	display: inline-block;
    width: 100%;
    white-space: nowrap;
    min-height: 1.3em;
 	max-height: 1.3em;
    overflow: hidden;
    text-overflow: ellipsis;
 	'> $product_title </i>



		<img src='product_images/$product_image1' class='img-responsive'

			style='	max-height:180px;
				min-height:100px; 
				min-width: auto;
				max-height:auto; 
				margin-bottom: 5px; 		
				float:center;
				text-align:center; '>

		<div style= 'position: absolute;bottom: 0;right:10px;left:10px;'>			
		
		<p style='float: right; font-weight: bold; font-size: 18px;'>Rs: $product_priceafterdis /- </p>	

		<a href='Updating-Product?product_id=$product_id' style= ''>Edit</a>

		</div>
</div>

";/*to medium 3, small screen 2  products displayed...col 4 und col 6*/
}else{
	echo " <a href='productdetails.php?product_id=$product_id' style='text-decoration:none;'>


<div class='col-md-3 col-sm-6 col-xs-6 getProducts' style='background: #F8FDFB; height: 250px; border: solid 1px #bdecd9;border-bottom: 8px solid #bbb; border-right: 8px solid #bbb;margin-top:1%;>


		<div class='av-roman w-100 color-0d0 rg-box  m-t-10' style='background: #F8FDFB;'>

		

		<i class='fa fa-chevron-circle-right' style=' font-weight:bold;color:#7C532C;margin-top:8px; 
	
 	display: inline-block;
    width: 100%;
    white-space: nowrap;
    min-height: 1.3em;
 	max-height: 1.3em;
    overflow: hidden;
    text-overflow: ellipsis;
 	'> $product_title </i>

		<img src='product_images/$product_image1' class='img-responsive'

		style='	max-height:180px;
			min-height:100px; 
			min-width: auto;
			max-height:auto; 
			margin-bottom: 5px; 		
			float:center;
			text-align:center;'>	

		<div style= 'position: absolute;bottom: 0;right:10px;;left:10px;'>
			<p style='float: left; text-decoration: line-through; font-size: 15px; color: brown;'> Rs: $product_currentprice /-</p>	
		
			<p style='float: right; font-weight: bold; font-size: 18px;'>Rs: $product_priceafterdis /- </p>	

			<a href='Updating-Product?product_id=$product_id' style= 'float:right;padding-right:15%;'>Edit</a>

		</div>

</div>


";/*to medium 3, small screen 2  products displayed...col 4 und col 6*/
}
}
}




function getProducts_all(){
		global $db;
	$get_product="select * from products order by product_id DESC ";/*0,6...max 6 products displayed*/
	$run_products=mysqli_query($db,$get_product);
	while ($row_product=mysqli_fetch_array($run_products)) {

		$shop_id=$row_product['shop_id'];
		$product_title=$row_product['product_title'];
		$product_id=$row_product['product_id'];
		$product_image1=$row_product['product_image1'];

		$product_currentprice=$row_product['product_currentprice'];
		$product_priceafterdis=$row_product['product_priceafterdis'];

	echo " <a href='productdetails.php?product_id=$product_id' style='text-decoration:none;'>

		<img src='product_images/$product_image1' class='img-responsive'

			style='	max-height:180px;
				min-height:100px; 
				min-width: auto;
				max-height:auto; 
				margin-bottom: 5px; 		
				float:center;
				text-align:center; '>
";
}
}











function getProducts(){
		global $db;
	$get_product="select * from products order by product_id DESC LIMIT 0,16";/*0,6...max 6 products displayed*/
	$run_products=mysqli_query($db,$get_product);
	while ($row_product=mysqli_fetch_array($run_products)) {

		$shop_id=$row_product['shop_id'];
		$product_id=$row_product['product_id'];
		$product_title=$row_product['product_title'];
		$product_image1=$row_product['product_image1'];

		$product_currentprice=$row_product['product_currentprice'];
		$product_priceafterdis=$row_product['product_priceafterdis'];


if ($product_currentprice==$product_priceafterdis) {

echo " <a href='productdetails.php?product_id=$product_id' style='text-decoration:none;'>

<div class='br-r-8 md-space  tran-008s p-relative m-b-20 col-md-4 col-xs-4 col-sm-4  only-in-desk-md getProducts' style='background: #F8FDFB;margin-left: 1%; height: 250px; width:24%;border: solid 1px #bdecd9;>

		<div class='av-roman w-100 color-0d0 rg-box  m-t-10' style='background: #F8FDFB;'>		

<i class='fa fa-chevron-circle-right' style=' font-weight:bold;color:#7C532C;margin-top:8px; 	
 	display: inline-block;
    width: 100%;
    white-space: nowrap;
    min-height: 1.3em;
 	max-height: 1.3em;
    overflow: hidden;
    text-overflow: ellipsis;
 	'> $product_title </i>

		<img src='product_images/$product_image1' class='img-responsive'
									style='	max-height:180px;
											min-height:100px; 
											min-width: auto;
											max-height:auto; 
											margin-bottom: 5px; 		
											float:center;
											text-align:center;'>

		<div style= 'position: absolute;bottom: 0;right:10px;;left:10px;'>			
		
						<p style='float: right; font-weight: bold; font-size: 18px;'>Rs: $product_priceafterdis /- </p>	
		</div>
</div>



<div class='br-r-8 md-space  tran-008s p-relative m-b-20 col-md-4 col-xs-4 col-sm-4  only-in-mob-md getProducts' style='background: #F8FDFB;margin-left: 1%; height: 250px; width:48%;border: solid 1px #bdecd9;>

		<div class='av-roman w-100 color-0d0 rg-box  m-t-10' style='background: #F8FDFB;'>		

<i class='fa fa-chevron-circle-right' style=' font-weight:bold;color:#7C532C;margin-top:8px; 	
 	display: inline-block;
    width: 100%;
    white-space: nowrap;
    min-height: 1.3em;
 	max-height: 1.3em;
    overflow: hidden;
    text-overflow: ellipsis;
 	'> $product_title </i>

		<img src='product_images/$product_image1' class='img-responsive'
									style='	max-height:180px;
											min-height:100px; 
											min-width: auto;
											max-height:auto; 
											margin-bottom: 5px; 		
											float:center;
											text-align:center;'>

		<div style= 'position: absolute;bottom: 0;right:10px;;left:10px;'>			
		
						<p style='float: right; font-weight: bold; font-size: 18px;'>Rs: $product_priceafterdis /- </p>	
		</div>
</div>
</a>

";/*to medium 3, small screen 2  products displayed...col 4 und col 6*/
}else{
	echo " <a href='productdetails.php?product_id=$product_id' style='text-decoration:none;'>

<div class='br-r-8 md-space  tran-008s p-relative m-b-20 col-md-4 col-xs-4 col-sm-4  only-in-desk-md getProducts' style='background: #F8FDFB;margin-left: 1%; height: 250px; width:24%;border: solid 1px #bdecd9;>

		<div class='av-roman w-100 color-0d0 rg-box  m-t-10' style='background: #F8FDFB;'>
		

<i class='fa fa-chevron-circle-right' style=' font-weight:bold;color:#7C532C;margin-top:8px; 
	
 	display: inline-block;
    width: 100%;
    white-space: nowrap;
    min-height: 1.3em;
 	max-height: 1.3em;
    overflow: hidden;
    text-overflow: ellipsis;
 	'> $product_title </i>



		<img src='product_images/$product_image1' class='img-responsive'

									style='	max-height:180px;
											min-height:100px; 
											min-width: auto;
											max-height:auto; 
											margin-bottom: 5px; 		
											float:center;
											text-align:center;'>

		

		<div style= 'position: absolute;bottom: 0;right:10px;;left:10px;'>
						<p style='float: left; text-decoration: line-through; font-size: 15px; color: brown;'> Rs: $product_currentprice /-</p>
						
			
		
						<p style='float: right; font-weight: bold; font-size: 18px;'>Rs: $product_priceafterdis /- </p>	

		</div>
</div>

<div class='br-r-8 md-space  tran-008s p-relative m-b-20 col-md-4 col-xs-4 col-sm-4  only-in-mob-md getProducts' style='background: #F8FDFB;margin-left: 1%; height: 250px; width:48%;border: solid 1px #bdecd9;>

		<div class='av-roman w-100 color-0d0 rg-box  m-t-10' style='background: #F8FDFB;'>
		

<i class='fa fa-chevron-circle-right' style=' font-weight:bold;color:#7C532C;margin-top:8px; 
	
 	display: inline-block;
    width: 100%;
    white-space: nowrap;
    min-height: 1.3em;
 	max-height: 1.3em;
    overflow: hidden;
    text-overflow: ellipsis;
 	'> $product_title </i>



		<img src='product_images/$product_image1' class='img-responsive'

									style='	max-height:180px;
											min-height:100px; 
											min-width: auto;
											max-height:auto; 
											margin-bottom: 5px; 		
											float:center;
											text-align:center;'>

		

		<div style= 'position: absolute;bottom: 0;right:10px;;left:10px;'>
						<p style='float: left; text-decoration: line-through; font-size: 15px; color: brown;'> Rs: $product_currentprice /-</p>
						
			
		
						<p style='float: right; font-weight: bold; font-size: 18px;'>Rs: $product_priceafterdis /- </p>	

		</div>
</div>



</a>

";/*to medium 3, small screen 2  products displayed...col 4 und col 6*/
}
}
}







function allproducts_location(){

global $db;
if (isset($_GET['location'])) {
	$location_dist=$_GET['location'];
	$get_product="select * from products where location_dist='$location_dist'  || location_city='$location_dist'";
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
	
		
	echo "<a href = 'ProductDetailed?product_id=$product_id' style='text-decoration:none;';>
    <table style='background-color:white;margin-bottom:10px;'>
	<tr>
	<td>
	<div class=' a' style='float:left;width:200px;height:200px;background:white;'>
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
		</style> 
		
			<img src='product_images/$product_image1' class='img-responsive'
			style='	
              width: 100%;
              height: 150px;
              object-fit: cover;
              object-position: 50% 50%;
			     '>
	    </div>
	    
	    <p style=' text-align: center;color:green; font-weight:bold;font-size:20px;padding-top:15px;'>Rs : $product_price</p>	    
	
    </div>
</td>
<td style=''>  

<div style='padding-left:25px;padding-right:30px;width:500px'>
					<div>					
						<span style='font-size:15px;padding-right:10px; color:grey;float:left;'>
							<i class='fa fa-map-marker' style='font-size:16px;'>
							</i>
								$location_dist
						</span>
						
						<span style='font-size:15px;padding-right:10px; color:grey;float:right;'>
	                       <i class='fa fa-calendar-o ' style='font-size:14px;'>	</i>	
	                        $post_date
	                    </span>	
					</div>
					
			<span class='' style=' font-weight:bold;font-size:20px; 
				 	display: inline-block;
			    width: 100%;
			    white-space: nowrap;
			    min-height: 2em;
				 	max-height: 2em;
			    overflow: hidden;
			    text-overflow: ellipsis;			    
			    color:#1aa515;
			    padding-top:10px;
			 '> $product_title </span>					
					
	<div class='  ' style='
	                background-color:white;
					margin-top:2%; 
					color:brown;         
					line-height: 1.3em;
					min-height: 2.8em;
		 			max-height: 2.8em; 
					overflow: hidden;
		 			text-overflow: ellipsis;font-size:14px;'>
					$product_desc
	</div>
	
					<div>					
						<span style='size:30px;color:#5fcaed;padding-right:10px;float:left;font-weight:bold;'>
	                        $product_selling
	                    </span>	
						
						<span style='size:30px;color:#5fcaed;padding-right:10px;float:right;font-weight:bold;'>
	                        $price_type
	                    </span>	
					</div>
					
</td>	
</tr>
</table>
</div>	
</a>
";/*to medium 3, small screen 2  products displayed...col 4 und col 6*/
}

        $product_count=mysqli_num_rows($run_products);
        if ($product_count>0){
            echo "<div style='text-align:center;'>$product_count Articles allocated in "."'".$location_dist."'</div>";

        }else{
            echo "No Articles allocated after this District.";
            }

}
}




function your_allproducts(){

global $db;
if (isset($_GET['customer_id'])) {
	$customer_id=$_GET['customer_id'];
	$get_product="select * from products where customer_id='$customer_id'";
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
	
		
	echo "<a href = 'ProductDetailed?product_id=$product_id' style='	text-decoration:none'>
    <table style='background-color:white;margin-bottom:10px;'>
	<tr>
	<td>
	<div class=' a' style='float:left;width:200px;height:200px;background:white;'>
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
		</style> 
		
			<img src='product_images/$product_image1' class='img-responsive'
			style='	
              width: 100%;
              height: 150px;
              object-fit: cover;
              object-position: 50% 50%;
			     '>
	    </div>
	    
	    <p style=' text-align: center;color:green; font-weight:bold;font-size:20px;padding-top:15px;'>Rs : $product_price</p>	    
	
    </div>
</td>
<td style=''>  

<div style='padding-left:25px;padding-right:30px;width:500px'>
					<div>					
						<span style='font-size:15px;padding-right:10px; color:grey;float:left;'>
							<i class='fa fa-map-marker' style='font-size:16px;'>
							</i>
								$location_dist
						</span>
					
						<span style='font-size:15px;padding-right:10px; color:grey;float:right;'>
	                       <i class='fa fa-calendar-o ' style='font-size:14px;'>	</i>	
	                        $post_date
	                    </span>	
					</div>
					
					
			<span class='' style=' font-weight:bold;font-size:20px; 
				 	display: inline-block;
			    width: 100%;
			    white-space: nowrap;
			    min-height: 2em;
				 	max-height: 2em;
			    overflow: hidden;
			    text-overflow: ellipsis;			    
			    color:#1aa515;
			    padding-top:10px;
			 '> $product_title </span>					
					
	<div class='  ' style='
	                background-color:white;
					margin-top:2%; 
					color:brown;         
					line-height: 1.3em;
					min-height: 2.8em;
		 			max-height: 2.8em; 
					overflow: hidden;
		 			text-overflow: ellipsis;font-size:14px;'> 
		 			
					$product_desc
	</div>
	
					<div>					
						<span style='size:30px;color:#5fcaed;padding-right:10px;float:left;font-weight:bold;'>
	                        $product_selling
	                    </span>	
						
						<span style='size:30px;color:#5fcaed;padding-right:10px;float:right;font-weight:bold;'>
	                        $price_type
	                    </span>	
					</div>
					
</td>	
</tr>
</table>
</div>	
</a>
";/*to medium 3, small screen 2  products displayed...col 4 und col 6*/
}

}
}


function my_allproducts(){

global $db;
if (isset($_SESSION['customer_email'])) { 
    $customer_email=$_SESSION['customer_email'];
    	
	$get_product="select * from products where customer_email='$customer_email'";
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
		
		$product_priceafterdis=$row_product['product_priceafterdis'];
		
		$product_image1=$row_product['product_image1'];
	
		
	echo "<a href = 'ProductDetailed?product_id=$product_id' style='	text-decoration:none'>
    <table style='background-color:white;margin-bottom:10px;'>
	<tr>
	<td>
	<div class=' a' style='float:left;width:200px;height:200px;background:white;'>
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
		</style> 
		
			<img src='product_images/$product_image1' class='img-responsive'
			style='	
              width: 100%;
              height: 150px;
              object-fit: cover;
              object-position: 50% 50%;
			     '>
	    </div>

	    <p style=' text-align: center;color:green; font-weight:bold;font-size:20px;padding-top:15px;'>Rs : $product_price</p>
	
    </div>
</td>
<td style=''>  

<div style='padding-left:25px;padding-right:30px;width:500px'>
					<div>					
						<span style='font-size:15px;padding-right:10px; color:grey;float:left;'>
							<i class='fa fa-map-marker' style='font-size:16px;'>
							</i>
								$location_dist
						</span>
					
						<span style='font-size:15px;padding-right:10px; color:grey;float:right;'>
	                       <i class='fa fa-calendar-o ' style='font-size:14px;'>	</i>	
	                        $post_date
	                    </span>	
					</div>
					
			<span class='' style=' font-weight:bold;font-size:20px; 
				 	display: inline-block;
			    width: 100%;
			    white-space: nowrap;
			    min-height: 2em;
				 	max-height: 2em;
			    overflow: hidden;
			    text-overflow: ellipsis;			    
			    color:#1aa515;
			    padding-top:10px;
			 '> $product_title </span>					
					
	<div class='  ' style='
	                background-color:white;
					margin-top:2%; 
					color:brown;         
					line-height: 1.3em;
					min-height: 2.8em;
		 			max-height: 2.8em; 
					overflow: hidden;
		 			text-overflow: ellipsis;
		 			font-size:14px;
		 		'>
					$product_desc
					
	</div>
	<br>
	<a href='#' style= 'position: absolute;float:left; font-weight:bold;'><a href='delete_product.php?product_id=$product_id'  onclick='return check_delete()' style= 'color:;'>Delete</a>
	
		<script type='text/javascript'>
		    function check_delete(){
    		    return confirm('Are you sure you want to delete this Article ?');
    		}
	    </script>
	
	<a href='Updating-Product?product_id=$product_id' style='float:right;'target='_blank'>Edit</a>
	
</td>	
</tr>
</table>
</div>	
</a>
	 
";/*to medium 3, small screen 2  products displayed...col 4 und col 6*/

    
        
	}

}
}



function my_favourites(){

global $db;
if (isset($_SESSION['customer_email'])) { 
    $customer_email=$_SESSION['customer_email'];
	$get_product="select * from customers where customer_email='$customer_email'";
	$run_products=mysqli_query($db,$get_product);
    $row_product=mysqli_fetch_array($run_products);	
	$customer_id=$row_product['customer_id'];	
	

        $get_product_2="select * from favourite where customer_id='$customer_id'";
    	$run_products_2=mysqli_query($db,$get_product_2);
    	
	while ($row_product_2=mysqli_fetch_array($run_products_2)) {
        $product_id=$row_product_2['product_id'];       
        
            $get_product_3="select * from products where product_id='$product_id'";
    	    $run_products_3=mysqli_query($db,$get_product_3);

	while ($row_product_3=mysqli_fetch_array($run_products_3)) {
		$shop_id=$row_product_3['shop_id'];
		$product_title=$row_product_3['product_title'];
		$product_id=$row_product_3['product_id'];
		$product_image1=$row_product_3['product_image1'];
		$location_dist=$row_product_3['location_dist'];
		$post_date=$row_product_3['post_date'];

		$product_desc=$row_product_3['product_desc'];
		$product_price=$row_product_3['product_price'];
		$price_type=$row_product_3['price_type'];
		$product_price=$row_product_3['product_price'];		
		
		$product_selling=$row_product_3['product_selling'];
	
		
	echo "<a href = 'ProductDetailed?product_id=$product_id'>
    <table style='background-color:white;margin-bottom:10px;'>
	<tr>
	<td>
	<div class=' a' style='float:left;width:200px;height:200px;background:white;'>
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
		</style> 
		
			<img src='product_images/$product_image1' class='img-responsive'
			style='	
              width: 100%;
              height: 150px;
              object-fit: cover;
              object-position: 50% 50%;
			     '>
	    </div>
	    
	    <p style=' text-align: center;color:green; font-weight:bold;font-size:20px;padding-top:15px;'>Rs : $product_price</p>	    
	
    </div>
</td>
<td style=''>  

<div style='padding-left:25px;padding-right:30px;width:500px'>
					<div>					
						<span style='font-size:15px;padding-right:10px; color:grey;float:left;'>
							<i class='fa fa-map-marker' style='font-size:16px;'>
							</i>
								$location_dist
						</span>
						
						<span style='font-size:15px;padding-right:10px; color:grey;float:right;'>
	                       <i class='fa fa-calendar-o ' style='font-size:14px;'>	</i>	
	                        $post_date
	                    </span>	
					</div>
					
			<span class='' style=' font-weight:bold;font-size:20px; 
				 	display: inline-block;
			    width: 100%;
			    white-space: nowrap;
			    min-height: 2em;
				 	max-height: 2em;
			    overflow: hidden;
			    text-overflow: ellipsis;			    
			    color:#1aa515;
			    padding-top:10px;
			 '> $product_title </span>					
					
	<div class='  ' style='
	                background-color:white;
					margin-top:2%; 
					color:brown;         
					line-height: 1.3em;
					min-height: 2.8em;
		 			max-height: 2.8em; 
					overflow: hidden;
		 			text-overflow: ellipsis;font-size:14px;'>
					$product_desc
	</div>
	
					<div style='padding-top:20px;'>					
						<span style='size:30px;color:#5fcaed;padding-right:10px;float:left;font-weight:bold;'>
	                        $product_selling
	                    </span>	
	                    
                        <a href='delete_favourite.php?product_id=$product_id && customer_id=$customer_id'  onclick='return check_delete()' style= 'color:orange;padding-left:40px;'>Remove from Favourite </a> 
                        
                        	<script type='text/javascript'>
                        		function check_delete()
                        		{
                        			return confirm('Are you sure you want to remove this Product from Favourite ?');
                        		}
                        	</script>                        
						
						<span style='size:30px;color:#5fcaed;padding-right:10px;float:right;font-weight:bold;'>
	                        $price_type
	                    </span>	
					</div>
					
				
</td>	
</tr>
</table>
</div>	
</a>
";/*to medium 3, small screen 2  products displayed...col 4 und col 6*/
}

}
}

}




function my_follows(){

global $db;
if (isset($_SESSION['customer_email'])) { 
    $customer_email=$_SESSION['customer_email'];
	$get_product="select * from follow where customer_email='$customer_email'";
	$run_products=mysqli_query($db,$get_product);

	while ($row_product=mysqli_fetch_array($run_products)) {
	$customer_id_followed=$row_product['customer_id_followed'];	
	
	$get_product_2="select * from customers where customer_id='$customer_id_followed'";
	$run_products_2=mysqli_query($db,$get_product_2);
    $row_product_2=mysqli_fetch_array($run_products_2);	
	$customer_id=$row_product_2['customer_id'];	
	$customer_name=$row_product_2['customer_name'];
	$customer_dist=$row_product_2['customer_dist'];
	$customer_city=$row_product_2['customer_city'];
	
	
		
	echo "
    <table style='background-color:rgba(255, 151, 143, 0.1);margin-bottom:10px;'>
            <td style=''> 
                <div style='padding-left:25px;padding-right:30px;padding-top:20px;padding-top:20px;padding-bottom:20px;width:700px;height:auto;'>
                 
                    <p style='font-weight:bold;font-size:20px;color:#70d0ec;'>$customer_name</p>
                    <p style='font-weight:bold;'> <i class='fa fa-caret-square-o-up' style=size:30px;color:black;padding-right:5px;> </i> Customer Id : $customer_id_followed</p>
                   <p style='font-weight:bold;'> <i class='fa fa-map-marker' style=size:30px;color:black;padding-right:5px;> </i> $customer_dist $customer_city</p>
                   <p style='font-weight:bold;'> <i class='fa fa-list-alt' style=size:30px;color:black;padding-right:5px;> </i> 13 Product Online</p>                   

                <a href='delete_follow.php?customer_email=$customer_email && customer_id_followed=$customer_id_followed'  onclick='return check_delete()' style= 'color:orange;padding-left:40px;'>                   
                    <button style='color:grey;font-size:16px;font-family:Arial, serif;width:20%;font-weight:bold;margin: 5px 5px 5px 10%;float:right;border:2px solid #70d0ec' class='btn btn-default' name='follow'>
                    Unfollow 
                    </button> 
                    
                    <script type='text/javascript'>
                        function check_delete()	{
                        	return confirm('Are you sure you want to remove this Product from Favourite ?');
                        		}
                    </script>  
                </a>    
                    
                </div>  
            </td>
            
            
    </table>
";/*to medium 3, small screen 2  products displayed...col 4 und col 6*/
}

}

}



function my_messages(){

global $db;

if (isset($_SESSION['customer_email'])) { 
    $customer_email=$_SESSION['customer_email'];
 
 	$get_product="select * from customers where customer_email='$customer_email'";
	$run_products=mysqli_query($db,$get_product);
    $row_product=mysqli_fetch_array($run_products);	
	$customer_id=$row_product['customer_id'];
		$customer_name_login=$row_product['customer_name'];
		$message_code=$seller_id.$buyer_id.$product_id; 
		

        $get_product_2="select * from message where (seller_id='$customer_id' OR buyer_id='$customer_id') AND product_code='1' ";
            $run_products_2=mysqli_query($db,$get_product_2);
            	
        	while ($row_product_2=mysqli_fetch_array($run_products_2)) {
                $product_id=$row_product_2['product_id'];  
                $seller_id=$row_product_2['seller_id'];
                $buyer_id=$row_product_2['buyer_id'];                
                
                        
                        echo '<div style="background:white;width:650px;padding-top:10px;">';
                    
                        echo '<span style="color:brown;font-weight:bold;padding-left:10px;">'.$product_id.': </span>';
                        
                         	$get_product="select * from products where product_id='$product_id'";
                        	$run_products=mysqli_query($db,$get_product);
                            $row_product=mysqli_fetch_array($run_products);	
                        	$product_title=$row_product['product_title'];
                         echo " 
                            <a href='productdetails.php?product_id=$product_id' ><span style='color:green;font-weight:bold; font-size:20px;'>$product_title.</span></a>";
                            
                            
                        $message_code=$seller_id.$buyer_id.$product_id;    
            	
                        $get_product_3="select * from message where product_id='$product_id' AND (message_code='$message_code') ORDER BY message_id ASC";
                        
                	    $run_products_3=mysqli_query($db,$get_product_3);
                	            echo "<button style='float:right;margin-right:10px;'><a href='ReplyingNow?seller_id=$seller_id&&buyer_id=$buyer_id&&product_id=$product_id' target='_blank'  style='color:green;text-decoration:none;' id='Button1' type='button' value='button' onclick='showModalPopUp()'>Reply</a></button><br>
                	            ";
                	            echo '<p ></p>';
                        
                    	while ($row_product_3=mysqli_fetch_array($run_products_3)) {
                    		$message=$row_product_3['message'];
                     	
                             echo '<div style="background:;width:530px;margin-left:40px;"><i class="fa fa-circle  " style="color:;font-size:10px;"></i><span style="" class=""> '.$message.'</span></div>';
                             
                        }
                        
                    echo '<div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
                        </div>';
                    echo '<div>';
                    
                }
    }
}
             
                             
                             



function my_messages_first(){

global $db;

if (isset($_SESSION['customer_email'])) { 
    $customer_email=$_SESSION['customer_email'];
 
 	$get_product="select * from customers where customer_email='$customer_email'";
	$run_products=mysqli_query($db,$get_product);
    $row_product=mysqli_fetch_array($run_products);	
	$customer_id=$row_product['customer_id'];
		$customer_name_login=$row_product['customer_name'];

                $get_product_2="select * from messages where (customer_id_login='$customer_id' OR customer_id_seller='$customer_id') AND product_code='1'";
            	$run_products_2=mysqli_query($db,$get_product_2);
            	
        	while ($row_product_2=mysqli_fetch_array($run_products_2)) {
                $product_id=$row_product_2['product_id'];  
                $customer_id_seller=$row_product_2['customer_id_seller'];  
                
                if($product_id_new==$product_id){
                    
                    }else{
                        
                        echo '<div style="background:white;width:650px;padding-top:10px;">';
                    
                        echo '<span style="color:brown;font-weight:bold;padding-left:10px;">'.$product_id.': </span>';
                        
                         	$get_product="select * from products where product_id='$product_id'";
                        	$run_products=mysqli_query($db,$get_product);
                            $row_product=mysqli_fetch_array($run_products);	
                        	$product_title=$row_product['product_title'];
                         echo " 
                            <a href='productdetails.php?product_id=$product_id'><span style='color:green;font-weight:bold'>$product_title.</span></a>";
            	
                        $get_product_3="select * from messages where product_id='$product_id' AND (customer_id_login='$customer_id' OR customer_id_seller='$customer_id') ";
                        
                	    $run_products_3=mysqli_query($db,$get_product_3);
                	            echo "<button style='float:right;margin-right:10px;'><a href='ReplyingNow?customer_id_login=$customer_id && customer_id_seller=$customer_id_seller && product_id=$product_id' target='_blank'  style='color:green;text-decoration:none;' id='Button1' type='button' value='button' onclick='showModalPopUp()'>Reply</a></button><br>
                	            ";
                        
                    	while ($row_product_3=mysqli_fetch_array($run_products_3)) {
                    		$message=$row_product_3['message'];
                     	
                             echo '<div style="background:;width:530px;margin-left:40px;"><i class="fa fa-caret-right" style="color:brown;"></i><span style="" class=""> '.$message.'</span></div>';
                             
                        }
                        $product_id_new=$product_id;
                        
                    echo '<div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
                        </div>';
                    echo '<div>';
                    }
                }
    }
}


function getProducts_viewall(){

global $db;
if (!isset($_GET['location'])) {
	$location_dist=$_GET['location'];
	$get_product="select * from products";
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
	
		
	echo "<a href = 'ProductDetailed?product_id=$product_id'>
    <table style='background-color:white;margin-bottom:10px;'>
	<tr>
	<td>
	<div class=' a' style='float:left;width:200px;height:200px;background:white;'>
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
		</style> 
		
			<img src='product_images/$product_image1' class='img-responsive'
			style='	
              width: 100%;
              height: 150px;
              object-fit: cover;
              object-position: 50% 50%;
			     '>
	    </div>
	    
	    <p style=' text-align: center;color:green; font-weight:bold;font-size:20px;padding-top:15px;'>Rs : $product_price</p>	    
	
    </div>
</td>
<td style=''>  

<div style='padding-left:25px;padding-right:30px;width:500px'>
					<div>					
						<span>
							<i class='fa fa-map-marker' style='size:30px;color:black;padding-right:10px; color:grey;'> 
								$location_dist
                            </i>
						</span>
						
						<span style='size:30px;color:black;padding-right:10px; color:grey;float:right;'>
	                        $post_date
	                    </span>	
					</div>
					
			<span class='' style=' font-weight:bold;font-size:20px; 
				 	display: inline-block;
			    width: 100%;
			    white-space: nowrap;
			    min-height: 2em;
				 	max-height: 2em;
			    overflow: hidden;
			    text-overflow: ellipsis;			    
			    color:#1aa515;
			    padding-top:10px;
			 '> $product_title </span>					
					
	<div class='  ' style='
	                background-color:white;
					margin-top:2%; 
					color:brown;         
					line-height: 1.3em;
					min-height: 2.8em;
		 			max-height: 2.8em; 
					overflow: hidden;
		 			text-overflow: ellipsis;font-size:14px;'> 
		 			
					$product_desc
	</div>
	
						<div>					
						<span style='size:30px;color:#5fcaed;padding-right:10px;float:left;font-weight:bold;'>
	                        $product_selling
	                    </span>	
						
						<span style='size:30px;color:#5fcaed;padding-right:10px;float:right;font-weight:bold;'>
	                        $price_type
	                    </span>	
					</div>
					
					
</td>	
</tr>
</table>
</div>	
</a>
";/*to medium 3, small screen 2  products displayed...col 4 und col 6*/
}
}
}
		

?>
<style type="text/css">
	.getProducts_mystore:hover{
								
					box-shadow:  2px 2px 2px 2px #d4d4d4;
			
	}
</style>
<style type="text/css">
	.getProducts:hover{
			box-shadow: inset 0 0 1em gold, 0 0 1em red;

	}
</style>

		
	
