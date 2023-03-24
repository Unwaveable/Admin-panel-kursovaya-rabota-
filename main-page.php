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
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/to-do.css">
    <title>Главная</title>
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
                <div class="card">
                    <div class="header">
                        <div class="main">
                            <div class="image">
                                <div class="hover">
                                    <img class="user-img" src="<?= $_SESSION['user']['avatar'] ?>" />
                                </div>
                            </div>
                            <h3 class="name"><?= $_SESSION['user']['full_name'] ?></h3>
                            <h3 class="sub-name"><?= $_SESSION['user']['login'] ?></h3>
                            <h3 class="student-status">Студент СИП 313/20</h3>
                        </div>
                    </div>
                    <div class="content">
                        <div class="left">
                            <div class="about-container">
                                <h3 class="title">Профиль пользователя</h3>
                                <p class="text"></p>
                            </div>
                            <div class="buttons-wrap">
                                <div class="follow-wrap">
                                    <a href="includes/logout.php" class="follow">Выйти</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app">
                    <section class="greeting">
                        <h2 class="title">
                            Привет, <input type="text" id="name" placeholder=<?= $_SESSION['user']['login'] ?>>
                        </h2>
                        <h2 class="title">Это планировщик задач</h2>
                    </section>
                    <section class="create-todo">
                        <h3>Добавьте задачу</h3>
                        <form id="new-todo-form">
                            <h4>Что вам нужно сделать?</h4>
                            <input type="text" placeholder="Например, поспать" name="content" id="content" />

                            <h4>Выберите категорию</h4>
                            <div class="options">
                                <label>
                                    <input type="radio" name="category" id="category1" value="business" />
                                    <span class="bubble business"></span>
                                    <div>Учебное</div>
                                </label>
                                <label>
                                    <input type="radio" name="category" id="category2" value="personal" />
                                    <span class="bubble personal"></span>
                                    <div>Личное</div>
                                </label>
                            </div>

                            <input type="submit" value="Добавить задачу" />
                        </form>
                    </section>
                    <section class="todo-list">
                        <h3>Ваши задачи</h3>
                        <div class="list" id="todo-list"></div>
                    </section>
                </div>
            </div>
            <div class="overview">
                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-book-reader"></i>
                        <span class="text">Количество студентов</span>
                        <span class="number">24</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-grin"></i>
                        <span class="text">Дней до выпуска</span>
                        <span class="number">~110</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Авторские права &copy;2023 Касиан Александр</p>
        </div>
    </section>
    <script src="js/main-page.js"></script>
    <script src="js/to-do.js"></script>
</body>

</html>