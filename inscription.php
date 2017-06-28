<html>
    <head>
        <title>Inscription</title>
    </head>
    <body>

        <h1>Veuillez vous inscrire : </h1>

        <form action="inscription.php" method="POST">
            <input type="text" name="nom" placeholder="Nom"><br/>
            <input type="text" name="prenom" placeholder="Prénom"><br/>
            <input type="number" name="age" placeholder="age"><br/>
            <input type="text" name="adresse" placeholder="adresse"><br/>
            <input type="mail" name="email" placeholder="email"><br/>
            <input type="text" name="login" placeholder="login"><br/>
            <input type="password" name="pass" placeholder="password"><br/>      
            <input type="password" name="pass_confirm" placeholder="confirm_password"><br/>
            <input type="submit" name="inscription" value="inscription">
        </form>

        <?php
        include_once './Utilisateur.php';
        include_once './Database.php';
        
        // On verifie si les données du variable du formulaire existe 
        if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age']) && isset($_POST['adresse']) && isset($_POST['email']) && isset($_POST['login']) && isset($_POST['pass']) && isset($_POST['pass_confirm'])) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $age = $_POST['age'];
            $adresse = $_POST['adresse'];
            $email = $_POST['email'];
            $login = $_POST['login'];
            $password = $_POST['pass'];
            $pass_confirm = $_POST['pass_confirm'];
            
       // Creation d'une nouvelle instance de l'Utilisateur
     $utilisateur = new Utilisateur($nom, $prenom, $age, $adresse, $email, $login, $password);
     $data = new Database();
     $data->creerUser($utilisateur);
            
          }   
//           echo 'Vous êtes bien inscrite !';   
       
        // On recupère ici les information du formulaire
        // On verifie si l'Utilisateur existe
        
       /* if (is_dir($utilisateur)) {
            
        }
        * 
        */
        ?>
    </body>
</html>

