<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        
    }else{
        header('Location: http://www.store.ojohub.com/YourStore');        
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

<body style="background:#F4F4F4;">

<?php
    if (isset($_SESSION['customer_email'])) {
	$customer_email=$_SESSION['customer_email'];
    }
?>

<div style="background:white;">

<div class="">
	<h4 class="text-muted " style="color: green; font-weight: bold;padding-top:10px;padding-left:10px;"> Seller Details</h4>
</div>

<div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
</div> 

<?php 

if (isset($_GET['customer_id'])) {
	$customer_id_other=$_GET['customer_id'];

    $sel_cart_other="select * from customers where customer_id='$customer_id_other'";
    $run_customer_other=mysqli_query($con,$sel_cart_other);
    $row_customer_other=mysqli_fetch_array($run_customer_other);
    $check_cart_other=mysqli_num_rows($run_customer_other); 
    
    $customer_name_other=$row_customer_other['customer_name'];
    $customer_id_other=$row_customer_other['customer_id'];
    $date_of_reg=$row_customer_other['date_of_reg'];
    
    $sel_cart_2="select * from products where customer_id='$customer_id_other'";
    $run_customer_2=mysqli_query($con,$sel_cart_2);
    $row_customer_2=mysqli_fetch_array($run_customer_2);
    $check_cart_2=mysqli_num_rows($run_customer_2);  
    
#-----------------------------------------------------#
}
?>
    
<div style="background:white;height:auto;text-align:center;">
<?php
	echo "<div style='float:;padding:25px 0px 0px 30px;'>
	<a href='#'> 
        <div id='profileImage'></div>
    </a>
    </div>";
    echo "<div style='font-weight:bold';>$customer_name_other</div><br>";
    
    echo "<div style='color:green';>Active Since :<span style='color:blue';> $date_of_reg</span></div>";
    echo "<div style='color:green';>Private User</div>";
    echo "<div style='color:green';><span style='color:blue';>$check_cart_2</span> Articles online </div>";
?> 

<form action="" method="post" style="">  
        <Button style='color:grey;font-size:16px;font-family:Arial, serif;width:50%;font-weight:bold;margin: 5px 5px 5px 10%;' class='btn btn-default form-control' name="follow">
        <i class="fa fa-user-plus " style='margin-right:5px;'> </i>Follow 
        </button>  
</form> 

<script type="text/javascript">
  $(document).ready(function(){
  var firstName = $('#firstName').text();
  var intials = $('#firstName').text().charAt(0);
  var profileImage = $('#profileImage').text(intials);
});
</script>

<style type="text/css">
      #profileImage {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: #512DA8;
      font-size: 18px;
      color: #fff;
      text-align: center;
      line-height: 40px;
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<span id="firstName" style="display:none;"><?php echo $customer_name_other ?></span>    
</div>

<div class="">
		<h4 class="text-muted " style="color: green; font-weight: bold;padding-top:10px;padding-left:10px;"> Products Online</h4>
</div>

            <?php
                your_allproducts() ;        
            ?>

<div style="height:75px;">
</div>


          <?php
              include 'bottom_bar-mobile.php';         
            ?>

</body>

<?php 
#--------------Follow-----------------------------#

    if (isset($_POST['follow'])) {
	    $favourite=$_POST['follow'];
	    
            if (isset($_SESSION['customer_email'])) {
            	$customer_email_login=$_SESSION['customer_email'];
	            $get_customer_login="select * from customers where customer_email='$customer_email_login'";
	            $run_customer_login=mysqli_query($db,$get_customer_login);
                $row_customer_login=mysqli_fetch_array($run_customer_login);
	            $customer_id_login=$row_customer_login['customer_id'];
	            
	            $get_products_followed="select * from follow where customer_id='$customer_id_login' && customer_id_followed='$customer_id_other'";
                $run_products_followed=mysqli_query($db,$get_products_followed);
                $count_products_followed=mysqli_num_rows($run_products_followed);	
                
                if($count_products_followed==0){
                echo '<script type ="text/JavaScript">';  
                echo 'alert("Seller following successful !")';  
                echo '</script>';                     
	            
    		        $insert_customer="insert into follow (customer_email,customer_id,customer_id_followed)values('$customer_email_login','$customer_id_login','$customer_id_other')";
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