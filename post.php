<?php
    session_start();
    require_once 'connect.php';
    $post = $_POST['post'];
    $login = $_POST['login'];
    $date = date(" H : i : s d - m - Y ");
    $path = 'uploads/'. time(). $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], $path);

    if(!move_uploaded_file($_FILES['img']['tmp_name'], $path)){
        echo "Ошибка загрузки файла";
    }
    mysqli_query($connect, "INSERT INTO `post`(`id`, `login`, `text`, `time`, `image`)
                VALUES(NULL, '$login', '".addslashes($post)."', '$date', '$path')");
    header('Location:index.php');
 ?>
