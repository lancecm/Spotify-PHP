<?php
include("includes/config.php");
include("includes/classes/Artist.php");
// Log out manually
//    session_destroy();

if (isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
} else {
    header("Location: register.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>test</title>
</head>
<body>
<div id="mainContainer">

    <div id="topContainer">
        <?php include("includes/navBarContainer.php"); ?>
        <div id="mainViewContainer">
            <div id="mainContent">