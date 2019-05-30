<?php
    include("includes/config.php");

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
    <div id="nowPlayingBarContainer">
        <div id="nowPlayingBar">
            <div id="nowPlayingLeft">

            </div>
            <div id="nowPlayingCenter">

            </div>
            <div id="nowPlayingRight">

            </div>
        </div>
    </div>
</body>
</html>