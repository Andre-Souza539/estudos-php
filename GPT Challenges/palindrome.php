<?php

// the code will check if the string is a palindrome

$string  = "Andre";


function isPalindrome($string) {

    $reverse = strrev($string);
    if($string == $reverse) {
        echo "The string is a palindrome";
    } else {
        echo "the string isn't a palindrome";
    }
}

isPalindrome($string);

