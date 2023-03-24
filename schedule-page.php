<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "sip_db");
if (!$_SESSION['user']) {
    header('Location: ../index.php');
}

$day1_1 = mysqli_query($connect, 'SELECT `para`, `place` FROM `schedule_dates` WHERE id="1"');
$result_day1_1 = mysqli_fetch_array($day1_1);

$day1_2 = mysqli_query($connect, 'SELECT `para`, `place` FROM `schedule_dates` WHERE id="2"');
$result_day1_2 = mysqli_fetch_array($day1_2);

$day1_3 = mysqli_query($connect, 'SELECT `para`, `place` FROM `schedule_dates` WHERE id="3"');
$result_day1_3 = mysqli_fetch_array($day1_3);

$day2_1 = mysqli_query($connect, 'SELECT `para`, `place` FROM `schedule_dates` WHERE id="4"');
$result_day2_1 = mysqli_fetch_array($day2_1);

$day2_2 = mysqli_query($connect, 'SELECT `para`, `place` FROM `schedule_dates` WHERE id="5"');
$result_day2_2 = mysqli_fetch_array($day2_2);

$day2_3 = mysqli_query($connect, 'SELECT `para`, `place` FROM `schedule_dates` WHERE id="6"');
$result_day2_3 = mysqli_fetch_array($day2_3);

$day3_1 = mysqli_query($connect, 'SELECT `para`, `place` FROM `schedule_dates` WHERE id="7"');
$result_day3_1 = mysqli_fetch_array($day3_1);

$day3_2 = mysqli_query($connect, 'SELECT `para`, `place` FROM `schedule_dates` WHERE id="8"');
$result_day3_2 = mysqli_fetch_array($day3_2);

$day3_3 = mysqli_query($connect, 'SELECT `para`, `place` FROM `schedule_dates` WHERE id="9"');
$result_day3_3 = mysqli_fetch_array($day3_3);

$day3_4 = mysqli_query($connect, 'SELECT `para`, `place` FROM `schedule_dates` WHERE id="10"');
$result_day3_4 = mysqli_fetch_array($day3_4);

$day4_1 = mysqli_query($connect, 'SELECT `para`, `place` FROM `schedule_dates` WHERE id="11"');
$result_day4_1 = mysqli_fetch_array($day4_1);

$day4_2 = mysqli_query($connect, 'SELECT `para`, `place` FROM `schedule_dates` WHERE id="12"');
$result_day4_2 = mysqli_fetch_array($day4_2);

$day4_3 = mysqli_query($connect, 'SELECT `para`, `place` FROM `schedule_dates` WHERE id="13"');
$result_day4_3 = mysqli_fetch_array($day4_3);

$day4_4 = mysqli_query($connect, 'SELECT `para`, `place` FROM `schedule_dates` WHERE id="14"');
$result_day4_4 = mysqli_fetch_array($day4_4);

$day5_1 = mysqli_query($connect, 'SELECT `para`, `place` FROM `schedule_dates` WHERE id="15"');
$result_day5_1 = mysqli_fetch_array($day5_1);

$day5_2 = mysqli_query($connect, 'SELECT `para`, `place` FROM `schedule_dates` WHERE id="16"');
$result_day5_2 = mysqli_fetch_array($day5_2);

$day5_3 = mysqli_query($connect, 'SELECT `para`, `place` FROM `schedule_dates` WHERE id="17"');
$result_day5_3 = mysqli_fetch_array($day5_3);

