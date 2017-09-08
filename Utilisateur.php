<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utilisateur
 *
 * @author selma
 */
class Utilisateur {

    private $nom;
    private $prenom;
    private $adresse;
    private $email;
    private $login;
    private $password;
    
    
    function __construct($nom, $prenom, $adresse, $email, $login, $password) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->email = $email;
        $this->login = $login;
        $this->password = $password;
    }
        
    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }


    function getAdresse() {
        return $this->adresse;
    }

    function getEmail() {
        return $this->email;
    }

    function getLogin() {
        return $this->login;
    }

    function getPassword() {
        return $this->password;
    }

}
