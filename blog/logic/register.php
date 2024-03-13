<?php
include "../static/tools.php";


if (isset($_POST["username"]) && trim($_POST["username"]) != "") {
    $mydb = new SPDO();
    $params = [];
    $params[":username"] = $_POST["username"];
    $mydb->send_query("SELECT COUNT(username) FROM users WHERE username=:username", $params);


    if ($mydb->response()[0]["COUNT(username)"] >= 1) {
        die(header("Location: routes/index.html"));
    } else {
        $params[":passphrase"] = $_POST["password"];

        $mydb->send_query("INSERT INTO users(username, passphrase) VALUES (:username,:passphrase);", $params);
        setcookie("username", $_POST["username"], [
            'expires' => time() + 3600,
            'path' => '/',
            'domain' => 'localhost',
            'secure' => false,
            'httponly' => false,
            'samesite' => 'Lax',
        ]);
        die(header("Location: routes/comments.html"));
    }

} else {
    die(header("Location: routes/index.html"));
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