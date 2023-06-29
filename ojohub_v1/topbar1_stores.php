<head>
<title>My Store</title>
</head>

    <?php
      session_start();
      include("includes/db.php");
    ?> 
    
<table class="mainbody" width="1024" border="0" align="center" cellpadding="0" cellspacing="0">

    <td>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>

      <td bgcolor="lightblue" style="padding-left: 5px;border-radius:10px 0px 0px 10px;">
          
<form action="YourSearch" method="GET" name="">
        <input class="" name='search' type="search" placeholder="Search Products..." class="home-input av-roman home-search" style="padding: 6px 16px 7px 42px; border: 2px solid #19BC15 ;width: 200px;float: left;">
        
        <button  style="border: 2px solid #19BC15 ;font-size: 15px;float: left;margin-left: 5px;" name = '' class="btn btn-primary" value=''> 
            Search
        </button>
    
</form>  

<?php
      
    if (isset($_GET['submit-search'])){
        
        $search= mysqli_real_escape_string($con, $_GET['search']);
        
        $get_reviews="SELECT * FROM products WHERE product_title LIKE '%$search%'";
        $run_reviews=mysqli_query($con,$get_reviews);
        $reviews_count=mysqli_num_rows($run_reviews);
        
        if ($reviews_count > 0){
        	while ($row_reviews=mysqli_fetch_array($run_reviews)){
        		$product_id=$row_reviews['product_id'];	
        		echo "It's Working but under construction."."<br>";
        	} 
        }
    }    
