<?php
function pswd_generator($length)
{
    $data = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!"£$%&/()=?*#@';
    $newPswd = substr(str_shuffle($data), 0, $length);
    session_start();
    $_SESSION['userpassword'] = $newPswd;
    header('Location: ./newPassword.php');
    return $newPswd;
}