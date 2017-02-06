<?php
session_start();
// if(!$_SESSION('myusername')){
if(!$_SESSION['myusername']= "myusername"){
// header("location:main_login.php");
	header("std login.html");
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

      <div id="top-navigation"> Welcome <a href="#"><strong>Student</strong></a> <span>|</span><a href="logout.php">Log out</a> </div>
	

    </div>



   
  </div>
</div>

<div id="container">
  <div class="shell">
  
    <div id="main">
      <div class="cl">&nbsp;</div>
      
      <div id="content">
        
        
<h2><p>Below are the available time slots that for you to choose. </p></h2>
<br>
<br>

<style>

table, th, td {
     border: 1px solid black;
}

#details {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 100%;
    border-collapse: collapse;
}

#details td, #details th {
    font-size: 1em;
    border: 1px solid #98bf21;
    padding: 3px 7px 2px 7px;
}

#details th {
    font-size: 1.1em;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #A7C942;
    color: #ffffff;
}

#details tr.alt td {
    color: #000000;
    background-color: #EAF2D3;
}
		</style>

<div id="seachtext"><span>

          <?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "TCRC";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name, email, phone, timeslots FROM bookings";
$result = $conn -> query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"]. $row["name"] . $row["email"].$row["phone"].$row["timeslots"];
//     }
// } else {
//     echo "0 results";
// }


if ($result->num_rows > 0) {
     echo "<table><tr><th>ID</th><th>Name</th><th>email</th><th>phone</th><th>timeslots</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>".$row["email"]. "</td><td>".$row["phone"]. "</td><td>".$row["timeslots"]."</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}


$conn->close();
?>  
  
</body>
</html>
