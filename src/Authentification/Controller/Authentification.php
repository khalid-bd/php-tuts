<?php
namespace Authentification\Controller;

class Authentification
{
    public function loginAction($db)
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $form = $_POST;

            try {
                if(!$this->isValid($form)) {
                    throw new Exception("Le formulaire n'est pas valide", 1);
                } else {
                    $request = $db->query("SELECT email, password, name, role FROM users");
                        // $request->fetch();

                    while ($response = $request->fetch()){
                        $dbEmail = $response['email'];
                        $dbPassword = $response['password'];
                        $dbName = $response['name'];
                        $dbRole = $response['role'];
                    }

                    if($form['email'] == $dbEmail && $form['password'] == $dbPassword) {
                        $this->connectUser($dbEmail, $dbName, $dbRole);
                    } else {
                        throw new Exception("Identifiants incorrecte", 1);
                        
                    }

                }
            } catch(Exception $e) {
                var_dump($e->getMessage());
            }


            return array(
                'template' => "index"
            );
        }

        if(!isset($_SESSION['is_connected'])) {
            return array(
                'template' => "login"
            );
        } else {
            return array(
                'template' => 'index'
            );
        }
    }

    function isValid($form)
    {
        if(filter_var($form['email'], FILTER_VALIDATE_EMAIL)) {
            $error = false;
        }

        if(!$error) {
            return true;
        } else {
            return false;
        }
    }

    function connectUser($email, $name, $role)
    {
        if(!session_status()){
            session_start();
        }
        $_SESSION['user_name']  = $name;
        $_SESSION['user_email'] = $email;
        $_SESSION['is_connected'] = true;
        $_SESSION['role'] = $role;
    }

    function disconnectAction()
    {
        if(session_status()) {
            session_start();
            session_destroy();
        }

        return array(
            'template' => 'login'
        );
    }
}
