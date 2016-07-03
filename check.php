<?php
 include 'process_data.php';
 
 //function to validate date
function valid($date, $format = 'j-M-Y') {
    $datetime = DateTime::createFromFormat($format, $date, new DateTimeZone('UTC'));
    $errors   = DateTime::getLastErrors();
    return ($errors['warning_count'] + $errors['error_count'] === 0);
}


 ?>