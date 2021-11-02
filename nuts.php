<?php 

require 'inc/head.php';

if(empty($_SESSION['login'])) 
{
  header('Location: http://localhost:8000/login.php');
}

require 'inc/foot.php'; 