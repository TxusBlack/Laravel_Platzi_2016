<?php
require_once 'vendor/autoload.php';

$user = new \PlatziPHP\Author('fake.email@foo.dev','1234');

$user->setName('Diego','Moreno');

echo $user->getFirstName(),PHP_EOL;
echo $user->getLastName(),PHP_EOL;

// var_dump($user);