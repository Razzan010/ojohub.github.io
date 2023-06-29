
<style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: white;
  position: fixed;
  bottom: -20;
  width: 100%;
  box-shadow: 2px 0 18px rgba(0, 0, 0, 0.26);
          border: 3px transparent blue;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 17px;
  text-decoration: none;
  font-size: auto;
  color:green;
  font-size:35px;
}

@media all and (max-width: 320px) {
.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 8px 14px;
  text-decoration: none;
  font-size: auto;
  color:green;
  font-size:20px;
}
}

.navbar a:hover {
  background: #ddd;
  color: black;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px;
}
</style>

<table>
<div class="navbar" >
    <div>
    <?php
     if (isset($_SESSION['customer_email'])) {
        $customer_email=$_SESSION['customer_email'];
        
        $sel_cart="select * from customers where customer_email='$customer_email'";
        $run_customer=mysqli_query($con,$sel_cart);
        $row_customer=mysqli_fetch_array($run_customer);
        $check_cart=mysqli_num_rows($run_customer); 
        
        $un_verified=$row_customer['un_verified'];
                
           if($un_verified==Verified){        
            
                echo "<a href='Uploading-Product-m'><i class='fa fa-clipboard' aria-hidden='true'></i><br>
                    <span style='font-size:10px;'>Post Ad</span>
                </a>"; 
           }else{
               
                echo "<a href='OwnAccount-m'><i class='fa fa-clipboard' aria-hidden='true'></i><br>
                    <span style='font-size:10px;'>Post Ad</span>
                </a>";             
               
           }
     }else{

            echo "<a href='EnteringNow-m'><i class='fa fa-clipboard' aria-hidden='true'></i><br>
                <span style='font-size:10px;'>Post Ad</span>
            </a>";          
     }
    ?>
    </div>

    <div>
    <a href="AdvancedSearch-m"><i class="fa fa-search-plus" aria-hidden="true"></i><br><span style="font-size:10px;">Search</span>
    </a>        
    </div>
    
    <div>
    <a href="Home-m"><i class="fa fa-home" aria-hidden="true"></i><br>
        <span style="font-size:10px;">Home</span>
    </a>        
    </div>

    <div>
        <a href="Messages-m">
            <?php 
    
         if (isset($_SESSION['customer_email'])) {
            $customer_email=$_SESSION['customer_email'];
            
            $sel_cart="select * from customers where customer_email='$customer_email' && message_notify='1'";
            $run_customer=mysqli_query($con,$sel_cart);
            $row_customer=mysqli_fetch_array($run_customer);
            $check_cart=mysqli_num_rows($run_customer); 
            
                if ($check_cart==0){ 
                    echo "<i class='fa fa-envelope' aria-hidden='true' style='color:green;'></i><br><span style='font-size:10px;'>Messages</span>";
                    
                }else{
                    echo "<img src='icons/message_btn.png' style='height: 33px;'><br><span style='font-size:10px;'>Messages</span>";  
                }
         }else{
                    echo "<i class='fa fa-envelope' aria-hidden='true' style='color:green;'></i><br><span style='font-size:10px;'>Messages</span>";         
         }
            ?>
        </a>
    </div>
    
    <div>
    <a href="OwnAccount-m"> <i class="fa fa-user" aria-hidden="true"></i><br><span style="font-size:10px;">Account</span>
    </a>          
    </div>

</div>
</table>