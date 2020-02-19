<?php
    session_start();
    /*LOGIN PAGE AND AUTHENTICATION*/
    include "includes/LoaderCom.inc.php";
    include "includes/Loader.inc.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200i,300,300i,400,400i,500,500i,600,600i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asset/HeaderStyle.css">
    <link rel="stylesheet" href="asset/style.css">
    <title>Login</title>
    <style>
        .Login{
            height:50%;
        }
    </style>
</head>
<body>
    <?php
        $header= new Header();
        
        if(isset($_SESSION['NOM']))
        header('location:DashBoard.php?id=');
        if(isset($_GET['log']) AND isset($_SESSION['NOM']))
        {
            session_destroy();
                header('location:Login.php');
        }
    ?>
    <div class="join Login">
    <form method="POST" action="DashBoard.php?id=<?php if(isset($_GET['id'])) echo $_GET['id'] ?>">
            <h1 class="item h">Log in</h1>
            <label class="item lbl" for="nom">Username</label>
            <input class="item ipt" value="<?php if(isset($_GET['UserName']))echo$_GET['UserName'] ?>" type="text" name="nom" placeholder="Type you name"><br>
            <label class="item lbl" for="password">Password</label>
            <input class="item ipt" type="text" name="password" placeholder="Type your password"><br>
            <input class="item ipt" type="submit" name="Log" value="Log in"><br>
            <a href="Register.php">You Don't have an account?</a>
        </form>
    </div>
    <?php
    $pop = new Popup();
        if(isset($_GET['error'])){
            if($_GET['error']=="Empty"){
                $pop->error('Obligatoire de Remplir les champs');
                //echo "*Obligatoire de Remplir les champs";
            }
            if($_GET['error']=="ELog"){
                $pop->error('*You Need To Log in Fisrt To get Access to this page');
            }
            if($_GET['error']=="Auth"){
                $pop->error('*CHECK YOUR PASSWORD OR USERNAME');
            }
        }
    ?>
</body>
</html>
