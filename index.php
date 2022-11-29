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
    <link rel="stylesheet" href="./CSS/style.css">
    <title>PHP Password Generator</title>
</head>

<body>
    <div class="container">
        <div>
            <?php if (!empty($_POST['length'])) { ?>
            <h3>Your new password is:
                <?php echo $newPswd ?>
            </h3>
            <?php } else { ?>
            <h3>Enter below the number of characters you wish for your new password</h3>

            <?php } ?>
        </div>
        <form action="index.php" method="POST" name="pswdForm">
            <label for="pswd-length">Password Length</label>
            <input type="number" id="length" name="length" value="<?php echo !empty($length) ? $length : ''; ?>"
                required>
            <button type="submit">Generate</button>
            <!-- <button type="reset">Reset</button> -->
        </form>
    </div>
</body>

</html>