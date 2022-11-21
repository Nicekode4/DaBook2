
<?php
//Define a constant
define("DOCROOT", $_SERVER["DOCUMENT_ROOT"]);
define("COREROOT", str_replace('public_html', 'core/', $_SERVER['DOCUMENT_ROOT'])) ;
require_once(COREROOT . '/classes/autoload.php');
require_once './assets/incl/init.php';
?>

<!-- Header -->
<?php
$about = "About";
$myStr = "About";
echo Tools::Header($myStr)

?>

<!-- Body -->
<?php
echo "Hi";
?>

<!-- Footer -->
<?php
echo Tools::Footer();
?>