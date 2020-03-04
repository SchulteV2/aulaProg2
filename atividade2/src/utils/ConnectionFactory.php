<?php 
    class ConnectionFactory {
        private static $host = "localhost";
        private static $db = "cadastro";
        private static $db_user = "root";
        private static $db_password = "coringa";
        // private static $db_password = "root";

        private static $con = null;

        public static function getConnection() {
            if(is_null($con)) {
                self::$con = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db ."", 
                                self::$db_user, 
                                self::$db_password);
                return self::$con;
            }
            return self::$con;
        }
    }
?>