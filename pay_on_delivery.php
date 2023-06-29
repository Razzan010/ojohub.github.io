<?php
session_start();
include("includes/db.php");
 ?> 
 <?php
        include 'functions.php'; 
?> 


<!--------------------------------->

<table class="mainbody" width="90%" border="0" align="center" cellpadding="0" cellspacing="0">

    <td>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <?php
              include 'topbar2_stores.php';         
            ?> 
          </tr>      
        </table>


<!--------------------------------------------->
 


<div class="mg-l-16 p-relative tran-02s home-search-wrap only-in-desk-md" style="padding-top: 10px; color: white; font-weight: bold; text-align: center;">
    <h4 style="color: white; font-weight: bold;">Pay on Delivery</h4>


</div>







<?php  
  if (isset($_GET['product_id'])) {
  $product_id=$_GET['product_id'];
  $get_product="select * from products where product_id='$product_id'";
  $run_products=mysqli_query($db,$get_product);
  $row_product=mysqli_fetch_array($run_products);


    $product_id=$row_product['product_id'];
    $shop_id=$row_product['shop_id'];

    $product_id=$row_product['product_id'];
    $product_title=$row_product['product_title'];
    $product_image1=$row_product['product_image1'];

    $product_currentprice=$row_product['product_currentprice'];
    $product_priceafterdis=$row_product['product_priceafterdis'];
    $discount=$row_product['product_reducedamt'];

    $product_delivery=$row_product['product_delivery'];



  $get_shop="select * from stores where shop_id='$shop_id'";
  $run_shops=mysqli_query($db,$get_shop);
  $row_shop=mysqli_fetch_array($run_shops);


  $shop_name=$row_shop['shop_name'];  
  }
?>  









<?php  
    if (isset($_SESSION['customer_email'])) {
      $customer_email=$_SESSION['customer_email'];

    $get_customer="select * from customers where customer_email='$customer_email'";
  $run_customer=mysqli_query($db,$get_customer);
  $row_customer=mysqli_fetch_array($run_customer);


  $customer_name=$row_customer['customer_name'];
    $customer_id=$row_customer['customer_id'];

}
?>  


<div class="col-md-12" style="text-align: center; ">
  <h3>Pay on Delivery (Home Delivery)</h3>

  <div class="col-md-1">    
  </div>


<div class="col-md-10" style="border: solid 5px #bdecd9;">
  <?php  
    echo " <a href='productdetails.php?product_id=$product_id' style='text-decoration:none;'>




  <div class='br-r-8 md-space  tran-008s p-relative m-b-20 col-md-3 col-xs-3 col-sm-3  ' style='background: #F8FDFB;margin-left: 1%; height: 250px; width:48%;margin-left:5%; margin-top:3%;border: solid 1px #bdecd9;>

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

                  style=' max-height:180px;
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
?>    

<table width="100%" height="50" style="margin-bottom: 1%;">


  <h4 style="font-weight: bold;color: green;"><?php echo $shop_name; ?></h4> 
  <br>
  Customer: <?php 
  if (isset($_SESSION['customer_email'])) {
    echo $customer_name;
   }else{
    echo "<a href='login.php'> Login now! </a>";
   } 
    ?>
  <br>
  Product: <a href="#"> <?php echo $product_title; ?></a>
  <br>
  Product Id: <?php echo $product_id; ?>
  <br>
  Transaction Code: <?php echo  $customer_id ?><?php echo  $product_id ?> 

  <tr height="30">
    <th bgcolor="silver">&nbsp;</th>
    <th bgcolor="silver">Title</th>
    <th bgcolor="silver">Costs</th>
    <th bgcolor="silver">Discounts</th>
  </tr>

  <tr height="30">
    <th bgcolor="" style="text-align: center;">1.</th>
    <td>Product cost</td>
    <td><?php echo "Rs.".$product_priceafterdis; ?></td>
    <td><?php echo "Rs.".$discount; ?></td>
  </tr>

  <tr height="30">
    <th bgcolor="" style="text-align: center;">2.</th>
    <td bgcolor="">Delivery Charge</td>
    <td bgcolor=""> <?php echo $product_delivery; ?></td>
    <td bgcolor=""> <?php echo $product_delivery; ?> </td>  
  </tr>

  <tr height="30">
    <th bgcolor="" style="text-align: center;">3.</th>
    <td>Service Charge</td>
    <td> <?php echo "Rs.5"; ?> </td>
    <td> <?php echo "---"; ?></td>
  </tr>

  <tr style=""> 
    <tr height="30">
    <th bgcolor="">&nbsp;</th>
    <th bgcolor=""></th>
    <th bgcolor="silver" >Total cost</th>
    <th bgcolor="silver"><?php echo ""; ?>Rs.34404</th>
  </tr>

</table>


