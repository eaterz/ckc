<?php
require "function.php";
$config = require "config.php";
require "database.php";

$page_title = "delete";


$db = new Database($config);

// notikumiuem
$query_notik = "SELECT * FROM notikumi";

$params=[];

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $db->execute("DELETE FROM notikumi WHERE id = :id",[
        ":id"=>$_POST["id"]
]);
}
$notikumi = $db->execute($query_notik, $params);
 


// kolektiviem
$query_kolekt = "SELECT * FROM kolektivi";


if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $db->execute("DELETE FROM kolektivi WHERE id = :id",[
        ":id"=>$_POST["id"]
]);
}
$kolektivi = $db->execute($query_kolekt, $params);


require "views/delete.view.php";