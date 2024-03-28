<?php

require "function.php";
$config = require "config.php";
require "database.php";
$dd = new Database($config);

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $post = $dd->execute("SELECT * FROM notikumi WHERE id = :id", [":id" => $_GET['id']])[0];
        require_once 'views/edit.view.php';
        break;
    case 'POST':
        session_start();
    
    $dd->execute('
                UPDATE notikumi SET datums_laiks = :datums_laiks,
                    notikums =:notikums,
                    vieta = :vieta
                    WHERE id = :id;', [
                ":datums_laiks" => $_POST['datums_laiks'],
                ":notikums" => $_POST['notikums'],
                ":vieta" => $_POST['vieta'],
                ":id" => $_POST['id']
            ]);
            header("Location: /");
        break;
    default:
        header("Location: /");
        break;

        }

  





