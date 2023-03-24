<?php
session_start();
if ($_SESSION['user']){
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
    <title>Регистрация</title>
</head>

<body>

    <!-- ФОРМА РЕГИСТРАЦИИ -->

    <section class="container forms">
        <div class="form login">
            <p class="sip-description">ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ПРОФЕССИОНАЛЬНОЕ
                ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ГОРОДА МОСКВЫ
                «Колледж современных технологий
                имени Героя Советского Союза М.Ф. Панова»
            </p>
            <div class="form-content">
                <header>
                    <p class="sip-subtitle">СИП 313/20 - 343/20</p>
                    <p class="sip-title">Регистрация</p>
                </header>

                <!-- ПОЛЯ РЕГИСТРАЦИИ -->

                <form action="includes/signup.php" method="post" enctype="multipart/form-data">
                    <div class="field input-field">
                        <input type="text" name="full_name" placeholder="Фамилия и имя" class="input">
                    </div>
                    <div class="field input-field">
                        <input type="text" name="login" placeholder="Логин" class="input">
                    </div>
                    <div class="field input-field">
                        <input type="email" name="email" placeholder="Email" class="input">
                    </div>
                    <div class="field__wrapper">
                        <input name="avatar" type="file" id="field__file-2" class="field field__file" multiple>
                        <label class="field__file-wrapper" for="field__file-2">
                            <div class="field__file-fake">Изображение профиля</div>
                            <div class="field__file-button">Выбрать</div>
                        </label>
                    </div>
                    <div class="field input-field">
                        <input type="password" name="password" placeholder="Пароль" class="input" class="password">
                    </div>
                    <div class="field button-field">
                        <button type="submit">Зарегистрироваться</button>
                    </div>
                    <div class="form-link-pswd">
                        
                    </div>
                </form>
            </div>

            <div class="line"></div>
            <div class="form-link">
                <span>Уже есть аккаунт? <a href="/index.php" class="link signup-link">Войти</a></span>
            </div>

            
        </div>

    </section>

    <!--JS Скрипты -->

    <script src="js/choosing-image.js"></script>


</body>

</html>