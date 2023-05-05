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