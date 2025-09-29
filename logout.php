<? 
    session_start();
    unset($_SESSION['user_auth']);
    session_unset();
    session_destroy();
?>
