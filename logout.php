<?php
    session_unset();
    session_destroy();
    unset($_SESSION['username']);
    header('refresh:0;url=./?logout');
?>