<?php 
$dbconn = pg_connect("host=ec2-54-217-235-166.eu-west-1.compute.amazonaws.com dbname=dvlku8g8v5aqk user=zprdanhzsnzcnb password=2a710745f6de737ea3f61d0e96e0a2923deca0c67ce497da49e67462ab8e9910")
    or die('Could not connect: ' . pg_last_error());

$query = 'SELECT * FROM users';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// Printing results in HTML
echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
?>
