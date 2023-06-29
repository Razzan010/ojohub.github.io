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
<!---------------------------------------------> 

<table class="mainbody" width="1024" border="0" align="center" cellpadding="0" cellspacing="0">

    <td>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <?php
              include 'topbar1_stores.php';         
            ?> 
          </tr>      
        </table>
        
<!--------------------------------------------->   

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
                 Inserting Page
                </strong>
            </font>

              
        </tr>

    <table width="100%" border="0" cellspacing="2" cellpadding="2">
    </div>                  
 <div style="width:100%;height:1px;background-color:#A9B8D1;margin-top:10px;margin-bottom:10px;">
</div>

<!--------------------------------------------->  

<div class="" style="padding-top: 1%">
    <div>
         <h4>Inserting Categories. </h4>
    </div>  

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group ">
            <input  class="login-input-login-page" id=""  type="number" name="cat_id" placeholder="Category Id..." required="" style="border: 2px solid #19BC15 ;color: black; width: 70%;min-height: 50px;resize: none;">
            <br>
            <br>
            <input  class="login-input-login-page" id=""  type="text" name="" placeholder="Category..." required="" style="border: 2px solid #19BC15 ;color: black; width: 70%;min-height: 50px;resize: none;" disabled="">
            <br>
            <br>
            <input  class="login-input-login-page" id=""  type="text" name="" placeholder="Sub-Categories..." required="" style="border: 2px solid #19BC15 ;color: black; width: 70%;min-height: 50px;resize: none;" disabled="">
            <br>
            <br>
            <input  class="login-input-login-page" id=""  type="text" name="type" placeholder="Type..."  style="border: 2px solid #19BC15 ;color: black; width: 70%;min-height: 100px;resize: none;">            
        </div>
        <br>
        <br>
        <div class="form-group" style="float: center; color: white; font-weight:bold;">
                <button id="" class="login-btn-login-page" name="submit_1">
                    Send                  
                </button>
        </div>
        <br>
    </form>
</div>    


<?php
    if (isset($_POST['submit_1'])) {
        $cat_id=$_POST['cat_id'];        
        $type=$_POST['type'];
        
        $insert_customer="insert into category (category_id,category,sub_category,type) values('$cat_id','Give away & exchange','Give away','$type')";
        $run_customer=mysqli_query($con,$insert_customer);
}

