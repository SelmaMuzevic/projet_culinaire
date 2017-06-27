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
    private $age;
    private $region;
    private $email;
    
    function __construct(string $nom,
                        string $prenom,
                        int $age,
                        string $region,
                        string $email) {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=$age;
        $this->region=$region;
        $this->email=$email;
    }
    
    function connexion() {
        
    }
    
    function inscription(){
        
    }
}
