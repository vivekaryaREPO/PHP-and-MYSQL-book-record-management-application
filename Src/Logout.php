<?php 
session_start();
session_destroy();
header('location:http://localhost:2233/BRM/Login.html');
?>