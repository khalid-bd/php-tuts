<?php

namespace Errors\Controller;

class Errors
{
    public function notFoundAction()
    {
        return array(
            'template' => '404'
        );
    }
}