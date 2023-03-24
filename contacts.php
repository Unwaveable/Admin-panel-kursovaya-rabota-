<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="css/main-page.css">
    <link rel="stylesheet" href="css/contacts-page.css">
    <title>Наши контакты</title>
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <a href="main-page.php"><img src="images/programming.png"></a>
            </div>
            <a href="main-page.php"><span class="logo_name">СИП 313/20</span></a>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="main-page.php">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Главная</span>
                    </a></li>
                <li><a href="schedule-page.php">
                        <i class="uil uil-schedule"></i>
                        <span class="link-name">Расписание</span>
                    </a></li>
                <li><a href="exams.php">
                        <i class="uil uil-clipboard-notes"></i>
                        <span class="link-name">Экзамены</span>
                    </a></li>
                <li><a href="contacts.php">
                        <i class="uil uil-users-alt"></i>
                        <span class="link-name">Контакты</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li><a href="includes/logout.php">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Выйти</span>
                    </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Тёмная тема</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div class="user-fullname">
                <a href="main-page.php"><span><?= $_SESSION['user']['full_name'] ?></span></a>
                <a href="main-page.php"><img class="user-img-top" src="<?= $_SESSION['user']['avatar'] ?>" /></a>
            </div>
        </div>

        <div class="dash-content">
            <div class="container">
                <div class="contact-box">
                    <div class="left"></div>
                    <div class="right">
                        <h2 class="about-us">Свяжитесь с нами</h2>
                        <form action="includes/contacting.php" method="post">
                            <input type="text" name="name" class="field" placeholder="Ваше имя">
                            <input type="text" name="email" class="field" placeholder="Ваш email">
                            <textarea name="message" placeholder="Напишите пожелания по улучшению сайта или задайте любой интересующий вас вопрос" class="field"></textarea>
                            <input type="submit" class="btn" value="Отправить">
                        </form>
                        <?php
                        if ($_SESSION['message']) {
                            echo '<div class="about-us-message">' . $_SESSION['message'] . '</div>';
                        }
                        unset($_SESSION['message']);
                        ?>
                    </div>

                </div>
                <div class="contact-box-more">
                    <div class="contact-element">
                        <i class="uil uil-envelope-edit"></i>
                        <span class="contact-text">alex_kasian2002@mail.ru</span>
                    </div>
                    <div class="contact-element">
                        <i class="uil uil-telegram-alt"></i>
                        <span class="contact-text">@unwaveable</span>
                    </div>
                    <div class="contact-element">
                        <i class="uil uil-phone"></i>
                        <span class="contact-text">+79153938932</span>
                    </div>
                </div>
                <div class="map">
                    <h2 class="adress">Адрес колледжа</h2>
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8124df3be381bc84737ebf3e3e0188be26de5f0e3e6e12db94d6813b45825180&amp;width=1090&amp;height=350&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Авторские права &copy;2023 Касиан Александр</p>
        </div>
    </section>

    <script src="js/main-page.js"></script>
</body>