$day5_4 = mysqli_query($connect, 'SELECT `para`, `place` FROM `schedule_dates` WHERE id="18"');
$result_day5_4 = mysqli_fetch_array($day5_4);

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
                        <th colspan="6" class="schedule-week">Верхняя неделя</th>
                    </tr>
                    <tr>
                        <th colspan="2" class="text-left">Понедельник</th>
                        <th class="text-left">Вторник</th>
                        <th class="text-left">Среда</th>
                        <th class="text-left">Четверг</th>
                        <th class="text-left">Пятница</th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                    <tr>
                        <td class="text-left">1</td>
                        <td class="text-left"><?= $result_day1_1['para'] ?> <br><b><?= $result_day1_1['place'] ?></b>
                        </td>
                        <td class="text-left"></td>
                        <td class="text-left"><?= $result_day3_1['para'] ?> <br><b><?= $result_day3_1['place'] ?></b>
                        </td>
                        <td class="text-left"><?= $result_day4_1['para'] ?> <br><b><?= $result_day4_1['place'] ?></b>
                        </td>
                        <td class="text-left"><?= $result_day5_1['para'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left">2</td>
                        <td class="text-left"><?= $result_day1_2['para'] ?> <br><b><?= $result_day1_2['place'] ?></b>
                        </td>
                        <td class="text-left"><?= $result_day2_1['para'] ?> <br><b><?= $result_day2_1['place'] ?></b>
                        </td>
                        <td class="text-left"><?= $result_day3_2['para'] ?> <br><b><?= $result_day3_2['place'] ?></b>

                        </td>
                        <td class="text-left"><?= $result_day4_2['para'] ?> <br><b><?= $result_day4_2['place'] ?></b>

                        </td>
                        <td class="text-left"><?= $result_day5_2['para'] ?> <br><b><?= $result_day5_2['place'] ?></b>

                        </td>
                    </tr>
                    <tr>
                        <td class="text-left">3</td>
                        <td class="text-left"><?= $result_day1_3['para'] ?> <br><b><?= $result_day1_3['place'] ?></b>
                        </td>
                        <td class="text-left"><?= $result_day2_2['para'] ?> <br><b><?= $result_day2_2['place'] ?></b>
                        </td>
                        <td class="text-left"><?= $result_day3_3['para'] ?> <br><b><?= $result_day3_3['place'] ?></b>
                        </td>
                        <td class="text-left"><?= $result_day4_3['para'] ?> <br><b><?= $result_day4_3['place'] ?></b>

                        </td>
                        <td class="text-left"><?= $result_day5_3['para'] ?> <br><b><?= $result_day5_3['place'] ?></b>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left">4</td>
                        <td class="text-left"></td>
                        <td class="text-left"><?= $result_day2_3['para'] ?> <br><b><?= $result_day2_3['place'] ?></b>
                        </td>
                        <td class="text-left"><?= $result_day3_4['para'] ?> <br><b><?= $result_day3_4['place'] ?></b>
                        </td>
                        <td class="text-left"><?= $result_day4_4['para'] ?> <br><b><?= $result_day4_4['place'] ?></b>
                        </td>
                        <td class="text-left"><?= $result_day5_4['para'] ?> <br><b><?= $result_day5_4['place'] ?></b>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="dash-content-down">
            <table class="table-fill">
                <thead>
                    <tr>
                        <th colspan="6" class="schedule-week">Нижняя неделя</th>
                    </tr>
                    <tr>
                        <th colspan="2" class="text-left">Понедельник</th>
                        <th class="text-left">Вторник</th>
                        <th class="text-left">Среда</th>
                        <th class="text-left">Четверг</th>
                        <th class="text-left">Пятница</th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                    <tr>
                        <td class="text-left">1</td>
                        <td class="text-left">ОГСЭ.04 Иностранный язык в профессиональной деятельности <br><b>406П</b>
                        </td>
                        <td class="text-left"></td>
                        <td class="text-left">ОГСЭ.05 Физическая культура <br><b>C3</b>
                        </td>
                        <td class="text-left">МДК.05.03 Тестирование информационных систем <br><b>115П</b>
                        </td>
                        <td class="text-left">Самостоятельная работа
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left">2</td>
                        <td class="text-left">МДК.05.02 Разработка кода информационных систем <br><b>306П</b>
                        </td>
                        <td class="text-left">МДК.07.01 Управление и автоматизация баз данных <br><b>408П</b>
                        </td>
                        <td class="text-left">МДК.07.01 Управление и автоматизация баз данных <br><b>408П</b>

                        </td>
                        <td class="text-left">МДК.05.02 Разработка кода информационных систем <br><b>306П</b>

                        </td>
                        <td class="text-left">МДК.05.02 Разработка кода информационных систем <br><b>306П</b>

                        </td>
                    </tr>
                    <tr>
                        <td class="text-left">3</td>
                        <td class="text-left">МДК.07.01 Управление и автоматизация баз данных <br><b>408П</b>
                        </td>
                        <td class="text-left">МДК.07.02 Сертификация информационных систем <br><b>408П</b>
                        </td>
                        <td class="text-left">ОГСЭ.05 Физическая культура <br><b>СЗ</b>
                        </td>
                        <td class="text-left">ОГСЭ.04 Иностранный язык в профессиональной деятельности <br><b>406П</b>

                        </td>
                        <td class="text-left">МДК.05.01 Проектирование и дизайн информационных систем <br><b>311П</b>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left">4</td>
                        <td class="text-left"></td>
                        <td class="text-left">МДК.05.03 Тестирование информационных систем <br><b>115П</b>
                        </td>
                        <td class="text-left">МДК.05.03 Тестирование информационных систем <br><b>311П</b>
                        </td>
                        <td class="text-left">МДК.05.01 Проектирование и дизайн информационных систем <br><b>311П</b>
                        </td>
                        <td class="text-left">МДК.05.01 Проектирование и дизайн информационных систем <br><b>311П</b>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="footer-bottom">
            <p>Авторские права &copy;2023 Касиан Александр</p>
        </div>
    </section>
    <script src="js/main-page.js"></script>
</body>

</html>

<!-- <div class="title">
                    <i class="uil uil-calender"></i>
                    <span class="text">Расписание занятий</span>
                </div>  -->