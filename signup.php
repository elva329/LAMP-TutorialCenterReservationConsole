<?php

// if($_POST["password1"]==$_POST["password2"] && $_POST["password1"]!="" && $_POST["username"]!="")

if($_POST["username"]!="" && $_POST["password"]!="")

{

$con=mysql_connect("localhost","root","");

if(!$con)

  {

  die('Error connecting to server :'.mysql_error());

  }

mysql_select_db("TCRC",$con);

 

$result=mysql_query("SELECT username FROM newuser WHERE username='$_POST[username]'");

if(!mysql_fetch_array($result,MYSQL_ASSOC))

  {

   

$sql="INSERT INTO newuser (username, password, email) VALUES('$_POST[username]','$_POST[password]', '$_POST[email]')";

if(!mysql_query($sql,$con))

  {

  die('Error :'.mysql_error());

  }

 echo "You are registered. Congrats !!!";

 echo "<a href='admin login.html'> Go back to login page </a>";

 }

else

 {

 echo "Username Already exists ! ";

 echo "<a href='admin login.html'> Go back to login page </a>";

 }

 mysql_close($con);

}

// else

// {

// if($_POST["password1"]!=$_POST["password2"])

//   echo "Password mismatch <br />";

// else

//   echo "Invalid Username  <br />";

// echo "<a href='admin login.html'> Go back to login page </a>";

// }


?>
