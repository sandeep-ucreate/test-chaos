<?php 
$dbconn = pg_connect("host=ec2-54-217-235-166.eu-west-1.compute.amazonaws.com dbname=dvlku8g8v5aqk user=zprdanhzsnzcnb password=2a710745f6de737ea3f61d0e96e0a2923deca0c67ce497da49e67462ab8e9910")
    or die('Could not connect: ' . pg_last_error());
$query = "INSERT INTO users
(firstname, lastname, email, reg_date)
VALUES
('sandy', 'kaur', 'sandeep@ucreate.it', '2014-06-05'),
('spana', 'kaur', 'sandeep@ucreate.it', '2014-06-05' )";
// Performing SQL query

$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
?>
