<?php

session_start();

unset($_SESSION['usuario']);
unset($_SESSION['email']);



$teste = 'teste';

header('Location: index.php');

?>