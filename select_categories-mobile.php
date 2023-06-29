<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        
    }else{
        header('Location: http://www.store.ojohub.com/Selecting-Category');        
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


<div style="width:100%;height:3px;background:white;margin-top:10px;margin-bottom:10px;">
</div>


<body style="background:#F4F4F4;">

    
<?php
    if (isset($_SESSION['customer_email'])) {
	$customer_email=$_SESSION['customer_email'];
    }
?>

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
  text-decoration:none;

}

.content a :hover {
  color: green;
}

.content_type {
  display: none;
  overflow: hidden;

}

.content_type a {

  padding: 12px 9px;

  text-decoration:none;

}

.content_type a :hover {
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
}

</style>

<div class="" style="padding-left: 2%;width: 95%;padding-right: 2%;">
    <h5>After Selection, the page will be redirected to Product Upload page.</h5>


<div class="box-header"><!--box-header start-->
		<h4 class="text-muted " style="color: green; font-weight: bold;"> Product Details</h4>
</div><!--box-header end-->

<div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
</div> 



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
                    <td><a href='Uploading-Product-m?category_id=040102'>Speakers & Headphones</a></td>
                    <td><a href='Uploading-Product-m?category_id=040103'>MP3 Player</a></td>
                    </tr>
                    <tr>
                    <td><a href='Uploading-Product-m?category_id=040104'>Radio & Receiver</a></td>
                    <td><a href='Uploading-Product-m?category_id=040106'>More Audios & Hi-fi</a></td>
                </tr>
            </table>    
    </div> 
       <br>


    <button id="button" class="button btn btn-primary collapsible">Photograph</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=040301'>Camera</a></td>
                    <td><a href='Uploading-Product-m?category_id=040302'>Objective</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=040303'>Accessories</a></td>
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
                    <td><a href='Uploading-Product-m?category_id=040401'>Apple</a></td>
                    <td><a href='Uploading-Product-m?category_id=040402'>HTC</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=040403'>LG</a></td>
                    <td><a href='Uploading-Product-m?category_id=040404'>Motorola</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=040405'>Nokia</a></td>
                    <td><a href='Uploading-Product-m?category_id=040406'>Samsung</a></td>
                    </tr>
                    
                    <tr>
                    <td><a href='Uploading-Product-m?category_id=040407'>Huawei</a></td>
                    <td><a href='Uploading-Product-m?category_id=040408'>Sony</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=040409'>Faxes</a></td>
                    <td><a href='Uploading-Product-m?category_id=040410'>Telephones</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=040411'>Other Mobile Phones & Phones</a></td>
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
                    <td><a href='Uploading-Product-m?category_id=040501'>Small household appliances</a></td>
                    <td><a href='Uploading-Product-m?category_id=040502'>Stoves & Ovens</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=040503'>Coffee & Espresso Machines</a></td>
                    <td><a href='Uploading-Product-m?category_id=040504'>Refrigerators & Freezers</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=040505'>Dishwashers</a></td>
                    <td><a href='Uploading-Product-m?category_id=040506'>Vacuum cleaner</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=040507'>Washing machines & dryers</a></td>
                    <td><a href='Uploading-Product-m?category_id=040508'>Other household appliances</a></td>
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
                    <td><a href='Uploading-Product-m?category_id=040601'>Pocket Consoles</a></td>
                    <td><a href='Uploading-Product-m?category_id=040602'>PlayStation</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=040603'>Xbox</a></td>
                    <td><a href='Uploading-Product-m?category_id=040604'>Nintendo</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=040605'>Other consoles</a></td>
                </tr>
            </table>    
    </div> 
    <br>
    

    <button id="button" class="button btn btn-primary collapsible">PC Accessories & Software</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=040901'>Printers & Scanners</a></td>
                    <td><a href='Uploading-Product-m?category_id=040902'>Hard Drives & Drives</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=040903'>Case</a></td>
                    <td><a href='Uploading-Product-m?category_id=040904'>Graphics</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=040905'>Cables & Adapters</a></td>
                    <td><a href='Uploading-Product-m?category_id=040906'>Motherboards</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=040907'>Monitors</a></td>
                    <td><a href='Uploading-Product-m?category_id=040908'>Multimedia</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=040909'>Network & Modem</a></td>
                    <td><a href='Uploading-Product-m?category_id=040910'>Processors / CPUs</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=040911'>Memory</a></td>
                    <td><a href='Uploading-Product-m?category_id=040912'>Software</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=040913'>Keyboard & Mouse</a></td>
                    <td><a href='Uploading-Product-m?category_id=040914'>Other PC accessories</a></td>
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
                    <td><a href='Uploading-Product-m?category_id=041001'>Desktop Computer</a></td>
                    <td><a href='Uploading-Product-m?category_id=041002'>Laptop</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=041003'>Tablet</a></td>
                    <td><a href='Uploading-Product-m?category_id=041004'>Others </a></td>
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
                    <td><a href='Uploading-Product-m?category_id=041101'>DVD Player & Recorder</a></td>
                    <td><a href='Uploading-Product-m?category_id=041102'>Television set</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=041103'>TV Receiver</a></td>
                    <td><a href='Uploading-Product-m?category_id=041104'>Other Accessories</a></td>
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
                    <td><a href='Uploading-Product-m?category_id=041202'>Nintendo Games</a></td>
                    <td><a href='Uploading-Product-m?category_id=041203'>PlayStation Games</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=041204'>Xbox Games</a></td>
                    <td><a href='Uploading-Product-m?category_id=041206'>PC Games</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=041207'>Other video games</a></td> 
                </tr>
            </table>    
    </div> 
        <br>
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=041300'>Other electronics</a></td>
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
                    <td><a href='Uploading-Product-m?category_id=110101'>Hats, scarves & gloves</a></td>
                    <td><a href='Uploading-Product-m?category_id=110102'>Jewellery</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=110103'>Sunglasses</a></td>
                    <td><a href='Uploading-Product-m?category_id=110104'>Bags & Backpacks</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=110105'>Watches</a></td>
                    <td><a href='Uploading-Product-m?category_id=110106'>More Accessories & Jewellery</a></td>
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
                    <td><a href='Uploading-Product-m?category_id=110201'>Make-Up & Facial Care</a></td>
                    <td><a href='Uploading-Product-m?category_id=110202'>Hair</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=110203'>Personal hygiene</a></td>
                    <td><a href='Uploading-Product-m?category_id=110204'>Hand & Nail Care</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=110205'>Health</a></td>
                    <td><a href='Uploading-Product-m?category_id=110206'>More Beauty & Health</a></td>                 
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
                    <td><a href='Uploading-Product-m?category_id=110301'>Shirts & Blouses</a></td>
                    <td><a href='Uploading-Product-m?category_id=110302'>Sari and Kurta</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=110303'>Jackets & Coats</a></td>
                    <td><a href='Uploading-Product-m?category_id=110304'>Sweater</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=110305'>Skirts & Dresses</a></td>
                    <td><a href='Uploading-Product-m?category_id=110306'>Shirts & Tops</a></td>  
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=110307'>Maternity</a></td>
                    <td><a href='Uploading-Product-m?category_id=110308'>Other women's clothing</a></td> 
                </tr>
            </table>    
    </div> 
    
