<?php
namespace PlatziPHP;

use Illuminate\Support\Collection;
use PlatziPHP\Domain\Author;
use PlatziPHP\Domain\Post;

class FakeDatabase
{
    /**
     * @return Collection
     */
    public function posts()
    {
        $author = new Author(
            'yeyoror@gmail.com',
            'qwerty',
            'AUTOR_DE_PLATZI'
        );

        $author->setName('Txus','Black');

        return new Collection([
            1 => new Post($author,'Post #1','This is the first post'),
            2 => new Post($author,'Post #2','This is the second post'),
            3 => new Post($author,'Post #3','This is the third post'),
            4 => new Post($author,'Post #4','This is the fourth post'),
        ]);
    }
}