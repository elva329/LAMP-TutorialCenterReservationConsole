<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
if(isset($_POST['btn-login']))
{
 $username = mysql_real_escape_string($_POST['username']);
 $password = mysql_real_escape_string($_POST['password']);
 $email = mysql_real_escape_string($_POST['email']);
 

 $res=mysql_query("SELECT * FROM newuser WHERE email='$email'");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($password))
 {
  $_SESSION['user'] = $row['user_id'];
  header("Location: home.php");
 }
 else
 {
  ?>