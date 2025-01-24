<?php
// Connect to MySQL running on port 3307
$con = new mysqli('localhost', 'root', '', 'crud', 3307);

// Check connection
if (!$con) {
    die(mysqli_error($con));
}
?>
