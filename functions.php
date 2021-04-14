<?php

// require DBController Class
require "database/DBController.php";

// require DBController Class
require "database/product.php";

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
// --------------this is the dependency injection

// print_r($product->getData()); ----------prints in the page
?>