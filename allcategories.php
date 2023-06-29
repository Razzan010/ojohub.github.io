<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        header('Location: http://www.store.ojohub.com/Categories-m');
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
                <td ><i class="fa fa-dashcube" ></i></td>
                <td >
                    
            <font size="" face="Arial, Helvetica, sans-serif">
                <strong style="float:left;"> 
                  &nbsp;Product Categories
                </strong>
            </font>
        </td>

            <font size="" face="Arial, Helvetica, sans-serif">
                <strong style="float:right;"> 
                 Second-hand Products
                </strong>
            </font>

              
        </tr>

    <table width="100%" border="0" cellspacing="2" cellpadding="2">
    </div>                  
 <div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
</div>



<td valign='top' style="background:white;">                       
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:5px;">
          
<div class="col-md-12" style="margin-top:10px;margin-bottom:10px;">
        <div class="col-md-4" style="">
          <a href='Products'>
            <b>Electronics</b>
          </a>
        <?php
            getSub_Categories4();          
        ?>        
    </div>
    
    <div class="col-md-4" style="">
          <a href='Products'>
            <b>Fashion & Beauty</b>
          </a>
        <?php
            getSub_Categories11();          
        ?>        
    </div>    

    <div class="col-md-4" style="">
          <a href='Products'>
            <b>Jobs</b>
          </a>
        <?php
            getSub_Categories10();          
        ?>        
    </div>
</div>  


<div class="col-md-12" style="margin-top:10px;margin-bottom:10px;">
    <div class="col-md-4" style="">
          <a href='Products'>
            <b>Car, Bike and Bicycle</b>
          </a>
        <?php
            getSub_Categories1();          
        ?>        
    </div>

    <div class="col-md-4" style="">
              <a href='Products'>
                <b>Services</b>
              </a>
            <?php
                getSub_Categories2();          
            ?> 
    </div> 

    <div class="col-md-4" style="">
          <a href='Products'>
            <b>Real estate</b>
          </a>
        <?php
            getSub_Categories9();          
        ?>        
    </div>    
</div>



<div class="col-md-12" style="margin-top:10px;margin-bottom:10px;">
        <div class="col-md-4" style="">
          <a href='Products'>
            <b>Music, Movies & Books</b>
          </a>
        <?php
            getSub_Categories12();          
        ?>        
    </div>
    
    <div class="col-md-4" style="">
          <a href='Products'>
            <b>Entertainment & Travel Tickets</b>
          </a>
        <?php
            getSub_Categories3();          
        ?>  
    </div> 
    
    <div class="col-md-4" style="">
          <a href='Products'>
            <b>House & Garden</b>
          </a>
        <?php
            getSub_Categories7();          
        ?>        
    </div>    
    
</div>


<div class="col-md-12" style="margin-top:10px;margin-bottom:10px;">
        <div class="col-md-4" style="">
          <a href='Products'>
            <b>Lessons & Courses</b>
          </a>
        <?php
            getSub_Categories14();          
        ?>        
    </div>
    
    <div class="col-md-4" style="">
          <a href='Products'>
            <b>Family, Child & Baby</b>
          </a>
        <?php
            getSub_Categories5();          
        ?>        
    </div> 
    
    <div class="col-md-4" style="">
          <a href='Products'>
            <b>Leisure, Hobby & Neighborhood</b>
          </a>
        <?php
            getSub_Categories6();          
        ?>        
    </div>     
</div>


<div class="col-md-12" style="margin-top:10px;margin-bottom:10px;">
     <div class="col-md-4" style="">
          <a href='Products'>
            <b>Give away & exchange</b>
          </a>
        <?php
            getSub_Categories15();          
        ?>        
    </div>   
</div>


          </td>
    </table>
</td>

<table>
          <td width="100%" bgcolor="#CFC8EF"><img src="spacer.gif" width="1" height="1"></td>
          <td><img src="spacer.gif" width="1" height="1"></td>
       
</table>
            
</body>
</html>

                 <?php  
                    include 'footer.php'; 
                 ?> 

          </tr>      
        </table>
   </td>
</table>