<br> 
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=110400'>Women's Shoes & Footwears</a></td>
                </tr>
            </table> 
       </p>
  
  

    <button id="button" class="button btn btn-primary collapsible">Mens's Clothing</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=110501'>Shirts</a></td>
                    <td><a href='Uploading-Product-m?category_id=110502'>Pants</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=110503'>Jackets & Coats</a></td>
                    <td><a href='Uploading-Product-m?category_id=110504'>Sweater</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=110505'>T-Shirts</a></td>
                    <td><a href='Uploading-Product-m?category_id=110506'>Other men's clothing</a></td>                
                </tr>
            </table>    
    </div> 
    
<br> 
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=110600'>Men's Shoes & Footwears</a></td>
                </tr>
            </table> 
       </p>
       
  
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=110700'>More Fashion & Beauty</a></td>
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
                    <td><a href='Uploading-Product-m?category_id=100100'>Training</a></td>
                </tr>
            </table> 

    <button id="button" class="button btn btn-primary collapsible">Construction, Crafts & Production</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=100201'>Construction assistants</a></td>
                    <td><a href='Uploading-Product-m?category_id=100203'>Electrician</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=100205'>Painter</a></td>
                    <td><a href='Uploading-Product-m?category_id=100207'>Production Assistants</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=100208'>Locksmith</a></td>
                    <td><a href='Uploading-Product-m?category_id=100209'>Carpenter</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=100210'>Other professions</a></td>
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
                    <td><a href='Uploading-Product-m?category_id=100301'>Accountant</a></td>
                    <td><a href='Uploading-Product-m?category_id=100302'>Office clerk</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=100303'>Clerk</a></td>
                    <td><a href='Uploading-Product-m?category_id=100304'>Secretary</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=100305'>Other professions</a></td>
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
                    <td><a href='Uploading-Product-m?category_id=100401'>Bartender</a></td>
                    <td><a href='Uploading-Product-m?category_id=100402'>Hotel Manager</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=100403'>Waiter</a></td>
                    <td><a href='Uploading-Product-m?category_id=100404'>Cook</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=100405'>Kitchen Helper</a></td>
                    <td><a href='Uploading-Product-m?category_id=100406'>Service Staff</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=100407'>Housekeeping</a></td>
                    <td><a href='Uploading-Product-m?category_id=100408'>Other professions</a></td>                    
                </tr>
            </table>    
    </div> 
    
    <br>
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=100500'>Customer Service & Call Center</a></td>
                </tr>
            </table> 
       </p>

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=100600'>Mini- & part-time jobs</a></td>
                </tr>
            </table> 
       </p>

            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=100700'>Internships</a></td>
                </tr>
            </table> 

    <button id="button" class="button btn btn-primary collapsible">Educational Sector & Care</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=100802'>Physician's Assistant</a></td>
                    <td><a href='Uploading-Product-m?category_id=100803'>Education Professionals</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=100804'>Nurse</a></td>
                    <td><a href='Uploading-Product-m?category_id=100805'>Physiotherapist</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=100806'>Other professions</a></td>
                   
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
                    <td><a href='Uploading-Product-m?category_id=100901'>Drivers</a></td>
                    <td><a href='Uploading-Product-m?category_id=100902'>Courier driver</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=100903'>Warehouse Assistants</a></td>
                    <td><a href='Uploading-Product-m?category_id=100904'>Contruction Vehicles driver</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=100905'>Other professions</a></td>
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
                    <td><a href='Uploading-Product-m?category_id=101001'>Accountant</a></td>
                    <td><a href='Uploading-Product-m?category_id=101002'>Marketing Staffs</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=101003'>Merchant</a></td>
                    <td><a href='Uploading-Product-m?category_id=101004'>Seller</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=101005'>Other professions</a></td>
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
                    <td><a href='Uploading-Product-m?category_id=101101'>Designer / Graphic Designer</a></td>
                    <td><a href='Uploading-Product-m?category_id=101102'>Hairdresser</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=101104'>Caretaker</a></td>
                    <td><a href='Uploading-Product-m?category_id=101105'>Cleaner</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=101106'>Other professions</a></td>
                  
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
                <td><a href='Uploading-Product-m?category_id=010101'>TATA</a></td> 
                <td><a href='Uploading-Product-m?category_id=010102'>Audi</a></td>
                <tr></tr>
                <td><a href='Uploading-Product-m?category_id=010103'>BMW</a></td>
                <td><a href='Uploading-Product-m?category_id=010104'>Chevrolet</a></td>
                <tr></tr>
                <td><a href='Uploading-Product-m?category_id=010105'>Chrysler</a></td>
                <td><a href='Uploading-Product-m?category_id=010106'>Citroen</a></td>
                <tr></tr>
                <td><a href='Uploading-Product-m?category_id=010107'>Dacia</a></td>
                <td><a href='Uploading-Product-m?category_id=010108'>Daewoo</a></td>                    
                </tr>
                
                <tr>
               <td><a href='Uploading-Product-m?category_id=010109'>Mahindra</a></td>
                <td><a href='Uploading-Product-m?category_id=010110'>Fiat</a></td> 
                <tr></tr>
                <td><a href='Uploading-Product-m?category_id=010111'>Ford</a></td>
                <td><a href='Uploading-Product-m?category_id=010112'>Honda</a></td> 
                <tr></tr>
                <td><a href='Uploading-Product-m?category_id=010113'> Hyundai</a></td>
                <td><a href='Uploading-Product-m?category_id=010114'>Jaguar</a></td> 
                <tr></tr>
                <td><a href='Uploading-Product-m?category_id=010115'>Jeep</a> </td>
                <td><a href='Uploading-Product-m?category_id=010116'>Kia</a></td>                 
                </tr>
                
                <tr>
                <td><a href='Uploading-Product-m?category_id=010119'>Land Rover</a></td>
                <td><a href='Uploading-Product-m?category_id=010120'>Lexus</a></td> 
                <tr></tr>
                <td><a href='Uploading-Product-m?category_id=010121'>Mazda</a></td>
                <td><a href='Uploading-Product-m?category_id=010122'>Mercedes Benz</a></td> 
                <tr></tr>
                <td><a href='Uploading-Product-m?category_id=010123'>Mini</a></td>
                <td><a href='Uploading-Product-m?category_id=010124'>Mitsubishi</a></td>                 
                </tr> 
                
                <tr>
                <td><a href='Uploading-Product-m?category_id=010125'>Nissan</a></td>
                <td><a href='Uploading-Product-m?category_id=010126'>Opel</a></td> 
                <tr></tr>
                <td><a href='Uploading-Product-m?category_id=010127'>Peugeot</a></td>
                <td><a href='Uploading-Product-m?category_id=010128'>Porsche</a></td> 
                <tr></tr>
                <td><a href='Uploading-Product-m?category_id=010129'>Renault</a></td>
                <td><a href='Uploading-Product-m?category_id=010130'>Rover</a></td> 
                </tr> 
                
                <tr>
                <td><a href='Uploading-Product-m?category_id=010133'> Skoda</a></td>
                <td><a href='Uploading-Product-m?category_id=010134'>Smart</a></td> 
                <tr></tr>
                <td><a href='Uploading-Product-m?category_id=010135'>Subaru</a></td>
                <td><a href='Uploading-Product-m?category_id=010136'>Suzuki</a></td> 
                <tr></tr>
                <td><a href='Uploading-Product-m?category_id=010137'>Tesla</a></td>
                <td><a href='Uploading-Product-m?category_id=010138'>Toyota</a></td> 
                <tr></tr>
                <td><a href='Uploading-Product-m?category_id=010140'>Volkswagen</a></td>                 
                <td> <a href='Uploading-Product-m?category_id=010141'>Volvo</a></td>
                <tr></tr>
                <td><a href='Uploading-Product-m?category_id=010142'>Other car brands</a></td> 
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

                    <td><a href='Uploading-Product-m?category_id=010202'>Spare & Repair Parts</a></td>
                    <td><a href='Uploading-Product-m?category_id=010203'>Tires & Rims</a> </td> 
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=010201'>Auto Hifi & Navigation</a></td>                    
                    <td><a href='Uploading-Product-m?category_id=010205'>Tools</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=010206'>Other car parts </a></td>                     
                </tr>
            </table>    
    </div> 
    
