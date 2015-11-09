<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UserTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    function it_should_be_able_to_construct()
    {
        $user = new PlatziPHP\User('diego@email.dev','platzi');
        $this->assertInstanceOf(PlatziPHP\User::class, $user);
    }
    
    /**
     * @test
     */
    function it_should_have_a_first_name()
    {
        $user = new PlatziPHP\User('email@example.com','123456');
        $user->setName('Diego2', 'Duran2');
        $name = $user->getFirstName();
        $this->assertEquals('Diego2', $name);
    }
}