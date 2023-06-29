<style>
    html, body {
        max-width: 100%;
        overflow-x: hidden;
    }
</style>

<head>
<title>OjOhub | The Next Leveled Marketplace</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Spectral:200,300,400,500,600,700,800&amp;display=swap">
    <meta name="msapplication-TileColor" content="#ffffff">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    
    
    <link rel="stylesheet" type="text/css"href="css/css-mobile.css">    
    <meta name="description" content="OjOhub.com ist the Best place to list your new or second-hand product. It is free , simple and unlimited. This platform can be used as a Job-portal as well. Find your appropriate Job on Job Category.">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head> 
 
    <?php
      session_start();
      include("includes/db.php");
      include 'functions-mobile.php'; 
    ?> 
 
 <body style="background:#F4F4F4">

    <div class="w-100 mt-2">
        <a class="" href="Home-m" style="float:left;">
            <img src="logos/logo-m1.png" style="height: 50px;">
        </a>       
          
        <form action="YourSearch-m" method="GET" name="" style="padding-top:1%;">
            <input class="border-2 padding-search-box" name='search' type="search" placeholder="Search Products..." style="float:left;width:62%;border:2px solid #008000" class="">
            <button class="btn btn-primary f-size-15 ml-2 w-20" style="background:#008000"> 
            Search
            </button> 
        </form>     
    </div>