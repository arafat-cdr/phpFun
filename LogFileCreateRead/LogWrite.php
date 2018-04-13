<?php
$username = "arafat";
$password = 123456;
$log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
        "Attempt: My attempt".PHP_EOL.
        "User: ".$username.PHP_EOL.
        "Pass: ".$password.PHP_EOL.
        "-------------------------".PHP_EOL;
//Save string to log, use FILE_APPEND to append.
file_put_contents('./log_'.date("j.n.Y").'.txt', $log, FILE_APPEND | LOCK_EX);
file_put_contents('log.txt', FILE_APPEND);