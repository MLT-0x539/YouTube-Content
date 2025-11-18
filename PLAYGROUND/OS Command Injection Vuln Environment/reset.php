<?php
 // resetting all session values 
 // redirecting to "UserCP.php" after session values are reset
    session_start();
    print_r($_SESSION);
    session_unset();
    session_destroy();
    header('Location: /UserCP.php');
    exit;
?>
