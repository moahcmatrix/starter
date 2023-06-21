<?php

    class Helper {
        public static function redirect($page) {
            header("Location : $page");
            exit;
        }

        public static function getPath($path) {
            return dirname(__FILE__);
        }
    }

?>