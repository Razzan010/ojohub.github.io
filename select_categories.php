<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        header('Location: http://www.store.ojohub.com/Selecting-Category-m');
    }
?>

<?php
session_start();
include("includes/db.php");
include("redirect_desktop.php");

 ?> 
 
 
<head>
    <title>My Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Spectral:200,300,400,500,600,700,800&amp;display=swap">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css"href="css/css-1.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="OjOhub.com ist the Best place to list your new or second-hand product. It is free , simple and unlimited. This platform can be used as a Job-portal as well. Find your appropriate Job on Job Category.">
    <meta name="robots" content="">
 </head>
    
<div class="col-md-12">
    <div class="col-md-4">
                <a class="" href="Home" style="float:left;">
            <img src="logos/logo-desktop.png" style="height: 60px;">
        </a>       
          
      
          <img src="logos/flag.gif" style="height: 30px;">         
    </div>
    <div class="col-md-6" style="float:right;" class="">
          <?php   

          if (!isset($_SESSION['customer_email'])) {
              echo " 
              <div class=' ' style=''> 
              <a href='signup.php' class='signup-text'>
              <button class='signup-btn' style=''>
              Signup
              </button>
              </a>
               
              <a href='login.php' class='login-text'> 
              <button class='login-btn' style=''> 
              Login
              </button>
              </a>
            </div>";

            }else{
              $session_customer=$_SESSION['customer_email'];
              $get_cust="select * from customers where customer_email='$session_customer'";
               $run_cust=mysqli_query($con,$get_cust);
              $row_customers=mysqli_fetch_array($run_cust);          
             $customer_name=$row_customers['customer_name'];

              echo "<div class='' style=''; float:right;' >
                  <a href='logout.php' style='color: white;margin-right:10px;float:right;'>
                  <button class='myaccount-btn'> Logout </button>
                  </a>
                  
                  <a href='myaccount.php' class='';  style='color:Purple;float:right; font-weight:bold; font-size:18px; text-decoration:none; margin-right:10px; margin-top:12px;'> 
                  $customer_name 
                  </a>
              </div>";
            }
           ?> 
    </div>
 


<style>
.active {
  background-color: lightblue;
}

.content {
  display: none;
  overflow: hidden;
  margin-left:15%;
}

.content a {

  padding: 12px 16px;
  font-weight:bold;
  text-decoration:none;

}

.content a :hover {
  color: green;
}



#button {
  background-color: #3498DB;
  color: white;
  margin: 5px;
  padding:10px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  font-weight:bold;
}

td {
  border: 1px solid;
  padding-top:5px;
  padding-bottom:5px;
  text-align:center;
}

td:hover {
    background:lightgreen;
    text:'select';
}

</style>


<br><br><br>
<div style="width:100%;height:1px;background:blue;">
</div>
<h4 style="text-align:center;">After selection the page will be redirected to Product Upload page.</h4>
<br>
<span style="font-size:20px;font-weight:bold;">Categories</span>
<br>
<br>



<?php#------------------- 1. Electronics -----------------------#?>

<button id="button" class=" btn btn-primary collapsible">1. Electronics</button>
<div class="content">
    Sub-categories
    <br>    
    <button id="button" class="button btn btn-primary collapsible">Audio & Hi-Fi</button>
    <div class="content">
        Type
        <br>        
            <table>
                <tr>
                    <!--<td><a href='Uploading-Product?category_id=040101'>CD Player</a></td>-->
                    <td><a href='Uploading-Product?category_id=040102'>Speakers & Headphones</a></td>
                    <td><a href='Uploading-Product?category_id=040103'>MP3 Player</a></td>
                    <td><a href='Uploading-Product?category_id=040104'>Radio & Receiver</a></td>
                    <!--<td><a href='Uploading-Product?category_id=040105'>Stereos</a></td>-->
                    <td><a href='Uploading-Product?category_id=040106'>More Audios & Hi-fi</a></td>
                </tr>
            </table>    
    </div> 
       <br>
        <!--     <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=040200'>Services Electronics</a></td>
                </tr>
            </table> -->

    <button id="button" class="button btn btn-primary collapsible">Photograph</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=040301'>Camera</a></td>
                    <td><a href='Uploading-Product?category_id=040302'>Objective</a></td>
                    <td><a href='Uploading-Product?category_id=040303'>Accessories</a></td>
                    <!--<td><a href='Uploading-Product?category_id=040304'>Camera & Accessories</a></td>
                    <td><a href='Uploading-Product?category_id=040305'>More photo</a></td>-->
                </tr>
            </table>    
    </div> 
    
<br> 

    <button id="button" class="button btn btn-primary collapsible">Mobile Phone & Phone</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=040401'>Apple</a></td>
                    <td><a href='Uploading-Product?category_id=040402'>HTC</a></td>
                    <td><a href='Uploading-Product?category_id=040403'>LG</a></td>
                    <td><a href='Uploading-Product?category_id=040404'>Motorola</a></td>
                    <td><a href='Uploading-Product?category_id=040405'>Nokia</a></td>
                    <td><a href='Uploading-Product?category_id=040406'>Samsung</a></td>
                    </tr>
                    
                    <tr>
                    <td><a href='Uploading-Product?category_id=040407'>Huawei</a></td>
                    <td><a href='Uploading-Product?category_id=040408'>Sony</a></td>
                    <td><a href='Uploading-Product?category_id=040409'>Faxes</a></td>
                    <td><a href='Uploading-Product?category_id=040410'>Telephones</a></td>
                    <td><a href='Uploading-Product?category_id=040411'>Other Mobile Phones & Phones</a></td>
                </tr>
            </table>    
    </div> 
    
<br> 

    <button id="button" class="button btn btn-primary collapsible">Household appliances</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=040501'>Small household appliances</a></td>
                    <td><a href='Uploading-Product?category_id=040502'>Stoves & Ovens</a></td>
                    <td><a href='Uploading-Product?category_id=040503'>Coffee & Espresso Machines</a></td>
                    <td><a href='Uploading-Product?category_id=040504'>Refrigerators & Freezers</a></td>
                    <td><a href='Uploading-Product?category_id=040505'>Dishwashers</a></td>
                    <td><a href='Uploading-Product?category_id=040506'>Vacuum cleaner</a></td>
                    <td><a href='Uploading-Product?category_id=040507'>Washing machines & dryers</a></td>
                    <td><a href='Uploading-Product?category_id=040508'>Other household appliances</a></td>
                </tr>
            </table>    
    </div> 
    
<br> 

    <button id="button" class="button btn btn-primary collapsible">Consoles</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=040601'>Pocket Consoles</a></td>
                    <td><a href='Uploading-Product?category_id=040602'>PlayStation</a></td>
                    <td><a href='Uploading-Product?category_id=040603'>Xbox</a></td>
                    <td><a href='Uploading-Product?category_id=040604'>Nintendo</a></td>
                    <td><a href='Uploading-Product?category_id=040605'>Other consoles</a></td>
                </tr>
            </table>    
    </div> 
    <br>
      <!-- <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=040700'>Notebooks</a></td>
                </tr>
            </table>   
       </p> 
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=040800'>Pcs</a></td>
                </tr>
            </table> -->

    <button id="button" class="button btn btn-primary collapsible">PC Accessories & Software</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=040901'>Printers & Scanners</a></td>
                    <td><a href='Uploading-Product?category_id=040902'>Hard Drives & Drives</a></td>
                    <td><a href='Uploading-Product?category_id=040903'>Case</a></td>
                    <td><a href='Uploading-Product?category_id=040904'>Graphics</a></td>
                    <td><a href='Uploading-Product?category_id=040905'>Cables & Adapters</a></td>
                    <td><a href='Uploading-Product?category_id=040906'>Motherboards</a></td>
                    <td><a href='Uploading-Product?category_id=040907'>Monitors</a></td>
                    </tr>
                    
                    <tr>
                    <td><a href='Uploading-Product?category_id=040908'>Multimedia</a></td>
                    <td><a href='Uploading-Product?category_id=040909'>Network & Modem</a></td>
                    <td><a href='Uploading-Product?category_id=040910'>Processors / CPUs</a></td>
                    <td><a href='Uploading-Product?category_id=040911'>Memory</a></td>
                    <td><a href='Uploading-Product?category_id=040912'>Software</a></td>
                    <td><a href='Uploading-Product?category_id=040913'>Keyboard & Mouse</a></td>
                    <td><a href='Uploading-Product?category_id=040914'>Other PC accessories</a></td>
                </tr>
            </table>    
    </div> 
    
