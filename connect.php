<?php

class Connect {
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "alat-musik";

    public function connect(){
        return new mysqli($this->hostname, $this->username, $this->password, $this->database);
    }
}

?>