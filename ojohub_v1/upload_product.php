<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        header('Location: http://www.store.ojohub.com/Uploading-Product-m');
    }
?>

<body style="background:#F4F4F4;">
    
<?php
session_start();
include("includes/db.php");

include 'functions.php';
include("redirect_desktop.php");

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
<div class="text-center" style="padding-top: 10px;">
<table class="mainbody" width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <td>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
              
<div class="box-header">
		<h4 class="text-muted " style="color: green; font-weight: bold;"> Product Details</h4>
</div>
<div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
</div> 

<form action="upload_product.php" method="post" class="form-group" enctype="multipart/form-data">

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
  
<div class="form-group col-md-12">
    
    <a href="Selecting-Category">
    	<i class='fa fa-pencil-square' style="color:black;"></i>
    	
    	<label style="color:black;">Product Category </label>
    	 <span style="float:right;" class='blink';>Select Category Here </span>
    	<br>
    	<div class="col-md-4" style="color:black;">
    	    Category :
    	    <input style="border: 2px solid #19BC15 ;color:orange;font-weight:bold;" value="<?php echo $category?>" type="text" name="category" class="form-control" style="font-weight: bold;" required="">
    	</div>
        
        <div class="col-md-4" style="color:black;">
            Sub-category :
            <input style="border: 2px solid #19BC15 ;color:orange;font-weight:bold;" value="<?php echo $sub_category?>" type="text" name="category" class="form-control" style="font-weight: bold;" required="" >
        </div>
        
        <div class="col-md-4" style="color:black;">
            Type :
            <input style="border: 2px solid #19BC15 ;color:orange;font-weight:bold;" value="<?php echo $type?>" type="text" name="category" class="form-control" style="font-weight: bold;" >  
        </div>
</a>
   
    <div class="" style="display:none;">

        <label>Category Id</label>
        <input style="border: 2px solid #19BC15 ;color:orange;font-weight:bold;" value="<?php echo $category_id ?>" type="text" name="category_id" class="form-control" style="font-weight: bold;" required="" >
    </div>
</div>    

<div class="form-group">
	<label>
    	<i class='fa fa-dot-circle-o'></i>
    	Selling/Buying
	</label>
	<br>
	
	<i class='fa fa-credit-card'></i>
	I am Selling.<input type="checkbox" onclick="myFunction()" name="product_selling" id="product_selling" value="Yes" style="margin-left: 80px;" checked="">
	<br>
	<i class='fa fa-money'></i>					
	I am Buying.<input type="checkbox" onclick="myFunction()" name="product_buying" id="product_buying" value="Yes" style="margin-left: 82px;" disabled="">
						
		<?php 
			if(isset($_POST['product_selling'])){
				$product_selling="Selling";      
			}else{
				$product_selling=" ";      
			}
		?> 
		
		<?php 
			if(isset($_POST['product_buying'])){
			    $product_buying="Searching";      
			}else{
				$product_buying=" ";      
			}
		?> 	
		
		<?php 
			if(!isset($_POST['product_buying']) and ($_POST['product_buying'])){
			    $product_buying="Searching";      
			}
		?> 	
</div> 


