<?php
namespace PlatziPHP\Http\Controllers;

use Illuminate\Http\Request;
use PlatziPHP\Author;
use PlatziPHP\Http\Views\View;
use PlatziPHP\Post;

class HomeController
{
    public function index(Request $request)
    {
        $author = new Author(
            'yeyoror@gmail.com',
            'qwerty',
            'AUTOR_DE_PLATZI'
        );

        $author->setName('Txus','Black');

        $posts = [
            new Post($author,'Post #1','This is the first post'),
            new Post($author,'Post #2','This is the second post'),
            new Post($author,'Post #3','This is the third post'),
            new Post($author,'Post #4','This is the fourth post'),
        ];

        $view = new View('home', [
            'posts' => $posts
        ]);

        $response = $view->render();

        $response->send();
    }
}