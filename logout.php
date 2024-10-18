<?php
session_start();

// Eliminar todos los datos de la sesión
session_unset();
session_destroy();

header("Location: login.php");
exit();
?>