<br> 

    <button id="button" class="button btn btn-primary collapsible">PCs and Laptops</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=041001'>Desktop Computer</a></td>
                    <td><a href='Uploading-Product?category_id=041002'>Laptop</a></td>
                    <td><a href='Uploading-Product?category_id=041003'>Tablet</a></td>
                    <td><a href='Uploading-Product?category_id=041004'>Others </a></td>
                </tr>
            </table>    
    </div> 
    
<br> 

    <button id="button" class="button btn btn-primary collapsible">TV & Accessories</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=041101'>DVD Player & Recorder</a></td>
                    <td><a href='Uploading-Product?category_id=041102'>Television set</a></td>
                    <td><a href='Uploading-Product?category_id=041103'>TV Receiver</a></td>
                    <td><a href='Uploading-Product?category_id=041104'>Other Accessories</a></td>
                </tr>
            </table>    
    </div> 
    
<br> 

    <button id="button" class="button btn btn-primary collapsible">Video games</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <!--<td><a href='Uploading-Product?category_id=041201'>DS(i)- & PSP Games</a></td>-->
                    <td><a href='Uploading-Product?category_id=041202'>Nintendo Games</a></td>
                    <td><a href='Uploading-Product?category_id=041203'>PlayStation Games</a></td>
                    <td><a href='Uploading-Product?category_id=041204'>Xbox Games</a></td>
                   <!-- <td><a href='Uploading-Product?category_id=041205'>Wii Games</a></td>-->
                    <td><a href='Uploading-Product?category_id=041206'>PC Games</a></td>
                    <td><a href='Uploading-Product?category_id=041207'>Other video games</a></td> 
                </tr>
            </table>    
    </div> 
        <br>
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=041300'>Other electronics</a></td>
                </tr>
            </table>      
    
</div>

<div style="width:100%;height:3px;background:orange;margin-top:10px;margin-bottom:10px;">
</div>




<?php#------------------- 2. Fashion & Beauty ---------------------#?>

<button id="button" class=" btn btn-primary collapsible">2. Fashion & Beauty</button>
<div class="content">
    Sub-categories
    <br>    
    <button id="button" class="button btn btn-primary collapsible">Accessories & Jewellery</button>
    <div class="content">
        Type
        <br>        
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=110101'>Hats, scarves & gloves</a></td>
                    <td><a href='Uploading-Product?category_id=110102'>Jewellery</a></td>
                    <td><a href='Uploading-Product?category_id=110103'>Sunglasses</a></td>
                    <td><a href='Uploading-Product?category_id=110104'>Bags & Backpacks</a></td>
                    <td><a href='Uploading-Product?category_id=110105'>Watches</a></td>
                    <td><a href='Uploading-Product?category_id=110106'>More Accessories & Jewellery</a></td>
                </tr>
            </table>    
    </div> 

<br> 

    <button id="button" class="button btn btn-primary collapsible">Beauty & Health</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=110201'>Make-Up & Facial Care</a></td>
                    <td><a href='Uploading-Product?category_id=110202'>Hair</a></td>
                    <td><a href='Uploading-Product?category_id=110203'>Personal hygiene</a></td>
                    <td><a href='Uploading-Product?category_id=110204'>Hand & Nail Care</a></td>
                    <td><a href='Uploading-Product?category_id=110205'>Health</a></td>
                    <td><a href='Uploading-Product?category_id=110206'>More Beauty & Health</a></td>                 
                </tr>
            </table>    
    </div> 
    
<br> 

    <button id="button" class="button btn btn-primary collapsible">Women's Clothing</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=110301'>Shirts & Blouses</a></td>
                    <td><a href='Uploading-Product?category_id=110302'>Sari and Kurta</a></td>
                    <td><a href='Uploading-Product?category_id=110303'>Jackets & Coats</a></td>
                    <td><a href='Uploading-Product?category_id=110304'>Sweater</a></td>
                    <td><a href='Uploading-Product?category_id=110305'>Skirts & Dresses</a></td>
                    <td><a href='Uploading-Product?category_id=110306'>Shirts & Tops</a></td>    
                    <td><a href='Uploading-Product?category_id=110307'>Maternity</a></td>
                    <td><a href='Uploading-Product?category_id=110308'>Other women's clothing</a></td> 
                </tr>
            </table>    
    </div> 
    
<br> 
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=110400'>Women's Shoes & Footwears</a></td>
                </tr>
            </table> 
       </p>
  
  <!--
    <button id="button" class="button btn btn-primary collapsible">Women's Shoes</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=110401'>Ballerinas</a></td>
                    <td><a href='Uploading-Product?category_id=110402'>Half- & lace-up shoes</a></td>
                    <td><a href='Uploading-Product?category_id=110403'>Slippers</a></td>
                    <td><a href='Uploading-Product?category_id=110404'>Outdoor & Hiking Boots</a></td>
                    <td><a href='Uploading-Product?category_id=110405'>Pumps & High Heels</a></td>
                    <td><a href='Uploading-Product?category_id=110406'>Sandals</a></td>
                    <td><a href='Uploading-Product?category_id=110407'>Sneakers & Sports Shoes</a></td>
                    <td><a href='Uploading-Product?category_id=110408'>Boots & Ankle Boots</a></td>
                    <td><a href='Uploading-Product?category_id=110409'>More shoes</a></td>                    
                </tr>
            </table>    
    </div> -->
    


    <button id="button" class="button btn btn-primary collapsible">Mens's Clothing</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=110501'>Shirts</a></td>
                    <td><a href='Uploading-Product?category_id=110502'>Pants</a></td>
                    <td><a href='Uploading-Product?category_id=110503'>Jackets & Coats</a></td>
                    <td><a href='Uploading-Product?category_id=110504'>Sweater</a></td>
                    <td><a href='Uploading-Product?category_id=110505'>T-Shirts</a></td>
                    <td><a href='Uploading-Product?category_id=110506'>Other men's clothing</a></td>                
                </tr>
            </table>    
    </div> 
    
<br> 
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=110600'>Men's Shoes & Footwears</a></td>
                </tr>
            </table> 
       </p>
       
<!--
    <button id="button" class="button btn btn-primary collapsible">Men's Shoes</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=110601'>Half- & lace-up shoes</a></td>
                    <td><a href='Uploading-Product?category_id=110602'>Slippers</a></td>
                    <td><a href='Uploading-Product?category_id=110603'>Sandals</a></td>
                    <td><a href='Uploading-Product?category_id=110604'>Sneakers & Sports Shoes</a></td>
                    <td><a href='Uploading-Product?category_id=110605'>Boots & Ankle Boots</a></td>
                    <td><a href='Uploading-Product?category_id=110606'>Outdoor & Hiking Boots</a></td>
                    <td><a href='Uploading-Product?category_id=110607'>More shoes</a></td>                    
                </tr>
            </table>    
    </div> -->
  
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=110700'>More Fashion & Beauty</a></td>
                </tr>
            </table> 
       </p>
  
    
