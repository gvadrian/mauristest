<?php

namespace App\Entities;

use App\Entities;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Table;


/**
 * @ORM\Entity
 * @Table(name="users")
 * @ORM\Table(name="users")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $login;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    protected $email;

    /**
     * Get user id
     *
     * @ORM\return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get user name
     *
     * @ORM\return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get user login
     *
     * @ORM\return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Get user email
     *
     * @ORM\return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}