<script type="text/javascript">
    $(function () {
        $("#product_selling").click(function (product_selling) {
            if ($(this).is(":checked")) {
                $("#product_buying").attr("disabled", "disabled");
                $("#product_buying").focus();
            } else {
                $("#product_buying").removeAttr("disabled");
            }
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $("#product_buying").click(function (product_buying) {
            if ($(this).is(":checked")) {
                $("#product_selling").attr("disabled", "disabled");
                $("#product_selling").focus();
            } else {
                $("#product_selling").removeAttr("disabled");
            }
        });
    });
</script>


<br>
<div class="form-group">
	<i class='fa fa-pencil-square'></i>
	<label>Product Title</label>
	<input style="border: 2px solid #19BC15 ;" type="text" name="product_title" class="form-control" style="font-weight: bold;" required="" >
</div>

<div class="col-md-12 form-group">					
	<i class='fa fa-gg'></i>
	<label>Price</label>
	<br>
	<div class="col-md-2" style="">
	Rs:
    </div>
    <div class="col-md-5">	
    	<input style="border: 2px solid #19BC15 ;margin-top:5px;" type="number" name="product_price" id="num1" class="form-control" style="width: 30%;" required="" >
    </div>	
    <div class="col-md-5">
        <select name="color" id="color" class="form-control"  style="border: 2px solid #19BC15 ;margin-top:5px;">
            <option value="Fixed" selected>Fixed</option>            
            <option value="Negotiable">Negotiable</option>

            <option value="As a gift">As a Gift</option>
        </select> 
        
        <?php
            $color = filter_input(INPUT_POST, 'color', FILTER_SANITIZE_STRING);
        ?>
        <?php  $price_type=$color ?> 
     </div>    
</div>

<div>
	<i class='fa fa-pencil-square-o'></i>
	<label>Product Description</label>
        <textarea name="product_desc" class="form-control" style="width: 100%; height: 15%;   border: 2px solid green ;resize: none;" required></textarea> 	
</div>

<br>
<br>
<div class="form-group">
	<i class='fa fa-picture-o'></i>
	<label>Product Images (Max. 3 Images) </label>
<br>
	
	<P style="border: 1px solid; color: green;">Required
	    <input style="border: 2px solid #19BC15 ;" type="file" name="image1" class="form-control" placeholder="required" style="padding-left: 15px;" required="">
	</P>	
							<br>
	<P style="border: 1px solid; color: green;">Optional
		<input style="border: 2px solid #19BC15 ;" type="file" name="image2" class="form-control" placeholder="optional" style="padding-left: 15px;">
	</p>	
							<br>
	<P style="border: 1px solid; color: green;">Optional
		<input style="border: 2px solid #19BC15 ;" type="file" name="image3" class="form-control" placeholder="optional" style="padding-left: 15px;">
	</p>	
</div>


<br>
    
<label><i class="fa fa-map-marker" aria-hidden="true"> </i> Product Address </label>
<div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
</div>

<div class="form-group">
	<label>District</label>					
	<input style="border: 2px solid #19BC15 ;" autocomplete="off" type="text" name="product_dist_new" class="form-control" required="" value="" >			
</div>

<div class="form-group">
	<label>City</label>
	<input style="border: 2px solid #19BC15 ;" type="text" name="product_city_new" class="form-control" value="<?php echo $customer_city; ?> ">
</div>
<div class="form-group">
	<label>Street</label>
	<input style="border: 2px solid #19BC15 ;" type="text" name="product_street_new" class="form-control" value="<?php echo $customer_street; ?> " >
</div>
<div class="form-group">
	<label>Ward</label>
	<input style="border: 2px solid #19BC15 ;" type="text" name="product_ward_new" class="form-control" value="<?php echo $customer_ward; ?> "> 
</div>


<br>
<label>Your Infos </label>
<br>
<div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
</div>

<div class="form-group">
	<i class='fa fa-envelope'></i>
	<label>Email</label>					
	<input style="border: 2px solid #19BC15 ;" autocomplete="off" type="email" name="reg_email" class="form-control" required="" value="<?php echo $customer_email;  ?>" disabled="" >			
</div>

<div class="form-group">
	<i class='fa fa-user'></i>
	<label>Name</label>					
	<input style="border: 2px solid #19BC15 ;" autocomplete="off" type="" name="reg_email" class="form-control" required="" value="<?php echo $customer_name;  ?>" disabled="" >			
</div>

<div class="form-group">
	<i class='fa fa-phone-square'></i>
	<label>Telephone Number </label>					
	<input style="border: 2px solid #19BC15 ;" autocomplete="off" type="" name="customer_phone_new" class="form-control"  value="<?php echo $customer_phone;  ?>">				
</div>


<div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
</div> 

<div class="form-group">
	<label>
	<i class='fa fa-dot-circle-o'></i>
	Can be deliver to the address?
	<input  type="checkbox" name="delivery" value="Yes" style="margin-left: 47px;">
	</label>
	
	<?php 
	    if(isset($_POST['delivery'])){
			$delivery="Yes";      
		}else{
			$delivery="No";      
		}
	?> 
</div>


<div class="form-group" style="text-align: center;">
	<button  class="login-btn-login-page " name="submit" style="font-weight: bold;width: auto;color: white;">
			Upload Article               
	</button>
</div>
</form>

<?php
if (isset($_POST['submit'])) {  
    
    $product_dist_new=htmlspecialchars($_POST['product_dist_new']);
    $product_city_new=htmlspecialchars($_POST['product_city_new']);
    $product_street_new=htmlspecialchars($_POST['product_street_new']);
    $product_ward_new=htmlspecialchars($_POST['product_ward_new']);
    $customer_phone_new=htmlspecialchars($_POST['customer_phone_new']);
    
    $product_title=htmlspecialchars($_POST['product_title']);
    $category_id=$_POST['category_id'];
    $post_date = date("Y.m.d");
    
    $product_price=htmlspecialchars($_POST['product_price']);
    $product_desc=htmlspecialchars($_POST['product_desc']);
    
		$image2=$_FILES['image2']['name'];
		$image2_tmp=$_FILES['image2']['tmp_name'];

		$image3=$_FILES['image3']['name'];
		$image3_tmp=$_FILES['image3']['tmp_name'];	

		    $sel_cart="select * from products where customer_email='$customer_email'";
		    $run_customer=mysqli_query($con,$sel_cart);
		    $check_cart=mysqli_num_rows($run_customer);

	if (empty($image2 )) {
		if (empty($image3)) {
		    
		    $img_code_1=rand(10000,99999);
            $image1=$img_code_1.$_FILES['image1']['name'];
    		$image1_tmp=$_FILES['image1']['tmp_name'];	
		    move_uploaded_file($image1_tmp, "product_images/$image1");    		
    
            $insert_customer="insert into products(customer_id,customer_name,customer_email,customer_phone,location_dist,location_city,location_street,location_ward,product_title,category_id,post_date,product_price,price_type,product_delivery,product_selling,product_buying,product_image1,product_image2,product_image3,product_desc) values('$customer_id','$customer_name','$customer_email','$customer_phone','$product_dist_new','$product_city_new','$product_street_new','$product_ward_new','$product_title','$category_id','$post_date','$product_price','$price_type','$delivery','$product_selling','$product_buying','$image1','default_product.png','default_product.png','$product_desc')";
            $run_customer=mysqli_query($con,$insert_customer);
            
            }else{
                
		    $img_code_1=rand(10000,99999);
            $image1=$img_code_1.$_FILES['image1']['name'];
    		$image1_tmp=$_FILES['image1']['tmp_name'];	
		    move_uploaded_file($image1_tmp, "product_images/$image1");          
                
            $img_code_3=rand(10000,99999);   
    		$image3=$img_code_3.$_FILES['image3']['name'];
    		$image3_tmp=$_FILES['image3']['tmp_name'];
    		move_uploaded_file($image3_tmp, "product_images/$image3");

             $insert_customer="insert into products(customer_id,customer_name,customer_email,customer_phone,location_dist,location_city,location_street,location_ward,product_title,category_id,post_date,product_price,price_type,product_delivery,product_selling,product_buying,product_image1,product_image2,product_image3,product_desc) values('$customer_id','$customer_name','$customer_email','$customer_phone','$product_dist_new','$product_city_new','$product_street_new','$product_ward_new','$product_title','$category_id','$post_date','$product_price','$price_type','$delivery','$product_selling','$product_buying','$image1','default_product.png','$image3','$product_desc')";
            $run_customer=mysqli_query($con,$insert_customer);                
                
            }
    	}elseif (empty($image3)) {
			if (!empty($image2)) {  
			    
		    $img_code_1=rand(10000,99999);
            $image1=$img_code_1.$_FILES['image1']['name'];
    		$image1_tmp=$_FILES['image1']['tmp_name'];	
		    move_uploaded_file($image1_tmp, "product_images/$image1");          
                
            $img_code_2=rand(10000,99999);   
    		$image2=$img_code_2.$_FILES['image2']['name'];
    		$image2_tmp=$_FILES['image2']['tmp_name'];
    		move_uploaded_file($image2_tmp, "product_images/$image2");		    
			    
             $insert_customer="insert into products(customer_id,customer_name,customer_email,customer_phone,location_dist,location_city,location_street,location_ward,product_title,category_id,post_date,product_price,price_type,product_delivery,product_selling,product_buying,product_image1,product_image2,product_image3,product_desc) values('$customer_id','$customer_name','$customer_email','$customer_phone','$product_dist_new','$product_city_new','$product_street_new','$product_ward_new','$product_title','$category_id','$post_date','$product_price','$price_type','$delivery','$product_selling','$product_buying','$image1','$image2','default_product.png','$product_desc')";
            $run_customer=mysqli_query($con,$insert_customer);
            
		        }
    	}else{
    	    
		    $img_code_1=rand(10000,99999);
            $image1=$img_code_1.$_FILES['image1']['name'];
    		$image1_tmp=$_FILES['image1']['tmp_name'];	
		    move_uploaded_file($image1_tmp, "product_images/$image1");          
                
            $img_code_2=rand(10000,99999);   
    		$image2=$img_code_2.$_FILES['image2']['name'];
    		$image2_tmp=$_FILES['image2']['tmp_name'];
    		move_uploaded_file($image2_tmp, "product_images/$image2");	
    		
            $img_code_3=rand(10000,99999);   
    		$image3=$img_code_3.$_FILES['image3']['name'];
    		$image3_tmp=$_FILES['image3']['tmp_name'];
    		move_uploaded_file($image3_tmp, "product_images/$image3");    		
    	   
             $insert_customer="insert into products(customer_id,customer_name,customer_email,customer_phone,location_dist,location_city,location_street,location_ward,product_title,category_id,post_date,product_price,price_type,product_delivery,product_selling,product_buying,product_image1,product_image2,product_image3,product_desc) values('$customer_id','$customer_name','$customer_email','$customer_phone','$product_dist_new','$product_city_new','$product_street_new','$product_ward_new','$product_title','$category_id','$post_date','$product_price','$price_type','$delivery','$product_selling','$product_buying','$image1','$image2','$image3','$product_desc')";
            $run_customer=mysqli_query($con,$insert_customer);    	    
    	}
    	    
}
?>
    
             <div class="col-md-12">
                <?php  
                    include 'footer.php'; 
                 ?>  
             </div>    
                 
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