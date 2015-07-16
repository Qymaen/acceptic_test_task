<?php

class Api
{
    /**
     * Format Date to "Season Year", example Winter 2013
     * @param array $studentInfo
     *
     * @return array $studentInfo Formatted array
     */
    public static function formatDate(array $studentInfo)
    {
        $seasons = array(
            '01' => 'winter',
            '02' => 'winter',
            '03' => 'spring',
            '04' => 'spring',
            '05' => 'spring',
            '06' => 'summer',
            '07' => 'summer',
            '08' => 'summer',
            '09' => 'autumn',
            '10' => 'autumn',
            '11' => 'autumn',
            '12' => 'winter',
        );

        foreach ($studentInfo as $key => &$rating) {

            $month = date('m', strtotime($rating['date']));
            $season = $seasons[$month];
            $rating['date_formated'] = ucfirst($season)
                . ' '
                . date('Y', strtotime($rating['date']));
        }
        unset($rating);

        return $studentInfo;
    }

    /**
     * Get Major Subject
     * @param array $studentInfo
     *
     * @return string $majorSubject
     */
    public static function getMajorSubject(array $studentInfo)
    {
        $majorRating = 'E/F';
        $majorSubject = '';

        foreach ($studentInfo as $rating) {

            if (strstr($rating['rating'], '+')) {
                if (substr($rating['rating'], 0, 1) === substr($majorRating, 0, 1)) {
                    $majorRating = $rating['rating'];
                    $majorSubject = $rating['lesson_title'];
                }
            } else {
                if ($rating['rating'] < $majorRating) {
                    $majorRating = $rating['rating'];
                    $majorSubject = $rating['lesson_title'];
                }
            }
        }

        return $majorSubject;
    }
}




















