<?php


$database = require 'bootstrap.php';

$names = $database->selectALl('personnel');

require 'index.view.php';

