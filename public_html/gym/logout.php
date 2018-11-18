<?php
 session_start();
 //echo $_SESSION['gn'];
 if (!isset($_SESSION['gn'])) {
  header('Location: Gym.html');
 } else if(isset($_SESSION['user'])!="") {
  header('Location: Gym.html');
 }
 else if (isset($_GET['logout'])) {
  unset($_SESSION['gn']);
  session_unset();
  session_destroy();
  header('Location: Gym.html');
  exit;
 }
 ?>