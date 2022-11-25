<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";


// Get all usernames
Route::add('/api/users/', function() {
    $user = new User;
    $result = $user->list();
    echo Tools::jsonParser($result);
});

//Get specific user
Route::add('/api/users/([0-9]*)', function($id) {
    $user = new User;
    $result = $user->details($id);
    echo Tools::jsonParser($result);
});

//create a new user
Route::add('/api/users/', function() {
    $user = new User;
    $user->username = isset($_POST['username']) && !empty($_POST['username']) ? $_POST['username'] : null;
	$user->password = isset($_POST['password']) && !empty($_POST['password']) ? $_POST['password'] : null;

    if ($user->username && $user->password) {
        echo $user->create();
    }else {
        echo "Kan ikke oprette sang";
    }
}, 'post');

//update a specific user
Route::add('/api/users/', function () {
    $data = file_get_contents("php://input");
    parse_str($data, $parsed_data);

    $user = new User;
    $user->id = isset($parsed_data['id']) && !empty($parsed_data['id']) ? (int)$parsed_data['id'] : null;
	$user->username = isset($parsed_data['username']) && !empty($parsed_data['username']) ? $parsed_data['username'] : null;
	$user->password = isset($parsed_data['password']) && !empty($parsed_data['password']) ? $parsed_data['password'] : null;

    if ($user->id && $user->username && $user->password) {
        echo $user->update();
    } else {
        echo "Kunne ikke opdatere sangen..";
    }
    
}, 'put');

//deletes a user
Route::add('/api/users/([0-9]*)', function($id) {
$user = new User;

echo $user->delete($id);
}, 'delete');
Route::run('/');
?>