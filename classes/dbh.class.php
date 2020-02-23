<?php

    class dbh{
        private $url;
        private $servername;
        private $username;
        private $password;
        private $dbname;

        protected function connect(){
            $this->$url= parse_url(getenv("CLEARDB_DATABASE_URL"));
            $this->servername= $url["host"];
            $this->username= $url["user"];
            $this->password= $url["pass"];;
            $this->dbname=substr($url["path"], 1);
            $con = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
            return $con;
        }
    }
?>