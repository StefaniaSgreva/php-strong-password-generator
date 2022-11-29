<?php
$upper_case = ' ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$lower_case = 'abcdefghijklmnopqrstuvwxyz';
$numbers = '0123456789';
$special_chars = '!"£$%&/()=?^é*§ç°[]{}#';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Password Generator</title>
</head>

<body>
    <form action="index.php" method="POST" name="pswdForm">
        <label for="pswd-length">Generate Password</label>
        <input type="number" id="pswd" name="pswd" value="password">
        <button type="submit">Generate</button>
    </form>

</body>

</html>