<?php

function Palindrome($string){ 
    if (strrev($string) == $string){ 
        return 1; 
    }
    else{
        return 0;
    }
} 
$word = $_GET["word"];

if (Palindrome($word))
    {$checker = array("isPalindrom"=> "true");}
    else{$checker = array("isPalindrom"=> "false");}

echo json_encode($checker);
?>