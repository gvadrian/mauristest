<?php

namespace App\Controllers;

use Doctrine\ORM\EntityManager;

class UsersController
{

    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function showAll()
    {
        $users = $this->em->getRepository('App\Entities\User')->findAll();
        echo $users;
    }
}