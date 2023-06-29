<?php
session_start();
include("includes/db.php");
 ?> 
 <?php
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

<?php
    $customer_email=$_SESSION['customer_email'];
    $get_customer="select * from Customers where customer_email='$customer_email'";
    $run_cust=mysqli_query($con,$get_customer);
    $row_cust=mysqli_fetch_array($run_cust);
    
    $customer_email=$row_cust['customer_email'];
    $customer_id=$row_cust['customer_id'];
    $customer_name=$row_cust['customer_name'];
?>

<?php
    $customer_email=$_SESSION['customer_email'];
    $get_customer="select * from stores where customer_email='$customer_email'";
    $run_cust=mysqli_query($con,$get_customer);
    $row_cust=mysqli_fetch_array($run_cust);
    
    $customer_email=$row_cust['customer_email'];
    $customer_id=$row_cust['customer_id'];
    $customer_name=$row_cust['customer_name'];
    $shop_name=$row_cust['shop_name'];
    $shop_owner=$row_cust['shop_owner'];
    $shop_district=$row_cust['shop_district'];
    $shop_city=$row_cust['shop_city'];
    $shop_street=$row_cust['shop_street'];
    $shop_website=$row_cust['website'];
    $shop_email=$row_cust['shop_email'];
    $shop_contact=$row_cust['shop_contact'];
    $items_services=$row_cust['items_services'];
?>
<table class="mainbody" width="1024" border="0" align="center" cellpadding="0" cellspacing="0">

    <td>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>

<div class="col-md-12">
    <div class="col-md-1">  
    </div>

    <div class="col-md-10"> 

          <div class="box-header">
            <center>
              <h2 style="color: brown;">Update your Store and Promote your Bussiness.</h2>
              <h3></h3>
    
            </center>           
          </div>
          <br>

    <div class="col-md-6"> 
          <form action="update_store.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <i class='fa fa-envelope'></i>
              <label>Registered Email</label>         
              <input style="border: 2px solid #19BC15 ;" type="text" name="reg_email" class="form-control" required="" value="<?php echo $customer_email;  ?>" disabled="" >
            </div>

            <div class="form-group">
              <i class='fa fa-shopping-bag'></i>
              <label>Shop/Company (optional)</label>
              <input style="border: 2px solid #19BC15 ;" style="border: 2px solid #19BC15 ;" type="text" name="shop_name" class="form-control" placeholder="eg. Ojohub Pvt. Ltd." value="<?php echo $shop_name;  ?>" required="">     
            </div>
            <div class="form-group">
              <i class='fa fa-user'></i>
              <label>Owner</label>
              <input style="border: 2px solid #19BC15 ;" type="text" name="owner_name" class="form-control" required="" value="<?php echo $shop_owner; ?>">     
            </div>
            <div class="form-group">
              <i class='fa fa-map-marker'></i>
              <label>Address</label>
              <h5>District</h5>
              <input style="border: 2px solid #19BC15 ;" type="text" name="shop_district" class="form-control" required="" value="<?php echo $shop_district; ?>"> 
          
              <h5>City</h5>
              <input style="border: 2px solid #19BC15 ;" type="text" name="shop_city" class="form-control" required="" value="<?php echo $shop_city; ?>">     
          
              <h5>Street/ZIP</h5>
              <input style="border: 2px solid #19BC15 ;" type="text" name="shop_street" class="form-control" required="" value="<?php echo $shop_street; ?>">   
            </div>

            <div class="form-group">
              <i class='fa fa-globe'></i>
              <label>Website (optional)</label>
              <input style="border: 2px solid #19BC15 ;" type="text" name="website" class="form-control" value="<?php echo $shop_website; ?>">              
            </div>
        
    </div>

    <div class="col-md-6">
            <div class="form-group" >
              <i class='fa fa-envelope'></i>
              <label>Business Email (editable)</label>
              <input style="border: 2px solid #19BC15 ;" type="text" name="shop_email" class="form-control" required="" value="<?php echo $shop_email;  ?>">
            </div>
            
            
            <div class="form-group">
              <i class='fa fa-phone-square'></i>
              <label>Contact Number</label>
              <input style="border: 2px solid #19BC15 ;" type="number" name="shop_contact" class="form-control" required="" value="<?php echo $shop_contact; ?>">           
            </div>

            <div class="form-group">
              <i class='fa fa-home'></i>
              <label>Shop Description incl. Items/Services provided</label>
              <textarea type="text" name="items_services" class="form-control" style="resize: none;height: 15%;border: 2px solid #19BC15 ;"> <?php echo $items_services; ?>  
              </textarea> 
            </div>

            <br>

      <div class="form-group" required>
          <label class="control-label" style="color: brown;"><i class='fa fa-truck' ></i> We have delivery services for the Products.</label>
     
