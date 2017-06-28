<?php

 /**
 *
 * @author selma
 */


/*class Database (les choses qu'on peut mettre dedans){
 * 
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
 * creer User (argument : instance de User) -> prendre cet instance et le mettre dans le fichier
 * creer Post/Evenement( instance de post: $post)
 * lire Evenement/Post ( )-> juste recuperer les fichier et les afficher sous forme de tableau
 * auth User( $ID, $mdp)
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
            
	    //On met son mdp encrypté dedans
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