<br>



    <button id="button" class="button btn btn-primary collapsible">
Bicycles & Accessories</button>
    <div class="content">
        Type
        <br>         
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=010401'>Ladies</a></td>
                    <td><a href='Uploading-Product-m?category_id=010402'>Mens</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=010403'>Children</a></td> 
                    <td><a href='Uploading-Product-m?category_id=010405'>Other Bicycles & Accessories</a></td>
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

                    <td><a href='Uploading-Product-m?category_id=010502'>Motorcycles</a></td>
                    <td><a href='Uploading-Product-m?category_id=010504'>Scooters </a></td>    
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=010501'>Motorcycle Parts & Accessories</a></td>                
                </tr>
            </table>    
    </div>  
    
<br>

    <button id="button" class="button btn btn-primary collapsible">Other Vehicles </button>
    <div class="content">
        Type
        <br>         
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=010701'>Agricultural vehicles</a></td>
                    <td><a href='Uploading-Product-m?category_id=010703'>Construction</a></td> 
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=010704'>Buses</a></td>
                    <td><a href='Uploading-Product-m?category_id=010705'>Truck</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=010706'>Tractors & trailers</a></td>
                    <td><a href='Uploading-Product-m?category_id=010708'>Other Vehicle Parts & Accessories</a></td> 
                </tr>
            </table>    
    </div>  
    
