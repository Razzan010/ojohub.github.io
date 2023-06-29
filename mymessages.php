<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        header('Location: http://www.store.ojohub.com/Messages-m');
    }
?>

<?php
    if (isset($_SESSION['customer_email'])) {
	$customer_email=$_SESSION['customer_email'];
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
    	<a href='profile.php'> 
            <div id='profileImage'></div>
        </a>
        </div>";
        echo "<div style='font-weight:bold';>$customer_name</div><br>";
        
        echo "<div style='color:green';>Active Since :<span style='color:blue';> $date_of_reg</span></div>";
        echo "<div style='color:green';>Private User</div>";
        echo "<div style='color:green';><span style='color:blue';>$check_cart_2</span> Articles online </div>";
    ?> 
<br><a href="Uploading-Product">
<button>Post new Ad</button></a>
<br>
<br>

<br><br><br><br>

<a href="Messages"><button>Messages</button></a><br><br>
<a href="OwnStore"><button>Mystore</button></a><br><br>
<a href="Favourites"><button>Favourite</button></a><br><br>
<a href="Followed"><button>Stores I Follow</button></a>
    
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
    <span id="firstName" style="display:none;"><?php echo $customer_name ?></span>    
</div>


</td>
</tr>       
</table>
</td>
</tr>
</table>


<?php 
 #------------------Message Notify to 0 ----------------------#
 
        if (isset($_SESSION['customer_email'])) {
        	$update_message_notify= "UPDATE customers set message_notify='0'where customer_email='$customer_email'";
        	$run_customer=mysqli_query($con,$update_message_notify);           
                
        }
?>

<td valign='top'>                       
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="width: 100%;">
          <td>

<?php
    my_messages();          
?>

          </td>
    </table>
</td>
 
          </tr>      
        </table>
   </td>
</table> 
                 <?php  
                    include 'footer.php'; 
                 ?> 
</body>



















