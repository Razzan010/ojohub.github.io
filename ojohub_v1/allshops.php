<?php
 
include("includes/db.php");
session_start();
 ?>

<?php
include 'functions.php';

 ?>
<?php
if (isset($_SESSION['customer_email'])) {
	$customer_email=$_SESSION['customer_email'];
}
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

<div class="col-md-12 col-xs-12 col-sm-12">

	<?php
	if (isset($_SESSION['customer_email'])) {
	echo "	<div class='col-md-6 col-xs-6 col-sm-6'>
			<h3 class='only-in-desk-md' style='font-weight: bold;'>All Stores </h3>
			</div>
			<div class='col-md-6 col-xs-6 col-sm-6' >
				<h3 class='' style='float: right; font-weight:bold;'><a href='mystore.php'> My Store</a></h3>
			</div>";	

	}else{
	echo "	<div class='col-md-6 col-xs-6 col-sm-6'>
			<h3 class='only-in-desk-md' style='font-weight: bold;''>All Stores </h3>
			</div>
			<div class='col-md-6 col-xs-6 col-sm-6' >
				<h3 class='only-in-desk-md' style='float: right; font-weight:bold;'><a href='createstore_red.php'>  Create Store</a></h3>
			</div>";
	}

	?>

</div>

		  <div class="col-md-12 col-sm-12">
                        <div class="col-md-3 col-xs-3 desktop-show" style="background: red;">
                                 dfkm dgdg dskfn df lkdflk dgs dksf dfj dfjd kdjdjfsdf dlkf jld fjlkd fkld flkdfld kdf j sl ldflk kldlkfld dfldkflkdsks dfklds fdkfkdjf dkfkdfklsn
                            
                        </div>
                    
                    
                        <div class="">
                                     <?php
                    getShops_viewall();          
                 ?>  
                            
                        </div>
                   
                
                  </div>

</body>



    