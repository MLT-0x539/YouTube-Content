<?php
 // resetting all session values 
 // redirecting to "UserCP.php" after session values are reset
function reset() {
    session_start();
    print_r($_SESSION);
    session_unset();
    session_destroy();
    header('Location: /UserCP.php');
    exit;
}

function logout() {
    session_start();
    session_unset();
    unset($_SESSION);
    session_destroy();
    header('Location: /');
}

?>
