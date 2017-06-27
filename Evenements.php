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
    public $petitdejeuner;
    public $dejeuner;
    public $collation;
    public $dinner;
    
    public function __construct(string $petitdejeuner, string $dejeuner, 
            string $collation, string $dinner) {
        $this->petitdejeuner = $petitdejeuner;
        $this->dejeuner = $dejeuner;
        $this->collation = $collation;
        $this->dinner = $dinner;
    }
}
