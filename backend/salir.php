<?php
session_start();

// Destruir la sesión
session_destroy();

header('Location: ../loginuser.html');
exit;
?>
