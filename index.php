<!DOCTYPE html>
<head>
</head>
<body>
<h2>Emails in DB:</h2>
<ul>
<?php
include 'connection.php';

$connection = mysql_connect($dbhost, $dbuser, $dbpass);

// Check Connection
if (! $connection )
{
        die('Could not connect: ' . mysql_error());
}

// Build Query
$sql = 'SELECT email FROM test';

// Choose DB
mysql_select_db('Mosquito');

// Run query
$returned = mysql_fetch_row(mysql_query($sql, $connection));

// Check for failure
if (! $returned )
{
        die('Could not get data: ' . mysql_error());
}


for ($i=0 ; $i<count($returned) ; $i++) {
    echo "<li>";
    echo $returned[$i];
    echo "</li>";
}
?>

</ul>
</body>
