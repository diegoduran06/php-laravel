<?php
namespace PlatziPHP\Http\Controllers;
use Illuminate\Http\Request;
use PlatziPHP\Http\Views\View;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class HomeController
{
    public function index(Request $request)
    {
        $autor = new \PlatziPHP\Author('diego@', '123456', 'AUTOR_DE_PLATZI');
        $autor->setName("Diego F.", "Duran D.");
        $posts = [
            new \PlatziPHP\Post($autor, 'Post number 1', 'This is the first post'),
            new \PlatziPHP\Post($autor, 'Post number 2', 'This is the second post'),
            new \PlatziPHP\Post($autor, 'Post number 3', 'This is the third post'),
            new \PlatziPHP\Post($autor, 'Post number 4', 'This is the fourth post')
        ];
        
        $view = new View('home', [
            'posts' => $posts
        ]);
        
        $response = $view->render();
        $response->send();
    }
}