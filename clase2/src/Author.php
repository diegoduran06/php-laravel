<?php
namespace PlatziPHP;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Author extends User
{
    public function __construct($anEmail, $password, $key) {
        parent::__construct($anEmail, $password);
        if($key != 'AUTOR_DE_PLATZI'){
            throw new \InvalidArgumentException("Invalid key given");
        }
    }

    public function getLastName()
    {
        return $this->lastName;
    }
    
}