</div>

<div style="width:100%;height:3px;background:orange;margin-top:10px;margin-bottom:10px;">
</div>





<?php#------------------ 3. Jobs ----------------------------#?>

<button id="button" class=" btn btn-primary collapsible">3. Jobs</button>
<div class="content">
    Sub-categories
    <br>    
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=100100'>Training</a></td>
                </tr>
            </table> 

    <button id="button" class="button btn btn-primary collapsible">Construction, Crafts & Production</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=100201'>Construction assistants</a></td>
                  <!--  <td><a href='Uploading-Product?category_id=100202'>Roofer</a></td>-->
                    <td><a href='Uploading-Product?category_id=100203'>Electrician</a></td>
                   <!-- <td><a href='Uploading-Product?category_id=100204'>Tiler</a></td>-->
                    <td><a href='Uploading-Product?category_id=100205'>Painter</a></td>
                    </tr>
                    
                    <tr>
                   <!-- <td><a href='Uploading-Product?category_id=100206'>Bricklayer</a></td>-->
                    <td><a href='Uploading-Product?category_id=100207'>Production Assistants</a></td>
                    <td><a href='Uploading-Product?category_id=100208'>Locksmith</a></td>
                    <td><a href='Uploading-Product?category_id=100209'>Carpenter</a></td>
                    <td><a href='Uploading-Product?category_id=100210'>Other professions</a></td>
                </tr>
            </table>    
    </div> 
    
<br> 

    <button id="button" class="button btn btn-primary collapsible">Office work & administration</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=100301'>Accountant</a></td>
                    <td><a href='Uploading-Product?category_id=100302'>Office clerk</a></td>
                    <td><a href='Uploading-Product?category_id=100303'>Clerk</a></td>
                    <td><a href='Uploading-Product?category_id=100304'>Secretary</a></td>
                    <td><a href='Uploading-Product?category_id=100305'>Other professions</a></td>
                </tr>
            </table>    
    </div> 
    
<br> 

    <button id="button" class="button btn btn-primary collapsible">Gastronomy & Tourism</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=100401'>Bartender</a></td>
                    <td><a href='Uploading-Product?category_id=100402'>Hotel Manager</a></td>
                    <td><a href='Uploading-Product?category_id=100403'>Waiter</a></td>
                    <td><a href='Uploading-Product?category_id=100404'>Cook</a></td>
                    <td><a href='Uploading-Product?category_id=100405'>Kitchen Helper</a></td>
                    <td><a href='Uploading-Product?category_id=100406'>Service Staff</a></td>
                    <td><a href='Uploading-Product?category_id=100407'>Housekeeping</a></td>
                    <td><a href='Uploading-Product?category_id=100408'>Other professions</a></td>                    
                </tr>
            </table>    
    </div> 
    
    <br>
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=100500'>Customer Service & Call Center</a></td>
                </tr>
            </table> 
       </p>

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=100600'>Mini- & part-time jobs</a></td>
                </tr>
            </table> 
       </p>

            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=100700'>Internships</a></td>
                </tr>
            </table> 

    <button id="button" class="button btn btn-primary collapsible">Educational Sector & Care</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <!--<td><a href='Uploading-Product?category_id=100801'>Geriatric nurse</a></td>-->
                    <td><a href='Uploading-Product?category_id=100802'>Physician's Assistant</a></td>
                    <td><a href='Uploading-Product?category_id=100803'>Education Professionals</a></td>
                    <td><a href='Uploading-Product?category_id=100804'>Nurse</a></td>
                    <td><a href='Uploading-Product?category_id=100805'>Physiotherapist</a></td>
                    <td><a href='Uploading-Product?category_id=100806'>Other professions</a></td>
                   
                </tr>
            </table>    
    </div> 
    
<br> 

    <button id="button" class="button btn btn-primary collapsible">Transport, Logistics & Traffic</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=100901'>Drivers</a></td>
                    <td><a href='Uploading-Product?category_id=100902'>Courier driver</a></td>
                    <td><a href='Uploading-Product?category_id=100903'>Warehouse Assistants</a></td>
                    <td><a href='Uploading-Product?category_id=100904'>Contruction Vehicles driver</a></td>
                    <td><a href='Uploading-Product?category_id=100905'>Other professions</a></td>
                </tr>
            </table>    
    </div> 
    
<br> 

    <button id="button" class="button btn btn-primary collapsible">Sales, Purchasing & Marketing</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=101001'>Accountant</a></td>
                    <td><a href='Uploading-Product?category_id=101002'>Marketing Staffs</a></td>
                    <td><a href='Uploading-Product?category_id=101003'>Merchant</a></td>
                    <td><a href='Uploading-Product?category_id=101004'>Seller</a></td>
                    <td><a href='Uploading-Product?category_id=101005'>Other professions</a></td>
                </tr>
            </table>    
    </div> 
    
<br> 

    <button id="button" class="button btn btn-primary collapsible">Other jobs</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=101101'>Designer/Graphic Designer</a></td>
                    <td><a href='Uploading-Product?category_id=101102'>Hairdresser</a></td>
                    <!--<td><a href='Uploading-Product?category_id=101103'>Home help</a></td>-->
                    <td><a href='Uploading-Product?category_id=101104'>Caretaker</a></td>
                    <td><a href='Uploading-Product?category_id=101105'>Cleaner</a></td>
                    <td><a href='Uploading-Product?category_id=101106'>Other professions</a></td>
                  
                </tr>
            </table>    
    </div>     
    
</div>

<div style="width:100%;height:3px;background:orange;margin-top:10px;margin-bottom:10px;">
</div>




<?php#---------------- 4. Car, Bike & Boat ------------------------#?>

