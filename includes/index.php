<?php
    session_start();
    include __DIR__ . "/../functions/functions.php";

    // if(isset($_GET['password'])) {
    //     $password_length = $_GET["password"];
    //     $password = array($password_length);
    //     $_SESSION["password"] = $password;
    //     header("Location: success.php");
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore password</title>
</head>
<body>

    <form action="index.php" method="GET">
        <label for="password">Inserisci il numero di caratteri con cui vuoi che venga composta la password</label> 
        <input type="text" id="password" name="password" value="<?php
            echo $_GET["password"] ?? '' ?>">
        <button type="submit">Genera password</button>
    </form>

    <?php if (!empty($password)) { ?>
        <h2>La password generata è:</h2>
        <p><?php echo $password; ?></p>
        <p><a href="index.php">Genera una nuova password</a></p>
    <?php } ?>

</body>
</html>