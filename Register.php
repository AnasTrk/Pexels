<?php
    include "includes/LoaderCom.inc.php";
    include "includes/Loader.inc.php";
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
    <title>OOP</title>
</head>
<body>
    <?php
        $Header= new Header();
    ?>
    <div class="join">
        <form method="POST" action="Confirm.php">
            <h1 class="item h">Join Us</h1>
            <label class="item lbl" for="nom">Username</label>
            <input class="item ipt" value="<?php if(isset($_GET['Name'])) echo $_GET['Name'] ?>" type="text" name="nom" placeholder="Type you name"><br>
            <label class="item lbl" for="lastname">Nickname</label>
            <input class="item ipt" value="<?php if(isset($_GET['Name'])) echo $_GET['Prename'] ?>" type="text" name="lastname" placeholder="Type you Last Name"><br>
            <label class="item lbl" for="lastname">Email</label>
            <input class="item ipt" value="<?php if(isset($_GET['Name'])) echo $_GET['Email'] ?>" type="email" name="email" placeholder="Type you Last Name"><br>
            <label class="item lbl" for="password">Password</label>
            <input class="item ipt" type="text" name="password" placeholder="Type your password"><br>
            <input class="item ipt" type="submit" name="sub" value="Join"><br>
            <a href="Login.php">You Already have an account?</a>
        </form>
    </div>
    <?php

        if(isset($_GET["error"])){
            echo "CHECK YOUR FIELDS";
        }
    ?>
</body>
</html>