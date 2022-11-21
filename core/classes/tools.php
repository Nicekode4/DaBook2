<?php
class Tools {
    static public function Header($title) {
        $myStr = $title;
        require_once './assets/incl/header.php';
    }

    static public function Footer() {
        require_once './assets/incl/footer.php';
    }

    static public function jsonParser($json) {
        header('Content-Type: application/json; charset=utf-8');
        return json_encode($json);
    }
}z
?>