<?php

// Create connection
$conn = mysqli_connect("localhost", "sbiswas", "sbiswas2019", "sbiswas2019");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL:" . mysqli_connect_errno();
}
?>


