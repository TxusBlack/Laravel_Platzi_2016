<?php

class UserTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    function it_should_be_able_to_construct ()
    {
        $user = new \PlatziPHP\User('fake@mail.dev','platzi');

        $this->assertInstanceOf(\PlatziPHP\User::class, $user);
    }

    /**
     * @test
     */
    function it_should_have_a_first_name()
    {
        $user = new \PlatziPHP\User('email@email.com','pass');

        $user->setName('Diego','Moreno');

        $name = $user->getFirstName();

        $this->assertEquals('Diego',$name);
    }
}