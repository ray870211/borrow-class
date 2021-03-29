<?php
session_start();
unset($_SESSION["account"]);
unset($_SESSION["position"]);
header("Location:index.php");
// var_dump($_SESSION);s
