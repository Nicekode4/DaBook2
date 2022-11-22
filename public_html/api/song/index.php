<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";


// Get all songs
Route::add('/api/song/ge', function() {
    $song = new Song;
    $result = $song->list();
    echo Tools::jsonParser($result);
});

//Get specific song
Route::add('/api/song/([0-9]*)', function($id) {
    $song = new Song;
    $result = $song->details($id);
    echo Tools::jsonParser($result);
});

Route::add('/api/song/', function() {
    $song = new Song;
    $song->title = isset($_POST['title']) && !empty($_POST['title']) ? $_POST['title'] : null;
	$song->content = isset($_POST['content']) && !empty($_POST['content']) ? $_POST['content'] : null;
	$song->artist_id = isset($_POST['artist_id']) && !empty($_POST['artist_id']) ? (int)$_POST['artist_id'] : null;

    if ($song->title && $song->content && $song->artist_id) {
        echo $song->create();
    }else {
        echo "Kan ikke oprette sang";
    }
}, 'post');

//update a specific song
Route::run('/');
?>