<br>
              <label style="color: blue;padding-left: 160px;">Yes</label> <input type="checkbox" id="vip_button" name="delivery_yes" value="Yes" onclick="changead_vip(this)" required="" />

              <label style="color: blue; padding-left: 10px;">No</label> <input type="checkbox" id="normal_button" name="delivery_no" value="No" onclick="changead_normal(this)" required="" />

              <script type="text/javascript">     
              function changead_vip(vipcheckbox){       
                  if(vipcheckbox.checked){             
                      document.getElementById("normal_button").disabled = true;
                  } else{            
                      document.getElementById("normal_button").disabled = false;
                  }
              }
              </script>
              <script type="text/javascript">     
              function changead_normal(normalcheckbox){       
                  if(normalcheckbox.checked){            
                      document.getElementById("vip_button").disabled = true;
                  } else{            
                      document.getElementById("vip_button").disabled = false;
                  }
              }
              </script> 
              <?php         
                      if(isset($_POST['delivery_yes'])){
                      $delivery=$_POST['delivery_yes'];          
                      
                     }
                   ?> 

              <?php         
                      if(isset($_POST['delivery_no'])){
                      $delivery=$_POST['delivery_no'];          
                      
                     }
                   ?> 
    </div>

          <div class="form-group">                  
              <label>
              <i class='fa fa-dot-circle-o'></i>          
              Possible Payment System for the Product.
              </label>

              <br>

<div class="form-group" required>
          <i class='fa fa-credit-card' style="padding-left: 20px;"></i>
              Online Payment
     
              <label style="color: blue;padding-left: 20px;">Yes</label> <input type="checkbox" id="vip_button1" name="onlinepmt_yes" value="Yes" onclick="changead_vip1(this)" required="" />

              <label style="color: blue;padding-left: 10px;">No</label> <input type="checkbox" id="normal_button1" name="onlinepmt_no" value="No" onclick="changead_normal1(this)" required="" />

              <script type="text/javascript">     
              function changead_vip1(vipcheckbox){       
                  if(vipcheckbox.checked){             
                      document.getElementById("normal_button1").disabled = true;
                  } else{            
                      document.getElementById("normal_button1").disabled = false;
                  }
              }
              </script>
              <script type="text/javascript">     
              function changead_normal1(normalcheckbox){       
                  if(normalcheckbox.checked){            
                      document.getElementById("vip_button1").disabled = true;
                  } else{            
                      document.getElementById("vip_button1").disabled = false;
                  }
              }
              </script> 
              <?php         
                      if(isset($_POST['onlinepmt_yes'])){
                      $online_payment=$_POST['onlinepmt_yes'];          
                      
                     }
                   ?> 

              <?php         
                      if(isset($_POST['onlinepmt_no'])){
                      $online_payment=$_POST['onlinepmt_no'];          
                      
                     }
                   ?> 
    <br>
          <i class='fa fa-money' style="padding-left: 20px;"></i>
              Pay on Delivery     
              <label style="color: blue;padding-left: 20px;">Yes</label> <input type="checkbox" id="vip_button2" name="pay_on_delivery_yes" value="Yes" onclick="changead_vip2(this)" required="" />

              <label style="color: blue;padding-left: 10px;">No</label> <input type="checkbox" id="normal_button2" name="pay_on_delivery_no" value="No" onclick="changead_normal2(this)" required="" />

              <script type="text/javascript">     
              function changead_vip2(vipcheckbox){       
                  if(vipcheckbox.checked){             
                      document.getElementById("normal_button2").disabled = true;
                  } else{            
                      document.getElementById("normal_button2").disabled = false;
                  }
              }
              </script>
              <script type="text/javascript">     
              function changead_normal2(normalcheckbox){       
                  if(normalcheckbox.checked){            
                      document.getElementById("vip_button2").disabled = true;
                  } else{            
                      document.getElementById("vip_button2").disabled = false;
                  }
              }
              </script> 
              <?php         
                      if(isset($_POST['pay_on_delivery_yes'])){
                      $pay_on_delivery=$_POST['pay_on_delivery_yes'];          
                      
                     }
                   ?> 

              <?php         
                      if(isset($_POST['pay_on_delivery_no'])){
                      $pay_on_delivery=$_POST['pay_on_delivery_no'];          
                      
                     }
                   ?> 
    </div>

      </div>
    <div class="text-center">
    <button type="submit" name="update" class="login-btn-login-page" style=" color: white; width: 160px; height: 40px; font-weight: bold; font-size: 15px;">
    Update Store                
    </button>             
    </div>  

          </tr>      
        </table>

   <?php
if (isset($_POST['update'])) {
    $c_email=$_POST['reg_email'];
    $shop_name=$_POST['shop_name'];
    $owner_name=$_POST['owner_name'];
    $shop_district=$_POST['shop_district'];
    $shop_city=$_POST['shop_city'];
    $shop_street=$_POST['shop_street'];
    $website=$_POST['website'];
    $shop_email=$_POST['shop_email'];
    $shop_contact=$_POST['shop_contact'];
    $items_services=$_POST['items_services'];

    $date = date("Y.m.d");

    $verification_key=md5(time().$shop_name);

    $update_customer1= "update stores set shop_name='$shop_name', shop_owner='$shop_owner',shop_district='$shop_district',shop_city='$shop_city',shop_street='$shop_street',website='$website',shop_email='$shop_email',shop_contact='$shop_contact',items_services='$items_services',delivery='$delivery',pay_on_delivery='$pay_on_delivery',online_payment='$online_payment' where customer_email='$customer_email'";
      $run_customer1=mysqli_query($con,$update_customer1);

   if($run_customer1){
    echo "<script>alert('Your details updated.')</script>";
    echo "<script>window.open('logout.php','_self')</script>";
  }
}

?>