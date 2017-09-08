<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Evenements
 *
 * @author selma
 */
class Evenements {
    
    private $type;
    private $dateHeure;
    private $source;
    private $niveau;
    
    
  public function __construct ( string $type, 
                            int $dateHeure, 
                            string $source, 
                            string $niveau) {
        
         $this->type = $type;
         $this->dateHeure = $dateHeure;
         $this->source = $source;
         $this->niveau = $niveau;
    }
    function getType() {
        return $this->type;
    }

    function getDateHeure() {
        return $this->dateHeure;
    }

    function getSource() {
        return $this->source;
    }

    function getNiveau() {
        return $this->niveau;
    }

 
}
