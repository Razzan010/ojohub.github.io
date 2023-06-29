<body style="background:#F4F4F4;">

    <?php
      session_start();
      include("includes/db.php");
      include 'functions.php'; 
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

<table width="100%" border="0" cellspacing="0" cellpadding="3">
    <tr > 
       <td valign="top"> 

            <table class="catwid" id="tab_cat" width="260" border="0" cellpadding="0" cellspacing="0" bordercolor="#FF9933">
              <tr >
                <td ><i class="fa fa-dashcube" ></i></td>
                <td >
                    
            <font size="" face="Arial, Helvetica, sans-serif">
                <strong style="float:left;"> 
                  &nbsp; Reply Message Now
                </strong>
            </font>
        </td>

            <font size="" face="Arial, Helvetica, sans-serif">
                <strong style="float:right;"> 
                 Second-hand Products
                </strong>
            </font>
        </tr>

    <table width="100%" border="0" cellspacing="2" cellpadding="2">
    </div>  
    
 <div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
</div>

 <?php 
     $product_id=$_GET['product_id'];
        $get_product="select * from products where product_id='$product_id'";
        $run_products=mysqli_query($db,$get_product);
        $row_product=mysqli_fetch_array($run_products);	
        $product_title=$row_product['product_title'];
     echo "<h4 style='font-weight:bold;'>";    
     echo "<span style='color:brown'>$product_id : </span>";
     echo $product_title;
     echo "</h4>"; 
?>

<table width="100%" border="0" cellspacing="0" cellpadding="6">
    <tr> 
       <td valign="top"> 

            <table class="catwid" id="tab_cat" width="260" border="0" cellpadding="0" cellspacing="0" bordercolor="#FF9933">

    <?php #-------------- Replying Message -----------------# ?>
            
            <form action="" method="post" style="">           
            <div style="float:left; width:600px;padding-left:20px;">
        	    <span style="font-weight:bold;color:brown;">Message</span>
        	    <br>
                <textarea name="message" class="form-control" style="max-width:100%;min-width:100%; height: 120px;  border: 2px solid #19BC15 ;margin-top:10px;" required></textarea>   
                
               <Button style='margin-top:25px;font-weight:bold;color:green;font-size:16px;font-family:Arial, serif;width:40%;float:left;margin-right:50px;border:solid green 2px;' class='btn btn-default' name='message_btn' >
                  <i class="fa fa-envelope-o " style='margin-right:5px;'> </i> Send Message
                </button>
            </div>
            </form>     
                
    <br>
    </td>
    </tr>       
    
    </td>
    </tr>
</table>

<?php
    if (isset($_SESSION['customer_email'])) {
    	$customer_email=$_SESSION['customer_email'];
    	
    	$get_productx="select * from customers where customer_email='$customer_email'";
    	$run_productsx=mysqli_query($db,$get_productx);
    	$row_productx=mysqli_fetch_array($run_productsx);
    
    	$customer_id=$row_productx['customer_id'];	
    }
?>
    
<?php
    #-------------- Replying Message -----------------#
    
    $seller_id=$_GET['seller_id'];
    $buyer_id=$_GET['buyer_id'];
    $product_id=$_GET['product_id'];
    
        $get_products_2="select * from customers where customer_id='$customer_id' ";
        $run_products_2=mysqli_query($db,$get_products_2);
        $row_products_2=mysqli_fetch_array($run_products_2); 
        $customer_name_login=$row_products_2['customer_name'];
        
         $message_code=$seller_id.$buyer_id.$product_id; 

    if (isset($_POST['message_btn'])) {
	    $message=$_POST['message'];
	    
	    	  if($customer_id % 2 == 0){
                    $message='<span style="font-weight:bold;color:orange;">'.$customer_name_login. '</span>'.' <i class="fa fa-caret-right" style="color:brown;" ></i> ' .htmlspecialchars($message);
                }else{
                    $message='<span style="font-weight:bold;color:blue">'.$customer_name_login. '</span>'.' <i class="fa fa-caret-right" style="color:brown;" ></i> ' .htmlspecialchars($message);
                    		    
                }
                             $counter = $int_counter+1;
                             $counter=$int_counter;
	    
            if (isset($_SESSION['customer_email'])) {
                
            $insert_customer_message="insert into message (message_code,seller_id,buyer_id,product_id,product_code,message)values('$message_code','$seller_id','$buyer_id','$product_id','0','$message')";
    		$run_customer=mysqli_query($con,$insert_customer_message); 
 
            }else{
                echo '<script type ="text/JavaScript">';  
                echo 'alert("You need to login to reply this Message.")';  
                echo '</script>';                 
                
            }
    }    
    
?>    

<?php 
    #------------------Message Notification ----------------------#

    $seller_id=$_GET['seller_id'];
    $buyer_id=$_GET['buyer_id'];
    $product_id=$_GET['product_id'];

    if (isset($_POST['message_btn'])) {
	    $message=$_POST['message'];
	    
        if (isset($_SESSION['customer_email'])) {
            
            if($customer_id==$seller_id){
            	$update_message_notify= "UPDATE customers set message_notify='1' where customer_id='$buyer_id'";
            	$run_customer=mysqli_query($con,$update_message_notify); 
            }else{
            	$update_message_notify= "UPDATE customers set message_notify='1' where customer_id='$seller_id'";
            	$run_customer=mysqli_query($con,$update_message_notify);                 
            }
            }
        }
        
?>