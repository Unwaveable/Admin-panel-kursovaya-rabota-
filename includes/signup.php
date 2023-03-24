<?php
    session_start();
    require_once('connect.php');

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'],'../' . $path)){
        $_SESSION['message'] = "Ошибка загрузки изображения";
        header('Location: ../registration-form.php');
    }

    //Хэширование пароля
    $password = md5($password);

    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");

    $_SESSION['message'] = "Регистрация прошла успешно";
    header('Location: ../index.php');
?>

