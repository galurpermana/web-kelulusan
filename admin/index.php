<?php 
session_start();
if (!isset($_SESSION['login'])) {
    header("location:html/");
}elseif (isset($_SESSION['login'])) {
    header("location:html/");
}

?>