<button id="button" class=" btn btn-primary collapsible">4. Car, Bike & Bicycle</button>
<div class="content">
    Sub-categories
    <br>
    <button id="button" class="btn btn-primary collapsible">Automobiles </button>
    <div class="content">
        Type
        <br>
        <br>
            <table>
                <tr>
                <td><a href='Uploading-Product?category_id=010101'>TATA</a></td> 
                <td><a href='Uploading-Product?category_id=010102'>Audi</a></td>
                <td><a href='Uploading-Product?category_id=010103'>BMW</a></td>
                <td><a href='Uploading-Product?category_id=010104'>Chevrolet</a></td>
                <td><a href='Uploading-Product?category_id=010105'>Chrysler</a></td>
                <td><a href='Uploading-Product?category_id=010106'>Citroen</a></td>
                <td><a href='Uploading-Product?category_id=010107'>Dacia</a></td>
                <td><a href='Uploading-Product?category_id=010108'>Daewoo</a></td>                    
                </tr>
                
                <tr>
               <td><a href='Uploading-Product?category_id=010109'>Mahindra</a></td>
                <td><a href='Uploading-Product?category_id=010110'>Fiat</a></td> 
                <td><a href='Uploading-Product?category_id=010111'>Ford</a></td>
                <td><a href='Uploading-Product?category_id=010112'>Honda</a></td> 
                <td><a href='Uploading-Product?category_id=010113'> Hyundai</a></td>
                <td><a href='Uploading-Product?category_id=010114'>Jaguar</a></td> 
                <td><a href='Uploading-Product?category_id=010115'>Jeep</a> </td>
                <td><a href='Uploading-Product?category_id=010116'>Kia</a></td>                 
                </tr>
                
                <tr>
                <!--<td> <a href='Uploading-Product?category_id=010117'>Lada</a></td>-->
                <!--<td><a href='Uploading-Product?category_id=010118'>Lancia</a></td> -->
                <td><a href='Uploading-Product?category_id=010119'>Land Rover</a></td>
                <td><a href='Uploading-Product?category_id=010120'>Lexus</a></td> 
                <td><a href='Uploading-Product?category_id=010121'>Mazda</a></td>
                <td><a href='Uploading-Product?category_id=010122'>Mercedes Benz</a></td> 
                <td><a href='Uploading-Product?category_id=010123'>Mini</a></td>
                <td><a href='Uploading-Product?category_id=010124'>Mitsubishi</a></td>                 
                </tr> 
                
                <tr>
                <td><a href='Uploading-Product?category_id=010125'>Nissan</a></td>
                <td><a href='Uploading-Product?category_id=010126'>Opel</a></td> 
                <td><a href='Uploading-Product?category_id=010127'>Peugeot</a></td>
                <td><a href='Uploading-Product?category_id=010128'>Porsche</a></td> 
                <td><a href='Uploading-Product?category_id=010129'>Renault</a></td>
                <td><a href='Uploading-Product?category_id=010130'>Rover</a></td> 
                <!--<td><a href='Uploading-Product?category_id=010131'>Saab</a></td>-->
                <!--<td><a href='Uploading-Product?category_id=010132'>Seat</a></td> -->                
                </tr> 
                
                <tr>
                <td><a href='Uploading-Product?category_id=010133'> Skoda</a></td>
                <td><a href='Uploading-Product?category_id=010134'>Smart</a></td> 
                <td><a href='Uploading-Product?category_id=010135'>Subaru</a></td>
                <td><a href='Uploading-Product?category_id=010136'>Suzuki</a></td> 
                <td><a href='Uploading-Product?category_id=010137'>Tesla</a></td>
                <td><a href='Uploading-Product?category_id=010138'>Toyota</a></td> 
               <!-- <td><a href='Uploading-Product?category_id=010139'>Trabant</a></td>-->
                <td><a href='Uploading-Product?category_id=010140'>Volkswagen</a></td>                 
                </tr>
                
                <tr>
                <td> <a href='Uploading-Product?category_id=010141'>Volvo</a></td>
                <td><a href='Uploading-Product?category_id=010142'>Other car brands</a></td> 
                </tr>                
            </table> 
    </div>
 

<br>

    <button id="button" class="button btn btn-primary collapsible">Car Parts & Tires</button>
    <div class="content">
            Type
            <br>
            <br>
            <table>
                <tr>

                    <td><a href='Uploading-Product?category_id=010202'>Spare & Repair Parts</a></td>
                    <td><a href='Uploading-Product?category_id=010203'>Tires & Rims</a> </td> 
                   <!-- <td><a href='Uploading-Product?category_id=010204'>Tuning & Styling</a> </td>-->
                    <td><a href='Uploading-Product?category_id=010201'>Auto Hifi & Navigation</a></td>                    
                    <td><a href='Uploading-Product?category_id=010205'>Tools</a></td>
                    <td><a href='Uploading-Product?category_id=010206'>Other car parts </a></td>                     
                </tr>
            </table>    
    </div> 
    
<br>

  <!--  <button id="button" class="button btn btn-primary collapsible">Boats & Boat Accessories</button>
    <div class="content">
        Type
        <br>         
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=010301'>Motor boats</a></td>
                    <td><a href='Uploading-Product?category_id=010302'>Sailboats</a></td>
                    <td><a href='Uploading-Product?category_id=010303'>Small boats</a></td> 
                    <td><a href='Uploading-Product?category_id=010304'>Dinghies</a></td>
                    <td><a href='Uploading-Product?category_id=010305'>Jet ski</a></td>
                    <td><a href='Uploading-Product?category_id=010306'>Boat trailer</a></td> 
                    <td><a href='Uploading-Product?category_id=010307'>Boat moorings</a></td>
                    <td><a href='Uploading-Product?category_id=010308'>Boat Accessories</a></td>
                    <td><a href='Uploading-Product?category_id=010309'>Other boats</a></td>                     
                </tr>
            </table>    
    </div>     
    
<br>-->


    <button id="button" class="button btn btn-primary collapsible">
Bicycles & Accessories</button>
    <div class="content">
        Type
        <br>         
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=010401'>Ladies</a></td>
                    <td><a href='Uploading-Product?category_id=010402'>Mens</a></td>
                    <td><a href='Uploading-Product?category_id=010403'>Children</a></td> 
                    <!--<td><a href='Uploading-Product?category_id=010404'>Accessories</a></td>-->
                    <td><a href='Uploading-Product?category_id=010405'>Other Bicycles & Accessories</a></td>
                </tr>
            </table>    
    </div>     
    
<br>

    <button id="button" class="button btn btn-primary collapsible">Motorcycles, Scooters & Accessories</button>
    <div class="content">
        Type
        <br>         
            <table>
                <tr>

                    <td><a href='Uploading-Product?category_id=010502'>Motorcycles</a></td>
                    <td><a href='Uploading-Product?category_id=010504'>Scooters </a></td>    
                    <td><a href='Uploading-Product?category_id=010501'>Motorcycle Parts & Accessories</a></td>                    
                    <!--<td><a href='Uploading-Product?category_id=010503'>Quads</a></td> -->

                </tr>
            </table>    
    </div>  
    
<br>

   <!-- <button id="button" class="button btn btn-primary collapsible">Motorcycle Parts & Accessories</button>
    <div class="content">
        Type
        <br>         
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=010601'>Spare & Repair Parts</a></td>
                    <td><a href='Uploading-Product?category_id=010602'>Tires & Rims</a></td>
                    <td><a href='Uploading-Product?category_id=010603'>Motorcycle Clothing</a></td> 
                </tr>
            </table>    
    </div>  
    
<br>-->

    <button id="button" class="button btn btn-primary collapsible">Other Vehicles </button>
    <div class="content">
        Type
        <br>         
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=010701'>Agricultural vehicles</a></td>
                    <!--<td><a href='Uploading-Product?category_id=010702'>Pendant</a></td>-->
                    <td><a href='Uploading-Product?category_id=010703'>Construction</a></td> 
                    <td><a href='Uploading-Product?category_id=010704'>Buses</a></td>
                    <td><a href='Uploading-Product?category_id=010705'>Truck</a></td>
                    <td><a href='Uploading-Product?category_id=010706'>Tractors & trailers</a></td>
                    <!--<td><a href='Uploading-Product?category_id=010707'>Forklift</a></td>-->
           
                    <td><a href='Uploading-Product?category_id=010708'>Other Vehicle Parts & Accessories</a></td> 
                    <!--<td><a href='Uploading-Product?category_id=010709'>Other commercial vehicles & trailers</a></td>-->
                </tr>
            </table>    
    </div>  
    
<br>
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=010800'>Repairs & Services</a></td>
                </tr>
            </table> 

    <!--<button id="button" class="button btn btn-primary collapsible">Caravans & mobiles</button>
    <div class="content">
        Type
        <br>         
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=010901'>Alcove</a></td>
                    <td><a href='Uploading-Product?category_id=010902'>Integrated</a></td>
                    <td><a href='Uploading-Product?category_id=010903'>Box wagon</a></td> 
                    <td><a href='Uploading-Product?category_id=010904'>Semi-integrated</a></td>
                    <td><a href='Uploading-Product?category_id=010905'>Caravan</a></td>
                    <td><a href='Uploading-Product?category_id=010906'>More caravans & mobiles</a></td>
                </tr>
            </table>    
    </div>  
    
