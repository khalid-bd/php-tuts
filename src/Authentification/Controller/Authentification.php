<?php
namespace Authentification\Controller;

class Authentification
{
    public function loginAction($db)
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $form = $_POST;

            try {
                if(!isValid($form)) {
                    throw new Exception("Le formulaire n'est pas valide", 1);
                } else {
                    $request = $db->exec("SELECT * FROM users");
                    // $request->bindParam(':email', $email);
                    // $request->fetch();

                    var_dump($request);


                    if($request->rowCount() == 0){
                        echo "exists! cannot insert";
                    }
                }
            } catch(Exception $e) {
                var_dump($e->getMessage());
            }


            return array(
                'template' => "index"
            );
        }
        return array(
            'template' => "login"
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


                

