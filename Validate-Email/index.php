<?php

function checkEmail($string)
{
//    $pattern = "/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)/";
    $pattern = "/^\w+\w*@\w+(\.\w+)/";
    if(preg_match($pattern,$string)){
        echo "Validate Email <br>";
    }else{
        echo "Unvalidated Email <br>";
    }
}

checkEmail('a@gmail.com');
checkEmail(';@gmail.com');
