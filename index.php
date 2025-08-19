<?php

require __DIR__ . "/Model/Model.php";
require __DIR__ . "/Controller/Controller.php";

use Controller\ProductController;

$result = new ProductController;

echo $result->view("hridoy", 100, "good");