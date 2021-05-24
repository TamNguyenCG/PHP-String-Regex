<?php

function checkClass($string)
{
    $pattern = "/^[CAP]\d{4}[G-M]\d/";
    if (preg_match($pattern, $string)) {
        echo "Validate Class Name <br>";
    } else {
        echo "Unvalidated Class Name <br>";
    }
}

checkClass("C0321G1");
checkClass("C0318G");
