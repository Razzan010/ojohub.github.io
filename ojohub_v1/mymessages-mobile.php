<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        
    }else{
        header('Location: http://www.store.ojohub.com/Messages');        
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

<div style="background:white; height:100%;width:100%;margin-top:5%;">

    <?php
        if (isset($_SESSION['customer_email'])) {
    	$customer_email=$_SESSION['customer_email'];
     
                    my_messages() ; 
        }else{
            echo "<div style='background:white;width:100%;height:100%;margin-top:5%;padding-top:20%;padding-left:18%;'>
                  <button>
                  <a href='EnteringNow-m' style='color:green; font-weight:bold;'>
                        Login
                  </a>
                  </button>  to see your Messages.               
            </div>";
    
        }
    ?>  

</div>   

<?php 
    if (isset($_SESSION['customer_email'])) {
        $update_message_notify= "UPDATE customers set message_notify='0'where customer_email='$customer_email'";
        $run_customer=mysqli_query($con,$update_message_notify);  
    }
?>


<div style="height:65px;">
</div>
        <?php
         include 'bottom_bar-mobile.php';         
        ?>
</body>













