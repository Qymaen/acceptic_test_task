<?php

// get all required data
require_once 'settings/application.php';

$ratings = new Ratings();

echo '<pre>'; print_r($ratings->select()); echo '</pre>'; exit;


require_once 'view/index/index.php';
