<?php
    session_start();
    require_once 'connect.php';
    $post_id = $_GET['id'];
    $post = mysqli_query($connect, "SELECT * FROM post WHERE id = $post_id ");
    $post = mysqli_fetch_assoc($post);
?>
<!DOCTYPE html>
<html>
    <head>
	<title>Forum</title>
    <meta name="author" content="Gleb Chirkov">
    <meta charset="utf-8">
        <link rel="shortcut icon" href="img/label.ico" type="image/x-icon">
        <link rel = "stylesheet" href="app/css/design7.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    <h1>Update post</h1>
    <div class ="gl">
        <div class="form">
            <form action="updatepost.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$post['id']?>">
                <label>Login:</label><br>
                <input type="text" class="login" name ="login" value="<?=$post['login']?>"><br>
                <textarea name="post"><?=$post['text']?></textarea>
                <input type="file" Value="Изображение" name="img" style="margin: 10px;">
                <br>
                <input type="Submit" Value="Изменить" class="button">
                <input type="reset" Value="Очистить" class="button">
            </form>
        </div>
    </div>
</body>
</html>
