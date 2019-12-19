<?php
if (isset($_GET['action']) and $_GET['action']=='logout'){
if(!isset($_SESSION)){session_start();};
unset($_SESSION['id']);
header('Location:index.php');
exit();
}
?>