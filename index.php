<?php
 $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
 $pass = array(); 
 $combLen = strlen($comb) - 1;
  
 $password_length = isset($_GET["password"]) ? intval($_GET["password"]) : 0;
 for ($i = 0; $i < $password_length; $i++) {
     $n = rand(0, $combLen);
     array_push($pass, $comb[$n]);
 }
 $password = implode('', $pass);
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
    <form action="index.php" method="GET">
        <label for="password">Inserisci il numero di caratteri con cui vuoi che venga composta la password</label> 
        <input type="text" id="password" name="password">
        <button type="submit">Genera password</button>
    </form>

    <?php if (!empty($password)) { ?>
        <h2>La password generata è:</h2>
        <p><?php echo $password; ?></p>
    <?php } ?>

</body>
</html>