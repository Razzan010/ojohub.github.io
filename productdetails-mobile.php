<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        
    }else{
        header('Location: http://www.store.ojohub.com/Home');        
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

<body style="background:white;">

    
<?php
    if (isset($_SESSION['customer_email'])) {
	$customer_email=$_SESSION['customer_email'];
    }
?>

<?php  
if (isset($_SESSION['customer_email'])) {
	$customer_email_login=$_SESSION['customer_email'];

	$get_productx="select * from customers where customer_email='$customer_email_login'";
	$run_productsx=mysqli_query($db,$get_productx);
	$row_productx=mysqli_fetch_array($run_productsx);

	$customer_idx=$row_productx['customer_id'];
	$customer_name_login=$row_productx['customer_name'];	

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
	$customer_id_other=$row_product['customer_id'];
	$customer_name=$row_product['customer_name'];
	$customer_email=$row_product['customer_email'];
	$customer_phone=$row_product['customer_phone'];
	
	$location_dist=$row_product['location_dist'];
	$location_city=$row_product['location_city'];
	$location_street=$row_product['location_street'];
	$location_ward=$row_product['location_ward'];
	
	$product_title=$row_product['product_title'];
	$category_id=$row_product['category_id'];
	$post_date=$row_product['post_date'];
	
	$product_price=$row_product['product_price'];
	$price_type=$row_product['price_type'];
	$product_selling=$row_product['product_selling'];
	$product_buying=$row_product['product_buying'];
	
	
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
	$get_product_2="select * from products where customer_id='$customer_id_other'";
	$run_products_2=mysqli_query($db,$get_product_2);
	$row_product_2=mysqli_fetch_array($run_products_2);

    $product_count=mysqli_num_rows($run_products_2);

#..........................................................#
	$category_id=$row_product['category_id'];
    $count_num_digits=strlen($category_id);
    
        if($count_num_digits==5){
            $category_id_new='0'.$category_id;
        }else{
            $category_id_new=$category_id;            
        }
        
	$get_category="select * from category where category_id='$category_id_new'";
	$run_category=mysqli_query($db,$get_category);
	$row_category=mysqli_fetch_array($run_category);	

	$category=$row_category['category'];	
	$sub_category=$row_category['sub_category'];
	$type=$row_category['type'];

#..........................................................#
	$get_product="select * from stores where customer_id='$customer_id_other'";
	$run_products=mysqli_query($db,$get_product);
	$row_product=mysqli_fetch_array($run_products);	

	$shop_contact=$row_product['shop_contact'];	

	$shop_name=$row_product['shop_name'];
	$shop_street=$row_product['shop_street'];
	$shop_city=$row_product['shop_city'];
	$shop_district=$row_product['shop_district'];

#................................................#
	$get_productxx="select * from customers where customer_id='$customer_id_other'";
	$run_productsxx=mysqli_query($db,$get_productxx);
	$row_productxx=mysqli_fetch_array($run_productsxx);	

	$date_of_reg_pd_po=$row_productxx['date_of_reg'];
	$un_verified=$row_productxx['un_verified'];
	
	}
?>	
      
<div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
</div>



<div style="padding-right:10px;padding-bottom:100px;">
    <div class="box-header">
    	<h4 class="text-muted " style="color: green; font-weight: bold;padding-left:5px;"><i class="fa fa-dashcube" ></i> <?php echo $category; ?></h4>
    </div>
    
<div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
</div> 

<div>
    <?php
        include 'slideshow-mobile.php';
    ?>
    
 <div style="width:100%;height:1px;background-color:;margin-top:10px;margin-bottom:10px;">
</div>    

<div style="background:white;width:100%;">
   <div style="background:;margin-top:0px;">
        <p style='
              color:black;
              font-weight:bold;
              font-family:Arial, serif;
              padding-top:10px;
              font-size:20px;
 
            '>
                <?php echo $product_title ?>
        </p>
            
<div style="width:95%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
</div>        

        <div style=';padding-top:5px;color:green;font-size:20px;font-family:Arial, serif;font-weight:bold;'>
               Rs: <?php echo $product_price; ?> <span style="color:#2f5ff0;font-size:13px;"><?php echo "( ".$price_type." )" ?></span>
        </div>	 

         <div style='padding-top:5px;color:grey;font-size:16px;font-family:Arial, serif;'><i class="fa fa-map-marker" style="color:black;"></i>
               <?php 
               if($location_ward==0){
               echo $location_dist." ".$location_city." ".$location_street;
               }else{
               
               echo $location_dist." ".$location_city." ".$location_street." -  ".$location_ward;               
               }
            	?>
        </div>
            
           <div style='padding-top:7px;padding-bottom:10px;color:grey;font-size:16px;font-family:Arial, serif;;'>
                <i class="fa fa-calendar-check-o" style="color:black;"></i> <?php echo $post_date ;?>  
                
            <?php 
            	$get_views="select * from products where product_id='$product_id'";
            	$run_views=mysqli_query($db,$get_views);
            	$row_views=mysqli_fetch_array($run_views);	
            	$views_count = $row_views['views_count'];	
            
                $update_views="update products set views_count=$views_count + 1 where product_id='$product_id'";
            	$run_update_views=mysqli_query($con,$update_views);
            ?>
            
                <i class="fa fa-eye"  style='float:right;margin-right:50px;color:black;'> <?php echo $views_count ?>  </i> 
                
            </div>            
    </div>        
    

           <Button style='color:grey;font-size:16px;font-family:Arial, serif;width:100%;font-weight:bold;' class='btn btn-default' onclick="topFunction()" id="myBtn">
            <i class="fa fa-envelope-o " style='margin-right:5px;'> </i>Send Message
            </button>
  
<div style="height:10px;">
</div>  
  
    <form action="" method="post" style="align-content: center;"> 
          <Button style='color:grey;font-size:16px;font-family:Arial, serif;width:100%;font-weight:bold;' class='btn btn-default form-group' name="favourite">
            <i class="fa fa-star-o  " style='margin-right:5px;'> </i>Add to Favourite
            </button>
    </form>  

    <div style="height:5px;background:">
    </div> 
        
       <div style="">
           <Button style='color:grey;font-size:16px;font-family:Arial, serif;width:100%;font-weight:bold;' class='btn btn-default' >
            <i class="fa fa-share-square-o  " style='margin-right:5px;'> </i>Share Article 
            </button>
        </div> 
        
 <br>
 

		<?php
			 if (isset($_SESSION['customer_email'])) {
					echo " 	<br> <button class='btn btn-default' style='font-weight: bold; float:right;border:none;color:grey;font-size:16px;font-family:Arial, serif;width:100%;font-weight:bold;'class='open-button' name='open-button' onclick='openForm()'><i class='fa fa-exclamation-triangle' style='margin-right:5px;'> </i>Report this Article </button><br><br>";
				 }else{
								 	
			echo "<a href ='EnteringNow-m'><button class='btn btn-default' style='font-weight: bold; float:right;border:none;color:grey;font-size:16px;font-family:Arial, serif;width:100%;font-weight:bold;'class='open-button' name='open-button'><i class='fa fa-exclamation-triangle' style='margin-right:5px;'> </i>Report this Article </button></a>";
					}
			?>

        <br>
        <br>
        

   <div style="background:;">
            <h3 style='
              color:grey;
              font-weight:bold;
              font-family:Arial, serif;'>
            </h3>
            
           <div style='margin-top:5px;color:grey;font-size:16px;font-family:Arial, serif;padding-top:15px;'>
               <span style="color:black;font-weight:bold;"><i class="fa fa-caret-right" ></i>
              Category </span> <?php echo $category; ?>
            </div>
            
           <div style='margin-top:5px;color:grey;font-size:16px;font-family:Arial, serif;padding-top:15px;'>
               <span style="color:black;font-weight:bold;"><i class="fa fa-caret-right" ></i>
              Sub-Category </span> <?php echo $sub_category; ?>
            </div>            
            
           <div style='margin-top:5px;color:grey;font-size:16px;font-family:Arial, serif;padding-top:15px;'>
               <span style="color:black;font-weight:bold;"><i class="fa fa-caret-right" ></i>
              Type </span> 
             <?php 
               if(empty($type)){
               echo "--";
               }else{
               
               echo $type;;               
               }
            ?>  
            </div>
            
    </div>   
    <br>
    
   <div style="background:;">
        <h4 style='
              color:grey;
              font-weight:bold;
              font-family:Arial, serif;
              padding-top:20px;
            '>
                Description
        </h4>	
            
<div style="width:95%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
</div>           

        <div style='margin-top:5px;color:black;font-size:16px;font-family:Arial, serif;padding-bottom:20px;'>
               <?php
               echo $product_desc;
               ?>
        </div>
</div>      

   <div style="background:;margin-top:20px;padding-bottom:50px;">
        <h4 style='
              color:grey;
              font-weight:bold;
              font-family:Arial, serif;
              padding-top:20px;
            '>
                Send Message
        </h4>
        
<div style="width:95%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
</div>
	
<br>


    <form action="" method="post" style="">
        <div style="width: ;">
        	<i class='fa fa-pencil-square-o'></i>
        	<span>Message</span>
        	<br>
        	
            <textarea name="message" class="form-control" style="max-width:100%;min-width:100%; height: 40%;  border: 2px solid #19BC15 ;" required></textarea> 
            <br>
        	<span>Name</span>
        	<br>
        	<input style="border: 2px solid #19BC15 ;" type="text" name="product_city_new" class="form-control" value="<?php echo $customer_name_login; ?> ">  
    	<br>
    	<p>By sending Messages you accept our Terms & Conditions and Privacy Policies. You can read them on particular pages of the site.</p>
    
                   <Button style='margin-top:5px;font-weight:bold;color:green;font-size:16px;font-family:Arial, serif;float:right;margin-right:50px;border:solid green 2px;' class='btn btn-default' name='message_btn' >
                  <i class="fa fa-envelope-o " style='margin-right:5px;'> </i> Send Message
                </button>
        </div>
        
    </form> 
</div>

<?php#--------------------Right side ----------------#?>

        
        
<?php#---------------- To Bottom scroll - Message -------------#?> 

<script>
    var mybutton = document.getElementById("myBtn");
    
    function topFunction() {
      document.body.scrollTop = 900;
      document.documentElement.scrollTop = 900;
    }
</script>

    <div style="height:15px;background:;"></div>
    
    <div style="">
       <div style="background:;width:100%;">
           <div>
               <br>
                <span style="color:green;font-weight:bold;padding-left:50px;font-size:18px;"><?php echo $customer_name; ?></span>

               <br>
               <br>
               <span style="padding-left:50px;font-weight:bold;">Active since : <?php echo $date_of_reg_pd_po; ?> </span>
               <br> 
               <br>
               <span style="padding-left:50px;font-weight:bold;">Status </span>
               <?php 
						if ($un_verified=='Verified') {		
							echo "<label>: Verified <i class='fa fa-check-circle' style='color: green;'></i></label> ";
						}else{
							echo "<label>: Unverified <i class='fa fa-times-circle' style='color: brown;'></i></label>
							<br>
					        ";
						}
				?>
				
				<br>
               <br>
                <?php 
                     if (isset($_SESSION['customer_email'])) {
                     echo "<span style='padding-left:50px;font-weight:bold;'><i class='' style='color:green;'></i>  $customer_phone
                     </span>";                         
                     }else{
                     echo "<span style='padding-left:50px;font-weight:bold;'><i class='fa fa-phone-square' style='color:green;'></i>  9841...</span><a href='EnteringNow-m'>show</a>
                     ";  
                     }
                ?>
	 	               
           </div>

        <div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
        </div>  

        <div>
<form action="" method="post" style="">             
            <a href="YourStore-m?customer_id=<?php echo $customer_id_other; ?>" style="padding-left: 6px;"><?php echo $product_count; ?> Articles Online</a>
 
           <Button style='color:grey;font-size:16px;font-family:Arial, serif;width:50%;font-weight:bold;margin: 5px 5px 5px 10%;' class='btn btn-default form-control' name="follow">
                <i class="fa fa-user-plus " style='margin-right:5px;'> </i>Follow 
            </button>  
</form>            
        </div>  
        
        </div>
    </div>    

        <div style="height:15px;background:"></div>
        
    <div style="padding-left:50px;">
        <div style="background:"></div>  
           <div style="background:;text-align:center;height:40px;">
           <span style='margin-top:5px;color:grey;font-size:16px;font-family:Arial, serif;font-weight:bold;' >
               <br>
               Post Id : SP-<?php echo $product_id; ?>
               <br>
            </span>
            <div style="background:;padding-left:50px;">
        </div> 
    </div>   
    
        <div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
        </div>
        



<?php #------------------Report ----------------------#?>

<style>
		.form-popup {
		  display: none;
		  position: fixed;    
         z-index: 99999;
            width: 100%;
            height: 100%;
         
            top: 0%;
            left: 0%;
            background-color: black;
            color: black;
            opacity: 0.9;
            filter: alpha(opacity=100); 

</style>
				<script>
					function openForm() {
					  document.getElementById("myForm").style.display = "block";
					}

					function closeForm() {
					  document.getElementById("myForm").style.display = "none";
					}
				</script>

				<div class="col-md-12 form-popup" id="myForm" >
					  <form action="" method="post" style="align-content: center;">
    					 <div class="col-md-3">
    					 </div>
					  	<div class="col-md-6">					  		
					  		<h1 style="color: red; margin-left: 18%;">Reporting This Ad</h1>
					  	
					    	<select style="font-weight: bold;margin-bottom: 60px;; padding-top: 10px; width: 100%; align-content: center; font-size: 20px;" class="report_option" size="1" id="report_option" name="report_option" required="" onchange="enableReportbtn()">
					    		<option value="">Please Select</option>
					    		<option>Spam</option>
					    		<option>False Category</option>
					    		<option>Fraud</option>
					    		<option>Illigal Item</option>
					    		<option>Other Reason</option>		    		
					    	</select>

						<script type="text/javascript">
							    function enableReportbtn()
							{
							    var selectelem = document.getElementById('report_option');
							    var btnelem = document.getElementById('report_btn');
							    btnelem.disabled = !selectelem.value;
							}
						</script>

					    	<br>
					    	<textarea name="report_reason" class="form-control" rows="6" cols="19" placeholder="Please, give your reason here with Maximum Character of 150." maxlength="150" style="width: 100%;height: 150px;color: black; font-size: 20px; font-weight: bold; background-color: ;resize: none; "></textarea>
					    	<br>				    

						<button  id="report_btn" disabled="" class="btn btn-default" name="report" style="color: red; font-weight: bold;">Report</button>						  
					    <button  class="btn cancel" onclick="closeForm()" style="color: red; float: right; font-weight: bold;">Close</button>
					 </div>
					  	
				 <div class="col-md-3">
				 </div>
					    
			</form>
			

<?php
    if (isset($_POST['report'])) {
		$report_option=htmlspecialchars($_POST['report_option']);
		$report_reason=htmlspecialchars($_POST['report_reason']);
					
        $insert_customer="insert into reported_products (reported_ad_id,report_options,reported_ad_status,report_reasons,reporters_id)values('$product_id','$report_option','reported','$report_reason','$customer_id_login')";
		    $run_customer=mysqli_query($con,$insert_customer);
                        
			echo "<script>alert('Thank you for your report, we will go through this article.')</script>";			
						  }
						
	?>
</div>	

<?php#--<a href="#" onclick="share_fb('https://store.ojohub.com/productdetails.php?product_id=92');return false;" rel="nofollow" share_url="http://urlhere.com/test/55d7258b61707022e3050000" target="_blank">  <i class="uk-icon-facebook uk-float-left"></i>Share</a>#?>

    <script>
        function share_fb(url) {
      window.open('https://www.facebook.com/sharer/sharer.php?u='+url,'facebook-share-dialog',"width=626, height=436")
    }
    </script>

	<br><br><br><br><br><br><br>

</div>
</div>
</div>


<?php 
#------------------Sending Messages ---------------------#

    if (isset($_POST['message_btn'])) {
	    $message=$_POST['message'];
	          
            	  if($customer_idx % 2 == 0){
                    $message='<span style="font-weight:bold;color:orange;">'.$customer_name_login. '</span>'.' <i class="fa fa-caret-right" style="color:brown;" ></i> ' .htmlspecialchars($message);
                }else{
                    $message='<span style="font-weight:bold;color:blue">'.$customer_name_login. '</span>'.' <i class="fa fa-caret-right" style="color:brown;" ></i> ' .htmlspecialchars($message);
                    		    
                }
                             $counter = $int_counter+1;
                             $counter=$int_counter;
      
	    
            if (isset($_SESSION['customer_email'])) {
                
                $get_products_2="select * from message where (seller_id='$customer_id_login' OR buyer_id='$customer_id_login') AND (product_id='$product_id' AND product_code='1')";                

                $run_products_2=mysqli_query($db,$get_products_2);
                $row_products_2=mysqli_fetch_array($run_products_2);
                $count_products=mysqli_num_rows($run_products_2); 
                
                $message_code=$customer_id_other.$customer_id_login.$product_id;
                
            if($count_products<1){   
            $insert_customer_message="insert into message (message_code,seller_id,buyer_id,product_id,product_code,message)values('$message_code','$customer_id_other','$customer_id_login','$product_id','1','$message')";
    		$run_customer=mysqli_query($con,$insert_customer_message); 
            }else{
            $insert_customer_message="insert into message (seller_id,buyer_id,product_id,product_code,message)values('$customer_id_other','$customer_id_login','$product_id','0','$message')";
    		$run_customer=mysqli_query($con,$insert_customer_message);                 
                
            }
 
            }else{
                echo '<script type ="text/JavaScript">';  
                echo 'alert("You need to login to Send Message the Seller to.")';  
                echo '</script>';                 
                
            }
    }
    
?>

<?php 
#------------------Message Notification ---------------------#

    if (isset($_POST['message_btn'])) {
	    $message=$_POST['message'];
	    
        if (isset($_SESSION['customer_email'])) {
                
        	$update_message_notify= "UPDATE customers set message_notify='1'where customer_email='$customer_email'";
        
        	$run_customer=mysqli_query($con,$update_message_notify);           
                
            }
    }
?>


<?php 
#------------------Favourite-------------------------------#

    if (isset($_POST['favourite'])) {
	    $favourite=$_POST['favourite'];
	    
            if (isset($_SESSION['customer_email'])) {
            	$customer_email=$_SESSION['customer_email'];
	            $get_customer="select * from customers where customer_email='$customer_email'";
	            $run_customer=mysqli_query($db,$get_customer);
                $row_customer=mysqli_fetch_array($run_customer);
	            $customer_id=$row_customer['customer_id'];
	            
	            $get_products="select * from favourite where product_id='$product_id' && customer_id='$customer_id'";
                $run_products=mysqli_query($db,$get_products);
                $count_products=mysqli_num_rows($run_products);	
                
                if($count_products==0){
                echo '<script type ="text/JavaScript">';  
                echo 'alert("Product imported to your List of Favourite.")';  
                echo '</script>';                     
	            
    	            $insert_customer="insert into favourite (customer_id,product_id)values('$customer_id','$product_id')";
    		        $run_customer=mysqli_query($con,$insert_customer);
                    }else{
                    echo '<script type ="text/JavaScript">';  
                    echo 'alert("This Product is already imported to your List of Favourite.")';
                    echo '</script>';                    
                }
	    
            }else{
                echo '<script type ="text/JavaScript">';  
                echo 'alert("You need to login for importing this Product to your List of Favourite.")';  
                echo '</script>';        
            }
    }
    
?>


<?php 
#------------------Follow-------------------------------#

    if (isset($_POST['follow'])) {
	    $favourite=$_POST['follow'];
	    
            if (isset($_SESSION['customer_email'])) {
            	$customer_email=$_SESSION['customer_email'];
	            $get_customer_f="select * from customers where customer_email='$customer_email'";
	            $run_customer_f=mysqli_query($db,$get_customer_f);
                $row_customer_f=mysqli_fetch_array($run_customer_f);
	            $customer_id_f=$row_customer_f['customer_id'];
	            
	            $get_products_followed="select * from follow where customer_id='$customer_id' && customer_id_followed='$customer_id_other'";
                $run_products_followed=mysqli_query($db,$get_products_followed);
                $count_products_followed=mysqli_num_rows($run_products_followed);	
                
                if($count_products_followed==0){
                echo '<script type ="text/JavaScript">';  
                echo 'alert("Seller following successful !")';  
                echo '</script>';                     
	            
    		        $insert_customer="insert into follow (customer_email,customer_id,customer_id_followed)values('$customer_email','$customer_id','$customer_id_other')";
    		        $run_customer=mysqli_query($con,$insert_customer);
                    }else{
                    echo '<script type ="text/JavaScript">';  
                    echo 'alert("This Seller is already followed !")';
                    echo '</script>';                    
                }
                
            }else{
                echo '<script type ="text/JavaScript">';  
                echo 'alert("You need to login for following this Seller.")';  
                echo '</script>';        
            }
    }
?>

          <?php
              include 'bottom_bar-mobile.php';         
            ?>

</div></div>

</body>