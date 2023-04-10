<?php
session_start();
unset($_SESSION['login']); 
echo "<script>window.location='../';</script>";


?>