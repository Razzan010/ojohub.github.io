<style>
    html, body {
        max-width: 100%;
        overflow-x: hidden;
    }
</style>

          <?php
              include 'topbar2_stores-mobile.php';         
            ?> 

<body style="background:#F4F4F4;">

    
<?php
    if (isset($_SESSION['customer_email'])) {
	$customer_email=$_SESSION['customer_email'];
    }
?>

     
<div style="width:100%;height:3px;background:white;margin-top:10px;margin-bottom:10px;">
</div>


<?php 

 if (isset($_SESSION['customer_email'])) {

    $customer_email=$_SESSION['customer_email'];
    $sel_cart="select * from customers where customer_email='$customer_email'";
    $run_customer=mysqli_query($con,$sel_cart);
    $row_customer=mysqli_fetch_array($run_customer);
    $check_cart=mysqli_num_rows($run_customer); 
    
    $customer_name=$row_customer['customer_name'];
    $customer_id=$row_customer['customer_id'];
    $date_of_reg=$row_customer['date_of_reg'];
    
    $sel_cart_2="select * from products where customer_id='$customer_id'";
    $run_customer_2=mysqli_query($con,$sel_cart_2);
    $row_customer_2=mysqli_fetch_array($run_customer_2);
    $check_cart_2=mysqli_num_rows($run_customer_2); 
     
        }    
      ?>

<table class="table-a">
  <tr class="tr-a">
        <td>
            <a href="OwnAccount-m" style="color:orange;">
                <i class="fa fa-user-o" aria-hidden="true"></i>
            </a>        
        </td>
        <td>
            <a href="OwnStore-m">
                <i class="fa fa-square-o" aria-hidden="true"></i>
            </a>        
        </td>
        <td>
            <a href="Favourites-m">
                <i class="fa fa-heart-o" aria-hidden="true"></i>
            </a>            
        </td>
        <td>
            <a href="Followed-m">
                <i class="fa fa-plus-square-o" aria-hidden="true"></i>
            </a>        
        </td>
        <td>
        <a href="Settings-m">
            <i class="fa fa-cogs" aria-hidden="true"></i>
        </a>             
        </td>
  </tr>
  
  <tr class="tr-b">
    <td class="td-a">Profile</td>
    <td class="td-a">Store</td>
    <td class="td-a">Favourites</td>
    <td class="td-a">Follows</td>
    <td class="td-a" style="color:orange;">Settings</td>
  </tr>
  
</table>  


<style>
    .table-a{
        width:95%;
        margin-left:3%;
        margin-right:5%;
        margin-top:7%;
    }
    .tr-a{
        font-size:30px;
        text-align:center;
        color:#61ae43;
    }

    
    .tr-b{
        font-size:12px;
        text-align:center;
    } 
    
    .td-a{
        width:20%;
        font-weight:bold;
    }

</style>

<div style="background:white; height:100%;width:100%;margin-top:5%;">
    
     <div class=" " style="padding-top:20%;padding-left:17%;">
         <span>Do you have Feedback for us? </span>
         <a href="feedbacks-mobile.php"><button style="font-weight:bold;">Start</button></a>
         
          <?php   

          if (!isset($_SESSION['customer_email'])) {
              echo " 
              <div class=' ' style=''> 
              I want to login :
              <button>
              <a href='EnteringNow-m' style='color:green; font-weight:bold;'>
                    Login
              </a>
              </button>
            </div>";

            }else{
              $session_customer=$_SESSION['customer_email'];
              $get_cust="select * from customers where customer_email='$session_customer'";
               $run_cust=mysqli_query($con,$get_cust);
              $row_customers=mysqli_fetch_array($run_cust);          
             $customer_name=$row_customers['customer_name'];

              echo "<div class='' style='padding-top:20%;margin-left:5%;' >
                    <button class=''>
                  <a href='logout.php' style='color: green;margin-right:10px;float:;'>
                  <i class='fa fa-caret-right' ></i>
                   Logout 
                  </a>
                  </button>

                  <a href='OwnAccount-m' class='';  style='color:Purple;float:; font-weight:bold; font-size:18px; text-decoration:none; margin-left:10px; margin-top:12px;'> 
                  $customer_name 
                  </a>
              </div>";
            }
           ?> 
        </div> 
        
        
<style>
    .signup-btn{
  margin-top: 5px;
  background: white; 

  height:40px; 
  width:90px; 
  border:none; 
  border: 2px solid #19BC15 ;   
  border-radius: 5px;
  margin-left:10px; 
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.signup-text{
  color:#19BC15;
  text-decoration: none;
  font-weight:bold;
}
.signup-text:hover{
  text-decoration: none;
}

.login-btn{
  margin-top: 5px;  
  background: #19BC15; 

  height:40px; 
  width:90px; 
  border:none;
  border-radius: 5px; 
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
.login-text{
  color:white;
  text-decoration: none;
  font-weight: bold;
}
.login-text:hover{
  text-decoration: none;
}
</style>  
 
</div>

          <?php
              include 'bottom_bar-mobile.php';         
            ?>

</body>



