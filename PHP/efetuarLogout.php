<?php
session_start();

unset($_SESSION['nivel']);

header("Location: ../loginShieldForm.php");

?>