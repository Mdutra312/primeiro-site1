<?php
header("Location: index.php");

$opcoesCookie = $_POST['opcoes'];

setcookie('opcoes',$opcoesCookie, time()+86400);

?>