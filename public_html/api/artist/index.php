<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";


// Get all songs
// Get all songs
Route::add('/api/artist/ge', function() {
    $artist = new Artist;
    $result = $artist->list();
    echo Tools::jsonParser($result);
});

//Get specific song
Route::add('/api/artist/([0-9]*)', function($id) {
    $artist = new Artist;
    $result = $artist->details($id);
    echo Tools::jsonParser($result);
});

//opret sang
Route::add('/api/artist/', function() {
    $artist = new Artist;
    $artist->name = isset($_POST['name']) && !empty($_POST['name']) ? $_POST['name'] : null;

    if ($artist->name) {
        echo $artist->create();
    }else {
        echo "Kan ikke oprette sang";
    }
}, 'post');

//update a specific song
Route::add('/api/artist/', function () {
    $data = file_get_contents("php://input");
    parse_str($data, $parsed_data);

    $artist = new Artist;
    $artist->id = isset($parsed_data['id']) && !empty($parsed_data['id']) ? (int)$parsed_data['id'] : null;
	$artist->name = isset($parsed_data['name']) && !empty($parsed_data['name']) ? $parsed_data['name'] : null;

    if ($artist->id && $artist->name) {
        echo $artist->update();
    } else {
        echo "Kunne ikke opdatere sangen..";
    }
    
}, 'put');

Route::add('/api/artist/([0-9]*)', function($id) {
$artist = new Artist;
$song = new Song;
echo $song->deleteA($id);
echo $artist->deleteA($id);
}, 'delete');

Route::run('/');
?>