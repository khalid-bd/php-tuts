<?php

if(!isset($_SESSION) || empty($_SESSION)){
    session_start();
}

require_once 'app/config/routing.php';

require_once 'app/ressources/views/layout.php';
