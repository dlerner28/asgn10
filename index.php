<?php


$database = require 'bootstrap.php';

$tasks = $database->selectALl('todos');

require 'index.view.php';

