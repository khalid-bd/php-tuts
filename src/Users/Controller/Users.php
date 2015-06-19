<?php

namespace Users\Controller;

class Users
{
    public function indexAction($db, User $user)
    {
        return array(
            'template' => 'index'
        );
    }
}