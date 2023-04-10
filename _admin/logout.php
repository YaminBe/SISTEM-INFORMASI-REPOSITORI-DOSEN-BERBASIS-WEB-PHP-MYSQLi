<?php
session_start();
unset($_SESSION['login-admin']); 
echo "<script>window.location='../';</script>";


?>