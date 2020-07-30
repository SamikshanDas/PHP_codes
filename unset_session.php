<?php
//unsetting session
session_start();
unset($_SESSION['name']);

// or if you want to unset all the session variables at once
session_destroy();
?>