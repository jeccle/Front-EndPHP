<?php
$fileName = basename(__FILE__, '.php');
    if (strcmp($fileName, 'php/index')){
        echo 'Question Index';
    }
    else if(strcmp($fileName, 'index')) {
        echo 'test';
    }
        
?>