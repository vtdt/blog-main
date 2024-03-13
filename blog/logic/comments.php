<?php
include "../static/tools.php";


try {
    $mydb = new SPDO();

    $mydb->send_query("SELECT * FROM comments ORDER BY id DESC");

    $comments = "";

    foreach ($mydb->response() as $comment) {
        $comments .= "<p><strong>" . $comment["user"] . "</strong>: " . $comment["comment"] . "</p>";
    }
    echo $comments;

} catch (Exception $e) {
    echo $e;
}


?>