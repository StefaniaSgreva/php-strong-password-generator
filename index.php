<?php
include __DIR__ . '/functions/functions.php';

$uppercase = ' ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$lowercase = 'abcdefghijklmnopqrstuvwxyz';
$numbers = '0123456789';
$symbols = '!"£$%&/()=?^é*§ç°[]{}#';

if (isset($_POST['length']) && !empty($_POST['length'])) {

    $newPswd = pswd_generator($_POST['length']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/style.css">
    <title>PHP Password Generator</title>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <h2>Generate Password</h2>
            <h3>Enter below the number of characters you wish for your new password</h3>
            <i class="fa-solid fa-arrow-down fa-bounce"></i>
            <form action="index.php" method="POST" name="pswdForm">
                <label for="pswd-length">Password Length</label>
                <input type="number" id="length" name="length" value="<?php echo !empty($length) ? $length : ''; ?>"
                    required>
                <button type="submit">Generate</button>
            </form>
        </div>
    </div>
</body>

</html>