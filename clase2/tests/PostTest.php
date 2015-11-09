<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class PostTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    function it_gives_us_the_author_name()
    {
        $author = new \PlatziPHP\Author(
            'email',
            '1234',
            'AUTOR_DE_PLATZI'
        );
        $author->setName('Diego', 'Duran');

        $post = new \PlatziPHP\Post($author, 'A Title', 'A post body');

        $this->assertEquals(
            'By Diego',
            $post->getAuthor()
        );
    }
    
}
