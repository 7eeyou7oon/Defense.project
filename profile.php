<?php

session_start();

// Подключение к базе данных
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "bd";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}



// Получение данных из формы
$name = $_POST['имя'];
$full_name = $_POST['фамилия'];
$email = $_POST['почта'];
$telephone = $_POST['телефон'];
$message = $_POST['сообщение'];

// Вставка данных в базу данных
$sql = "INSERT INTO contacts (name, full_name, email, telephone, message) VALUES ('$name', '$full_name', '$email', '$telephone' , '$message')";



if (mysqli_query($conn, $sql)) {
    $successMessage = "Вы успешно отправили письмо!";
} else {
    $errorMessage = "Ошибка: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/img/favicon2.ico" type="image/x-icon">
    <title>Сервисный центр Докторноутбукoof</title>
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<header class="header">
    <div class="container">
        <div class="header__wrapper">
            <div class="header__block">
                <a href="/" class="header__logo">
                    <img src="img/logo 1.png" alt="Сервисный центр Докторноутбукoof">
                </a>
            </div>
            <nav class="nav">
                <a href="#service" class="nav__link active">Наши услуги</a>
                <a href="#price" class="nav__link">Цены</a>
                <a href="#abouts" class="nav__link">О нас</a>
                <a href="#contact" class="nav__link">Контакты</a>
            </nav>
            <div class="header__block">
                <div class="header__button">
                    <a href="/index.php" class="header__button-link login">Войти</a>
                    <a href="/index.php#signupButton" class="header__button-link register">Регистрация</a>
                </div>
            </div>
        </div>
    </div>
</header>


<section class="intro" >
    <div class="container">
        <div class="intro__content">
            <div class="intro__block">
            <h1 class="intro__title">
                Быстрый и надежный ремонт компьютеров и ноутбуков
            </h1>

                <a href="#abouts" class="btn">
                    больше
                </a>
            </div>
        </div>
    </div>
</section>

<section class="info">
    <div class="container">
        <div class="wrapper">
            <div class="block">
                <div class="info__item">
                    <div class="info__img">
                        <img src="img/phone.svg" alt="Бесплатный звонок">
                    </div>
                    <a href="tel:87182222222">
                    <h4 class="info__title">
                        Позвонить 22-22-22
                    </h4>
                    </a>
                    <p class="info__text">
                        Бесплатный звонок нам
                    </p>
                </div>
            </div>

            <div class="block">
                <div class="info__item">
                    <div class="info__img">
                        <img src="img/calendar.svg" alt="Оставить заявку">
                    </div>
                    <a href="#contact">
                    <h4 class="info__title">
                        Оставить заявку
                    </h4>
                    </a>
                    <p class="info__text">
                        Бесплатная диагностика
                    </p>
                </div>
            </div>

<div class="block">
    <div class="info__item">
        <a href="https://2gis.kz/pavlodar/firm/70000001018639188?m=76.94133%2C52.291726%2F19.19" target="_blank" class="geo__link">
            <div class="info__img">
                <img src="img/pin.svg" alt="Геолокация">
            </div>
            <h4 class="info__title">
                Мы на карте
            </h4>
            </a>
            <p class="info__text">
                Г.Павлодар, Ак.Сатпаева 27
            </p>
    </div>
</div>

        </div>
            </div>
</section>


<section class="section">
    <a id='service'>
    <div class="container">
        <h2 class="block__title">
            СЕРВИС
        </h2>
        <a href="#price" class="block__link">
            ПОСМОТРЕТЬ ВСЕ УСЛУГИ
        </a>

        <div class="wrapper">
            <div class="block">
                <a href="#" class="services__item">
                    <div class="services__content" style="background-image:url('img/diagnostic.jpg');">
                        <div class="services__content-item">
                            <div class="services__img">
                                <img src="img/plus.svg" alt="">
                            </div>
                            <p class="services__text">
                                Наша диагностика обеспечивает точность и надежность
                            </p>
                        </div>
                    </div>
                    <h3 class="services__title">
                        Диагностика 
                    </h3>
                </a>
            </div>

            <div class="block">
                <a href="#" class="services__item">
                    <div class="services__content" style="background-image:url('img/tires.jpg');">
                        <div class="services__content-item">
                            <div class="services__img">
                                <img src="img/plus.svg" alt="">
                            </div>
                            <p class="services__text">
                                Наш сервисный центр предлагает профессиональную чистку ноутбуков и компьютеров
                            </p>
                        </div>
                    </div>
                    <h3 class="services__title">
                        Чистка
                    </h3>
                </a>
            </div>

            <div class="block">
                <a href="#" class="services__item">
                    <div class="services__content" style="background-image:url('img/engine.jpg');">
                        <div class="services__content-item">
                            <div class="services__img">
                                <img src="img/plus.svg" alt="">
                            </div>
                            <p class="services__text">
                                Наши опытные техники проводят качественный ремонт и замену неисправных компонентов
                            </p>
                        </div>
                    </div>
                    <h3 class="services__title">
                        Ремонт
                    </h3>
                </a>
            </div>

        </div>

    </div>
    </a>

</section>

<section class="section about">
    <a id='price'>
    <div class="container">
        <div class="about__wrapper">
            <div class="about__block">
            <div class="">
                <div class="title_portable">
        <h2 class="block__title text-white">Прайс-лист цен на малую часть наших услуг</h2>
        </div>
        <table class="table" style="display: flex;
    align-content: stretch;
    justify-content: center;">
            <tr>
                <th>Услуга</th>
                <th>Цена (Тг.)</th>
            </tr>
            <tr>
                <td>TRADE-IN</td>

                <td>Цена не указана</td>
            </tr>
            <tr>
                <td>Ремонт залитых ноутбуков</td>
                <td>От 10000 тг.</td>
            </tr>
            <tr>
                <td>Зарядные устройства для ноутбуков</td>
                <td>От 6000 тг.</td>
            </tr>
            <tr>
                <td>Замена разбитых экранов ноутбуков</td>
                <td>От 25000 тг.</td>
            </tr>
            <tr>
                <td>Ремонт и замена клавиатур ноутбуков</td>
                <td>От 10000 тг.</td>
            </tr>
            <tr>
                <td>Замена оперативной памяти</td>
                <td>От 7000 тг.</td>
            </tr>
            <tr>
                <td>Аккумуляторы для ноутбуков</td>
                <td>От 6000 тг.</td>
            </tr>
            <tr>
                <td>Ноутбуки</td>
                <td>От 39000 тг.</td>
            </tr>
            <tr>
                <td>Обмен ноутбуков</td>
                <td>От 20000 тг.</td>
            </tr>
            <tr>
                <td>Заправка и расчиповка принтеров</td>
                <td>1500 тг.</td>
            </tr>
            <tr>
                <td>Принтеры</td>
                <td>От 25000 тг.</td>
            </tr>
            <tr>
                <td>Мониторы</td>
                <td>От 5000 тг.</td>
            </tr>
            <tr>
                <td>Системные блоки</td>
                <td>От 30000 тг.</td>
            </tr>
        </table>
    </div>
                <a href="#abouts" class="about__link">
                    БОЛЬШЕ О НАС   
                </a>
            </div>
        </div>
    </div>
</a>

</section>

<section class="section process">
    <a id='abouts'>
    <div class="container">
        <h2 class="process__title">БЫСТРО И ПРОСТО</h2>
        <h3 class="process__subtitle">наш рабочий процесс</h3>

        <div class="wrapper">
            <div class="block">
                <div class="process__item">
                    <h4 class="info__title">01.Прием и диагностика</h4>
                    <p class="info__text">
                        Мы проводим детальный прием и записываем все ваши заявки и особые требования.
                    </p>
                </div>
            </div>
            <div class="block">
                <div class="process__item">
                    <h4 class="info__title">02. Ремонт и замена компонентов
                    </h4>
                    <p class="info__text">
                        Проводим качественный ремонт и замену неисправных компонентов, используя только высококачественные запчасти.
                    </p>
                </div>
            </div>
            <div class="block">
               <div class="process__item">
                   <h4 class="info__title">03. Тестирование и качество</h4>
                   <p class="info__text">
                    Проверяем работу аппаратных и программных компонентов, а также производительность системы.
                   </p>
               </div>
            </div>
        </div>
    </div>
</a>
</section>



<section class="contacts">
    <a id='contact'>
    <div class="container">
        <h2 class="block__title text-white">
            Связаться с нами
        </h2>
        <form class="contacts__form" action="" method="POST">
            <div class="form__row">
                <div class="form__group">
                    <input type="text" class="input" name="имя" placeholder=" " required >
                    <label for="" class="label">
                        Имя
                    </label>
                </div>
                <div class="form__group">
                    <input type="text" class="input" name="фамилия" placeholder=" " required >
                    <label for="" class="label">
                        Фамилия
                    </label>
                </div>
            </div>

            <div class="form__row">
                <div class="form__group">
                    <input type="email" class="input" name="почта" placeholder=" " required>
                    <label for="" class="label">
                        Почта
                    </label>
                </div>
                <div class="form__group">
                    <input type="tel" class="input" name="телефон" placeholder=" " required>
                    <label for="" class="label">
                        Телефон
                    </label>
                </div>
            </div>
            <div class="form__row">
                <div class="form__group">
                    <textarea class="textarea" name="сообщение" placeholder="можете указать марку и модель ноутбука"></textarea>
                    <label for="" class="label">
                        Сообщение
                    </label>
                </div>
            </div>
            <button class="btn text-upper" type="submit" name="отправить">
                Отправить
            </button>
                 <?php 
             if (isset($_POST['отправить'])) { 
                ?>
             <p><?php echo $successMessage; ?></p>
         <?php } elseif (isset($errorMessage)) { ?>
             <p><?php echo $errorMessage; ?></p>
         <?php } ?> 

         <?php
        $to = "$email";
        $subject = 'Услуга о починке';
        $comment = "$name\r\n";
        $comment .= "$full_name\r\n";
        $comment .= "$email\r\n";
        $comment .= "$telephone\r\n";
        $comment .= "$message\r\n";
        mail($to, $subject, $comment);
         ?>
        </form>
    </div>
    </a>
</section>


<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <p class="copyright">
                © 2023 Сервисный центр ДокторНоутбукоff
            </p>
            <div class="footer__soc">
                <a href="https://wa.me/77010530500" class="footer__soc-link">
                    <img src="img/whatsapp-monochrome-icon 1.svg" alt="">
                </a>
                <a href="https://m.facebook.com/photo.php?fbid=411918304692623&set=a.172038035347319&type=3" class="footer__soc-link">
                    <img src="img/facebook.svg" alt="">
                </a>
                <a href="https://www.instagram.com/doctor_noutbukoff/" target="_blank" class="footer__soc-link">
                    <img src="img/instagram.svg" alt="">
                </a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>