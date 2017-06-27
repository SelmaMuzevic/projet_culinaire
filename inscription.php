<?php
session_start();

$_SESSION['login'] = $_POST['login'];
header('Location: membre.php');
exit();

if(isset($_POST['login']) 
        && isset($_POST['pass'])){
    
    echo '<p>Ce login existe déjà !</p>';
        
}else{
    echo '<p>Erreur !</p>';
}
?>
<html>
    <head>
<title>Inscription</title>
    </head>
<body>
  <form action="membre.php" method="POST">
 Login : <input type="text" name="login" value="<?php if (isset($_POST['login'])) 
     echo htmlspecialchars(trim($_POST['login'])); ?>"><br />
 Mot de Passe: <input type="password" name="pass" value="<?php if (isset($_POST['pass']))
     echo htmlspecialchars(trim($_POST['pass'])); ?>"><br/>       
 Confirmation du mot de passe : <input type="password" name="pass_confirm" value="<?php if (isset($_POST['pass_confirm'])) 
     echo htmlspecialchars(trim($_POST['pass_confirm'])); ?>"><br />
<input type="submit" name="inscription" value="Inscription">
</form>
 
</body>
</html>
