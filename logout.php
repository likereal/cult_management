<?php
session_start();
if(isset($_SESSION['email']))
{
  unset($_SESSION['email']);
  unset($_SESSION['mid']);
  unset($_SESSION['mname']);
}

header("Location: main.html");
?>