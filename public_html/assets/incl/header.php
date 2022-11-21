<?php 
$arr = [
   [
   "Title" => "Forside",
   "Url" => "/index.php"
   ],
   [
   "Title" => "About",
   "Url" => "/about.php"
   ],
];
?>

<!DOCTYPE html>
<html>
  <head>
     <title><?php echo isset($myStr) ? $myStr : "" ?></title>
     <link rel="stylesheet" href="/assets/css/main.css">
  </head>
  <body>

     <header>
        <nav>
   <?php
   foreach ($arr as $key => $value) {
      $class = ($_SERVER["PHP_SELF"] === $value["Url"]) ? "active" : "";
      echo "<li><a class=\"" . $class . "\" href=\"" . $value["Url"] . "\">" . $value["Title"] . "</a></li>";
   }
   ?>
        </nav>
     </header>

     <section id="content">
      <p>lel</p>