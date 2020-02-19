<?php
    class InsertNewUser extends User{
        private $Name;
        private $Prename;
        private $Email;
        private $pass;
        public function InsertNUser($Name="" ,$Prename="",$Email="",$Pass=""){
            $this->Name=$Name;
            $this->Prename=$Prename;
            $this->Email=$Email;
            $this->pass=password_hash($Pass,PASSWORD_DEFAULT);
            $this->InsertUser($this->Name,$this->Prename,$this->Email,$this->pass);
        }
    }
?>