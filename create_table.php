<?php 
$dbconn = pg_connect("host=ec2-54-217-235-166.eu-west-1.compute.amazonaws.com dbname=dvlku8g8v5aqk user=zprdanhzsnzcnb password=2a710745f6de737ea3f61d0e96e0a2923deca0c67ce497da49e67462ab8e9910")
    or die('Could not connect: ' . pg_last_error());


// Performing SQL query
$query = "CREATE TABLE users ( id serial PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
?>
