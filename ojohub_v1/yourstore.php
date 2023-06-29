<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        header('Location: http://www.store.ojohub.com/YourStore-m');
    }
?>

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
                <td ><i class="fa fa-th-list" ></i></td>
                <td >
                    
            <font size="" face="Arial, Helvetica, sans-serif">
                <strong style="float:left;"> 
                  &nbsp;Product Categories
                </strong>
            </font>
        </td>

            <font size="" face="Arial, Helvetica, sans-serif">
                <strong style="float:right;"> 
				<?php 
					if (isset($_GET['location'])) {
						$location=$_GET['location'];
						echo "From: ",$location;
					}
				 ?>  
				</strong>
            </font>
        </tr>

    <table width="100%" border="0" cellspacing="2" cellpadding="2">
    </div> 

<div class="col-md-12">

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

        if ($check_cart>0) {
             echo "<div class='md-title color-0d0 xxs-text-center mobile-show' style='color: #7C532C; font-weight: bold; font-family:calibri;''>
				        	
	     	 </div>	";
        }else{     
               echo "<div class='md-title color-0d0 xxs-text-center mobile-show' style='color: #7C532C; font-weight: bold; font-family:calibri;''>
				<h3 style='font-weight: bold;'>Latest Stores <a href='createstore_form.php' style='font-weight: bold;  float: right;' class=''> Create Store</a> </h3>         	
	     	 </div>	";
            } 

        }else{
           echo "<div class='md-title color-0d0 xxs-text-center mobile-show' style='color: #7C532C; font-weight: bold; font-family:calibri;''>
				<h3 style='font-weight: bold;'>Latest Stores <a href='createstore_red.php' style='font-weight: bold; font-size: 15px; float: right;' class=''> Create Store</a> </h3>     	
	     	 </div>	";
        }    

      ?>
  </div>    
  
<div class="col-md-12 col-xs-12 col-sm-12">	

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

<table width="100%" border="0" cellspacing="0" cellpadding="3">
    <tr> 
       <td valign="top"> 
            <table class="catwid" id="tab_cat" width="260" border="0" cellpadding="0" cellspacing="0" bordercolor="#FF9933">
                <td  ></td>
                <td  > 
             <table width="100%" border="0" cellspacing="2" cellpadding="2">
             
<div style="background:white;height:500px;text-align:center;">
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
<br>
<br>
    
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

</td>
</tr>       
</table>
</td>
</tr>
</table>

<td valign='top'>                       
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="width: 100%;">
          <td>


            <?php
                your_allproducts() ;        
            ?>
            
          </td>
    </table>
</td>

          </tr>      
        </table>
   </td>
</table> 

</body>


<?php 
#------------------Follow------------------------------#

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