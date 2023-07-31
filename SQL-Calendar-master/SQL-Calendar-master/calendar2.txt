#!/usr/local/bin/php -d display_errors=STDOUT
<?php print'<?xml version = "1.0" encoding="utf-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<title>Calendar v.2</title> 

<link rel="stylesheet" type="text/css" href="calendar.css" />

</head>
<body>
<p>
<?php


date_default_timezone_set('America/Los_Angeles');

$hours_to_show = 12;
$ts = time();
$time_stamp = $_GET['time_stamp'];

if (isset($time_stamp)){
$date_to_show = date("D, F j, Y, g:i a",$time_stamp);
$ts = $time_stamp;
}
else {$date_to_show = date("D, F j, Y, g:i a");}

function get_hour_string($timestamp){
	$h = date("g:00 a",$timestamp);
	return $h;
}

function get_events($p,$t_s){
$database = "dbemosca.db";          
$t = get_hour_string($t_s);
$events = "";
try  
{     
     $db = new SQLite3($database);
}
catch (Exception $exception)
{
    echo '<p>There was an error connecting to the database!</p>';

    if ($db)
    {
        echo $exception->getMessage();
    }
        
}

$table = "event_table";
$field1 = "time";
$field2 = "person";
$field3 = "event_title";
$field4 = "event_message";

$sql = "SELECT * FROM $table WHERE $field2 ='$p' AND $field1 >=$t_s AND $field1 < $t_s+3600";
$result = $db->query($sql);
while($record = $result->fetchArray())
{  
  $eventm= $record[$field4];
  $eventt =$record[$field3];
  $event = $eventt.":".$eventm;
}
return $event;
}

echo "<div class='container'>";
echo "<h1>","Bruin Family Schedule for ",$date_to_show,"</h1>";
echo "<table id='event_table'>";

echo "<tr> <th class='hr_td_'> &nbsp; </th> <th class='table_header'>Joe</th><th class='table_header'>Joanna</th><th class='table_header'>Lil Cub</th> </tr>";

for ($i=0;$i < $hours_to_show + 1;$i++){
$et = $ts + $i*3600; 
$eventtime = $et - $et%3600;
$hourtime = get_hour_string($ts + $i*3600);
if ($i % 2 == 0) {
$joe_events = get_events("Joe", $eventtime);
$joanna_events = get_events("Joanna", $eventtime);
$cub_events = get_events("Cub", $eventtime);
 echo "<tr class='even_row'>","<td class='hr_td'>",$hourtime,"</td><td>$joe_events</td><td>$joanna_events</td><td>$cub_events</td>","</tr>";
}
else {
$joe_events = get_events("Joe", $eventtime);
$joanna_events = get_events("Joanna", $eventtime);
$cub_events = get_events("Cub", $eventtime);
echo "<tr class='odd_row'>","<td class='hr_td'>",$hourtime,"</td> <td>$joe_events</td><td>$joanna_events</td><td>$cub_events</td>","</tr>";
}
}
echo "</table>";

echo "<div>";
echo "<form id='prev' method='get' action='calendar2.php'>";
echo"<p> <input type='hidden' name='time_stamp' value='",$ts -12*3600,"'/>";
echo "<input type='submit' value='Previous twelve hours'/></p></form>";
echo "<form id='next' method='get' action='calendar2.php'>";
echo"<p> <input type='hidden' name='time_stamp' value='",$ts +12*3600,"'/>";
echo "<input type='submit' value='Next twelve hours'/></p></form>";
echo "<form id='today' method='get' action='calendar2.php'>	<p>	<input type='submit' value='Today'/>	</p></form></div>";

echo "</div>";

?>
</body>
</html>

