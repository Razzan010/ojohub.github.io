<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        
    }else{
        header('Location: http://www.store.ojohub.com/OwnAccount');        
    }
?>

<?php
    session_start();
    include("includes/db.php");
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

<body style="background:#F4F4F4;">
    
<?php
    if (isset($_SESSION['customer_email'])) {
	$customer_email=$_SESSION['customer_email'];
    }
?>

<div style="width:100%;height:3px;background:white;margin-top:10px;margin-bottom:10px;">
</div>

<?php 

 if (isset($_SESSION['customer_email'])) {

    $customer_email=$_SESSION['customer_email'];
    $sel_cart="select * from customers where customer_email='$customer_email'";
    $run_customer=mysqli_query($con,$sel_cart);
    $row_customer=mysqli_fetch_array($run_customer);
    $check_cart=mysqli_num_rows($run_customer); 
    
    $customer_name=$row_customer['customer_name'];
    $customer_id=$row_customer['customer_id'];
    $date_of_reg=$row_customer['date_of_reg'];
    
    $sel_cart_2="select * from products where customer_id='$customer_id'";
    $run_customer_2=mysqli_query($con,$sel_cart_2);
    $row_customer_2=mysqli_fetch_array($run_customer_2);
    $check_cart_2=mysqli_num_rows($run_customer_2); 
     
    }    
?>

<table class="table-a">
  <tr class="tr-a">
        <td>
            <a href="OwnAccount-m" style="color:orange;">
                <i class="fa fa-user-o" aria-hidden="true"></i>
            </a>        
        </td>
        <td>
            <a href="OwnStore-m">
                <i class="fa fa-square-o" aria-hidden="true"></i>
            </a>        
        </td>
        <td>
            <a href="Favourites-m">
                <i class="fa fa-heart-o" aria-hidden="true"></i>
            </a>            
        </td>
        <td>
            <a href="Followed-m">
                <i class="fa fa-plus-square-o" aria-hidden="true"></i>
            </a>        
        </td>
        <td>
        <a href="Settings-m">
            <i class="fa fa-cogs" aria-hidden="true"></i>
        </a>             
        </td>
  </tr>
  
  <tr class="tr-b">
    <td class="td-a" style="color:orange;">Profile</td>
    <td class="td-a">Store</td>
    <td class="td-a">Favourites</td>
    <td class="td-a">Follows</td>
    <td class="td-a">Settings</td>
  </tr>
</table>  

<style>
    .table-a{
        width:95%;
        margin-left:3%;
        margin-right:5%;
        margin-top:7%;
    }
    .tr-a{
        font-size:30px;
        text-align:center;
        color:#61ae43;
    }
    
    .tr-b{
        font-size:12px;
        text-align:center;
    } 
    
    .td-a{
        width:20%;
        font-weight:bold;
    }

</style>

<div style="">
    
<?php 
 if (isset($_SESSION['customer_email'])) {
    $customer_email=$_SESSION['customer_email'];

    $sel_cart="select * from customers where customer_email='$customer_email'";
    $run_customer=mysqli_query($con,$sel_cart);
    $check_cart=mysqli_num_rows($run_customer);
    $row_customer=mysqli_fetch_array($run_customer); 

    	$customer_id=$row_customer['customer_id'];
    	$customer_name=$row_customer['customer_name'];
    	$customer_email=$row_customer['customer_email'];
    	$date_of_reg=$row_customer['date_of_reg'];
    	$un_verified=$row_customer['un_verified'];
    	$customer_pass=$row_customer['customer_pass'];
		$customer_city=$row_customer['customer_city'];
		$customer_dist=$row_customer['customer_dist'];

    	}else{
    		echo "";
    	}		
 ?>
 
<div style="background:white; height:100%;width:100%;margin-top:5%;">	

<?php 