<br>
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=011000' class='' >Additional car, bike & boat</a></td>
                </tr>
            </table> 
            -->
</div>   

<div style="width:100%;height:3px;background:orange;margin-top:10px;margin-bottom:10px;">
</div>

<?php#---------------- 5. Services ----------------------------#?>

<button id="button" class=" btn btn-primary collapsible">5. Services</button>
<div class="content">
    Sub-categories
    <br>
    <!--
        <p>
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=020100'>Care for the elderly</a></td>
                </tr>
            </table>
        </p>-->
        <p>
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=020200'>Automobiles Repairs & Services</a></td>
                </tr>
            </table> 
        </p>     
        <p>    
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=020300'>Babysitter & Childcare</a></td>
                </tr>
            </table> 
        </p>    
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=020400'>Electronics</a></td>
                </tr>
            </table> 

    <button id="button" class="button btn btn-primary collapsible">House & Garden</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <!--<td><a href='Uploading-Product?category_id=020501'>Construction & Crafts</a></td>-->
                    <td><a href='Uploading-Product?category_id=020502'>Gardening </a></td>
                    <td><a href='Uploading-Product?category_id=020503'>Home Help</a></td>
                    <!--<td><a href='Uploading-Product?category_id=020504'>Housekeeping</a></td>-->
                    <td><a href='Uploading-Product?category_id=020505'>Repairs & Maintenance</a></td>
                   <!-- <td><a href='Uploading-Product?category_id=020506'>Apartment resolutions</a></td>-->
                    <td><a href='Uploading-Product?category_id=020507'>Other Services</a></td>                    
                </tr>
            </table>    
    </div> 
    
<br>  
      <!-- <p> 
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=020600'>Artists & Musicians</a></td>
                </tr>
            </table> 
       </p>  -->           
       <p> 
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=020700'>Travel & Event</a></td>
                </tr>
            </table> 
       </p> 
       <p>        
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=020800'>Animal Care & Training</a></td>
                </tr>
            </table> 
       </p> 
      <!-- <p>        
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=020900'>Relocation & Transport</a></td>
                </tr>
            </table> 
       </p> -->
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=021000'>Other services</a></td>
                </tr>
            </table> 

</div>

<div style="width:100%;height:3px;background:orange;margin-top:10px;margin-bottom:10px;">
</div>




<?php#------------------ 6. Real estate ---------------------#?>

<button id="button" class=" btn btn-primary collapsible">6. Real estate</button>
<div class="content">
    Sub-categories
    <br>    
   <!-- <button id="button" class="button btn btn-primary collapsible">Temporary & Shared Flat</button>
    <div class="content">
        Type
        <br>        
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=090101'>Entire property</a></td>
                    <td><a href='Uploading-Product?category_id=090102'>Private</a></td>
                    <td><a href='Uploading-Product?category_id=090103'>Shared room</a></td>
                </tr>
            </table>    
    </div> 
    <br>-->

            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=090200'>Flat and Rooms for Rent</a></td>
                </tr>
            </table> 

<!--
    <button id="button" class="button btn btn-primary collapsible">Holiday & Foreign Properties</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=090301'>Buy</a></td>
                    <td><a href='Uploading-Product?category_id=090302'>Hire</a></td>
                </tr>
            </table>    
    </div> 
    
<br> 

    <button id="button" class="button btn btn-primary collapsible">Garages & Parking Spaces</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=090401'>Buy</a></td>
                    <td><a href='Uploading-Product?category_id=090402'>Hire</a></td>
                </tr>
            </table>     
    </div> 
    
<br> 

    <button id="button" class="button btn btn-primary collapsible">Commercial</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=090501'>Buy</a></td>
                    <td><a href='Uploading-Product?category_id=090502'>Hire</a></td>
                </tr>
            </table>     
    </div> 
    
<br> -->

    <button id="button" class="button btn btn-primary collapsible">Plots & Gardens</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=090601'>Building plot</a></td>
                    <td><a href='Uploading-Product?category_id=090602'>Garden</a></td>
                    <td><a href='Uploading-Product?category_id=090603'>Agriculture/Forestry</a></td>
                    <td><a href='Uploading-Product?category_id=090604'>Other Plots & Gardens</a></td>
                </tr>
            </table>    
    </div> 
    <br>
    
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=090700'>Houses for sale</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=090800'>Houses for rent</a></td>
                </tr>
            </table> 
       </p> 

    <!--   <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=090900'>Apartments</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=091000'>Relocation & Transport</a></td>
                </tr>
            </table> 
       </p> -->

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=091100'>Other properties</a></td>
                </tr>
            </table> 
       </p>   
    
</div>

<div style="width:100%;height:3px;background:orange;margin-top:10px;margin-bottom:10px;">
</div>



<?php#--------------- 7. Music, Movies & Books -----------------#?>

<button id="button" class=" btn btn-primary collapsible">7. Music, Movies & Books</button>
<div class="content">
    Sub-categories
    <br>    
    <button id="button" class="button btn btn-primary collapsible">Books & Magazines</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=120101'>Antiquarian books</a></td>
                    <td><a href='Uploading-Product?category_id=120102'>Children's books</a></td>
                    <!--<td><a href='Uploading-Product?category_id=120103'>Crime & Thrillers</a></td>-->
                    <td><a href='Uploading-Product?category_id=120104'>Art & Culture</a></td>
                    <td><a href='Uploading-Product?category_id=120105'>Comics</a></td>
                    
                    </tr>
                    
                    <tr>
                    <td><a href='Uploading-Product?category_id=120106'>Novels</a></td>
                   <!-- <td><a href='Uploading-Product?category_id=120107'>Light fiction</a></td>-->
                    <td><a href='Uploading-Product?category_id=120108'>Contemporary Literature & Classics</a></td>
                   <!-- <td><a href='Uploading-Product?category_id=120109'>Periodicals</a></td>-->
                    <td><a href='Uploading-Product?category_id=120110'>More Books & Journals</a></td>                    
                </tr>
            </table>    
    </div> 
    <br>

   <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=120200'>Office & Stationery</a></td>
                </tr>
            </table> 
       </p>

     <!--  <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=120300'>Comics</a></td>
                </tr>
            </table> 
       </p>-->

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=120400'>Textbooks, School & Studies</a></td>
                </tr>
            </table> 
       </p>

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=120500'>Film & DVD</a></td>
                </tr>
            </table> 
       </p>

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=120600'>Music & CDs</a></td>
                </tr>
            </table> 
       </p>

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=120700'>Musical instruments</a></td>
                </tr>
            </table> 
       </p>

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=120800'>More Music, Movies & Books</a></td>
                </tr>
            </table> 
       </p> 
    
</div>

<div style="width:100%;height:3px;background:orange;margin-top:10px;margin-bottom:10px;">
</div>



<?php#--------------8. Entertainment & Travel Tickets ------------#?>

<button id="button" class=" btn btn-primary collapsible">8. Entertainment & Travel Tickets</button>
<div class="content">
    Sub-categories
    <br>  
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=030100'>Public Transport Offers</a></td>
                </tr>
            </table> 
       </p>
       <p>        
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=030200'>Comedy</a></td>
                </tr>
            </table> 
       </p>
       <p>        
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=030300'>Gift Coupon and Bonus</a></td>
                </tr>
            </table> 
       </p> 
       <p>        
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=030400'>Movies</a></td>
                </tr>
            </table> 
       </p> 
       <p>        
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=030500'>Concerts</a></td>
                </tr>
            </table> 
       </p> 
       <p>        
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=030600'>Sport</a></td>
                </tr>
            </table> 
       </p> 
       <p>        
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=030700'>Theatre & Musical</a></td>
                </tr>
            </table> 
       </p>
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=030800'>Other Tickets</a></td>
                </tr>
            </table> 
