<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "sip_db");
if (!$_SESSION['user']) {
    header('Location: ../index.php');
}

$exam1 = mysqli_query($connect, 'SELECT `exam`, `date` FROM `exam_dates` WHERE id="1"');
$result_exam1 = mysqli_fetch_array($exam1);
$exam2 = mysqli_query($connect, 'SELECT `exam`, `date` FROM `exam_dates` WHERE id="2"');
$result_exam2 = mysqli_fetch_array($exam2);
$exam3 = mysqli_query($connect, 'SELECT `exam`, `date` FROM `exam_dates` WHERE id="3"');
$result_exam3 = mysqli_fetch_array($exam3);
$exam4 = mysqli_query($connect, 'SELECT `exam`, `date` FROM `exam_dates` WHERE id="4"');
$result_exam4 = mysqli_fetch_array($exam4);
$exam5 = mysqli_query($connect, 'SELECT `exam`, `date` FROM `exam_dates` WHERE id="5"');
$result_exam5 = mysqli_fetch_array($exam5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="css/main-page.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/exams-page.css">
    <title>Расписание занятий</title>
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
        <div class="dash-content-up">
            <table class="table-fill">
                <thead>
                    <tr>
                        <th colspan="6" class="schedule-week">Расписание ближайших экзаменов</th>
                    </tr>
                    <tr>
                        <th colspan="5" class="text-left">Экзамен</th>
                        <th class="text-left">Дата</th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                    <tr>
                        <td class="text-left">1</td>
                        <td colspan="4" class="text-left"><?= $result_exam1['exam'] ?>
                        </td>
                        <td class="text-left"><?= $result_exam1['date'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left">2</td>
                        <td colspan="4" class="text-left"><?= $result_exam2['exam'] ?>
                        </td>
                        <td class="text-left"><?= $result_exam2['date'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left">3</td>
                        <td colspan="4" class="text-left"><?= $result_exam3['exam'] ?>
                        </td>
                        <td class="text-left"><?= $result_exam3['date'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left">4</td>
                        <td colspan="4" class="text-left"><?= $result_exam4['exam'] ?>
                        </td>
                        <td class="text-left"><?= $result_exam4['date'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left">5</td>
                        <td colspan="4" class="text-left"><?= $result_exam5['exam'] ?>
                        </td>
                        <td class="text-left"><?= $result_exam5['date'] ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="container">
                <div class="heading">Пояснение</div>
                <div class="content">
                    <input type="radio" checked id="home" name="slider" />
                    <input type="radio" id="chat" name="slider" />
                    <input type="radio" id="user" name="slider" />
                    <input type="radio" id="info" name="slider" />
                    <div class="list">
                        <label for="home" class="home">
                            <span class="icon"><i class="uil uil-clipboard"></i></span>
                            <span class="title">Курсовая работа</span>
                        </label>
                        <label for="chat" class="chat">
                            <span class="icon"><i class="uil uil-server-network-alt"></i></span>
                            <span class="title">Практика</span>
                        </label>
                        <label for="user" class="user">
                            <span class="icon"><i class="uil uil-check"></i></span>
                            <span class="title">Демо-экзамен</span>
                        </label>
                        <label for="info" class="info">
                            <span class="icon"><i class="uil uil-arrow"></i></span>
                            <span class="title">Дипломная работа</span>
                        </label>
                        <div class="slider"></div>
                    </div>
                    <div class="text-content">
                        <div class="home text">
                            <div class="title">Курсовая работа</div>
                            <p>
                                Дата предзащиты курсовой работы: <b>10.03.23</b>.<br>
                                Дата защиты курсовой работы: <b>21.03.23</b>.<br>
                                Курсовая работа – это самостоятельное,
                                письменное, научное исследование студента,
                                разбор волнующих вопросов по выбранной теме и выведенный ответ на них.
                                Написание работы осуществляется под надзором научного руководителя.
                                Курсовая – это подведение итога в изучении определенной дисциплины.<br>
                                Научный руководитель: <b>Павлов Александр Викторович</b>.
                            </p>
                        </div>

                        <div class="chat text">
                            <div class="title">Производственная практика</div>
                            <p>
                                Дата производственной практики: <b>конец марта - начало апреля 2023</b>.<br>
                                Производственная практика - это практическая часть учебного процесса подготовки квалифицированных рабочих и специалистов,
                                проходящая, как правило, на различных предприятиях в условиях реального производства.
                                Является заключительной частью учебной практики, проходящей в учебном заведении.
                                <br>
                            </p>
                        </div>

                        <div class="user text">
                            <div class="title">Денмонстрационный экзамен WorldSkills</div>
                            <p>
                                Дата демоэкзамена: <b>конец мая - начало июня 2023</b>.<br>
                                Демонстрационный экзамен — новая форма проверки знаний обучающихся,
                                разработанная Агентством WorldSkills Russia. Демоэкзамен проводится с целью определения у
                                студентов и выпускников уровня знаний, навыков и умений, позволяющих вести профессиональную
                            </p>
                        </div>

                        <div class="info text">
                            <div class="title">Дипломная работа</div>
                            <p>
                                Дата дипломной работы: <b>конец июня 2023</b>.<br>
                                Дипломная работа(дипломный проект) — один из видов выпускной квалификационной работы (ВКР) —
                                самостоятельная итоговая творческая работа студентов, выполняемая ими на последнем, выпускном курсе.
                                Дипломная работа предполагает достаточную теоретическую разработку темы с анализом экспериментов,
                                наблюдений, литературных и др. источников по исследуемому вопросу.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Авторские права &copy;2023 Касиан Александр</p>
        </div>
    </section>
    <script src="js/main-page.js"></script>
</body>

</html>