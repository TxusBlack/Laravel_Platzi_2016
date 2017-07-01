<?php

namespace PlatziPHP;

class User
{
    /**
     * @param string
     */
    protected $email;

    /**
     * @param string
     */
    protected $password;

    /**
     * @param string
     */
    protected $firsName;

    /**
     * @param string
     */
    protected $lastName;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    /**
     * @param $firsName string
     * @param $lastName string
     */
    public function setName($firsName, $lastName)
    {
        $this->firsName = $firsName;
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firsName;
    }

}