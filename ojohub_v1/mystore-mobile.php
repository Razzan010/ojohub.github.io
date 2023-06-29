<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        
    }else{
        header('Location: http://www.store.ojohub.com/OwnStore');        
    }
?>

<?php
    session_start();
    include("includes/db.php");
    include("redirect_mobile.php");
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
    <td class="td-a">Profile</td>
    <td class="td-a" style="color:orange;">Store</td>
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
        font-size:40px;
        text-align:center;
        color:#61ae43;
    }
        .tr-a{
            font-size:30px;
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

<div style="background:white;width:100%;margin-top:5%;">
</div>

<?php
    if (isset($_SESSION['customer_email'])) {
	$customer_email=$_SESSION['customer_email'];
 
                my_allproducts() ; 
    }else{
        echo "<div style='background:white;width:100%;height:100%;margin-top:5%;padding-top:20%;padding-left:40%;'>
              <button>
              <a href='EnteringNow-m' style='color:green; font-weight:bold;'>
                    Login
              </a>
              </button>                
        </div>";

    }
?>  
    
<div style="height:65px;">
</div>

          <?php
              include 'bottom_bar-mobile.php';         
            ?>

</body>



