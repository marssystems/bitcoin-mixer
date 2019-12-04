<?php

if (!function_exists('convertToHoursMins')) {
    /**
     * Converts seconds into hours and minutes
     *     *
     * @param string 
     * @return string
     */
    function convertToHoursMins($time, $format = '%02d:%02d') {
        if ($time < 1) {
            return;
        }
        $hours = floor($time / 3600);
        $minutes = floor(($time / 60) % 60);
        $seconds = $time % 60;
        return sprintf($format, $hours, $minutes);
    }
}
