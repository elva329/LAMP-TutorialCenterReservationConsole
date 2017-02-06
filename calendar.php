

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Calendar</title>
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


    <div id='lhs'><div id='outer_calendar'>
    
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
<tr></tr></table></div><!-- Close outer_calendar DIV --></div><!-- Close LHS DIV -->
</body>
</html>