<br>
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=010800'>Repairs & Services</a></td>
                </tr>
            </table> 


</div>   

<div style="width:100%;height:3px;background:orange;margin-top:10px;margin-bottom:10px;">
</div>

<?php#---------------- 5. Services ----------------------------#?>

<button id="button" class=" btn btn-primary collapsible">5. Services</button>
<div class="content">
    Sub-categories
    <br>
        <p>
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=020200'>Automobiles Repairs & Services</a></td>
                </tr>
            </table> 
        </p>     
        <p>    
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=020300'>Babysitter & Childcare</a></td>
                </tr>
            </table> 
        </p>    
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=020400'>Electronics</a></td>
                </tr>
            </table> 

    <button id="button" class="button btn btn-primary collapsible">House & Garden</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=020502'>Gardening </a></td>
                    <td><a href='Uploading-Product-m?category_id=020503'>Home Help</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=020505'>Repairs & Maintenance</a></td>
                    <td><a href='Uploading-Product-m?category_id=020507'>Other Services</a></td>                    
                </tr>
            </table>    
    </div> 
    
<br>  
       <p> 
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=020700'>Travel & Event</a></td>
                </tr>
            </table> 
       </p> 
       <p>        
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=020800'>Animal Care & Training</a></td>
                </tr>
            </table> 
       </p> 
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=021000'>Other services</a></td>
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
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=090200'>Flat and Rooms for Rent</a></td>
                </tr>
            </table> 


    <button id="button" class="button btn btn-primary collapsible">Plots & Gardens</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=090601'>Building plot</a></td>
                    <td><a href='Uploading-Product-m?category_id=090602'>Garden</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=090603'>Agriculture/ Forestry</a></td>
                    <td><a href='Uploading-Product-m?category_id=090604'>Other Plots & Gardens</a></td>
                </tr>
            </table>    
    </div> 
    <br>
    
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=090700'>Houses for sale</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=090800'>Houses for rent</a></td>
                </tr>
            </table> 
       </p> 


       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=091100'>Other properties</a></td>
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
                    <td><a href='Uploading-Product-m?category_id=120101'>Antiquarian books</a></td>
                    <td><a href='Uploading-Product-m?category_id=120102'>Children's books</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=120104'>Art & Culture</a></td>
                    <td><a href='Uploading-Product-m?category_id=120105'>Comics</a></td>
                    
                    </tr>
                    
                    <tr>
                    <td><a href='Uploading-Product-m?category_id=120106'>Novels</a></td>
                    <td><a href='Uploading-Product-m?category_id=120108'>Contemporary Literature & Classics</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=120110'>More Books & Journals</a></td>                    
                </tr>
            </table>    
    </div> 
    <br>

   <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=120200'>Office & Stationery</a></td>
                </tr>
            </table> 
       </p>

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=120400'>Textbooks, School & Studies</a></td>
                </tr>
            </table> 
       </p>

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=120500'>Film & DVD</a></td>
                </tr>
            </table> 
       </p>

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=120600'>Music & CDs</a></td>
                </tr>
            </table> 
       </p>

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=120700'>Musical instruments</a></td>
                </tr>
            </table> 
       </p>

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=120800'>More Music, Movies & Books</a></td>
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
                    <td><a href='Uploading-Product-m?category_id=030100'>Public Transport Offers</a></td>
                </tr>
            </table> 
       </p>
       <p>        
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=030200'>Comedy</a></td>
                </tr>
            </table> 
       </p>
       <p>        
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=030300'>Gift Coupon and Bonus</a></td>
                </tr>
            </table> 
       </p> 
       <p>        
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=030400'>Movies</a></td>
                </tr>
            </table> 
       </p> 
       <p>        
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=030500'>Concerts</a></td>
                </tr>
            </table> 
       </p> 
       <p>        
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=030600'>Sport</a></td>
                </tr>
            </table> 
       </p> 
       <p>        
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=030700'>Theatre & Musical</a></td>
                </tr>
            </table> 
       </p>
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=030800'>Other Tickets</a></td>
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
                    <td><a href='Uploading-Product-m?category_id=070100'>Bathroom Items</a></td>
                </tr>
            </table> 
       </p>

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=070200'>Office Items</a></td>
                </tr>
            </table> 
       </p>
       
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=070300'>Decoration Items</a></td>
                </tr>
            </table> 
       </p>       


    <button id="button" class="button btn btn-primary collapsible">Garden Accessories & Plants</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=070501'>Flowerpots</a></td>
                    <td><a href='Uploading-Product-m?category_id=070502'>Decoration</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=070503'>Gardening tools</a></td> 
                    <td><a href='Uploading-Product-m?category_id=070504'>Garden furniture</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=070505'>Plant</a></td>
                    <td><a href='Uploading-Product-m?category_id=070506'>Other garden accessories & plants</a></td>                   
                </tr>
            </table>    
    </div> 
    <br>
    
     <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=070600'>Kitchen Items</a></td>
                </tr>
            </table> 
       </p>



       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=070900'>Lamps & Light</a></td>
                </tr>
            </table> 
       </p>
       
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=071000'>Bedroom Items</a></td>
                </tr>
            </table> 
       </p>  
       
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=071100'>Living Room Items</a></td>
                </tr>
            </table> 
       </p>         


       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=071200'>Other house & garden Items</a></td>
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

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=060200'>Food & Drink</a></td>
                </tr>
            </table> 
       </p>

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=060300'>Leisure activities</a></td>
                </tr>
            </table> 
       </p>

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=060400'>Handworks & Handicrafts</a></td>
                </tr>
            </table> 
       </p>

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=060500'>Art & Antiques</a></td>
                </tr>
            </table> 
       </p>


       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=060800'>Travel & Event Services</a></td>
                </tr>
            </table> 
       </p>

 
    <button id="button" class="button btn btn-primary collapsible">Sport & Camping</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=061001'>Ball sports</a></td>
                    <td><a href='Uploading-Product-m?category_id=061002'>Camping & Outdoor</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=061003'>Fitness</a></td> 
                    <td><a href='Uploading-Product-m?category_id=061004'>Cycling</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=061005'>Dancing & Running</a></td>
                    <td><a href='Uploading-Product-m?category_id=061006'>Swimming</a></td> 
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=061007'>Winter sports</a></td>
                    <td><a href='Uploading-Product-m?category_id=061008'>More Sports & Camping</a></td>
                </tr>
            </table>    
    </div> 
    <br>
 
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=061200'>Lost & Found</a></td>
                </tr>
            </table> 
       </p>


       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=061300'>Further leisure, hobby & neighborhood</a></td>
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

    <button id="button" class="button btn btn-primary collapsible">Baby & Children's Clothing</button>
    <div class="content">
        Type
        <br>          
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=050201'>Pants & Jeans</a></td>
                    <td><a href='Uploading-Product-m?category_id=050202'>Dresses & Skirts</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=050203'>Shirts & Tops</a></td>
                    <td><a href='Uploading-Product-m?category_id=050204'>Shirts</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=050205'>Jackets & Coats</a></td>
                    <td><a href='Uploading-Product-m?category_id=050206'>Sweaters </a></td> 
                    </tr>
                    
                    <tr>
                    <td><a href='Uploading-Product-m?category_id=050207'>Laundry</a></td>
                    <td><a href='Uploading-Product-m?category_id=050208'>Sportswear</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=050209'>Swimwear</a></td>
                    <td><a href='Uploading-Product-m?category_id=050210'>Accessories</a></td>
                    <tr></tr>
                    <td><a href='Uploading-Product-m?category_id=050212'>More baby & children's clothing</a></td>                    
                </tr>
            </table>    
    </div> 

    <br>
       <p> 
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=050300'>Baby & Children's Footwears</a></td>
                </tr>
            </table>  
       </p>
 
       <p> 
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=050400'>Baby Equipment & Toys</a></td>
                </tr>
            </table>  
       </p> 

       <p>        
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=050600'>Babysitter & Childcare</a></td>
                </tr>
            </table>  
       </p> 
 
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=051000'>Other family, child & baby</a></td>
                </tr>
            </table>      
    
