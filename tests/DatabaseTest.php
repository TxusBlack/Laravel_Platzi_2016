<?php

class DatabaseTest extends PHPUnit_Framework_TestCase
{
    function test_connection_doesnt_explode()
    {
        $db = new \PlatziPHP\Infrastructure\Database();

        $result = $db->posts();

        var_dump($result);
    }
}