<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        header('Location: http://www.store.ojohub.com/Home-m');
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
                  &nbsp;Search Result
				</strong>
            </font>
              
        </tr>
        
        </tr>

    <table width="100%" border="0" cellspacing="2" cellpadding="2">
                
<div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
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

    if (isset($_GET['search'])){
        
        $search= mysqli_real_escape_string($con, $_GET['search']);
        
        $get_reviews="SELECT * FROM products WHERE product_title LIKE '%$search%'";
        $run_reviews=mysqli_query($con,$get_reviews);
        $reviews_count=mysqli_num_rows($run_reviews);
        
        if ($reviews_count > 0){
            while ($row_product=mysqli_fetch_array($run_reviews)) {
		$shop_id=$row_product['shop_id'];
		$product_title=$row_product['product_title'];
		$product_id=$row_product['product_id'];
		$product_image1=$row_product['product_image1'];
		$location_dist=$row_product['location_dist'];
		$post_date=$row_product['post_date'];

		$product_desc=$row_product['product_desc'];
		$product_price=$row_product['product_price'];
		$price_type=$row_product['price_type'];
		$product_price=$row_product['product_price'];		
		
		$product_selling=$row_product['product_selling'];
    		
    	echo "<a href = 'ProductDetailed?product_id=$product_id' style='text-decoration:none'>
    <table style='background-color:white;margin-bottom:10px;'>
	<tr>
	<td>
	<div class=' a' style='float:left;width:200px;height:200px;background:white;'>
	     <div class=' ' style='width:100%;height:150px;background:white;'>	
		<style type='text/css'>
			.a{
			min-height: 23%; 
			margin-top:1%;
			margin-left:2%;
			min-width:23%;
			border: 1px solid #E0E0E0;
			box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2);
			border-radius:5px 5px 0px 0px;
			background-image: linear-gradient(90deg, #a9cbc2 0%, #9FACE6 100%);
			}
		</style> 
		
			<img src='product_images/$product_image1' class='img-responsive'
			style='	
              width: 100%;
              height: 150px;
              object-fit: cover;
              object-position: 50% 50%;
			     '>
	    </div>

	    <p style=' text-align: center;color:green; font-weight:bold;font-size:20px;padding-top:15px;'>Rs : $product_price</p>	    
	
    </div>
</td>
<td style=''>  

<div style='padding-left:25px;padding-right:30px;width:500px'>
					<div>					
						<span style='font-size:15px;padding-right:10px; color:grey;float:left;'>
							<i class='fa fa-map-marker' style='font-size:16px;'>
							</i>
								$location_dist
						</span>
						
						<span style='font-size:15px;padding-right:10px; color:grey;float:right;'>
	                       <i class='fa fa-calendar-o ' style='font-size:14px;'>	</i>	
	                        $post_date
	                    </span>	
					</div>
					
			<span class='' style=' font-weight:bold;font-size:20px; 
				 	display: inline-block;
			    width: 100%;
			    white-space: nowrap;
			    min-height: 2em;
				 	max-height: 2em;
			    overflow: hidden;
			    text-overflow: ellipsis;			    
			    color:#1aa515;
			    padding-top:10px;
			 '> $product_title </span>					
					
	<div class='  ' style='
	                background-color:white;
					margin-top:2%; 
					color:brown;         
					line-height: 1.3em;
					min-height: 2.8em;
		 			max-height: 2.8em; 
					overflow: hidden;
		 			text-overflow: ellipsis;font-size:14px;'>
					$product_desc
	</div>
	
					<div>					
						<span style='size:30px;color:#5fcaed;padding-right:10px;float:left;font-weight:bold;'>
	                        $product_selling
	                    </span>	
						
						<span style='size:30px;color:#5fcaed;padding-right:10px;float:right;font-weight:bold;'>
	                        $price_type
	                    </span>	
					</div>
					
</td>	
</tr>
</table>
</div>	
</a>
";
}
}
}
        if ($reviews_count>0){
            echo "<div style='text-align:center;'>$reviews_count Articles found for "."'".$search."'</div>";
        }else{
            echo "<div style='text-align:left;'>$reviews_count Articles found for "."'".$search."'</div>";
            }

?>
            
          </td>
          
    </table>
</td>

<table>
          <td width="100%" bgcolor="#CFC8EF"><img src="spacer.gif" width="1" height="1"></td>
          <td><img src="spacer.gif" width="1" height="1"></td>
       
</table>

<div class="col-md-12">
<?php  
                    include 'footer.php'; 
                 ?>     
</div> 

          </tr>      
        </table>
   </td>
</table> 

</body>

