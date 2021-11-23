

<?php
function get_hour_string(){
	$date = explode(",",date('d/m/Y/h/i')
	list($day,$month,$year,$hour,$min) = $date);
	echo $month.','.$day.','.$year.' '.$hour.':'.$min.':';
}
?> 

<!DOCTYPE html>
<html>
<head>
<title>Calendar</title> 

<link rel="stylesheet" type="text/css" href="./calender.css" />

</head>
<body>

<div class="container">
<h1>Bruin Family Schedule for<?php get_hour_string()?> </h1>
<table id="event_table">


	<tr> 
		<th class='hr_td'> &nbsp; </th> <th class='table_header'>Joe</th><th class='table_header'>Joanna</th><th class='table_header'>Lil Cub</th> 
	</tr> 
<tr class='even_row'> 
<td class='hr_td'>10.00pm</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>11.00pm</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>12.00am</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>1.00am</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>2.00am</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>3.00am</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>4.00am</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>5.00am</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>6.00am</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>7.00am</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>8.00am</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>9.00am</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>10.00am</td> <td> </td> <td> </td> <td></td>
</tr>	
	
</table>

</div>
</body>
</html>
