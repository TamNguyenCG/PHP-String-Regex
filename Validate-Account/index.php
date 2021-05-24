<?php

function checkAccount($string){
    $pattern = "/^[_a-z0-9]{6,}/";
    if(preg_match($pattern,$string)){
        echo "Validate Account <br>";
    }else{
        echo "Unvalidated Account <br>";
    }
}

checkAccount("124das14_");
checkAccount("43gsd2");
checkAccount("qw.annd");
checkAccount("AnhlaTam");