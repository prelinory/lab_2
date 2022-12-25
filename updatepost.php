<?php
    session_start();
    require_once 'connect.php';
    $id = $_POST['id'];
    $post = $_POST['post'];
    $login = $_POST['login'];
    $date = date(" H : i : s d - m - Y ");
    $path = 'uploads/'. time(). $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], $path);
    mysqli_query($connect, "UPDATE `post` SET
        `login` = '$login', `text` = '$post', `image` = '$path', `time` = '$date' WHERE `post`.`id` = '$id'");
    header('Location:index.php');
 ?>
