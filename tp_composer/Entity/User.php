<?php
/**
 * Created by PhpStorm.
 * User: nicolas.aube95
 * Date: 05/12/2017
 * Time: 11:09
 */

/**
 * Class User
 * @Entity
 * @Table(name="users")
 */
class User {

    /**
     * @var
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;
    /**
     * @var
     * @Column(type="string")
     */
    protected $login;
    /**
     * @var
     * @Column(type="string")
     */
    protected $password;
    /**
     * @var
     * @Column(type="string")
     */
    protected $email;
    /**
     * @var
     * @Column(type="string")
     */
    protected $firstName;
    /**
     * @var
     * @Column(type="string")
     */
    protected $lastName;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }



}