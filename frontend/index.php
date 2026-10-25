<?php

use App\Controller\ProdutoController;

require_once __DIR__ . "/../vendor/autoload.php";

$esquema = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
define('BASE_URL', $esquema . '://' . $_SERVER['HTTP_HOST'] . '/frontend');

$controller = new ProdutoController();

$url = trim($_GET['url'] ?? '/');

switch($url){
    case '/':
        $controller->index();
        break;
    case 'sobre':
        $controller->sobre();
        break;
    case 'read':
        $controller->read();
        break;
    case 'show':
        $controller->show();
        break;
    case 'create':
        $controller->create();
        break;
    case 'update':
        $controller->update();
        break;
    case'store':
        $controller->store();
        break;
    case'edit':
        $controller->edit();
        break;
    case'delete':
        $controller->delete();
        break;
    default:
        require_once __DIR__ . '/pages/erro.php';
        break;
}
