<?php
    /*HEADER OF THE DASHBOARD*/
    class Header
    {
        
        // private $id_user_hash;
        // public function set(){
        //     if(isset($_SESSION['ID'])){
        //         $this->id_user_hash=$_SESSION['ID'];
        //         $V=new ViewUser();
        //         $datas=$V->ShowAllUsers(0);
        //         foreach ($datas as $data) {
        //             if(password_verify($data['ID'],set())){
        //                 return $data['ID'];
        //             }
        //         }
        //     }
        // }
        
    }
?>
<link href="https://fonts.googleapis.com/css?family=Montserrat:200i,300,300i,400,400i,500,500i,600,600i&display=swap" rel="stylesheet">
<link rel="stylesheet" href="asset/HeaderStyle.css">
 <header>
        <div class="logo">
            <h3>LOGO</h3>
        </div>
        <nav>
            <ul>
                <li><a href="DashBoard.php?id=">Profile</a></li>
                <li><a href="Post.php">Home</a></li>
                <li><a href="#">Services</a></li>
                <?php if(isset($_SESSION['ID'])) { echo "<li><a href='#'>Posts</a></li>"; } ?>
                <li><a href="#">Setting</a></li>
                <li><a href="Login.php?log"><?php  if(!isset($_SESSION['ID'])) {echo "Login"; } else{ echo "Logout";} ?></a></li>
            </ul>
        </nav>
</header>