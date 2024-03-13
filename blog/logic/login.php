<?php
include "../static/tools.php";

if ((isset($_POST["username"]) && isset($_POST['password'])) && (trim($_POST["username"]) != "" && trim($_POST["password"]) != "")) {
    $mydb = new SPDO();


    $mydb->send_query("SELECT COUNT(username) FROM users WHERE username='" . $_POST["username"] . "' AND passphrase='" . $_POST['password'] . "';");

    if ($mydb->response()[0]["COUNT(username)"] < 1) {
        echo "user doesn't exists";
        die(header("Location: ../routes/index.html"));
    } else {
        echo "Logged in " . $_POST["username"];
        setcookie("username", $_POST["username"], [
            'expires' => time() + 3600,
            'path' => '/',
            'domain' => 'localhost',
            'secure' => false,
            'httponly' => false,
            'samesite' => 'Lax',
        ]);
        die(header("Location: ../routes/comments.html"));
    }
} else {
    die(header("Location: ../routes/index.html"));
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <script src="script.js"></script>
</head>
<body>

</body>
</html>