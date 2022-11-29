<?php
function pswd_generator($length)
{
    $data = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!"£$%&/()=?^é*§ç°[]{}#';
    $newPswd = substr(str_shuffle($data), 0, $length);
    return $newPswd;
}