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

<div style="min-width:50;padding-bottom:65px;">

<?php

$customer_email=$_SESSION['customer_email'];
$get_customer="select * from customers where customer_email='$customer_email'";
$run_cust=mysqli_query($con,$get_customer);
$row_cust=mysqli_fetch_array($run_cust);

$customer_email=$row_cust['customer_email'];
$customer_id=$row_cust['customer_id'];
$customer_name=$row_cust['customer_name'];
$customer_phone=$row_cust['customer_phone'];

$customer_dist=$row_cust['customer_dist'];
$customer_city=$row_cust['customer_city'];
$customer_street=$row_cust['customer_street'];
$customer_ward=$row_cust['customer_ward'];
?>

<?php

$customer_email=$_SESSION['customer_email'];
$get_product="select * from products where customer_email='$customer_email'";
$run_product=mysqli_query($con,$get_product);
$row_product=mysqli_fetch_array($run_product);

$product_dist=$row_product['location_dist'];
$product_city=$row_product['location_city'];
$product_street=$row_product['location_street'];
$product_ward=$row_product['location_ward'];


?>

<div style="background:white;">
<div class="" style="padding-top: 10px;padding-left: 5%;width: 95%;height:100%;">

    <div class="box-header">
    		<h4 class="text-muted " style="color: green; font-weight: bold;"> Search by Location </h4>
    </div>
    
    <div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
    </div> 

      <div class='dropdown-content'> 

          <a href='Products-m?location=Kathmandu' class='btn btn-default' style='color: purple;font-size:18px;border:2px solid green;'> Kathmandu</a>  

          <a href='Products-m?location=Lalitpur' class='btn btn-default' style='color: purple;font-size:18px;border:2px solid green;margin-top: 5px;'> Lalitpur</a>  
          
          <a href='Products-m?location=Bhaktapur' class='btn btn-default' style='color: purple;font-size:18px;border:2px solid green;margin-top: 5px;'> Bhaktapur</a>  

          <a href='Products-m?location=Pokhara' class='btn btn-default' style='color: purple;font-size:18px;border:2px solid green;margin-top: 5px;'> Pokhara</a>  

          <a href='Products-m?location=Butwal' class='btn btn-default' style='color: purple;font-size:18px;border:2px solid green;margin-top: 5px;'> Butwal</a>  
          
          <a href='Products-m?location=Biratnagar' class='btn btn-default' style='color: purple;font-size:18px;border:2px solid green;margin-top: 5px;'> Biratnagar</a>  

          <a href='Products-m?location=Nepalgunj' class='btn btn-default' style='color: purple;font-size:18px;border:2px solid green;margin-top: 5px;'> Nepalgunj</a>  
          
          <a href='Products-m?location=Dhangadhi' class='btn btn-default' style='color: purple;font-size:18px;border:2px solid green;margin-top: 5px;'> Dhangadhi</a>  
          
          <a href='Products-m?location=Janakpur' class='btn btn-default' style='color: purple;font-size:18px;border:2px solid green;margin-top: 5px;'> Janakpur</a>  
          

          <a href='Products-m?location=Narayangarh' class='btn btn-default' style='color: purple;font-size:18px;border:2px solid green;margin-top: 5px;'> Narayangarh</a>    
          
          <a href='Products-m?location=Dharan' class='btn btn-default' style='color: purple;font-size:18px;border:2px solid green;margin-top: 5px;'> Dharan</a>             
                               
          </div> 
          
<br>
<br> 

    <div class="box-header">
    		<h4 class="text-muted " style="color: green; font-weight: bold;"> Advanced Search </h4>
    </div>
    
    <div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
    </div> 

    <div class="" style="padding-top: 10px;">
        <span>Advanced Search Funtionality coming soon !</span>
    </div>
    
</div>
</div>   

<div style="height:100px;">
</div>  

          <?php
              include 'bottom_bar-mobile.php';         
            ?>

</body>











