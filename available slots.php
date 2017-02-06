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



$conn->close();
?>  
     

<br>
<br>

</div>
</span>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- <title>Calendar</title> -->
<link href="style.css" rel="stylesheet" type="text/css">

<link href="http://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<script type="text/javascript">

var check_array = [];

$(document).ready(function(){


  $(window).bind("pageshow", function(event) {
      if (event.originalEvent.persisted) {
        window.location.reload() 
      }
  });


  $(".fields").click(function(){
  
    dataval = $(this).data('val');
  
    // Show the Selected Slots box if someone selects a slot
    if($("#outer_basket").css("display") == 'none') { 
      $("#outer_basket").css("display", "block");
    }

    if(jQuery.inArray(dataval, check_array) == -1) {
      check_array.push(dataval);
    } else {
      // Remove clicked value from the array
      check_array.splice($.inArray(dataval, check_array) ,1); 
    }
    
    slots=''; hidden=''; basket = 0;
    
    cost_per_slot = $("#cost_per_slot").val();
    //cost_per_slot = parseFloat(cost_per_slot).toFixed(2)

    for (i=0; i< check_array.length; i++) {
      slots += check_array[i] + '\r\n';
      hidden += check_array[i].substring(0, 8) + '|';
      basket = (basket + parseFloat(cost_per_slot));
    }
    
    // Populate the Selected Slots section
    $("#selected_slots").html(slots);
    
    // Update hidden slots_booked form element with booked slots
    $("#slots_booked").val(hidden);   

    // Update basket total box
    basket = basket.toFixed(2);
    $("#total").html(basket); 

    // Hide the basket section if a user un-checks all the slots
    if(check_array.length == 0)
    $("#outer_basket").css("display", "none");
    
  });
  
  
  $(".classname").click(function(){
  
    msg = '';
  
    if($("#name").val() == '')
    msg += 'Please enter a Name\r\n';

    if($("#email").val() == '')
    msg += 'Please enter an Email address\r\n';

    if($("#phone").val() == '')
    msg += 'Please enter a Phone number\r\n'; 

    if(msg != '') {
      alert(msg);
      return false;
    }

  });

  // Firefox caches the checkbox state.  This resets all checkboxes on each page load 
  $('input:checkbox').removeAttr('checked');
  
});




</script>

</head>
<body>

<div style="overflow:hidden;">
    <div class="form-group">
        <div class="row">
            <div class="col-md-8">
                <div id="datetimepicker12"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker12').datetimepicker({
                inline: true,
                sideBySide: true
            });
        });
    </script>
</div>




    <!-- <div id='lhs'><div id='outer_calendar'>
    
  <table border='0' cellpadding='0' cellspacing='0' id='calendar'>
        <tr id='week'>
        <td align='left'><a href='?month=12&amp;year=2015'>&laquo;</a></td>
        <td colspan='5' id='center_date'>January, 2016</td>    
        <td align='right'><a href='?month=02&amp;year=2016'>&raquo;</a></td>
    </tr>
    <tr><th>M</th><th>T</th><th>W</th><th>T</th><th>F</th><th>S</th><th>S</th></tr><tr>
<td width='21' valign='top' class='past'></td>
<td width='21' valign='top' class='past'></td>
<td width='21' valign='top' class='past'></td>
<td width='21' valign='top' class='past'></td>
<td width='21' valign='top' class='past'>1</td>
<td width='21' valign='top' class='closed'>CLOSED</td>
<td width='21' valign='top' class='closed'>CLOSED</td>
</tr>
<tr>
<td width='21' valign='top' class='past'>4</td>
<td width='21' valign='top' class='past'>5</td>
<td width='21' valign='top' class='past'>6</td>
<td width='21' valign='top' class='past'>7</td>
<td width='21' valign='top' class='past'>8</td>
<td width='21' valign='top' class='closed'>CLOSED</td>
<td width='21' valign='top' class='closed'>CLOSED</td>
</tr>
<tr>
<td width='21' valign='top' class='past'>11</td>
<td width='21' valign='top' class='past'>12</td>
<td width='21' valign='top'>
          <a href='calendar.php?month=01&amp;year=2016&amp;day=13' class='part_booked' title='This day is part booked'>13</a></td>
