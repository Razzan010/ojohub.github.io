<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        
    }else{
        header('Location: http://www.store.ojohub.com/Products');        
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
    	<h4 class="text-muted " style="color: green; font-weight: bold;padding-top:10px;padding-left:10px;"> All Products</h4>
    </div>

            <?php
                allproducts_location();         
                getProducts_viewall();
             ?> 

<div style="height:75px;">
</div>

          <?php
              include 'bottom_bar-mobile.php';         
            ?>

</body>






		