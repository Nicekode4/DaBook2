<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";



Route::add('/api/song/', function() {
    $song = new Song;
    $result = $song->list();
    //echo Tools::jsonParser($result);
    echo "lel";
});

Route::run('/');
?>