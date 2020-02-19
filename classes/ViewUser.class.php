<?php
    class ViewUser extends User{
        //SHOWS ALL ETUDIANT
        public function ShowAllUsers($id=0,$name=""){
            $datas = $this-> GetAllUsers($id,$name);
            if(!empty($datas))
            {
                // foreach ($datas as $dt) {
                //     echo $dt['ID']."<br>";
                //     echo $dt['NOM']."<br>";
                //     echo $dt['PRENOM']."<br>";
                //     echo $dt['MAIL']."<br>";
                // }
                return $datas;
            }else
            {
                echo "Check your user";
            }
        }
        public function ShowUserByName($n){
            $datas =$this->GetUserByName($n);
            if(!empty($datas))
            {
                return $datas;
            }else{
                return $datas;
            }
        }
    }
?>