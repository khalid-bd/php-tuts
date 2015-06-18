<?php

namespace App\Controller;

class App
{
    public function indexAction()
    {
        $a = 2 + 3;

        return array(
            'template' => "index",
            'value' => "<br><strong>Valeur calculé: $a</strong>"
        );
    }
}