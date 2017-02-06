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

<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>

<div id="header">
  <div class="shell">
    <div id="top">
      <h1><a href="#">Time Slot Management</a></h1>

      <div id="top-navigation"> Welcome <a href="#"><strong>Tutor</strong></a> <span>|</span><a href="logout.php">Log out</a> </div>
  
    </div>
   
  </div>
</div>

<div id="container">
  <div class="shell">
  
    <div id="main">
      <div class="cl">&nbsp;</div>
      
      <div id="content">
        
        
<style>
  

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




<html>

<head>
	<title>Selection Confirmed</title>
	<link href="css/site.css" rel="stylesheet">

 </head>

<body>
	<div id="main">

  <h2>Your availability is confirmed. Please check below details.</h2>
  <br>
  <br>

<li><label><strong>Name: </strong></label><?php echo $_POST["name"]; ?></li>
<br>

<li><label><strong>E-mail: </strong></label><?php echo $_POST["email"]; ?></li>
<br>

<li><label><strong>Phone Number: </strong></label><?php echo $_POST["phone"]; ?></li>
<br>

<li><label><strong>Available Time Slots: </strong></label><?php echo $_POST["slots_booked"]; ?></li>
<br>

<?php
// Only process the form if $_POST isn't empty
if ( ! empty( $_POST ) ) {
  
  // Connect to MySQL
  $mysqli = new mysqli( 'localhost', 'root', '', 'TCRC' );
  
  // Check our connection
  if ( $mysqli->connect_error ) {
    die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
  }
  
  $name = mysql_real_escape_string($_POST['name']);
  $email = mysql_real_escape_string($_POST['email']);
  $phone = mysql_real_escape_string($_POST['phone']);
  $slots_booked = mysql_real_escape_string($_POST['slots_booked']);
  // Insert our data
  // $sql = "INSERT INTO bookings (name,email,phone,timeslots) VALUES ('{$mysqli->real_escape_string($_POST['name'])}','{$mysqli->real_escape_string($_POST['email'])}','{$mysqli->real_escape_string($_POST['phone'])}','{$mysqli->real_escape_string($_POST['slots_booked'])}'";
  $sql = "INSERT INTO bookings (name,email,phone,timeslots) VALUES ('$name','$email','$phone','$slots_booked')";
 


  $insert = $mysqli->query($sql);
  
  // Print response from MySQL
  if ( $insert ) {
    // echo "Success! Row ID: {$mysqli->insert_id}";

    echo "";

  } else {
    die("Error: {$mysqli->errno} : {$mysqli->error}");
  }
  
  // Close our connection
  $mysqli->close();
}

?>

<!-- <div id="footer">
      <div class="copyright">
    <footer>
      <small>Copyright &copy;  2015 Snapask Academy. All rights reserved.</small>
      <br>
      <small><font size="1.5"><i>*This site is best viewed in Google Chrome Version 46.0.2490.86 or above.</i></small>
      <link href="css/site.css" rel="stylesheet">
    </footer>
    </div>
    </div> -->


  </html>


