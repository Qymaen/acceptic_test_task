<?php

class api
{
    /**
     * Format Date to "Season Year", example Winter 2013
     * @param string $date
     */
    public static function formatDate($date = null)
    {
        echo '<pre>'; print_r('formatDate'); echo '</pre>'; exit;
    }

    /**
     * Calculate GPA
     * @param null $gpa
     * @param array $params
     * @return float
     */
    public static function calculateGPA($gpa = null, array $params = array())
    {
        switch ($gpa) {
            case 'A+' :
                $rating = 4.0;
                break;
            case 'A' :
                $rating = 4.0;
                break;
            case 'A-' :
                $rating = 3.7;
                break;
            case 'B+' :
                $rating = 3.3;
                break;
            case 'B' :
                $rating = 3.0;
                break;
            case 'B-' :
                $rating = 2.7;
                break;
            case 'C+' :
                $rating = 2.3;
                break;
            case 'C' :
                $rating = 2.0;
                break;
            case 'C-' :
                $rating = 1.7;
                break;
            case 'D+' :
                $rating = 1.3;
                break;
            case 'D' :
                $rating = 1.0;
                break;
            case 'E/F' :
                $rating = 0.0;
                break;
            default :
                $rating = 0.0;
                break;
        }

        return $rating;
    }
}