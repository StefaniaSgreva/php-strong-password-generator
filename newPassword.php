<?php
session_start();


echo "<h1> Your new password is: {$_SESSION['userpassword']} </h1>";