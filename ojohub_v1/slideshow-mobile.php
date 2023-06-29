<?php  
if (isset($_SESSION['customer_email'])) {
	$customer_email_login=$_SESSION['customer_email'];

	$get_productx="select * from customers where customer_email='$customer_email_login'";
	$run_productsx=mysqli_query($db,$get_productx);
	$row_productx=mysqli_fetch_array($run_productsx);


	$customer_id_login=$row_productx['customer_id'];	

}	
?>

<?php  
	if (isset($_GET['product_id'])) {
	$product_id=$_GET['product_id'];
	$get_product="select * from products where product_id='$product_id'";
	$run_products=mysqli_query($db,$get_product);
	$row_product=mysqli_fetch_array($run_products);


	$product_id=$row_product['product_id'];	
	$shop_id=$row_product['shop_id'];
	$customer_id=$row_product['customer_id'];
	$customer_name=$row_product['customer_name'];
	$customer_email=$row_product['customer_email'];
	$product_title=$row_product['product_title'];
	$product_location=$row_product['location'];

	$product_currentprice=$row_product['product_currentprice'];
	$product_reducedamt=$row_product['product_reducedamt'];
	$product_priceafterdis=$row_product['product_priceafterdis'];
	$online_payment=$row_product['online_payment'];
	$pay_on_delivery=$row_product['pay_on_delivery'];
	$availability=$row_product['availability'];
	$product_delivery=$row_product['product_delivery'];

	$product_image1=$row_product['product_image1'];
	$product_image2=$row_product['product_image2'];
	$product_image3=$row_product['product_image3'];

	$product_desc=$row_product['product_desc'];

#..........................................................#
	$get_product="select * from stores where customer_id='$customer_id'";
	$run_products=mysqli_query($db,$get_product);
	$row_product=mysqli_fetch_array($run_products);	

	$shop_contact=$row_product['shop_contact'];	
	$date_of_reg=$row_product['date_of_reg'];
	$shop_name=$row_product['shop_name'];
	$shop_street=$row_product['shop_street'];
	$shop_city=$row_product['shop_city'];
	$shop_district=$row_product['shop_district'];

#................................................#
	$get_product="select * from customers where customer_id='$customer_id'";
	$run_products=mysqli_query($db,$get_product);
	$row_product=mysqli_fetch_array($run_products);	

	$un_verified=$row_product['un_verified'];
	}
?>

<style>
* {box-sizing: border-box}
.mySlides1, .mySlides2 {display: none}
img {vertical-align: middle;}

.slideshow-container {
              width: 700px;
              height: auto;
              object-fit: cover;
              object-position: 50% 50%;
}

.prev, .next {
        background:grey;
  cursor: pointer;
  position:right;
  top: 100%;
  width: auto;
  padding: 16px;
  margin-top: 45px;
  color: white;
  font-weight: bold;
  font-size: 8px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
   margin-left:2%;
    
}

.next {
    background:grey;
  border-radius: 3px 0 0 3px;
  margin-left:83%;
}

.prev:hover, .next:hover {
  background-color: #f1f1f1;
  color: black;
}
</style>

	  <div class='a' style='height:250px;background:#D8DADA;float:left;'>	
	     
    		<style type='text/css'>
    			.a{
    			min-height: 23%; 
    			margin-left:2%;
    			min-width:23%;
    			border: 1px solid #E0E0E0;
    			box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2);
    			border-radius:5px 5px 0px 0px;
    			background-image: linear-gradient(90deg, #a9cbc2 0%, #9FACE6 100%);
    
    			}
    			
    			.a:hover{

    			}
    			
    			.zoom {
                  transition: transform .8s;
                    }
    			.zoom:hover {
                      transform: scale(1.03); 
                    }
    		</style> 
    	
    		
        		<div class="mySlides1 ">
        			<img src='product_images/<?php echo $product_image1 ?>' class='img-responsive'
        			style='	
                      width: auto;
                      height: 250px;
                      object-fit:contain;
                      object-position: 50% 50%;
                      display: block;
                      margin-left: auto;
                      margin-right: auto;
        			     '>
        		</div>
    			     
        		<div class="mySlides1 ">
        			<img src='product_images/<?php echo $product_image2 ?>' class='img-responsive'
        			style='	
                      width: auto;
                      height: 250px;
                      object-fit:contain;
                      object-position: 50% 50%;
                      display: block;
                      margin-left: auto;
                      margin-right: auto;
        			     '>
        		</div>
    			     
        		<div class="mySlides1 ">
        			<img src='product_images/<?php echo $product_image3 ?>' class='img-responsive'
        			style='	
                      width: auto;
                      height: 250px;
                      object-fit:contain;
                      object-position: 50% 50%;
                      display: block;
                      margin-left: auto;
                      margin-right: auto;
        			     '>
        			     
        		</div>
        		
                <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
                <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
	   
	    
<script>
let slideIndex = [1,1];
let slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  let i;
  let x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>
  



