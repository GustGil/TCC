<?php
session_start();
unset($_SESSION["Email"]);
header("location: ../pagina_init/index.php")
?>