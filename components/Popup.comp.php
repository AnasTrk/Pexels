<?php 
    class Popup{
       
        public  function error($error){
            echo "<link rel='stylesheet' href='asset/Files/PopUp.css'>

            <div class='container'>
                <div class='popup'>
                    <div class='head'><i class='fas fa-times'></i></div>
                    <div class='main'><h3>$error</h3></div>
                </div>
            </div>
            <script src='asset/Files/PopUp.js'></script>
            <script src='https://kit.fontawesome.com/478996d1f3.js' crossorigin='anonymous'></script>
            ";
        }
    }
?>