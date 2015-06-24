<?php

namespace Users\Controller;

require_once "src/Users/Model/Users.php";
use Users\Model;

class Users
{
    public function indexAction($db)
    {
        $request = $db->query("SELECT * FROM users")->fetchAll();

        $data = [];
        foreach ($request as $key => $value) {
            $data[$key] = $value;
        }

        $user = new \Users\Model\Users();
        $user->populate($data[0]);

        return array(
            'user' => $user,
            'template' => 'index'
        );
    }
}