</div>

<div style="width:100%;height:3px;background:orange;margin-top:10px;margin-bottom:10px;">
</div>




<?php#------------- 9. House & Garden ----------------#?>

<button id="button" class=" btn btn-primary collapsible">9. House & Garden</button>
<div class="content">
    Sub-categories
    <br>  
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=070100'>Bathroom Items</a></td>
                </tr>
            </table> 
       </p>

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=070200'>Office Items</a></td>
                </tr>
            </table> 
       </p>
       
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=070300'>Decoration Items</a></td>
                </tr>
            </table> 
       </p>       

<!--    <button id="button" class="button btn btn-primary collapsible">Decoration</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=070301'>Pictures & Posters</a></td>
                    <td><a href='Uploading-Product?category_id=070302'>Candles & Candle Holders</a></td>
                    <td><a href='Uploading-Product?category_id=070303'>Mirror</a></td> 
                    <td><a href='Uploading-Product?category_id=070304'>Vases</a></td>
                    <td><a href='Uploading-Product?category_id=070305'>Further decoration</a></td>
                </tr>
            </table>    
    </div> 
    
<br> 

    <button id="button" class="button btn btn-primary collapsible">Services Home & Garden</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=070401'>Construction & Crafts</a></td>
                    <td><a href='Uploading-Product?category_id=070402'>Gardening & Landscaping</a></td>
                    <td><a href='Uploading-Product?category_id=070403'>Home help</a></td> 
                    <td><a href='Uploading-Product?category_id=070404'>Housekeeping</a></td>
                    <td><a href='Uploading-Product?category_id=070405'>Repairs</a></td>
                    <td><a href='Uploading-Product?category_id=070406'>Apartment resolutions</a></td>
                    <td><a href='Uploading-Product?category_id=070407'>Other services Home & Garden</a></td>
                </tr>
            </table>    
    </div> 
    
<br> -->

    <button id="button" class="button btn btn-primary collapsible">Garden Accessories & Plants</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=070501'>Flowerpots</a></td>
                    <td><a href='Uploading-Product?category_id=070502'>Decoration</a></td>
                    <td><a href='Uploading-Product?category_id=070503'>Gardening tools</a></td> 
                    <td><a href='Uploading-Product?category_id=070504'>Garden furniture</a></td>
                    <td><a href='Uploading-Product?category_id=070505'>Plant</a></td>
                    <td><a href='Uploading-Product?category_id=070506'>Other garden accessories & plants</a></td>                   
                </tr>
            </table>    
    </div> 
    <br>
    
     <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=070600'>Kitchen Items</a></td>
                </tr>
            </table> 
       </p>

    <!--     <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=070700'>Diy</a></td>
                </tr>
            </table> 
       </p>

    <button id="button" class="button btn btn-primary collapsible">Kitchen & dining room</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=070801'>Cutlery</a></td>
                    <td><a href='Uploading-Product?category_id=070802'>Crockery</a></td>
                    <td><a href='Uploading-Product?category_id=070803'>Glasses</a></td>
                    <td><a href='Uploading-Product?category_id=070804'>Small appliances</a></td>
                    <td><a href='Uploading-Product?category_id=070805'>Kitchen cabinets</a></td>
                    <td><a href='Uploading-Product?category_id=070806'>Chairs</a></td>
                    <td><a href='Uploading-Product?category_id=070807'>Tables</a></td>
                    <td><a href='Uploading-Product?category_id=070808'>Further kitchen & dining room</a></td>
                </tr>
            </table>    
    </div> 
    <br>-->
    
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=070900'>Lamps & Light</a></td>
                </tr>
            </table> 
       </p>
       
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=071000'>Bedroom Items</a></td>
                </tr>
            </table> 
       </p>  
       
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=071100'>Living Room Items</a></td>
                </tr>
            </table> 
       </p>         

  <!--  <button id="button" class="button btn btn-primary collapsible">Bedroom</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=071001'>Bed</a></td>
                    <td><a href='Uploading-Product?category_id=071002'>Slatted frames</a></td>
                    <td><a href='Uploading-Product?category_id=071003'>Mattresses</a></td>
                    <td><a href='Uploading-Product?category_id=071004'>Nightstands</a></td>
                    <td><a href='Uploading-Product?category_id=071005'>Cupboards</a></td>
                    <td><a href='Uploading-Product?category_id=071006'>Another bedroom</a></td>                    
                </tr>
            </table>    
    </div> 
    
<br> 

    <button id="button" class="button btn btn-primary collapsible">Living room</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=071101'>Shelving</a></td>
                    <td><a href='Uploading-Product?category_id=071102'>Cabinets & Cabinet Walls</a></td>
                    <td><a href='Uploading-Product?category_id=071103'>Seating</a></td>
                    <td><a href='Uploading-Product?category_id=071104'>Sofas & seating sets</a></td>
                    <td><a href='Uploading-Product?category_id=071105'>Tables</a></td>
                    <td><a href='Uploading-Product?category_id=071106'>TV & Phono Furniture</a></td>
                    <td><a href='Uploading-Product?category_id=071107'>Further living room</a></td>                    
                </tr>
            </table>    
    </div> 
    
    <br>-->
    
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=071200'>Other house & garden Items</a></td>
                </tr>
            </table> 
       </p>
    
</div>

<div style="width:100%;height:3px;background:orange;margin-top:10px;margin-bottom:10px;">
</div>



<?php#------------ 10. Leisure, Hobby & Neighborhood ------------#?>

<button id="button" class=" btn btn-primary collapsible">10. Leisure, Hobby & Neighborhood</button>
<div class="content">
    Sub-categories
    <br>  
     <!--  <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=060100'>Esoteric & Spiritual</a></td>
                </tr>
            </table> 
       </p>-->

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=060200'>Food & Drink</a></td>
                </tr>
            </table> 
       </p>

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=060300'>Leisure activities</a></td>
                </tr>
            </table> 
       </p>

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=060400'>Handworks & Handicrafts</a></td>
                </tr>
            </table> 
       </p>

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=060500'>Art & Antiques</a></td>
                </tr>
            </table> 
       </p>

      <!-- <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=060600'>Artists & Musicians</a></td>
                </tr>
            </table> 
       </p

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=060700'>Model making</a></td>
                </tr>
            </table> 
       </p>>-->

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=060800'>Travel & Event Services</a></td>
                </tr>
            </table> 
       </p>

   <!-- <button id="button" class="button btn btn-primary collapsible">Collect</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=060901'>Postcards & Postcards</a></td>
                    <td><a href='Uploading-Product?category_id=060902'>Autographs</a></td>
                    <td><a href='Uploading-Product?category_id=060903'>Beer Mugs & Glasses</a></td> 
                    <td><a href='Uploading-Product?category_id=060904'>Stamps</a></td>
                    <td><a href='Uploading-Product?category_id=060905'>Comics</a></td>
                    <td><a href='Uploading-Product?category_id=060906'>Flags</a></td> 
                    <td><a href='Uploading-Product?category_id=060907'>Coins</a></td>
                    </tr>
                    
                    <tr>
                    <td><a href='Uploading-Product?category_id=060908'>Porcelain</a></td>
                    <td><a href='Uploading-Product?category_id=060909'>Dolls & Doll Accessories</a></td> 
                    <td><a href='Uploading-Product?category_id=060910'>Collective Images & Stickers</a></td>
                    <td><a href='Uploading-Product?category_id=060911'>Trading Card Games</a></td>
                    <td><a href='Uploading-Product?category_id=060912'>Surprise eggs</a></td> 
                    <td><a href='Uploading-Product?category_id=060913'>Promotional item</a></td>
                    <td><a href='Uploading-Product?category_id=060914'>Further collecting</a></td> 
                </tr>
            </table>    
    </div> 
    