<td width='21' valign='top'>
          <a href='calendar.php?month=01&amp;year=2016&amp;day=14' class='part_booked' title='This day is part booked'>14</a></td>
<td width='21' valign='top'>
          <a href='calendar.php?month=01&amp;year=2016&amp;day=15' class='part_booked' title='This day is part booked'>15</a></td>
<td width='21' valign='top' class='closed'>CLOSED</td>
<td width='21' valign='top' class='closed'>CLOSED</td>
</tr>
<tr>
<td width='21' valign='top'>
          <a href='calendar.php?month=01&amp;year=2016&amp;day=18' class='fully_booked' title='This day is fully booked'>18</a></td>
<td width='21' valign='top'>
          <a href='calendar.php?month=01&amp;year=2016&amp;day=19' class='part_booked' title='This day is part booked'>19</a></td>
<td width='21' valign='top'>
          <a href='calendar.php?month=01&amp;year=2016&amp;day=20' class='part_booked' title='This day is part booked'>20</a></td>
<td width='21' valign='top'>
          <a href='calendar.php?month=01&amp;year=2016&amp;day=21' class='part_booked' title='This day is part booked'>21</a></td>
<td width='21' valign='top'>
          <a href='calendar.php?month=01&amp;year=2016&amp;day=22' class='part_booked' title='This day is part booked'>22</a></td>
<td width='21' valign='top' class='closed'>CLOSED</td>
<td width='21' valign='top' class='closed'>CLOSED</td>
</tr>
<tr>
<td width='21' valign='top'>
          <a href='calendar.php?month=01&amp;year=2016&amp;day=25' class='fully_booked' title='This day is fully booked'>25</a></td>
<td width='21' valign='top'>
          <a href='calendar.php?month=01&amp;year=2016&amp;day=26' class='fully_booked' title='This day is fully booked'>26</a></td>
<td width='21' valign='top'>
          <a href='calendar.php?month=01&amp;year=2016&amp;day=27' class='part_booked' title='This day is part booked'>27</a></td>
<td width='21' valign='top'>
          <a href='calendar.php?month=01&amp;year=2016&amp;day=28' class='part_booked' title='This day is part booked'>28</a></td>
<td width='21' valign='top'>
          <a href='calendar.php?month=01&amp;year=2016&amp;day=29' class='part_booked' title='This day is part booked'>29</a></td>
<td width='21' valign='top' class='closed'>CLOSED</td>
<td width='21' valign='top' class='closed'>CLOSED</td>
</tr>
<tr></tr></table></div> -->


<div id='outer_basket'>
  
  <h2>Selected Slots (Unit: Hour)</h2>
  <br>
  <br>
    
    <div id='selected_slots'></div>   
  
      <div id='basket_details'>
      
        <form method='post' action='book_slots.php'>
        
          <label>Name</label>
          <input name='name' id='name' type='text' class='text_box'>

          <label>Email</label>
          <input name='email' id='email' type='text' class='text_box'>  

          <label>Phone</label>
          <input name='phone' id='phone' type='text' class='text_box'>  

            <div id='outer_price'>
              <div id='currency'>Total:&nbsp; </div>
              <div id='total'></div>
            </div>                  
          
          <input type='hidden' name='slots_booked' id='slots_booked'>
          <input type='hidden' name='cost_per_slot' id='cost_per_slot' value='0.5h'>
          <input type='hidden' name='booking_date' value='2016-01-13'>
          
          <input type='submit' class='classname' value='Confirm'>

        </form>
      
      </div><!-- Close basket_details DIV -->
    
  </div><!-- Close outer_basket DIV -->
</div><!-- Close LHS DIV -->


   <!--  <input id="datepicker"> -->
     




  <div id='outer_booking'><h2>Available Slots</h2>
  <br>
  <br>

      <p>
