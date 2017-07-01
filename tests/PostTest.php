<?php

class PostTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    function it_gives_us_the_author_name()
    {
        $author = new \PlatziPHP\Author(
            'a@a.com',
            'pass',
            'AUTOR_DE_PLATZI'
        );

        $author->setName('Diego','Moreno');

        $post = new \PlatziPHP\Post(
            $author,
            'A title',
            'A fucking body'
        );

        $this->assertEquals(
            'by Diego',
            $post->getAuthor()
        );
    }
}