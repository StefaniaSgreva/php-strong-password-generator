<?php
$upper_case = ' ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$lower_case = 'abcdefghijklmnopqrstuvwxyz';
$numbers = '0123456789';
$special_chars = '!"£$%&/()=?^é*§ç°[]{}#';

function pswd_generator($length)
{
    $data = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!"£$%&/()=?^é*§ç°[]{}#';
    return substr(str_shuffle($data), 0, $_POST['length']);
}
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
        <label for="pswd-length">Password Length</label>
        <input type="number" id="length" name="length" value="<?php echo !empty($length) ? $length : ''; ?>">
        <button type="submit">Generate</button>
    </form>
    <div>
        <?php if (empty($_POST['length'])) { ?>
        <h4>Please enter a number for the length!</h4>
        <?php } else { ?>
        <h4>Your new password is:
            <?php echo pswd_generator($_POST['length']) ?>
        </h4>
        <?php } ?>
    </div>
</body>

</html>