</div>

<div style="width:100%;height:3px;background:orange;margin-top:10px;margin-bottom:10px;">
</div>


<?php#-------- 12. Lessons & Courses ----------------------#?>

<button id="button" class=" btn btn-primary collapsible">12. Lessons & Courses</button>
<div class="content">
    Sub-categories
    <br>    
       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=140100'>Beauty & Health</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=140200'>Computer Courses</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=140300'>Esoteric & Spiritual</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=140400'>Cooking & Baking</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=140500'>Art & Design</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=140600'>Music & Singing</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=140700'>Tutoring</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=140800'>Sports courses</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=140900'>Language courses</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=141000'>Dance Classes</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=141100'>Further education</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=141200'>More Lessons & Courses</a></td>
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
                    <td><a href='Uploading-Product-m?category_id=150100'>Exchange</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=150200'>Lend</a></td>
                </tr>
            </table> 
       </p> 

       <p>     
            <table>
                <tr>
                    <td><a href='Uploading-Product-m?category_id=150300'>Give away</a></td>
                </tr>
            </table> 
       </p>    
    
</div>

<div style="width:100%;height:3px;background:orange;margin-top:10px;margin-bottom:10px;">
</div>

<div style="height:100px;">
</div>


        <?php
            include 'bottom_bar-mobile.php';         
        ?>

</body>


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
