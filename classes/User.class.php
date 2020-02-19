<?php

    class User extends dbh{
        //GET ALL ETUDIANT
        protected function GetAllUsers($id){
            // $test="SELECT * FROM etudiant";
            // $testq= $this->connect()->query($test);
            // $total_rows=$testq->num_rows;

            if($id==0)
            {
                $sql="SELECT * FROM etudiant";
            }else
            {
                if($id=!0)
                $sql="SELECT * FROM etudiant WHERE ID=".$id;
            }
            $Result=$this->connect()->query($sql);
            $Length=$Result->num_rows;
            if($Length>0)
            {
                while($ligne=$Result->fetch_assoc())
                {
                    $data[]= $ligne;
                }
                return $data;
            }
        }
        protected function GetUserByName($name)
        {
            if($name==""){
                echo "Insert A Valid Name";
            }else{
                $sql="SELECT `ID`, `NOM`, `PRENOM`, `MAIL`,`PASSWORD` FROM `etudiant` WHERE `NOM`="."'".$name."'";
                $Result=$this->connect()->query($sql);
                $Length=$Result->num_rows;
                if($Length>0)
                {
                    while($ligne=$Result->fetch_assoc())
                    {
                        $data[]= $ligne;
                    }
                    return $data;
                }else{
                    if($Length==0)
                        return NULL;
                }
            }
        }
        protected function InsertUser($N,$P,$M,$PS){
                $sql="INSERT INTO `etudiant`(`NOM`, `PRENOM`, `MAIL`,`PASSWORD`) VALUES ('$N','$P','$M','$PS')";
                $this->connect()->query($sql);
        }
    }

?>