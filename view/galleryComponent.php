<?php

$index = 0;
foreach ($photos as $directory) {
    echo "<h2 class=\"gallery-title\" id=\"cat" . ($index + 1) . "\">$categories[$index]</h2>
        <div class=\"card gallery\">
        <div class=\"row\">";
    foreach ($directory as $photo) {
        echo "<div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6 \">
            <a href=\"$rootDirectory/$folders[$index]/$photo\" data-toggle=\"lightbox\" data-gallery=\"kategoria" . ($index + 1) . "\">
            <img src=\"$rootDirectory/$folders[$index]/$photo\" alt=\"$categories[$index]\" />
            </a></div>";
    }
    echo "</div></div>";
    $index++;
}
