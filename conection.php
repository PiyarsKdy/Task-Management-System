<?php
// $host        = "host =localhost";
// $port        = "port = 5433";
// $dbname      = "dbname = example";
// $credentials = "user = postgres password=1234";

// $db = pg_connect( "$host $port $dbname $credentials" );
$con=pg_connect("host=localhost port=5432 dbname=201901306_db user=postgres password=admin");
if(!$con) {
   echo "Error : Unable to open database\n";
} else {
   // echo "Opened database successfully\n";
}
?>