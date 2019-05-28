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
    <title>test</title>
</head>
<body>
test
</body>
</html>