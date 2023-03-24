<?php
    session_start();
    $to = "alex_kasian2002@mail.ru";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mes = "Имя: $name \nE-mail: $email \nText: $message";

    $send = mail($to, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
    
    if ($send == 'true'){
        $_SESSION['message'] = "Сообщение успешно отправлено!";
        header('Location: ../contacts.php');
    } else {
        echo "Ой, что-то пошло не так";
    }
?>