<br> -->

    <button id="button" class="button btn btn-primary collapsible">Sport & Camping</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=061001'>Ball sports</a></td>
                    <td><a href='Uploading-Product?category_id=061002'>Camping & Outdoor</a></td>
                    <td><a href='Uploading-Product?category_id=061003'>Fitness</a></td> 
                    <td><a href='Uploading-Product?category_id=061004'>Cycling</a></td>
                    <td><a href='Uploading-Product?category_id=061005'>Dancing & Running</a></td>
                    <td><a href='Uploading-Product?category_id=061006'>Swimming</a></td> 
                    <td><a href='Uploading-Product?category_id=061007'>Winter sports</a></td>
                    <td><a href='Uploading-Product?category_id=061008'>More Sports & Camping</a></td>
                </tr>
            </table>    
    </div> 
    
      <!-- <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=061100'>Junk</a></td>
                </tr>
            </table> 
       </p>-->

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=061200'>Lost & Found</a></td>
                </tr>
            </table> 
       </p>


       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=061300'>Further leisure, hobby & neighborhood</a></td>
                </tr>
            </table> 
       </p>
   
    
    
</div>

<div style="width:100%;height:3px;background:orange;margin-top:10px;margin-bottom:10px;">
</div>



<?php#------------  11. Family, Child & Baby -------------------#?>

<button id="button" class=" btn btn-primary collapsible">11. Family, Child & Baby</button>
<div class="content">
    Sub-categories
  <br>    
     <!--         <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=050100'>Care for the elderly</a></td>
                </tr>
            </table> -->

    <button id="button" class="button btn btn-primary collapsible">Baby & Children's Clothing</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=050201'>Pants & Jeans</a></td>
                    <td><a href='Uploading-Product?category_id=050202'>Dresses & Skirts</a></td>
                    <td><a href='Uploading-Product?category_id=050203'>Shirts & Tops</a></td>
                    <td><a href='Uploading-Product?category_id=050204'>Shirts</a></td>
                    <td><a href='Uploading-Product?category_id=050205'>Jackets & Coats</a></td>
                    <td><a href='Uploading-Product?category_id=050206'>Sweaters </a></td> 
                    </tr>
                    
                    <tr>
                    <td><a href='Uploading-Product?category_id=050207'>Laundry</a></td>
                    <td><a href='Uploading-Product?category_id=050208'>Sportswear</a></td>
                    <td><a href='Uploading-Product?category_id=050209'>Swimwear</a></td>
                    <td><a href='Uploading-Product?category_id=050210'>Accessories</a></td>
                  <!--  <td><a href='Uploading-Product?category_id=050211'>Clothing Packages</a></td>-->
                    <td><a href='Uploading-Product?category_id=050212'>More baby & children's clothing</a></td>                    
                </tr>
            </table>    
    </div> 

    <br>
       <p> 
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=050300'>Baby & Children's Footwears</a></td>
                </tr>
            </table>  
       </p>
       <!--

    <button id="button" class="button btn btn-primary collapsible">Baby & Children's Shoes</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=050301'>Ballerinas</a></td>
                    <td><a href='Uploading-Product?category_id=050302'>Half- & lace-up shoes</a></td>
                    <td><a href='Uploading-Product?category_id=050303'>Slippers</a></td>
                    <td><a href='Uploading-Product?category_id=050304'>Sandals</a></td>
                    <td><a href='Uploading-Product?category_id=050305'>Outdoor & Hiking Boots</a></td>
                    <td><a href='Uploading-Product?category_id=050306'>Sneakers & Sports Shoes</a></td>
                    <td><a href='Uploading-Product?category_id=050307'>Boots & Ankle Boots</a></td>
                    <td><a href='Uploading-Product?category_id=050308'>Slippers</a></td>
                    <td><a href='Uploading-Product?category_id=050309'>More shoes</a></td>
                </tr>
            </table>    
    </div>
    <br> -->
       <p> 
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=050400'>Baby Equipment & Toys</a></td>
                </tr>
            </table>  
       </p> 
    <!--   <p>        
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=050500'>Infant car seats & child seats</a></td>
                </tr>
            </table>  
       </p> -->
       <p>        
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=050600'>Babysitter & Childcare</a></td>
                </tr>
            </table>  
       </p> 
      <!--      <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=050700'>Strollers & Buggies</a></td>
                </tr>
            </table>  

    <button id="button" class="button btn btn-primary collapsible">Children's room furniture</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=050801'>Beds & Cradles</a></td>
                    <td><a href='Uploading-Product?category_id=050802'>High chairs & playpens</a></td>
                    <td><a href='Uploading-Product?category_id=050803'>Cabinets & chests of drawers</a></td>
                    <td><a href='Uploading-Product?category_id=050804'>Changing tables & accessories</a></td>
                    <td><a href='Uploading-Product?category_id=050805'>Rocking & Swinging</a></td>
                    <td><a href='Uploading-Product?category_id=050806'>More children's room furniture</a></td>                  
                </tr>
            </table>    
    </div> 

<br>

    <button id="button" class="button btn btn-primary collapsible">Toy</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=050901'>Action & Game Characters</a></td>
                    <td><a href='Uploading-Product?category_id=050902'>Baby toys</a></td>
                    <td><a href='Uploading-Product?category_id=050903'>Barbie & Co</a></td>
                    <td><a href='Uploading-Product?category_id=050904'>Tricycle & Co</a></td>
                    <td><a href='Uploading-Product?category_id=050905'>Games</a></td>
                    <td><a href='Uploading-Product?category_id=050906'>Wooden toys</a></td>
                    <td><a href='Uploading-Product?category_id=050907'>LEGO & Duplo</a></td>
                    </tr>
                    
                    <tr>
                    <td><a href='Uploading-Product?category_id=050908'>Educational toys</a></td>
                    <td><a href='Uploading-Product?category_id=050909'>Playmobil</a></td>
                    <td><a href='Uploading-Product?category_id=050910'>Dolls</a></td>
                    <td><a href='Uploading-Product?category_id=050911'>Toy cars</a></td>
                    <td><a href='Uploading-Product?category_id=050912'>Toys for outdoors</a></td>
                    <td><a href='Uploading-Product?category_id=050913'>Stuffed animals</a></td>
                    <td><a href='Uploading-Product?category_id=050914'>Other toys</a></td>                    
                </tr>
            </table>    
    </div> 
    <br>-->
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=051000'>Other family, child & baby</a></td>
                </tr>
            </table>      
    
</div>

<div style="width:100%;height:3px;background:orange;margin-top:10px;margin-bottom:10px;">
</div>



<!------------------------- 8. Pets --------------------------------->
<!--
<button id="button" class=" btn btn-primary collapsible">8. Pets</button>
<div class="content">
    Sub-categories
    <br>    
    <button id="button" class="button btn btn-primary collapsible">Fishes</button>
    <div class="content">
        Type
        <br>        
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=080101'>Aquarium fish</a></td>
                    <td><a href='Uploading-Product?category_id=080102'>Perch</a></td>
                    <td><a href='Uploading-Product?category_id=080103'>Discus fish</a></td>
                    <td><a href='Uploading-Product?category_id=080104'>Shrimps & Crabs</a></td>
                    <td><a href='Uploading-Product?category_id=080105'>Koi</a></td>
                    <td><a href='Uploading-Product?category_id=080106'>Snails</a></td>
                    <td><a href='Uploading-Product?category_id=080107'>Seaweed</a></td>
                    <td><a href='Uploading-Product?category_id=080108'>Catfish</a></td>  
                    <td><a href='Uploading-Product?category_id=080109'>Other fish</a></td>                      
                </tr>
            </table>    
    </div> 

