<?php

 /**
 * @author selma
 */
/*class Database (les choses qu'on peut mettre dedans){
 */
/**
    serialize;
    unserialise
    fopen
    fwrite
    file_get_content
    scandir
}

Les choses il faut surtout pas mettre dans class Database !! : 
    $_POST/$_GET
    echo ''
    html 
User :              Evenement :
 * 
 * Database: 
 * 
 * méthod creer User/info user/ creer dossier utilisateur
 * creer post/evenement/ organiser ou poster un evenement/ mettre une annonce
 * lire post
 * auth user / autentifier l'utilisateur
 */
/**CRUD : creer, read, update, delete
 * 
 * creer User (argument : instance de User) -> prendre cet instance et 
 * le mettre dans le fichier
 * creer Post/Evenement( instance de post: $post)
 * lire Evenement/Post ( )-> juste recuperer les fichier et les afficher 
 * sous forme de tableau
 * auth User( $ID, $mdp)
 * 
 * DATABASE
 * 
 * function connexion($identifiant, $mdp)
 * if(is_file("user/" .$identifiant. ".txt"))->verifier s'il existe un 
 * utilisateur avec l'identifiant $identifiant.
 * 
 * $user = unserialize(file_get_contents(...))->on recupere l'instance de user 
 * qu'on avait stocké dans le fichier au moment de l'inscription.
 * 
 * if($user->getMdp() == $mdp)-> on compare le mdp stocké dans le fichier 
 * a celui passé en argument de la function .
 * 
 */
include_once './Utilisateur.php';

class Database {
    
  public function creerUser(Utilisateur $utilisateur){
        
     // On verifie si le dossier utilisateur existe dêjà 
          if(!is_dir("utilisateur")) {
	        //sinon on le crée
	        mkdir("utilisateur");
	    }
	    //On crée un nouveau fichier pour l'utilisateur
	    $new_file = fopen("utilisateur/".$utilisateur->getLogin() .".txt", "w");
           
	    fwrite($new_file, serialize($utilisateur));
	    //on ferme le fichier
	    fclose($new_file);
	    //On lance la session à l'inscription et on y
	    //stock le nom d'utilisateur
	    session_start();
	    $_SESSION['utilisateur'] = $utilisateur;
	}
}
?>