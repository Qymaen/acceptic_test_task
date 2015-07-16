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

// format date
$studentInfo = Api::formatDate($studentInfo);

// get major rating
$majorSubject = Api::getMajorSubject($studentInfo);

// get student ratings grouped by season
$seasonRatings = array();
foreach ($studentInfo as $value) {
    $seasonRatings[$value['date_formated']][] = $value['lesson_title']
        . ' '
        . '<span class="subject_rating">'
        . $value['rating']
        . '</span>';
}

// view
require_once 'view/index/index.php';
