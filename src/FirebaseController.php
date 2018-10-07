<?php

require "vendor/autoload.php";

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController {

    public $config;
    public $connection;

    public function __construct()
    {
        $this->configLoad(dirname(__FILE__)."/../setting.ini");
        $this->connection = $this->connectionFB($this->config["Default"]["FIREBASE_SECRET_FILE"]);
    }


    public function setProfile(String $path, Array $data)
    {
        $database = $this->connection->getDatabase();

        $database->getReference($path.$data["name"])
            ->set($data);
    }


    public function getProfile(String $path)
    {
        $database = $this->connection->getDatabase();

        return $database->getReference($path)->getValue();
    }


    public function configLoad(String $path)
    {
        $this->config = parse_ini_file($path, true);
    }


    public function connectionFB(String $fileName)
    {
        $serviceAccount = ServiceAccount::fromJsonFile(dirname(__FILE__)."/../config/".$fileName);
    
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();
    
        return $firebase;
    }
}