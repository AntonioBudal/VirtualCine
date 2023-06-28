<?php
session_start(); 


$_SESSION = array();

header("location: ../telaInicial/novaTelaInicial.php")
session_destroy();

?>