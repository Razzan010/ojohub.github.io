
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
<div class="" style="padding-top: 10px;padding-left: 5%;width: 95%;">
    <?php
    	if (isset($_GET['category_id'])) {
    	$category_id=$_GET['category_id'];
        $get_category="select * from category where category_id='$category_id'";
        $run_category=mysqli_query($con,$get_category);	
    	$row_category=mysqli_fetch_array($run_category);
    	$category=$row_category['category'];    
    	$sub_category=$row_category['sub_category'];
    	$type=$row_category['type']; 
    	}
    ?>    

    Best place to list your new or second-hand product. It is free , simple and unlimited. This platform can be used as a Job-portal as well. Find your appropriate Job on Job Category.
  <h3 style="color:green;">How does it works?</h3>
  
  <div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
    </div> 
    
<p style="font-weight:bold;">
  
  1. Find the desired <span style="color:brown;text-decoration:underline;">Brand New or Second Hand </span>Product by browsing through categories or by searching on the search box. <br><br>
  2. If you come across an approriate Product, you can call the seller directly if the seller has shared his/her Telephone number or you can write a direct message.<br><br>
  3. Only the seller and buyer can deceide the price of the Product. Ojohub team does not involve in Price detemination but helps to find and solve fake seller.<br><br>
  4. Users can create an Account using Email Address and for Posting an Ad User needs to have a verified Account. We recommend all the Users to verify their Accounts for maximum Benefits.
</p> 

  
<h3 class='blink';>Be aware of Fraud !</h3>
<br>
    <div>
        <a href="feedbacks-mobile.php"><button style="float:left;color:green;border:2px solid green;">Send Feedback</button></a> 
        
        <a href="https://www.facebook.com/store.ojohub"><button style="float:right;color:blue;border:2px solid green;">Follow us on Facebook</button></a>
    </div>
    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
    <br>
    <br>
    <br>
    <p style="texz-align:center;">
        Copyright © 2018-2022. OjOhub All rights reserved.
    </p>


    <div style="height:65px;">
    </div>

</div>
</div>
    <?php
        include 'bottom_bar-mobile.php';         
    ?>

</body>

    <style>
      .blink {
        animation: blink-animation 1s steps(5, start) infinite;
        -webkit-animation: blink-animation 1s steps(5, start) infinite;
      }
      @keyframes blink-animation {
        to {
          visibility: hidden;
        }
      }
      @-webkit-keyframes blink-animation {
        to {
          visibility: hidden;
        }
      }
    </style>   









