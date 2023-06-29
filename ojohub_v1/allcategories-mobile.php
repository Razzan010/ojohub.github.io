<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        
    }else{
        header('Location: http://www.store.ojohub.com/Categories');        
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
            
<div style="width:100%;height:3px;background:white;margin-top:10px;margin-bottom:10px;">
</div>
            
<body style="background:#F4F4F4;">

<?php
    if (isset($_SESSION['customer_email'])) {
	$customer_email=$_SESSION['customer_email'];
    }
?>


<div style="text-align:center;">
		<h3 style="color: green; font-weight: bold;"> All Categories</h3>
</div>
<div style="width:100%;height:2px;background:orange;;margin-top:10px;margin-bottom:10px;">
</div>  


<div class="col-md-12" style="margin-top:10px;margin-bottom:10px; font-size:20px;">
  
    <div class="col-md-4" style="">
          <a href='Products-m'>
            <b>Electronics</b>
          </a>
        <?php
            getSub_Categories4();          
        ?>        
    </div>



<div style="width:100%;height:2px;background:orange;;margin-top:10px;margin-bottom:10px;">
</div>      
    
    <div class="col-md-4" style="">
          <a href='Products-m'>
            <b>Fashion & Beauty</b>
          </a>
        <?php
            getSub_Categories11();          
        ?>        
    </div>


<div style="width:100%;height:2px;background:orange;;margin-top:10px;margin-bottom:10px;">
</div>  

    <div class="col-md-4" style="">
          <a href='Products-m'>
            <b>Jobs</b>
          </a>
        <?php
            getSub_Categories10();          
        ?>        
    </div>


<div style="width:100%;height:2px;background:orange;;margin-top:10px;margin-bottom:10px;">
</div> 
    <div class="col-md-4" style="">
          <a href='Products-m'>
            <b>Car, Bike and Bicycle</b>
          </a>
        <?php
            getSub_Categories1();          
        ?>        
    </div>


<div style="width:100%;height:2px;background:orange;;margin-top:10px;margin-bottom:10px;">
</div>    
    
    <div class="col-md-4" style="">
              <a href='Products-m'>
                <b>Services</b>
              </a>
            <?php
                getSub_Categories2();          
            ?> 
    </div> 


<div style="width:100%;height:2px;background:orange;;margin-top:10px;margin-bottom:10px;">
</div>      
    
    <div class="col-md-4" style="">
          <a href='Products-m'>
            <b>Real estate</b>
          </a>
        <?php
            getSub_Categories9();          
        ?>        
    </div>   


<div style="width:100%;height:2px;background:orange;;margin-top:10px;margin-bottom:10px;">
</div>      
    
    <div class="col-md-4" style="">
          <a href='Products-m'>
            <b>Music, Movies & Books</b>
          </a>
        <?php
            getSub_Categories12();          
        ?>        
    </div> 

<div style="width:100%;height:2px;background:orange;;margin-top:10px;margin-bottom:10px;">
</div>      
    
    <div class="col-md-4" style="">
          <a href='Products-m'>
            <b>Entertainment & Travel Tickets</b>
          </a>
        <?php
            getSub_Categories3();          
        ?>  
    </div> 


<div style="width:100%;height:2px;background:orange;;margin-top:10px;margin-bottom:10px;">
</div>      


    <div class="col-md-4" style="">
          <a href='Products-m'>
            <b>House & Garden</b>
          </a>
        <?php
            getSub_Categories7();          
        ?>        
    </div>



<div style="width:100%;height:2px;background:orange;;margin-top:10px;margin-bottom:10px;">
</div>      
    
    <div class="col-md-4" style="">
          <a href='Products-m'>
            <b>Lessons & Courses</b>
          </a>
        <?php
            getSub_Categories14();          
        ?>        
    </div>



<div style="width:100%;height:2px;background:orange;;margin-top:10px;margin-bottom:10px;">
</div>      
    
    <div class="col-md-4" style="">
          <a href='Products-m'>
            <b>Leisure, Hobby & Neighborhood</b>
          </a>
        <?php
            getSub_Categories6();          
        ?>        
    </div> 



<div style="width:100%;height:2px;background:orange;;margin-top:10px;margin-bottom:10px;">
</div>      
    
    <div class="col-md-4" style="">
          <a href='Products-m'>
            <b>Family, Child & Baby</b>
          </a>
        <?php
            getSub_Categories5();          
        ?>        
    </div>




<div style="width:100%;height:2px;background:orange;;margin-top:10px;margin-bottom:10px;">
</div>      
    
    <div class="col-md-4" style="">
          <a href='Products-m'>
            <b>Give away & exchange</b>
          </a>
        <?php
            getSub_Categories15();          
        ?>        
    </div>    
</div>

<div style="width:100%;height:2px;background:orange;;margin-top:10px;margin-bottom:10px;">
</div>  

<div style="height:85px;">
</div>

          <?php
              include 'bottom_bar-mobile.php';         
            ?>

</body>













