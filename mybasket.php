<?php
session_start();
include("includes/db.php");
      include 'functions.php'; 

 ?> 

<table class="mainbody" width="90%" border="0" align="center" cellpadding="0" cellspacing="0">

    <td>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <?php
              include 'topbar2_stores.php';         
            ?> 
          </tr>      
        </table>

<table class="mainbody" width="90%" border="0" align="center" cellpadding="0" cellspacing="0">

    <td>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
<!--------------------------------------------->

 <!-------------------------------------------->           
      <center>    
         <div style='color:green; font-size:25px;'>       
         Your Basket.
         </div>
         <p style='font-size:16px;font-weight:bold;'>Go Home</p>
            <a href='index.php' style='font-size:16px;font-weight:bold;'>www.ojohub.com</a> 
    
      </center>
         <br>

         <?php 
         if (!isset($_SESSION['customer_email'])) {
          echo "<center>       
         <p style='font-size:16px;font-weight:bold;'>Need to Login </p>
            <a href='login.php' style='font-size:16px;font-weight:bold;'>Login</a>     
           </center>
          ";
          }
          ?>

<div class="col-md-12">
  <div class="col-md-12">
     <p style="font-weight:bold">Articles On my Basket (Articles Remains for 5 days)</p>
  </div> 
  <div class="col-md-12">
   <?php
      getmybasket();          
    ?>
  </div> 
</div>



<div class="col-md-12">
  <div class="col-md-12">
    <br>
    <br>
     <p style="font-weight:bold">Order Completed </p>
  </div> 
  <div class="col-md-12">
   <?php
      getmybasket();          
    ?>
  </div> 
</div>

<!----------------------------------------->
          </tr>      
        </table>
   </td>
</table> 

