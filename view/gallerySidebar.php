<?php

if (!$this->disableSidebar) {
    $index = 1;
    echo '<div class="col-xl-2 col-md-3"><div id="sidebar"><ul>';
    foreach ($categories as $category) {
        echo "<a class=\"list-group-item\" href=\"#cat$index\">$category</a>";
        $index++;
    }
    echo '</ul></div></div>';    
}
