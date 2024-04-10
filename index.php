<?php
$url = isset($_GET['url']) ? $_GET['url'] : '';

switch ($url) {
    case 'property':
        require 'property.php';
        break;

    case 'about':
        require 'about.php';
        break;
    case 'contact':
        require 'contact.php';
        break;
    case 'signup':
        require 'signUp.php';
        break;
    case 'user':
        require 'user.php';
        break;
    case 'login':
        require 'login.php';
        break;
    case 'upload':
        require 'upload.php';
        break;
    default:
        require 'landPage.php';
        break;
}
