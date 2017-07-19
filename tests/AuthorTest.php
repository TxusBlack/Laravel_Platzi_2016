<?php

class AuthorTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    function it_should_construct()
    {
        $author = new \PlatziPHP\Domain\Author(
            'asd@asd.com',
            'pass',
            'AUTOR_DE_PLATZI'
        );

        $this->assertInstanceOf(\PlatziPHP\Domain\Author::class, $author);
    }
    /** @test */
    function it_should_fail_when_no_key_is_given()
    {
        $this->setExpectedException(InvalidArgumentException::class);

        $author = new \PlatziPHP\Domain\Author(
            'asd@asd.com',
            'pass',
            'LOL'
        );


    }
}