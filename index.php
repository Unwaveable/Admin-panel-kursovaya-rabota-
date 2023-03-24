<?php
session_start();
if ($_SESSION['user']) {
    header('Location: ../main-page.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/authorization.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Авторизация</title>
</head>

<body>
    <!-- ФОРМА АВТОРИЗАЦИИ -->

    <section class="container forms">
        <div class="form login h570">
            <p class="sip-description">ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ПРОФЕССИОНАЛЬНОЕ
                ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ГОРОДА МОСКВЫ
                «Колледж современных технологий
                имени Героя Советского Союза М.Ф. Панова»
            </p>
            <div class="form-content">

                <header>
                    <p class="sip-subtitle">СИП 313/20 - 343/20</p>
                    <p class="sip-title">Авторизация</p>
                </header>

                <!-- ПОЛЯ АВТОРИЗАЦИИ -->

                <form action="includes/signin.php" method="post">
                    <div class="field input-field">
                        <input type="text" name="login" placeholder="Логин" class="input">
                    </div>
                    <div class="field input-field">
                        <input type="password" name="password" placeholder="Пароль" class="password">
                    </div>
                    <div class="field button-field">
                        <button type="submit" class="login-btn">Войти</button>
                    </div>
                    
                </form>

            </div>
            <div class="line"></div>
            <div class="form-link">
                <span>У вас нет аккаунта? <a href="/registration-form.php" class="link signup-link">Зарегистрироваться</a></span>
            </div>
            <!--СООБЩЕНИЕ ОБ УСПЕШНОЙ РЕГИСТРАЦИИ -->
            <?php 
                if ($_SESSION['message']){
                    echo '<div class="form-link-pswd">' . $_SESSION['message'] . '</div>';
                }
                unset($_SESSION['message']);
            ?>
        </div>
    </section>
</body>

</html>