<?php

require "function.php";
$config = require "config.php";
require "database.php";

$params = [];
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $dd = new Database($config);
    $sql = "INSERT INTO notikumi (datums_laiks, notikums, vieta) VALUES (?,?,?)";

    $dd->execute("INSERT INTO notikumi (datums_laiks, notikums, vieta) VALUES (:datums_laiks, :notikums, :vieta)", [
                ":datums_laiks" => $_POST['datums_laiks'],
                ":notikums" => $_POST['notikums'],
                ":vieta" => $_POST['vieta']
            ]);
            header("Location: /");
            exit();

        }

  





require 'views/create.view.php';