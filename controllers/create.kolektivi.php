<?php

require "function.php";
$config = require "config.php";
require "database.php";


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $dd = new Database($config);
    $dd->execute("INSERT INTO kolektivi (name, description) VALUES (:name, :description)", [
                ":name" => $_POST['name'],
                ":description" => $_POST['description']
                
                
            ]);
            header("Location: /kolektivi");
            exit();

        }

  





require 'views/create.kolektivi.view.php';