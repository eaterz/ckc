<?php
require "function.php";
$config = require "config.php";
require "database.php";

$page_title = "Posts";


$db = new Database($config);

$query_string = "SELECT * FROM kolektivi";

$params = [];


$posts = $db->execute($query_string, $params);



 
require "views/kolektivi.views.php";