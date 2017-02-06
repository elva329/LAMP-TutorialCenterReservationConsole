<?php
session_start();
unset($_SESSION["myusername"]);
header("Location:admin login.html");
?>


<!-- // session_start();


// if(session_destroy()) // Destroying All Sessions
// {
// 	// unset($_SESSION["myusername"]);
// header("Location: admin login.html"); // Redirecting to admin login page
// }
// ?> -->