if (isset($_SESSION['customer_email'])) {
	$customer_email=$_SESSION['customer_email'];

        echo "
        
<style>
    .table-acc{
        font-weight:bold;
        color:#7C532C;
        padding-left:15px;
        background:white;
        padding-top:5px;
         border:5px solid white ;
          background:#F4F4F4;
    }
    
    @media all and (max-width: 320px) {
        .table-acc{
            padding-left:10px;
            font-size:14px;
        padding-top:5px; 
        border:2px solid grey ;
                 border:5px solid white ;
          background:#F4F4F4;
        }
    }     
</style>        
        
        <h3 style='font-weight: bold;text-align: center; color: green; padding-top:10px; '><i class='fa fa-user-o' style='color: green;'></i> $customer_name</h3>

<table class='table-top'>
  <tr>
    <td class='table-acc'>Customer ID </td>
    <td class='table-acc'> $customer_id </td>
  </tr>
  <tr>
    <td class='table-acc'>Date of Registration </td>
    <td class='table-acc'> $date_of_reg </td>
  </tr>
  <tr>
    <td class='table-acc'>Email </td>
    <td class='table-acc'> $customer_email </td>
  </tr>
  
   <tr>
    <td class='table-acc'>Password </td>
            <td class='table-acc'> 

                <button onclick='myFunction()' style='background-color:#e4f7f0; margin-bottom: 10px; border: solid 1px #bdecd9;'>
				<i class='fa fa-eye' style='size:30px;color:#7C532C;'></i> 
			    	        </button>            
			    <label  id='myDIV' type='text' name='' style='display: none;color:grey;'>
			    			$customer_pass
			    </label> 
            </td>
  </tr>
  
  <tr>
    <td class='table-acc'>Current Address </td>
    <td class='table-acc'> $customer_dist $customer_city </td>
  </tr> 
  <tr>
    <td class='table-acc'>Status </td>
                <td class='table-acc'>
                        "; }
?>
                        
                        <?php
                        
                        if (isset($_SESSION['customer_email'])) {
                       
                            if ($un_verified=='Verified') {		
    							echo "<label> Verified <i class='fa fa-check-circle' style='color: green;'></i></label> ";
    						}else{
    							echo "<label> Unverified <i class='fa fa-times-circle' style='color: brown;'></i></label> <a href='verify_account_after(sending).php' class='' name=''>Verify now.</a>
    													<br>
    				
    						<span class='blink'; style='color:orange;'>Verify your account to able to post Ads.</span> <br><br>";
    							}
                        }
    						?>                               

<?php 

if (isset($_SESSION['customer_email'])) {
echo "                         
                            </td>
      </tr>  
    </table>
    
    		<a href='UpdateAccount-m' style='float: right;font-weight: bold;padding-bottom:15px;padding-right:15px;'>Update</a>
    </div>"; 
}else{


          if (!isset($_SESSION['customer_email'])) {
              echo " 
              <div class='' style='padding-top:20%;margin-left:16%;'> 
              <a href='BeingMember-m' class='signup-text'>
              <button class='signup-btn' style=''>
              Signup
              </button>
              </a> <span style='padding:3px 3px;'> or </span>
               
              <a href='EnteringNow-m' class='login-text'> 
              <button class='login-btn' style=''> 
              Login
              </button>
              </a>
            </div>";

            }else{
              $session_customer=$_SESSION['customer_email'];
              $get_cust="select * from customers where customer_email='$session_customer'";
               $run_cust=mysqli_query($con,$get_cust);
              $row_customers=mysqli_fetch_array($run_cust);          
             $customer_name=$row_customers['customer_name'];

              echo "<div class='' style=''; float:;' >
                  <a href='logout.php' style='color: white;margin-right:10px;float:right;'>
                  <button class='login-btn'> Logout </button>
                  </a>

                  <a href='OwnAccount-m' class='';  style='color:Purple;float:right; font-weight:bold; font-size:18px; text-decoration:none; margin-right:10px; margin-top:12px;'> 
                  $customer_name 
                  </a>
              </div>";
            }
         
       echo " </div> ";
        
 echo "     
<style>
    .signup-btn{
  margin-top: 5px;
  background: white; 

  height:40px; 
  width:90px; 
  border:none; 
  border: 2px solid #19BC15 ;   
  border-radius: 5px;
  margin-left:10px; 
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.signup-text{
  color:#19BC15;
  text-decoration: none;
  font-weight:bold;
}
.signup-text:hover{
  text-decoration: none;
}

.login-btn{
  margin-top: 5px;  
  background: #19BC15; 

  height:40px; 
  width:90px; 
  border:none;
  border-radius: 5px; 
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
.login-text{
  color:white;
  text-decoration: none;
  font-weight: bold;
}
.login-text:hover{
  text-decoration: none;
}
</style>  ";

}
?>
                 <script>
                    function myFunction() {
                      var x = document.getElementById("myDIV");
                      if (x.style.display === "none") {
                        x.style.display = "block";
                      } else {
                        x.style.display = "none";
                      }
                    }
                  </script>


</body>
</html>

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
        
<div style="height:100px;">
</div>  

          <?php
              include 'bottom_bar-mobile.php';         
            ?>

</body>