?>

  <div class="dropdown" style="padding-top:1px;">
            <a href="#" style="color:green;border-radius: 5px;float: left; margin-left: 5px;font-weight: bold;" class="btn btn-default login-text">Locations <i class="fa fa-chevron-circle-down (dropdown)"></i>
            </a> 

        <div class='dropdown-content'> 

          <a href='Products?location=Kathmandu' class='' style='color: purple;font-size:18px;'> Kathmandu</a>  

          <a href='Products?location=Lalitpur' class='' style='color: purple;font-size:18px;'>Lalitpur</a> 

          <a href='Products?location=Bhaktapur' class='' style='color: purple;font-size:18px;'>Bhaktapur</a> 

          <a href='Products?location=Pokhara' class='' style='color: purple;font-size:18px;'>Pokhara</a> 

          <a href='Products?location=Butwal' class='' style='color: purple;font-size:18px;'>Butwal</a>
          
          <a href='Products?location=Biratnagar' class='' style='color: purple;font-size:18px;'>Biratnagar</a> 

          <a href='Products?location=Nepalgunj' class='' style='color: purple;font-size:18px;'>Nepalgunj</a> 
          
          <a href='Products?location=Dhangadhi' class='' style='color: purple;font-size:18px;'>Dhangadhi</a> 
          
          <a href='Products?location=Janakpur' class='' style='color: purple;font-size:18px;'>Janakpur</a> 
          
          <a href='Products?location=Narayangarh' class='' style='color: purple;font-size:18px;'>Narayangarh</a> 
          
          
          <a href='Products?location=Dharan' class='' style='color: purple;font-size:18px;'>Dharan</a>           

          </div>  
  </div>

      </td>  

      <td bgcolor="lightblue" style="border-radius:0px 10px 10px 0px;"> 
      
        <?php 
  
        if (isset($_SESSION['customer_email'])) {
            $customer_email_1=$_SESSION['customer_email'];
         
             $sel_cart_1="select * from customers where customer_email='$customer_email_1' && message_notify='1'";
             $run_customer_1=mysqli_query($con,$sel_cart_1);
              $check_cart_1=mysqli_num_rows($run_customer_1); 

            if ($check_cart_1==1) {      
      
                echo "<a href='Messages'><i class='fa fa-comments' style='color:blue;font-weight:bold;padding-top:7px;'> New Message !</i></a>";
            }
        }
        ?>
 
        <?php 
       /*
        if (isset($_SESSION['customer_email'])) {
         $customer_email1=$_SESSION['customer_email'];
         $sel_cart1="select * from stores where customer_email='$customer_email'";
         $run_customer1=mysqli_query($con,$sel_cart1);
          $check_cart1=mysqli_num_rows($run_customer1); 

            if ($check_cart1>0) {
            echo "<div class='' >
              <h4><a href='shopdetails.php' style='font-weight: bold;float: right;padding-right:10px;padding-bottom:8px;color:green;text-decoration:none;'>My Account <i class='fa fa-user-circle' style='font-size:15px;></i></a> </h4>             
             </div> 

            ";
            }else{     
            echo "<div class='' >
              <h4><a href='EnteringNow' style='font-weight: bold;float: right;padding-right:10px;padding-bottom:8px;color:green;text-decoration:none;'> Account <i class='fa fa-user-circle' style='font-size:15px;></i></a> </h4>          
             </div> 
                          ";
            } 
        }else{
        echo "<div class='' >
            <h4 '><a href='EnteringNow' style='font-weight: bold;float: right;padding-right:10px;padding-bottom:8px;color:green;text-decoration:none;'> Account <i class='fa fa-user-circle'style='font-size:15px;' ></i></a> </h4>           
             </div> 
                       ";
            } 
            */
           ?>

          <!-- <span style="color:Green;border-radius: 5px;" class="btn btn-default">View by Products</span> 
          -->

    <?php
    if (isset($_SESSION['customer_email'])) {
        $customer_email=$_SESSION['customer_email'];
        $sel_cart="select * from customers where customer_email='$customer_email'";
        $run_customer=mysqli_query($con,$sel_cart);
        $row_customer=mysqli_fetch_array($run_customer);
        $check_cart=mysqli_num_rows($run_customer); 
        
        $un_verified=$row_customer['un_verified'];
                
       if($un_verified==Verified){
            echo "
        <div class='dropdown ' style='float:right;'>
            <a href='OwnAccount' style='color:green;font-weight: bold;text-decoration: none;float:right;margin-right:10px;background:#ADD8E6;font-size:16px;border:none;' class='btn btn-default login-text'>My Account <i class='fa fa-user-circle' style='font-size:20px;'></i> 
            </a> ";

           echo " 
           <div class='dropdown-content'>
              <a href='Messages' class='' style='color: purple;font-size:18px;'> Messages</a>  
              <a href='OwnStore' class='' style='color: purple;font-size:18px;'>My Store</a> 
              <a href='Favourites' class='' style='color: purple;font-size:18px;'>Favourite Articles</a> 
              <a href='Followed' class='' style='color: purple;font-size:18px;'>Stores I Follow</a>           
              </div>  
        </div>";
     
  
        echo "
            <a href='Uploading-Product' style='color:purple;font-weight: bold;text-decoration: none;float:right;margin-right:15px;margin-top:8px;'>Post your AD
                <i class='fa fa-plus-square' style='font-size:20px;'></i>
              </a>               
            ";
       }else{
            echo "
        <div class='dropdown ' style='float:right;'>
            <a href='OwnAccount' style='color:green;font-weight: bold;text-decoration: none;float:right;margin-right:10px;background:#ADD8E6;font-size:16px;border:none;' class='btn btn-default login-text'>My Account <i class='fa fa-user-circle' style='font-size:20px;'></i>
            </a> ";

           echo " 
           <div class='dropdown-content'>
              <a href='Messages' class='' style='color: purple;font-size:18px;'> Messages</a>  
              <a href='OwnStore' class='' style='color: purple;font-size:18px;'>My Store</a> 
              <a href='Favourites' class='' style='color: purple;font-size:18px;'>Favourite Articles</a> 
              <a href='Followed' class='' style='color: purple;font-size:18px;'>Stores I Follow</a>           
              </div>  
        </div>";
     
  
        echo "
            <a href='OwnAccount' style='color:purple;font-weight: bold;text-decoration: none;float:right;margin-right:15px;margin-top:8px;'>Post your AD
                <i class='fa fa-plus-square' style='font-size:20px;'></i>
              </a>               
            ";          
       }
        
    }else{
                
         echo "
        <div class='dropdown ' style='float:right;'>
            <a href='EnteringNow' style='color:green;font-weight: bold;text-decoration: none;float:right;margin-right:10px;background:#ADD8E6;font-size:16px;border:none;' class='btn btn-default login-text'>My Account <i class='fa fa-user-circle' style='font-size:20px;'></i>
            </a> 

            <div class='dropdown-content'>
              <a href='EnteringNow' class='' style='color: purple;font-size:18px;'> Messages</a>  
              <a href='EnteringNow' class='' style='color: purple;font-size:18px;'>My Store</a> 
              <a href='EnteringNow' class='' style='color: purple;font-size:18px;'>Favourite Articles</a> 
              <a href='EnteringNow' class='' style='color: purple;font-size:18px;'>Stores I Follow</a>           
              </div>  
            </div>     
       
        <a href='EnteringNow' style='color:purple;font-weight: bold;text-decoration: none;float:right;margin-right:15px;margin-top:8px;'> Post your AD 
            <i class='fa fa-plus-square' style='font-size:20px;'></i>
        </a> 
        ";
        } 
    ?>     
  
</td>
</table>


<table border="0" width="100%" cellspacing="0" cellpadding="2" valign="top"><tr><td width="100%" valign="top">
            
          </td>
          <td bgcolor="#CFC8EF"><img src="spacer.gif" width="1" height="1"></td>
        </tr>
        <tr> 
          <td><img src="spacer.gif" width="1" height="1"></td>
          <td width="100%" bgcolor="#CFC8EF"><img src="spacer.gif" width="1" height="1"></td>
          <td><img src="spacer.gif" width="1" height="1"></td>
        </tr>
</table>

<div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
</div>
