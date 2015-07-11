<?php 

header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL);

/**
 * Get Array Numbers Info like:
 * - report the range of the numbers (i.e. min and max)
 * - print to screen a list of all numbers within the range that are missing from the array
 * - print the count of all numbers that appear 2 or more times within the array
 *
 * @param array $arrayOfNumbers
 * @return mixed null if empty array, string info in other way
 */
function getArrayInfo(array $arrayOfNumbers = array()) {

    if (empty($arrayOfNumbers)) return null;

    $maxElement = (!empty($arrayOfNumbers[0])) ? $arrayOfNumbers[0] : 0;
    $minElement = (!empty($arrayOfNumbers[0])) ? $arrayOfNumbers[0] : 0;
    $duplicates['count'] = 0;

    foreach ($arrayOfNumbers as $number) {
        // find max
        if ($number > $maxElement) $maxElement = $number;

        // find min
        if ($number < $minElement) $minElement = $number;

        // find duplicate numbers
        if (!empty($duplicates[$number])) {
            ++$duplicates[$number];
            ++$duplicates['count'];
        } else {
            $duplicates[$number] = 1;
        }
    }

    // find missing elements
    $missingElements['count'] = 0;
    for ($i = $minElement; $i <= $maxElement; $i++) {
        if (!in_array($i, $arrayOfNumbers)) {
            $missingElements[] = $i;
            ++$missingElements['count'];
        }
    }

    // output
    $output = '';
    $output .= "Range is $minElement to $maxElement<br>\n";

    if ($missingElements['count'] === 0) {
        $output .= "No missing numbers.<br>\n";
    } else {
        $output .= "Missing numbers:<br>\n";
        foreach ($missingElements as $key => $missingElement) {
            if ($key === 'count') continue;
            $output .= "$missingElement<br>\n";
        }
    }

    if ($duplicates['count'] === 0) {
        $output .= "No duplicates.<br>\n";
    } else {
        $output .= "Duplicate Numbers:<br>\n";
        foreach ($duplicates as $duplicate => $count) {
            if ($duplicate === 'count' or $count === 1) continue;
            $output .= "$duplicate appears $count times<br>\n";
        }
    }

    return $output;
}

$arrayOfNumbers = array(3, 1, -5, 3, 3, -5, 0, 10, 1, 1);

echo getArrayInfo($arrayOfNumbers);
