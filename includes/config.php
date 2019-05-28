<?php
    ob_start(); // enable mysql working

    session_start(); // enable session

    $timezone = date_default_timezone_set("America/Los_Angeles");

    $con = mysqli_connect("localhost", "root","","spotify");

    if (mysqli_connect_errno()) {
        echo "Failed to connect:" . mysqli_connect_errno();
    }

?>