<?php 
session_start();
echo "You have been logged out<br>";
    $_SESSION =  [];
    session_destroy();
?>
<a href="login_form.php">Return to login</a>
