<?php

// get settings
$settings = include 'settings/main.php';

// get models
require_once 'model/Database.php';
require_once 'model/Items.php';
require_once 'model/Users.php';
require_once 'model/Lessons.php';
require_once 'model/Ratings.php';

// get api
require_once 'api/api.php';