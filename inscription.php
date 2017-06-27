<?php
if(isset($_POST['pseudo']) 
	    && isset($_POST['password'])){

	    $pseudo = $_POST['pseudo'];
	    $password = $_POST['password'];
	    
	    //On encrypte en md5 ou en sha1 (sha256 c'est mieux)
	    $crypt = md5($password);
	    $crypt2 = sha1($password);
	    if(!is_dir("utilisateur")) {

	        mkdir("utilisateur");
	    }
	    
	    $new_file = fopen("utilisateur/".$pseudo.".txt", "w");

	    fwrite($new_file, $crypt);
	    fclose($new_file);
	    echo '<p>Vous avez bien été inscrit.e</p>';
	}
?>
	
	<a href="inscription.php">Retour</a>;

<form method="POST" action="inscription.php">
<p>Votre pseudo:</p>
<input type="text" name="pseudo">
<p>Votre password:</p>
<input type="password" name="password">
<p>Confirmez votre password:</p>
<input type="password" name="confirmepassword"><br/><br/>
<input type="submit" name="submit" value="S'inscrire"> 
</form>