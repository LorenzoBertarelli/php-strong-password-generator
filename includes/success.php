<?php
    session_start();
    var_dump($_SESSION[$password]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (!empty($password)) { ?>
        <h2>La password generata è:</h2>
        <p><?php echo $password; ?></p>
        <p><a href="index.php">Genera una nuova password</a></p>
    <?php } ?>
</body>
</html>