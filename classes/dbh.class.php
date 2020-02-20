<?php

    class dbh{
        private $servername;
        private $username;
        private $password;
        private $dbname;

        protected function connect(){
            $this->servername="eu-cdbr-west-02.cleardb.net";
            $this->username="be1b80205d11c8";
            $this->password="0f65be0d";
            $this->dbname="heroku_2ea67b558db9334";
            $con = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
            return $con;
        }
    }
?>
