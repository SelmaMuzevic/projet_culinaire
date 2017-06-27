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
    public $ID;
    public $type;
    public $dateHeure;
    public $source;
    public $niveau;
    
    
     function __construct (string $ID, 
                            string $type, 
                            int $dateHeure, 
                            string $source, 
                            string $niveau) {
        
         $this->ID = $ID;
         $this->type = $type;
         $this->dateHeure = $dateHeure;
         $this->source = $source;
         $this->niveau = $niveau;
    }
    
}
