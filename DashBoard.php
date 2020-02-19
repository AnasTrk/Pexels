<?php
     include "includes/Loader.inc.php";
     include  "includes/LoaderCom.inc.php";
     session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200i,300,300i,400,400i,500,500i,600,600i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="asset/HeaderStyle.css">
    <link rel="stylesheet" href="asset/Profile.css">
</script>
    <script src="https://kit.fontawesome.com/478996d1f3.js" crossorigin="anonymous"></script>
    <title>DashBoard|<?php echo $_POST['nom']; ?></title>
</head>
<body>
    <h1></h1>
    <?php
        $Header=new Header();
        if(isset($_POST['Log']))
        {
            if(isset($_SESSION['ID'])){
                if(isset($_GET['id'])){
                    if(empty($_GET['id'])){
                        $V= new ViewUser();
                        $datas=$V->ShowAllUsers(0);
                        foreach ($datas as $data) {
                            if(password_verify($data['ID'],$_SESSION['ID'])){
                               header('location:DashBoard.php?id='.$_SESSION['ID']);
                            }
                        }
                    }
                }
            }

            if(empty($_POST['nom'])||empty($_POST['password'])){
                header('location:Login.php?error=Empty&UserName='.$_POST['nom']);
            }else{
                $V = new ViewUser();
                $dataByName=$V->ShowUserByName($_POST['nom']);
                if(!empty($dataByName)){
                    foreach ($dataByName as $data) {
                        
                       if(password_verify($_POST['password'],$data['PASSWORD']))
                       {
                            $_SESSION['NOM']=$data['NOM'];
                            $_SESSION['ID']=password_hash($data['ID'],PASSWORD_DEFAULT);
                       }else{
                        header('location:Login.php?error=Auth&UserName='.$_POST['nom']);
                       }
                    }
                }else{
                    header('location:Login.php?error=Auth&UserName='.$_POST['nom']);
                }
            }
        }else{
            if(!isset($_SESSION['NOM'])){
                header('location:Login.php?error=ELog');
            }
        }
        if(!isset($_GET['id'])){
            header('location:DashBoard.php?id=');
        }
         if(isset($_SESSION['ID'])){
            if(isset($_GET['id'])){
                if(empty($_GET['id'])){
                    $V= new ViewUser();
                    $datas=$V->ShowAllUsers(0);
                    foreach ($datas as $data) {
                        if(password_verify($data['ID'],$_SESSION['ID'])){
                           header('location:DashBoard.php?id='.$_SESSION['ID']);
                        }
                    }
                }else{
                    $V= new ViewUser();
                    $datas=$V->ShowAllUsers(0);
                    foreach ($datas as $data) {
                        if(password_verify($data['ID'],$_SESSION['ID'])){
                        //    echo $data['ID']."</br>";
                        //     echo "WELCOME ".$data['NOM']."</br>";
                        //     echo $data['PRENOM']."</br>";
                        //     echo $data['MAIL']."</br>";
                        }
                    }
                }
            }
        }
        /*CHECK HOME BUTTON*/
        
        // $V = new ViewUser();
        // $dataByName=$V->ShowUserByName('TRAK');
        // if(!empty($dataByName)){
        //     foreach ($dataByName as $data) {
        //        echo $data['ID']."</br>";
        //        echo $data['NOM']."</br>";
        //        echo $data['PRENOM']."</br>";
        //        echo $data['MAIL']."</br>";
        //        echo password_verify("",$data['PASSWORD'])."</br>";
        //     }
        // }else{
        //     echo"USER DOESNT EXIST";
        // }
        $Pro = new Profile();
    ?>
</body>

</html>