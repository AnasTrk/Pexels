<?php
include "includes/Loader.inc.php";
        if(isset($_POST['sub'])){
        $id=0;
        $Name=$_POST['nom'];
        $Prename=$_POST['lastname'];
        $Email=$_POST['email'];
        $Password=$_POST['password'];
        if(empty($Name)||empty($Prename)||empty($Email)||empty($Password)){
            echo "fdsf";
            header('location:Register.php?error=emptyFields&Name='.$Name.'&Prename='.$Prename.'&Email='.$Email);
        }else{
            $U1 = new InsertNewUser();
            $U1->InsertNUser($Name,$Prename,$Email,$Password);
            $User=new ViewUser();
            
        }
    }
    
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asset/style.css">
    <title>Well Done :)</title>
    <style>
        .confirm{
            width:80% !important;
            height:30% !important;
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
        }
        a{
            background:aliceblue;
            color:black !important;
            text-decoration:none;
            text-align:center;
            line-height:50px;
            font-family: 'Montserrat';
            width: 80%;
            height: 50px;
            font-size: 20px;
            border-radius: 3px;
            border: none;
            outline: none;
            margin-top: 25px;
            transition: background ease-in-out 300ms;
            cursor: pointer;

        }

    </style>
</head>
<body>
    <div class="join confirm">
        <h1>You Account Have been Created Successfully</h1>
        <a href="https://localhost/pdo/Login.php?id=<?php echo $id?>">Go To Login</a>
    </div>
</body>
<script>
    var id=document.getElementById("id_user").value;
    window.addEventListener('load',()=>{

    });
</script>
</html>