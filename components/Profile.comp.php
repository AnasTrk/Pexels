<?php 

class Profile{
    private $id;
    private $nom;
    private $prenom;
    private $mail;
    public function Info($v=""){
        $V= new ViewUser();
        $datas=$V->ShowAllUsers(0);
        foreach ($datas as $data) {
            if(password_verify($data['ID'],$_SESSION['ID'])){
                if($v==""){
                    return $data['NOM'];
                }
                if($v=="P"){
                    return $data['PRENOM'];
                }
                if($v=="m"){
                    return $data['MAIL'];
                }
            //    echo $data['ID']."</br>";
            //     echo "WELCOME ".$data['NOM']."</br>";
            //     echo $data['PRENOM']."</br>";
            //     echo $data['MAIL']."</br>";
           
            }
        }
    }
  
}
$P= new Profile();
?>
<div class="Profile">
    <div class="Section1" id='se'>
        <div class="menu">
            <div class="hum" id="menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="info">
           <span><h1><?php echo $P->Info("p")." ".$P->Info(); ?></h1><i class="fas fa-pen-square"></i></span>
            <span><h3><?php echo $P->Info("m");?></h3></span>
        </div>
        <div class="container">
            
        </div>
    </div>
    <div class="Section2">
        
    </div>
</div>
<script src="asset/script.js">
       
</script>