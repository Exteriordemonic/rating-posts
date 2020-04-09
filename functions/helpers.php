<?php

// strip tags to avoid breaking any html
function anReadMore($string) {
    $string = strip_tags($string);
    if (strlen($string) > 500) {
        
        // truncate string
        $string = preg_split("/([^\s]*\s+[^\s]*\s+[^\s]*\s+[^\s]*\s+[^\s]*)\s+/", $string, PREG_SPLIT_DELIM_CAPTURE|PREG_SPLIT_NO_EMPTY);
    }
    return $string;
}