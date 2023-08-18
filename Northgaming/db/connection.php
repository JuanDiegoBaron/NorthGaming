<?php

    class Conection
    {
        private static $link;

        private function __construct(){}

        static function connect(){
            // PATRON SINGLETON
            // Verifica si existe una coneccion, si no existe, crea una coneccion 
            if(!isset( self::$link )){
                self::$link= New PDO(
                    "mysql:host=localhost;dbname=NOMBREDB", // DSN
                    "root", // USERNAME
                    "root" // CONTRASEÑA   
                );
            }
            return self::$link;
        }
    }