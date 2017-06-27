<?php
session_start();
if(!isset($_SESSION['login'])){
    header ('Location : contact.html');
    exit();
}

?><html>
<head>
<title>Espace membre</title>

</head>
<body>
Bienvenue !
<?php echo htmlspecialchars(trim($_SESSION['login'])); 
?> 
<br />
<a href="deconnexion.php">Déconnexion</a>

</body>
</html>

