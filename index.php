<?php
include 'connection.php';

*$connection = mysql_connect($dbhost, $dbuser, $dbpass);

// Check Connection
if (! $connection )
{
        die('Could not connect: ' . mysql_error());
}

// Build Query
$sql = 'SELECT * FROM test';

// Choose DB
mysql_select_db('Mosquito');

// Run query
$returned = mysql_query($sql, $connection);

// Check for failure
if (! $returned )
{
        die('Could not get data: ' . mysql_error());
}
echo $returned;
mysql_close($connection);*/

?>
