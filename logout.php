<?php
    include 'connect.php';
    session_start();
    session_destroy();
    ob_flush();
    ob_clean();
    header("refresh:0;index.php");
?>