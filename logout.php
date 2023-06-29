<?php
session_start();
session_destroy();

echo "Your are Logged out.";
echo "<script>window.open('Home','_self')</script>"; 
 ?>