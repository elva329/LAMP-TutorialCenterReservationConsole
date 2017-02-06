<?php
session_start();
// if(!$_SESSION('myusername')){
if(!$_SESSION['myusername']= "myusername"){
// header("location:main_login.php");
	header("admin login.html");
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Tutor Time Slot Page</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
  <div class="shell">
    <div id="top">
      <h1><a href="#">Time Slot Management</a></h1>

      <div id="top-navigation"> Welcome <a href="#"><strong>Tutor</strong></a> <span>|</span><a href="logout.php">Log out</a> </div>
	

    </div>

   
  </div>


    
  </div>
</div>


<input id="datepicker">
     


 <script type="text/javascript">
// $("#datepicker").datepicker({
//                     changeMonth : true,
//                     changeYear : true,
//                      onSelect: function () 
//                     {
//                    window.open("www.google.com","_self");
//                    }
// });
</script>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>datepicker demo</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<body>
 
<div id="datepicker"></div>
 
 
<h2>Please select your available date.</h2>
<script type="text/javascript">
$("#datepicker").datepicker({
                    changeMonth : true,
                    changeYear : true,
                     onSelect: function () 
                    {
                   window.open("available slots.php","_self");
                   }
});
</script>
 



 

</body>
</html>
