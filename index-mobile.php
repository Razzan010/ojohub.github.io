<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    if ($android || $bberry || $iphone || $ipod || $webos== true) { 
        
    }else{
        header('Location: http://www.store.ojohub.com/Home');        
    }
?>

          <?php
              include 'topbar2_stores-mobile.php';         
            ?> 
            
<div style="width:100%;height:3px;background:white;margin-top:10px;margin-bottom:10px;">
</div>

<table>
  <tr class="tr-a">
        <td>
        <a href="allcategories-mobile.php?category_page=1" >            
            <span class="span">
                <i class="fa fa-car padding-l-15" aria-hidden="true"></i>
            </span>        
        </td>
        
        <td>
        <a href="allcategories-mobile.php?category_page=1" >            
            <span class="span">
                <i class="fa fa-home" aria-hidden="true"></i>
            </span> 
        </a>             
        </td>
        
        <td>
        <a href="allcategories-mobile.php?category_page=1" >            
            <span class="span">
                <i class="fa fa-mobile " aria-hidden="true"></i>
            </span>
        </a>             
        </td>
        
        <td>
        <a href="allcategories-mobile.php?category_page=1" >            
            <span class="span">
                <i class="fa fa-paw " aria-hidden="true"></i>
            </span>  
        </a>             
        </td>
        
        <td>
        <a href="allcategories-mobile.php?category_page=1" >  
           <span class="span">        
            <i class="fa fa-list-ul " aria-hidden="true"></i>
            </span>              
        </a>   
        </td>
  </tr>
  
  <tr class="tr-b">
    <td>Car, Bike & Bicycle</td>
    <td>House & Garden</td>
    <td>Electronics</td>
    <td>Pets</td>
    <td>Other Categories</td>
  </tr>
  
</table>  


<style>
    table{
        width:95%;
        margin-left:3%;
        margin-right:5%;
        margin-top:7%;
    }
    .tr-a{
        font-size:30px;
        text-align:center;
    }
    

    .tr-b{
        font-size:12px;
        text-align:center;
                color:#61ae43;
    } 
    
    td{
        width:20%;
        color:#61ae43;
    }
    
    .span{
        color:#61ae43;
    }

</style>


<div style="width:100%;height:3px;background:white;margin-top:10px;margin-bottom:5px;">
</div>

<div style="width:100%;text-align:center;font-weight:bold;">Buy To Reuse</div>

<div style="width:100%;height:3px;background:white;margin-top:5px;margin-bottom:10px;">
</div>

    <div class="padding-left" style=""> 
                <?php
                    getProducts_index_desktop();          
                 ?>
                <button style="width:90%; border:none;font-size:25px;background:none;font-weight:bold;color:orange;"></button> 
                <?php  
                    include 'getProducts_index_desktop-mobile.php'; 
                 ?> 

    </div>
    
    <div style="height:125%;"></div>
    

<style> 
        .padding-left{
            padding-left:7%;
        }
</style>


<style>  
    @media all and (max-width: 320px) {
        .padding-left{
            padding-left:0;
        }
    }
</style>



<style>

.open-button {
  background-color: grey;
  color: black;
  font-weight:bold;
  padding: 10px 10px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 70px;
  left: 0px;
  float:right;

}

}
</style>

<a href="how-mobile.php"><button class="open-button" onclick="openForm()"><i class="fa fa-info-circle" aria-hidden="true"></i> How does it Works ?</button></a>


<div style="height:175px;">
</div>

          <?php
              include 'bottom_bar-mobile.php';   
            ?> 

 </body>