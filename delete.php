<?php
    session_start();
    require_once 'connect.php';
    $id = $_GET['id'];
    mysqli_query($connect, "DELETE FROM `post` WHERE `post`.`id` = '$id'");
    header('Location:index.php');
 ?>
