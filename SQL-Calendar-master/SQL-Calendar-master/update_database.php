#!/usr/local/bin/php -d display_errors=STDOUT
<?php
  // begin this XHTML page
  print('<?xml version="1.0" encoding="utf-8"?>');
  print("\n");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
<title>Database Update</title> 
</head>
<body>
<?php 


$database = "dbemosca.db";          


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


// define tablename and field names for a SQLite3 query to create a table in a database
$table = "event_table";
$field1 = "time";
$field2 = "person";
$field3 = "event_title";
$field4 = "event_message";

// Create the table
$sql= "CREATE TABLE IF NOT EXISTS $table (
$field1 int(12),
$field2 varchar(100),
$field3 varchar(300),
$field4 varchar(300)
)";
$result = $db->query($sql);

date_default_timezone_set('America/Los_Angeles');

$date = $_POST['date'];
$time = $_POST['time'];
$dateStr = "$date $time";
$timestamp = \DateTime::createFromFormat('m-d-Y H:i', $dateStr)->getTimestamp();
$person  = $_POST['person'];
$event_title  = $_POST['event_title'];
$event_message  = $_POST['event_message'];


$sql = "INSERT INTO $table ($field1, $field2, $field3, $field4) VALUES ($timestamp, '$person', '$event_title', '$event_message')";


$result = $db->query($sql);

print '<h1>Database Updated.</h1>';

$sql = "SELECT * FROM $table";
$result = $db->query($sql);

print "<table border='border'>\n";
print "  <tr>\n";
print "     <th>" . $field1 . "</th>\n";
print "     <th>" . $field2 . "</th>\n";
print "     <th>" . $field3 . "</th>\n";
print "     <th>" . $field4 . "</th>\n";
print "  </tr>\n";

// obtain the results from the SELECT query as an array holding a record
// one iteration per record for this select query
while($record = $result->fetchArray())
{  
  print "  <tr>\n";


  print " <td>" . $record[$field1]. "</td>\n";
  print " <td>" . $record[$field2]. "</td>\n";
  print " <td>" . $record[$field3]. "</td>\n";
  print " <td>" . $record[$field4]. "</td>\n";
  $eventm= $record[$field4];
  $eventt =$record[$field3];
  $event = $eventt.":".$eventm;
 
 
  print "  </tr>\n";
}


print "</table>\n";

//Uncomment below to immediately forward to calendar w/o needing hyperlink.
//echo '<script>window.location.href = "http://pic.ucla.edu/~emosca/calendar2.php";</script>';
print '<a href="http://www.pic.ucla.edu/~emosca/calendar2.php">Go to Calendar.</a>';
?>
</body>
</html>
