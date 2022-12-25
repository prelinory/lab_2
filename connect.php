<?php
    $connect = mysqli_connect('localhost', 'root', '', 'posts');
    if (!$connect) {
        die('Error connect to DataBase');
    }
	