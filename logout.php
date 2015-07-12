
<?php
error_reporting(0);
   session_start();
unset($_SESSION['user']);
unset($_SESSION['type']);
echo "<script>parent.location.href='index.php';</script>";
?>