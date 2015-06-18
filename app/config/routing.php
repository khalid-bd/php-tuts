<?php

// Vérification sur les bundles(Modules)
$bundles = ['app', 'authentification', 'errors', 'evaluation'];

if(isset($_GET) && !empty($_GET))
{
    try {

        if(isset($_GET['bundle']) && in_array($_GET['bundle'], $bundles))
        {
            require_once 'src/' . ucfirst($_GET['bundle']) . '/Ressources/config/routing.php';

            $bundle = ucfirst($_GET['bundle']);
            unset($_GET['bundle']);


            if(isset($_GET["action"]) && !empty($_GET['action'])) {
                if (in_array($_GET['action'], $action)) {
                    $controllerAction = lcfirst($_GET['action']);
                    unset($_GET['action']);
                } else {
                    throw new Exception("Vous essayez d'appeler une action qui n'existe pas!", 1);
                }
            } else {
                throw new Exception("Vous essayez d'appeler une action qui n'existe pas!", 1);
            }

        } else {
            throw new Exception("Vous essayez d'acceder a un module qui n'existe pas");
        }

        $params = array($bundle, $controllerAction);

    } catch (Exception $e) {
        die($e->getMessage());
    }
} else {
    $params = array("App", "index");
}
