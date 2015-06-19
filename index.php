<?php

if(!session_status()){
    session_start();
}
require_once 'app/config/routing.php';

require_once 'app/ressources/views/layout.php';
