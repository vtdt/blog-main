<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>weave.chat - Our Story</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            border: 0;
            background-color: #04151f;
            color: antiquewhite;
        }

        .active {
            font-size: 24px;
        }
    </style>
</head>
<body>
<nav>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="comments.html">chat</a></li>
        <li class="active"><a href="script.php">Our Story</a></li>
    </ul>
</nav>

<?php
require_once('../logic/script2.php');
$storyContent = buildStoryContent();
echo $storyContent;
?>

</body>
</html>
