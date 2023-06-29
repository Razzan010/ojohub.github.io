<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        header('Location: http://www.store.ojohub.com/Products-m');
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
    $sel_cart="select * from stores where customer_email='$customer_email'";
    $run_customer=mysqli_query($con,$sel_cart);
    $check_cart=mysqli_num_rows($run_customer); 


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
             
               
     <?php
      include 'sidebar-home.php'; 
    ?> 

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
            allproducts_location(); 
            getProducts_viewall();
          ?> 
            
          </td>
          
    </table>
</td>

<table>
          <td width="100%" bgcolor="#CFC8EF"><img src="spacer.gif" width="1" height="1"></td>
          <td><img src="spacer.gif" width="1" height="1"></td>
       
</table>

                 <?php  
                    include 'footer.php'; 
                 ?> 
 
          </tr>      
        </table>
   </td>
</table> 

</body>







		