<?php
    session_start();
    session_unset();
    session_destroy();
     $Message = urlencode("Logout successfully");
     header("Location:index.php?Message=".$Message);
     die;
?>