<br> 

    <button id="button" class="button btn btn-primary collapsible">Dogs</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=080201'>Hybrids</a></td>
                    <td><a href='Uploading-Product?category_id=080202'>Beagle</a></td>
                    <td><a href='Uploading-Product?category_id=080203'>Saint Bernard</a></td>
                    <td><a href='Uploading-Product?category_id=080204'>Border Collie</a></td>
                    <td><a href='Uploading-Product?category_id=080205'>Boxer</a></td>
                    <td><a href='Uploading-Product?category_id=080206'>Cocker Spaniel</a></td>
                    <td><a href='Uploading-Product?category_id=080207'>Collie</a></td>
                    </tr>
                    
                    <tr>
                    <td><a href='Uploading-Product?category_id=080208'>Dachshund</a></td>
                    <td><a href='Uploading-Product?category_id=080209'>Dalmatian</a></td>
                    <td><a href='Uploading-Product?category_id=080210'>Doberman</a></td>
                    <td><a href='Uploading-Product?category_id=080211'>Mastiff</a></td>
                    <td><a href='Uploading-Product?category_id=080212'>Golden Retriever</a></td>
                    <td><a href='Uploading-Product?category_id=080213'>Husky</a></td>
                    <td><a href='Uploading-Product?category_id=080214'>Jack Russell Terrier</a></td>
                    </tr>
                    
                    <tr>
                    <td><a href='Uploading-Product?category_id=080215'>Labrador</a></td>
                    <td><a href='Uploading-Product?category_id=080216'>Maltese</a></td>
                    <td><a href='Uploading-Product?category_id=080217'>Poodle</a></td>
                    <td><a href='Uploading-Product?category_id=080218'>Sheep dogs</a></td>
                    <td><a href='Uploading-Product?category_id=080219'>Sharp</a></td>
                    <td><a href='Uploading-Product?category_id=080220'>Terrier</a></td>
                    <td><a href='Uploading-Product?category_id=080221'>Other dogs</a></td>
                </tr>
            </table>    
    </div> 
    
<br> 

    <button id="button" class="button btn btn-primary collapsible">Cats</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=080301'>British Shorthair</a></td>
                    <td><a href='Uploading-Product?category_id=080302'>House Cat</a></td>
                    <td><a href='Uploading-Product?category_id=080303'>Maine Coon</a></td>
                    <td><a href='Uploading-Product?category_id=080304'>Persian</a></td>
                    <td><a href='Uploading-Product?category_id=080305'>Siam</a></td>
                    <td><a href='Uploading-Product?category_id=080306'>More cats</a></td>                 
                </tr>
            </table>    
    </div> 
    
<br> 

    <button id="button" class="button btn btn-primary collapsible">Small-animals</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=080401'>Hamster</a></td>
                    <td><a href='Uploading-Product?category_id=080402'>Rabbits & Rabbits</a></td>
                    <td><a href='Uploading-Product?category_id=080403'>Mice & Rats</a></td>
                    <td><a href='Uploading-Product?category_id=080404'>Guinea pig</a></td>
                    <td><a href='Uploading-Product?category_id=080405'>Other small animals</a></td>
                </tr>
            </table>    
    </div> 
    
<br> 

    <button id="button" class="button btn btn-primary collapsible">Horses</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=080501'>Big horses</a></td>
                    <td><a href='Uploading-Product?category_id=080502'>Small Horses & Ponies</a></td>
                </tr>
            </table>    
    </div> 
    
<br> 

    <button id="button" class="button btn btn-primary collapsible">Reptiles</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=080601'>Snakes</a></td>
                    <td><a href='Uploading-Product?category_id=080602'>Lizards</a></td>
                    <td><a href='Uploading-Product?category_id=080603'>Spin</a></td>
                    <td><a href='Uploading-Product?category_id=080604'>Other reptiles</a></td>
                </tr>
            </table>    
    </div> 
    
    <br>
    
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=080700'>Animal Care & Training</a></td>
                </tr>
            </table> 
       </p>

    <button id="button" class="button btn btn-primary collapsible">Missing animals</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=080801'>Eloped</a></td>
                    <td><a href='Uploading-Product?category_id=080802'>Found</a></td>
                </tr>
            </table>    
    </div> 
    <br>
    
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=080900'>Birds</a></td>
                </tr>
            </table> 
       </p>

    <button id="button" class="button btn btn-primary collapsible">Accessories</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=081001'>Fishes</a></td>
                    <td><a href='Uploading-Product?category_id=081002'>Dogs</a></td>
                    <td><a href='Uploading-Product?category_id=081003'>Cats</a></td>                    
                    <td><a href='Uploading-Product?category_id=081004'>Small-animals</a></td>
                    <td><a href='Uploading-Product?category_id=081005'>Horses</a></td>
                    <td><a href='Uploading-Product?category_id=081006'>Reptiles</a></td>
                    <td><a href='Uploading-Product?category_id=081007'>Birds</a></td>
                    <td><a href='Uploading-Product?category_id=081008'>Other accessories Pets</a></td> 
                </tr>
            </table>    
    </div> 
    <br>
    
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=081100'>Other pets</a></td>
                </tr>
            </table> 
       </p>   
    
</div>

<div style="width:100%;height:3px;background:orange;margin-top:10px;margin-bottom:10px;">
</div>
-->



<!--------------- 13. Neighbourhood help ------------------------------->
<!--
<button id="button" class=" btn btn-primary collapsible">13. Neighbourhood help
</button>
<div class="content">
    Sub-categories
    <br>    
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=130100'>Neighbourhood help</a></td>
                </tr>
            </table> 
       </p> 
    
</div>

<div style="width:100%;height:3px;background:orange;margin-top:10px;margin-bottom:10px;">
</div>
-->
<?php#-------- 12. Lessons & Courses ----------------------#?>

<button id="button" class=" btn btn-primary collapsible">12. Lessons & Courses</button>
<div class="content">
    Sub-categories
    <br>    
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=140100'>Beauty & Health</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=140200'>Computer Courses</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=140300'>Esoteric & Spiritual</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=140400'>Cooking & Baking</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=140500'>Art & Design</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=140600'>Music & Singing</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=140700'>Tutoring</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=140800'>Sports courses</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=140900'>Language courses</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=141000'>Dance Classes</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=141100'>Further education</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=141200'>More Lessons & Courses</a></td>
                </tr>
            </table> 
       </p> 
    
</div>

<div style="width:100%;height:3px;background:orange;margin-top:10px;margin-bottom:10px;">
</div>

<?php#----- 13. Give away & exchange --------------------------#?>

<button id="button" class=" btn btn-primary collapsible">13. Give away & exchange</button>
<div class="content">
    Sub-categories
    <br>    
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=150100'>Exchange</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=150200'>Lend</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product?category_id=150300'>Give away</a></td>
                </tr>
            </table> 
       </p>    
    
</div>

<div style="width:100%;height:3px;background:orange;margin-top:10px;margin-bottom:10px;">
</div>


<div class="col-md-12">
<?php  
                    include 'footer.php'; 
                 ?>     
</div> 

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
