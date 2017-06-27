<?php

if(isset($_POST) 
&& isset($_POST['nom']) 
&& isset($_POST['email']) 
&& isset($_POST['message'])){
    extract($_POST);
    if(empty($nom)&& empty($email) && empty($message)){
        echo '<p>Bienvenue !</p>';
    }

 }
             
?>