<form action="" method="post" style="text-align: left;">
 
    <h4 style="color: green;font-weight: bold;padding-top: 10px;">Delivery Address and Contact Details</h4>
            <div class="form-group col-md-6">
              <i class='fa fa-map-marker'></i>
              <label>Address</label>
              <h5>District</h5>
              <input type="text" name="shop_district" maxlength="20" class="form-control" required="">  
          
              <h5>VDC/Municipality/Metropolitan</h5>
              <input type="text" name="shop_city" maxlength="25" class="form-control" required=""> 
     
              
         
              <h5>Tole</h5>
              <input type="text" name="shop_street" maxlength="30" class="form-control" required="">

              <h5>Ward no.</h5>
              <input type="text" name="shop_street" maxlength="30" class="form-control" required="">    
   
         </div> 

      <div class="col-md-6">
            <div class="form-group" style="padding-top: 35px;">
              <i class='fa fa-shopping-bag'></i>
              <label>Contact No.</label>
              <input type="text" name="shop_name" class="form-control" placeholder="..." required="">     
            </div>

            <div class="form-group">
              <i class='fa fa-envelope'></i>
              <label>Email</label>         
              <input type="text" name="reg_email" class="form-control" required="" value="<?php echo $customer_email;  ?>" disabled >  

               <button class="btn btn-primary" style="margin-top: 20px;background-color: green;margin-left: 40%;" name="confirm">Confirm</button>           
            </div>

          

      </div>   
      </div> 
      </form> 

  <div class="col-md-1">    
  </div>
  




  <!---------------Email Sending----------------->
  <?php $a='http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>

<?php
if (isset($_SESSION['customer_email'])) {
  $customer_email=$_SESSION['customer_email'];

  

  if(isset($_POST['confirm'])){
 // $c_email=$_POST['c_email'];
 


        $to=$customer_email;
        $subject="Your Ojohub Order-Confirmation";
        $message=" 

<h2 style='font-weight: bold;color: green; text-align:center;width:100%; background-color:lightgreen'>Ojohub.com</h2> 

    👋 Hallo $customer_name,
    <br>
  We would like to inform you that, we have received your order.Your Order details is stored on our server as below.


<h1 style='font-weight: bold;color: green; text-align:center;width:100%; background-color:lightgreen;height:4px;'></h1> 

        <h4 style='font-weight: bold;color: green; text-align:center;'>$shop_name</h4> 

  <h4 style='font-weight: bold;color: green;'><?php echo $shop_name; ?></h4> 
  
  Customer: $customer_name 
  <br>
  Product: <a href='#''> $product_title</a> (View Product)
  <br>
  Product Id: $product_id 
  <br>  
  Transaction Code: $product_id


  <table width='100%' height='50' style='margin-bottom: 1%;'>



  <tr height='30'>
    <th bgcolor='silver'>&nbsp;</th>
    <th bgcolor='silver'>Title</th>
    <th bgcolor='silver'>Costs</th>
    <th bgcolor='silver'>Discounts</th>
  </tr>

  <tr height='30'>
    <th bgcolor='' style='text-align: center;'>1.</th>
    <td>Product cost</td>
    <td> Rs.$product_priceafterdis </td>
    <td>Rs.$discount </td>
  </tr>

  <tr height='30'>
    <th bgcolor='' style='text-align: center;'>2.</th>
    <td bgcolor=''>Delivery Charge</td>
    <td bgcolor=''> $product_delivery </td>
    <td bgcolor=''> $product_delivery  </td>  
  </tr>

  <tr height='30'>
    <th bgcolor='' style='text-align: center;'>3.</th>
    <td>Service Charge</td>
    <td> Rs.5 </td>
    <td> ---</td>
  </tr>

  <tr style=''> 
    <tr height='30'>
    <th bgcolor=''>&nbsp;</th>
    <th bgcolor=''></th>
    <th bgcolor='silver' >Total cost</th>
    <th bgcolor='silver'><?php echo ''; ?>Rs.34404</th>
  </tr>

</table>


<p style='color:blue;font-weight:bold;'>You received this Email as you choose payment option as Pay on Delivery. </p>

<h4 style='font-weight: bold;color: green;width:100%; background-color:lightgrey;height:auto;'>
<div style='margin-left:5%;'>
  Order will be completed after you received your product followed by payment.
</div>  
</h4>




<h5 style='font-weight: bold;color: blue; width:100%; height:4px;'>Your Sincerly, 
<br>
Your Ojohub Team
</h5>


";        


        $headers="From: ojohub20@gmail.com \r\n";
        $headers .="MIME-Version: 1.0" . "\r\n";
        $headers .="Content-type:text/html;charset=UTF-8"."\r\n";

        mail($to, $subject, $message,$headers);

  }
}else{
  echo "<script> alert('Please login to complete your order.') </script>";
}


?>





