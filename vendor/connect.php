<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'BD');

    if (!$connect) {
        die('Error connect to DataBase');
    }
