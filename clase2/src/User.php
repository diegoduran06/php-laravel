<?php
namespace PlatziPHP;

/**
* 
*/
class User
{
    /**
     *
     * @var type string
     */
    protected $email;
    /**
     *
     * @var type string
     */
    protected $password;
    /**
     *
     * @var type string
     */
    protected $firstName;
    /**
     *
     * @var type string
     */
    protected $lastName;

    public function __construct($anEmail, $password)
    {
        $this->email = $anEmail;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
    
    /**
     * 
     * @param type string $firstName
     * @param type string $lastName
     */
    public function setName($firstName,$lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    
    /**
     * 
     * @return type string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
}