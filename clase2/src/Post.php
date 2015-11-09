<?php
namespace PlatziPHP;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Post{
    private $autor;
    private $title;
    private $body;
    
    public function __construct(Author $autor, $title, $body) {
        $this->autor = $autor;
        $this->title = $title;
        $this->body = $body;
    }
    
    public function getBody(){
        return $this->body;
    }
    
    public function getAuthor(){
        return 'By '.$this->autor->getFirstName();
    }
    
    public function getTitle(){
        return $this->title;
    }
}

