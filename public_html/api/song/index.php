<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";


// Get all songs
Route::add('/api/song/ge', function() {
    $song = new Song;
    $result = $song->list();
    echo Tools::jsonParser($result);
});

//Get specific song
Route::add('/api/song/', functon($id) {
    $song = new Song;
    $result = $song->details($id);
    echo Tools::jsonParser($result);
});
Route::run('/');
?>