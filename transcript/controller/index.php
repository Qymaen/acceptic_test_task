<?php

error_reporting(E_ALL);

// get all required data
require_once 'settings/application.php';

// get student ratings
$ratings = new Ratings();
$ratingsAll = $ratings->select(array('students_ratings' => true));

// get info about student
$studentId = 0;
$studentInfo = null;
if (!empty($_GET['userId'])) {
    $studentId = (int) $_GET['userId'];
} elseif (!empty($ratingsAll)) {
    reset($ratingsAll);
    $studentId = key($ratingsAll);
}

if (!empty($ratingsAll[$studentId])) {
    $studentInfo = $ratingsAll[$studentId];
}





// view
require_once 'view/index/index.php';
