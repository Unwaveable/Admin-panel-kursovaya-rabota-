<?php

    $connect = mysqli_connect("localhost", "root", "", "sip_db");

    if (!$connect) {
        die('Ошибка подключения к базе данных');
    }