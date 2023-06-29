<?php
session_start();
include("includes/db.php");
 ?> 
 <?php
        include 'functions.php'; 
?> 

<!--------------------------------------------------------->

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
<!--------------------------------------------->




<div>

		<center >
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>			
		<h3 style="color: green;">To create store firstly you need to login or register. </h>
			<br>
			<br>
			<i class='fa fa-sign-in' style="color: blue;"></i>
			<a href="login.php" style="color: blue;">Login		
			</a>
			<br>
			<br>
			<i class='fa fa-user' style="color: blue;"></i>
			<a href="signup.php" style="color: blue;">Register	
			</a>
					
		</center>
	</div>