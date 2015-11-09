<?php
require_once 'vendor/autoload.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$user = new PlatziPHP\Author('diego@email.com','123456');
$user->setName('Diego', 'Duran');

echo $user->getFirstName();
echo $user->getLastName();
echo PHP_EOL;
//var_dump($user);