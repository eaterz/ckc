<?php

require "function.php";
$config = require "config.php";
require "database.php";
$dd = new Database($config);

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $post = $dd->execute("SELECT * FROM kolektivi WHERE id = :id", [":id" => $_GET['id']])[0];
        require_once 'views/edit.kolektivi.view.php';
        break;
    case 'POST':
        session_start();
    
    $dd->execute('
                UPDATE kolektivi SET name = :name,
                    description =:description
                    WHERE id = :id;', [
                ":name" => $_POST['name'],
                ":description" => $_POST['description'],
                ":id" => $_POST['id']
            ]);
            header("Location: /kolektivi");
        break;
    default:
        header("Location: /kolektivi");
        break;

        }
