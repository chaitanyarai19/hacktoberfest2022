<?php
    session_start();
    session_reset();
    session_unset();
    header("location: index.php");
?>