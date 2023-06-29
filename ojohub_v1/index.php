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

<html>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ojohub | The Next Leveled Marketplace </title>

 	  <style>
        progress {
            border: none;
            width: 150px;
            height: 15px;
            border-radius: 5px;
            background-color: #e5e5e5;
            color: #5cb85c;
            border:0.5px #ccc solid;
        }
        progress::-ms-fill {
        border-color: currentColor;
        }
       progress::-webkit-progress-bar {
            border:0.5px #ccc solid;
            background-color: #e5e5e5;
           border-radius: 5px;
        }
        progress::-webkit-progress-value {
            background-color: #5cb85c;
            border-radius: 5px;
        }
        progress::-moz-progress-bar {
            border:0.5px #ccc solid;
            background-color: #5cb85c;
            border-radius: 5px;
        }
        
        .progress-orange {
            color: #f0ad4e;
        }
        .progress-orange::-webkit-progress-value {
            background-color: #f0ad4e;
        }
        .progress-orange::-moz-progress-bar {
            background-color: #f0ad4e;
        }
        
        .progress-red {
            color: #d9534f;
        }
        .progress-red::-webkit-progress-value {
            background-color: #d9534f;
        }
        .progress-red::-moz-progress-bar {
            background-color: #d9534f;
        }        

        .progress-text {
            display:inline;
            color:#fff;
            font-size:0.8em;
            vertical-align: middle;
        }
  	</style> 
 
</head>

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
<br>
</td>
</tr>       
</table>
</td>
</tr>
      
</table>

<td valign='top'>                       
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:5px;">
        
<span style="color:orange;font-weight:bold;text-align:left;width:100%;padding-top:15px;background:none;border:none;font-size:18px;" class="btn btn-default">Featured Ads</span>    
            
            <div>
                <?php
                    getProducts_index_desktop();          
                 ?>

<span style="color:Green;font-weight:bold;text-align:left;width:100%;background:none;border:none;font-size:18px;" class="btn btn-default">Latest Ads</span>
   
                 <?php  
                    include 'getProducts_index_desktop.php'; 
                 ?> 
                 
             </div> 
          </td>
    </table>
</td>

<table>
          <td width="100%" bgcolor="#CFC8EF"><img src="spacer.gif" width="1" height="1"></td>
          <td><img src="spacer.gif" width="1" height="1"></td>
       
</table>
            
<table >
  <div style="text-align: center;float:right;padding-top:12px;">

<?php
    $page_query = "SELECT * FROM products ORDER BY product_id DESC";
    $page_result = mysqli_query($connect, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
    $difference = $total_pages - $page;
            if($difference <= 5){
             $start_loop = 1 ;
            }
            
            $end_loop = $start_loop + $page;
            if($page > 1) {
             echo "<a href='index.php?page=1' style='margin-top:20px; padding:5px 3px;color:green;font-weight:bold;'><button>First</button></a>";
             echo "<a href='index.php?page=".($page +1)."' style='padding:3px;color:green;font-weight:bold;'><<</a>";
            }
            
            for($i=$start_loop; $i<=$end_loop; $i++){     
             echo "<a href='index.php?page=".$i."' style='padding:3px;font-weight:bold;'><button>".$i."</button></a>";
            }
            if($page <= $end_loop) {
             echo "<a href='index.php?page=".($page + 1)."' style='padding: 3px;color:green;font-weight:bold;'>>></a>";
             echo "<a href='index.php?page=".$total_pages."' style='padding: 3px;color:green;font-weight:bold;'><button>Last</button></a>";
            }
    ?>
    
    </div>
  </div>
</table>

</body>
</html>

<div class='blink'>
  <p> Welcome to Ojohub.com !</p>
  
</div>

<style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Source+Code+Pro');


p {
  border-right: solid 5px rgba(255,255,255,.75);
  white-space: nowrap;
  overflow: hidden;    
  font-family: 'Source Code Pro', monospace;  
  font-size: 28px;
  color: Black;
}

@keyframes animated-cursor{
  from{border-right-color: rgba(255,255,255,.75);}
  to{border-right-color: transparent;}
}
</style>

                 <?php  
                    include 'footer.php'; 
                 ?> 

          </tr>      
        </table>
   </td>
</table>



<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.open-button {
  background-color: #555;
  color: white;
  padding: 10px 10px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;

}

.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

.form-container {
  max-width: 500px;
  padding: 10px;
  background-color: #d6d6d6;
  color:#002e2e;
  font-size:18px;
  
}

.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;

}

.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 10px 10px;
  border: none;
  cursor: pointer;
  width: auto;
  margin-bottom:10px;
  opacity: 0.8;
  margin-left:40%;
  width:25%

}

.form-container .cancel {
  background-color: green;
}
</style>

<button class="open-button" onclick="openForm()">How does it Works ?</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">

  <h3 style="color:green;">How does it works?</h3>
  
  1. Find the desired Product by browsing through categories or by searching on the search box. <br><br>
  2. If you come across an approriate Product, you can call the seller directly if the seller has shared his/her Telephone number or you can write a direct message.<br><br>
  3. Only the seller and buyer can deceide the price of the Product. Ojohub team does not involve in Price detemination but helps to find and solve fake seller.<br><br>
  4. Users can create an Account using Email Address and for Posting an Ad User needs to have a verified Account. We recommend all the Users to verify their Accounts for maximum Benefits.
  
<h3>Be aware of Fraud !</h3>

    <button type="button" class="btn cancel" onclick="closeForm()">Ok</button>
  </form>
</div>



<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>


    <style>
      .blink {
        animation: blink-animation 1s steps(5, start) infinite;
        -webkit-animation: blink-animation 1s steps(5, start) infinite;
      }
      @keyframes blink-animation {
        to {
          visibility: hidden;
        }
      }
      @-webkit-keyframes blink-animation {
        to {
          visibility: hidden;
        }
      }
    </style> 


