<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        header('Location: http://www.store.ojohub.com/OwnAccount-m');
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
    		echo "string";
    	}		
 ?>
 
<h3 style="font-weight: bold;text-align: center; color: grey; ">My Account</h3>
		<div class='lg-box br-r-8 m-t-10 md-space  tran-008s p-relative m-b-20 col-md-12 col-xs-12 col-sm-12' style='background: white; padding-top: 3%;width:70%;margin-left:15%;'>
		    
		    
			<div class='w-100 col-md-6 col-xs-5'style= 'padding-left: 0%;text-align:right;'>    
			    <p style='font-weight:bold;color:#7C532C;'><i class='fa-md'></i> Customer ID </p>
			    <p style='font-weight:bold;color:#7C532C;'><i class='fa-md'></i> Date of Registration </p>
			    <p style='font-weight:bold;color:#7C532C;'><i class=''></i> Customer Name </p>	     
			    <p style='font-weight:bold;color:#7C532C;'><i class=''></i> Email </p>
			     <p style='font-weight:bold;color:#7C532C;'><i class=''></i> Password :</p>
			    <p style='font-weight:bold;color:#7C532C;'><i class=''></i> Current Address </p>
			    <p style='font-weight:bold;color:#7C532C;'><i class=''></i> Status </p>


			</div>
			<div class='w-100 col-md-6 col-xs-7'style= 'padding-left: 0%;'>    
			    <p style='font-weight:bold;color:brown;'><?php echo ": $customer_id"; ?> </p>
			    <p style='font-weight:bold;color:brown;'><?php echo ": $date_of_reg"; ?></p>			    
			    <p style='font-weight:bold;color:brown;'><?php echo ": $customer_name"; ?></p>
			    <p style='font-weight:bold;color:brown;'><?php echo ": $customer_email"; ?></p>


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

                  <button onclick="myFunction()" class="" style="background-color:#e4f7f0; margin-bottom: 10px; border: solid 1px #bdecd9;">
				    	<div class=""> 
				    		<i class='fa fa-eye' style='size:30px;color:#7C532C;'></i>  
				    	<div>
			    	</button>


			    	<div class="col-md-6 " >		    	
			    		<label class="" id="myDIV" type="text" name="" style="display: none;color:grey;">
			    			<?php echo "$customer_pass";?>
			    		</label>
			    	</div>

 				<p style='font-weight:bold;color:brown;'><?php echo ": $customer_dist $customer_city"; ?></p>
			    <p style='font-weight:bold;color:brown;'><?php 
						if ($un_verified=='Verified') {		
							echo "<label>: Verified <i class='fa fa-check-circle' style='color: green;'></i></label> ";
						}else{
							echo "<label>: Unverified <i class='fa fa-times-circle' style='color: brown;'></i></label> <a href='verify_account_after(sending).php' class='' name=''>Verify now.</a>
													<br>
						<br>
						<span class='blink'; style='color:orange;'>Verify your account to able to post Ads.</span>";
							}
					?>

					</p>	
			</div>
			
			 	<a href="UpdateAccount" style="float: right;font-weight: bold;padding-bottom:15px;padding-right:15px;">Update</a>
		</div>
	</div>	
</div>
<div class="col-md-12">
                     <?php  
                    include 'footer.php'; 
                 ?> 
</div>
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

   