<!--   The following slots are available on <span> 13-01-2016</span> -->
  Please select your available time slots.
  </p>
  <br>

  <table width='400' border='0' cellpadding='2' cellspacing='0' id='booking'>
    <tr>
      <th width='150' align='left'>Start</th>
      <th width='150' align='left'>End</th>
      <th width='150' align='left'>Course Name</th>
      <th width='20' align='left'>Preference</th>     
    </tr>
  
      <tr>

        <td>09:00:00</td>

        <td>09:30:00</td>

        <td>Math</td>

        <td width='110'><input data-val='09:00:00 - 09:30:00' class='fields' type='checkbox'></td>
      </tr>
      <tr>

        <td>09:30:00</td>

        <td>10:00:00</td>

        <td>English</td>

        <td width='110'><input data-val='09:30:00 - 10:00:00' class='fields' type='checkbox'></td>
      </tr>
      <tr>

        <td>10:00:00</td>

        <td>10:30:00</td>

        <td>Music</td>

        <td width='110'><input data-val='10:00:00 - 10:30:00' class='fields' type='checkbox'></td>
      </tr>
      <tr>

        <td>10:30:00</td>

        <td>11:00:00</td>

        <td>Art Design</td>

        <td width='110'><input data-val='10:30:00 - 11:00:00' class='fields' type='checkbox'></td>
      </tr>
      <tr>

        <td>11:00:00</td>

        <td>11:30:00</td>

        <td>Data Mining</td>

        <td width='110'><input data-val='11:00:00 - 11:30:00' class='fields' type='checkbox'></td>
      </tr>
      <tr>

        <td>11:30:00</td>

        <td>12:00:00</td>

        <td>Software Testing</td>

        <td width='110'><input data-val='11:30:00 - 12:00:00' class='fields' type='checkbox'></td>
      </tr>
      <tr>

        <td>12:00:00</td>

        <td>12:30:00</td>

        <td>Web Services</td>

        <td width='110'><input data-val='12:00:00 - 12:30:00' class='fields' type='checkbox'></td>
      </tr>
      <tr>

        <td>12:30:00</td>

        <td>13:00:00</td>

        <td>Internet Computing</td>

        <td width='110'><input data-val='12:30:00 - 13:00:00' class='fields' type='checkbox'></td>
      </tr>
      <tr>

        <td>13:00:00</td>

        <td>13:30:00</td>

        <td>Japanese Culture</td>

        <td width='110'><input data-val='13:00:00 - 13:30:00' class='fields' type='checkbox'></td>
      </tr>

      <tr>

        <td>13:30:00</td>

        <td>14:00:00</td>

        <td>Sports</td>

        <td width='110'><input data-val='13:30:00 - 14:00:00' class='fields' type='checkbox'></td>
      </tr>

      <tr>
        <td>14:00:00</td>

        <td>14:30:00</td>

        <td>Embeded Engineering</td>

        <td width='110'><input data-val='14:00:00 - 14:30:00' class='fields' type='checkbox'></td>
      </tr>


      <tr>
        <td>14:30:00</td>

        <td>15:00:00</td>

        <td>Software Engineering</td>

        <td width='110'><input data-val='14:30:00 - 15:00:00' class='fields' type='checkbox'></td>
      </tr>

      <tr>

        <td>15:00:00</td>

        <td>15:30:00</td>

        <td>Machanism Engineering</td>

        <td width='110'><input data-val='15:00:00 - 15:30:00' class='fields' type='checkbox'></td>
      </tr>

      <tr>

        <td>15:30:00</td>

        <td>16:00:00</td>

        <td>Software Design</td>

        <td width='110'><input data-val='15:30:00 - 16:00:00' class='fields' type='checkbox'></td>
      </tr>

      <tr>

        <td>16:00:00</td>

        <td>16:30:00</td>

        <td>Internet Retrival</td>

        <td width='110'><input data-val='16:00:00 - 16:30:00' class='fields' type='checkbox'></td>
      </tr>

      <tr>

        <td>16:30:00</td>

        <td>17:00:00</td>

        <td>Web Application Design</td>

        <td width='110'><input data-val='16:30:00 - 17:00:00' class='fields' type='checkbox'></td>
      </tr>

      <tr>

        <td>17:00:00</td>

        <td>17:30:00</td>

        <td>Operating System</td>

        <td width='110'><input data-val='17:00:00 - 17:30:00' class='fields' type='checkbox'></td>
      </tr>

      <tr>

        <td>17:00:00</td>

        <td>17:30:00</td>

        <td>Programming Fundamentals</td>

        <td width='110'><input data-val='17:30:00 - 17:30:00' class='fields' type='checkbox'></td>
      </tr>

      <tr>

        <td>17:30:00</td>

        <td>18:00:00</td>

        <td>Middleware</td>

        <td width='110'><input data-val='17:30:00 - 18:00:00' class='fields' type='checkbox'></td>
      </tr>

      <tr>

        <td>18:00:00</td>

        <td>18:30:00</td>

        <td>Internet Application</td>

        <td width='110'><input data-val='18:00:00 - 18:30:00' class='fields' type='checkbox'></td>
      </tr>

      <tr>

        <td>18:30:00</td>

        <td>19:00:00</td>

        <td>Automation Testing</td>

        <td width='110'><input data-val='18:30:00 - 19:00:00' class='fields' type='checkbox'></td>
      </tr>

      <tr>

        <td>19:00:00</td>

        <td>19:30:00</td>

        <td>Computer Networks</td>

        <td width='110'><input data-val='19:00:00 - 19:30:00' class='fields' type='checkbox'></td>
      </tr>

      <tr>

        <td>19:30:00</td>

        <td>20:00:00</td>

        <td>Mobile Computing</td>

        <td width='110'><input data-val='19:30:00 - 20:00:00' class='fields' type='checkbox'></td>
      </tr>

      <tr>

        <td>20:00:00</td>

        <td>20:30:00</td>

        <td>Game Design</td>

        <td width='110'><input data-val='20:00:00 - 20:30:00' class='fields' type='checkbox'></td>
      <tr>

      <tr>

        <td>20:30:00</td>

        <td>21:00:00</td>

        <td>Game Testing</td>

        <td width='110'><input data-val='20:30:00 - 21:00:00' class='fields' type='checkbox'></td>
      </tr>

      <tr>

        <td>21:00:00</td>

        <td>21:30:00</td>

        <td>White Box Testing</td>

        <td width='110'><input data-val='21:00:00 - 21:30:00' class='fields' type='checkbox'></td>
      </tr>

        <td>21:30:00</td>

        <td>22:00:00</td>

        <td>Arts</td>

        <td width='110'><input data-val='21:30:00 - 22:00:00' class='fields' type='checkbox'></td>

      </tr></table></div>


<!-- <!doctype html>
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
 

<! // $( "#datepicker" ).datepicker(); -->
 


 
<!-- <h2>Selected Slots (Unit: Hour)</h2>
  <br>
  <br> -->
    
    <!-- <div id='selected_slots'></div>   
  
      <div id='basket_details'>
      
        <form method='post' action='book_slots.php'>
        
          <label>Name</label>
          <input name='name' id='name' type='text' class='text_box'>

          <label>Email</label>
          <input name='email' id='email' type='text' class='text_box'>  

          <label>Phone</label>
          <input name='phone' id='phone' type='text' class='text_box'>  

            <div id='outer_price'>
              <div id='currency'>Total:&nbsp; </div>
              <div id='total'></div>
            </div>                  
          
          <input type='hidden' name='slots_booked' id='slots_booked'>
          <input type='hidden' name='cost_per_slot' id='cost_per_slot' value='0.5h'>
          <input type='hidden' name='booking_date' value='2016-01-13'>
          
          <input type='submit' class='classname' value='Confirm'>

        </form>
      
      </div><! Close basket_details DIV -->
    
<!--   </div>Close outer_basket DIV
</div>< -->
 



</body>
</html>
