<?php
session_start();
include("includes/db.php");
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



 <?php

if (isset($_SESSION['customer_email'])) { 
  $customer_email=$_SESSION['customer_email'];
  $get_mybasket="SELECT * from mybasket WHERE customer_email='$customer_email'";
    $run_mybasket=mysqli_query($con,$get_mybasket);

    $check_mybasket=mysqli_num_rows($run_mybasket);

   if ($check_mybasket>0) {
         $get_product_mybasket="SELECT * from mybasket where customer_email='$customer_email'";
         $run_products_mybasket=mysqli_query($con,$get_product_mybasket);
         $row_product_mybasket=mysqli_fetch_array($run_products_mybasket);

         $product_id=$row_product_mybasket['product_id'];
         $shop_id=$row_product_mybasket['shop_id'];


         $get_product="SELECT * from products where product_id='$product_id'";
         $run_products=mysqli_query($con,$get_product);
         $row_product=mysqli_fetch_array($run_products);
         $product_title=$row_product['product_title'];
         $product_image1=$row_product['product_image1'];

         $product_currentprice=$row_product['product_currentprice'];
         $product_priceafterdis=$row_product['product_priceafterdis'];
         $discount=$row_product['product_reducedamt'];

         $product_delivery=$row_product['product_delivery'];


         $get_shop="SELECT * from stores where shop_id='$shop_id'";
         $run_shops=mysqli_query($con,$get_shop);
         $row_shop=mysqli_fetch_array($run_shops);

         $shop_name=$row_shop['shop_name'];  
         
      echo "<center>    
         <div style='color:green; font-size:25px;'>       
         Your Basket.
         </div>
         <p style='font-size:16px;font-weight:bold;'>Go Home</p>
            <a href='index.php' style='font-size:16px;font-weight:bold;'>www.ojohub.com</a> 
    
         </center>
         <br>
         <br>


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
   </a>     ";

/*-------------------------------------------*/

    }else{
     echo "<center>    
      <div style='color:green; margin-top: 15%; font-size:25px;'>       
      Your Basket is Empty.
      </div>

      <p style='font-size:16px;font-weight:bold;'>Go Home</p>
            <a href='index.php' style='font-size:16px;font-weight:bold;'>www.ojohub.com</a>     
         </center>";
      }

}else{
echo "<script>alert('Need to login or signup')</script>";
echo "<script>window.open('login.php','_self')</script>";
}
  ?>