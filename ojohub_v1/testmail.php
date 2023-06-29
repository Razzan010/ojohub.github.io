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




<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


<table class="mainbody" width="1024" border="0" align="center" cellpadding="0" cellspacing="0">

    <td>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <?php
              include 'topbar2_stores.php';         
            ?> 
          </tr>      
        </table>



        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
<!--------------------------------------------->
        
      <td bgcolor="lightblue" style="padding-left: 85px;border-radius:10px 0px 0px 10px;">
        <input class="" type="search" placeholder="Search Products..." class="home-input av-roman home-search" style="padding: 6px 16px 7px 42px; border: 2px solid #19BC15 ;width: 200px;float: left;">

        <button style="border: 2px solid #19BC15 ;font-size: 20px;float: left;margin-left: 5px;" class="btn btn-primary"><i class='fa fa-search' ></i></button>

   


  <div class="dropdown ">
            <span style="color:Green;border-radius: 5px;float: left; margin-left: 5px;font-weight: bold;" class="btn btn-default login-text">Locations <i class="fa fa-chevron-circle-down (dropdown)"></i></span> 
          

        <div class='dropdown-content'> 

          <a href='allproducts.php?location=Kathmandu' class='' style='color: purple;font-size:18px;'> Kathmandu</a>  

          <a href='allproducts.php?location=Lalitpur' class='' style='color: purple;font-size:18px;'>Lalitpur</a> 

          <a href='allproducts.php?location=Bhaktapur' class='' style='color: purple;font-size:18px;'>Bhaktapur</a> 

          <a href='allproducts.php?location=Pokhara' class='' style='color: purple;font-size:18px;'>Pokhara</a> 

          <a href='allproducts.php?location=Butwal' class='' style='color: purple;font-size:18px;'>Butwal</a>

          <a href='allproducts.php' class='' style='color: yellow;font-size:18px;'>More</a>                                   
          </div>  
            
  </div>






      </td>  

      <td bgcolor="lightblue" style="border-radius:0px 10px 10px 0px;"> 

        <?php 
        if (isset($_SESSION['customer_email'])) {
         $customer_email=$_SESSION['customer_email'];
         $sel_cart="select * from stores where customer_email='$customer_email'";
         $run_customer=mysqli_query($con,$sel_cart);
          $check_cart=mysqli_num_rows($run_customer); 

            if ($check_cart>0) {
            echo "<div class='' >
              <h4><a href='mystore.php' style='font-weight: bold;float: right;padding-right:10px;padding-bottom:8px;color:#19BC15;'>My Store</a> </h4>             
             </div> 

            ";
            }else{     
            echo "<div class='' >
              <h3><a href='createstore_form.php' style='font-weight: bold;float: right;padding-right:10px;padding-bottom:8px;color:#19BC15;'> Create Store</a> </h3>          
             </div> 
                          ";
            } 
        }else{
        echo "<div class='' >
            <h4 '><a href='createstore_red.php' style='font-weight: bold;float: right;padding-right:10px;padding-bottom:8px;color:#19BC15;'> Create Store</a> </h4>           
             </div> 
                       ";
            }  
           ?>
          

          <!-- <span style="color:Green;border-radius: 5px;" class="btn btn-default">View by Products</span> 
          -->

         
<a href="mybasket.php" style="color:purple;font-weight: bold;text-decoration: none;">My Basket
<button > <i class='fa fa-shopping-cart' style="font-size:15px;"></i></button>
</a>
      </td>


