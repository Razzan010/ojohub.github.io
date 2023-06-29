<head>
    <?php
        include("css/css.php");
    ?> 
<title>My Store</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Spectral:200,300,400,500,600,700,800&amp;display=swap">
    <meta name="msapplication-TileColor" content="#ffffff">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="OjOhub.com ist the Best place to list your new or second-hand product. It is free , simple and unlimited. This platform can be used as a Job-portal as well. Find your appropriate Job on Job Category.">
    <meta name="robots" content="">
 </head> 
 
 
<table class="mainbody" width="1024" border="0" align="center" cellpadding="0" cellspacing="0">

    <td>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
     
  <div class="" >
        <a class="" href="Home" style="float:left;">
            <img src="logos/logo-desktop.png" style="height: 60px;">
        </a>     
      
          <img src="logos/flag.gif" style="height: 30px;">  
    
       <div class=" " style="float:right;">
         <?php   
          if (!isset($_SESSION['customer_email'])) {
              echo " 
              <div class='hide-on-481       ' style=''> 
              <a href='BeingMember' class='signup-text'>
              <button class='signup-btn' style=''>
              Signup
              </button>
              </a>
               
              <a href='EnteringNow' class='login-text'> 
              <button class='login-btn' style=''> 
              Login
              </button>
              </a>
            </div>";

         /* echo " <div class='dropdown   mobile-show '>
            <button class='dropbtn myaccount-btn login-text' style=''><i class='fa fa-user-o '></i> My Account</button>
                   <div class='dropdown-content'> 

          <a href='EnteringNow' class='' style='color: purple;font-size:18px;'><i class='fa fa-sign-in ' style=size:30px;color:grey;></i>  Login</a>  

          <a href='BeingMember' class='' style='color: purple;font-size:18px;'><i class='fa fa-user-plus ' style=size:30px;color:grey;></i>  Signup</a>     
          </div>      
        </div>";*/

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

                  <a href='OwnAccount' class='';  style='color:Purple;float:right; font-weight:bold; font-size:18px; text-decoration:none; margin-right:10px; margin-top:12px;'> 
                  $customer_name 
                  </a>
              </div>";
            
               
             /*  echo "<div class='only-in-mob-md ' style='padding-right: 10px; padding-top: 10px;float:right;' >
                  <a href='logout.php' class='header-btn home-btn m-l-12 open-signp-modal' style='background: #7C532C; color: white;margin-right:10px;float:right;'>Logout
                  </a>

                  <a href='OwnAccount'  style='color:black;float:right; font-weight:bold; font-size:18px; text-decoration:none;'><i class='fa fa-user fa-lg' style=size:30px;color:#7C532C;></i> 
                  </a>
              </div>";*/
            }
           ?> 
        </div>
        </div> 

          </tr>      
        </table>
        
   </td>
</table>
</body>
</html>

