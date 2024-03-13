<?php

$title = "weave.chat";
$programmers = [
    "Toms",
    "Enriko",
    "Ričards",
    "Kevins Markuss",
    "Nikolajs",
    "Harijs",
    "Raivo",
    "Kristians",
    "Ruslans",
    "Ričards",
    "Vladyslav",
    "Markuss",
    "Emīls",
    "Sandris",
    "Karīna Evelīna",
    "Markuss Raivo",
    "Daniils",
    "Ernests",
    "Rūdolfs",
    "Gerda Anita",
    "Alberts",
    "Jēkabs"
];

function buildStoryContent()
{
    global $title, $programmers;

    $story = "<h1>The Blog Revolution: A Tale of the Popular Blogging Platform <em>$title</em></h1>";

    $story .= "<p>As digital technology spread across the globe like never before, blogging became an even more essential way to share stories, ideas, and discoveries. However, while there were many blogging platforms offering various features, most lacked innovation and user-friendly experiences. That all changed in 2024 when the world was shaken by $title - the future blog platform created by 20 outstanding programmers:</p>";

    $story .= "<ul>";
    foreach ($programmers as $programmer) {
        $story .= "<li>$programmer</li>";
    }
    $story .= "</ul>";

    $story .= "<h2>Of which only Daniils, Kevins, Raivo, Sandris, Kristians, Emīls were able to create such exquisite work</h2>";

    $story .= "<p>Together, they created $title - a blogging platform that completely transformed the way we blog and consume content. $title was not only visually captivating, with a modern and user-friendly interface, but it also offered innovative features that surpassed existing competition. From the dynamic content recommendation system to integrated social networks where users could easily share their content, $title was more than just a blogging platform - it was a complete community.</p>";

    $story .= "<p>Thanks to talent and perseverance of the programmers, $title became the world's leading blogging platform in a very short time. The number of users grew rapidly as people from all over the world appreciated the opportunities $title offered and the intimate connection the platform created between writers and readers.</p>";

    return $story;
}

?>
