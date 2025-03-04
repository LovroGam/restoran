<?php

    class Config
    {
        private const DB_HOST="localhost";
        private const DB_USER="root";
        private const DB_PASS="ivan";
        private const DB_NAME="todo";

        public static function getDBConnection()
        {
            $conn=new mysqli(self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_NAME);

            if ($conn->connect_error)
            {
                die("Greška pri spajanju na server: ". $conn->connect_error);
            }

            return $conn;
        }
    }

?>