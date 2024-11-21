<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel = "icon" href ="flyarystan-logo.png">
        <link rel="stylesheet" href="styles.css" />
        <title>FlyArystan</title>
        
    </head>
    <body>
        <nav>
            <div class="nav__logo"><img src="https://flyarystan.com/Assets/img/logo-new.png" alt="FlyArystan" title="FlyArystan"></div>
            <ul class="nav__links">
                <li class="link"><a href="#">Бронирование и управление</a></li>
                <li class="link"><a href="#">Информация</a></li>
                <li class="link"><a href="#">Помощь</a></li>
            </ul>   
            <div class="user">
                <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                <a href=""><i class="fa-solid fa-globe"></i></a>
                <a href=""><?php
                    require_once "database.php";
                    $last_id = $conn->insert_id;
                    $sql = "SELECT id,firstName, lastName FROM user ORDER BY id DESC LIMIT 1";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // Output data of the first (assuming user_id is unique)
                        while($row = $result->fetch_assoc()) {
                            echo $row["firstName"];
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
                </a>
            </div>
        </nav>
        <header class="header__container">
            <div class="slider-wrapper">
                <div class="slider">
                    <img id = "slide1" src="https://flyarystan.com/media/dgqcjxft/main_banner_ala-akx_ru.webp" alt="character">
                    <img id = "slide2" src="https://flyarystan.com/media/3ilhwerc/main_banner_ala-bom_ru-1.webp" alt="character">
                    <img id = "slide3" src="https://flyarystan.com/media/55hniom1/main_banner_nqz-ukk_ru.webp" alt="character">
                </div>
                <div class="slider-nav">
                    <a href="slide1"></a>
                    <a href="slide2"></a>
                    <a href="slide3"></a>
                </div>
            </div>
        </header>

        <section class="section__container booking__container">
            <div class="booking__nav">
                <span><a href="flyarystan.php">Билет</a></span>
                <span><a href="oneway.php" target="_blank">В одну сторону</a></span>
                <span>Багаж, место, питание</span>
                <span>Онлайн-регистрация</span>
            </div>
        <form>
            <div class="form__group">
                <span><i class="ri-map-pin-line"></i></span>
                    <div class="input__content">
                        <div class="input__group">
                            <input type="text" class="input-field" placeholder="Откуда">
                        </div>
                    </div>
            </div>
            <div class="form__group">
                <span><i class="ri-map-pin-line"></i></span>
                    <div class="input__content">
                        <div class="input__group">
                            <input type="text" class="input-field" placeholder="Куда">
                        </div>

                    </div>
            </div>
            <div class="form__group">
                <span><i class="ri-user-3-line"></i></span>
                    <div class="input__content">
                        <div class="input__group">
                            <input type="number" class="input-field" placeholder="Пассажиры">
                        </div>
                    </div>
            </div>
            <div class="form__group">
                <span><i class="ri-calendar-line"></i></span>
                <div class="input__content">
                    <div class="input__group">
                        <input type="date" id="departureDate" class="input-field" placeholder="Дата туда">                    
                    </div>
                </div>
            </div>
            <div class="form__group">
                <span><i class="ri-calendar-line"></i></span>
                <div class="input__content">
                    <div class="input__group">
                        <input type="date" id="returnDate" class="input-field" placeholder="Дата обратно">              
                    </div>
                </div>
            </div>
            <script>
                const departureDateInput = document.getElementById('departureDate');
                const returnDateInput = document.getElementById('returnDate');
        
                returnDateInput.addEventListener('change', function() {
                    const departureDate = new Date(departureDateInput.value);
                    const returnDate = new Date(returnDateInput.value);
        
                    if (returnDate < departureDate) {
                        alert("Return date cannot be earlier than the departure date.");
                        returnDateInput.value = ""; 
                    }
                });
            </script>
            <div class="btn" id="name"><a href="tickets.html" target="_blank"><i class="ri-search-line"></i></a></div>
        </form>
        </section>
        <section class="section__container section-advantages">
            <div class="container">
                <div class="advantages">
                    <h3><a href="baggage.html" target="_blank">Экономьте до 70% при покупке багажа онлайн</a></h3>
                    <p>Входит в пакеты Комфорт и Комфорт + </p>
                </div>
                <div class="advantages__img">
                    <img src="https://flyarystan.com/media/rlrntsok/web_142x175_baggage_upd.jpg">
                </div>
                <div class="advantages">
                    <h3>Выберите комфортное место</h3>
                    <p>Входит в пакеты Стандарт +, Комфорт и Комфорт + </p>
                </div>
                <div class="advantages__img">
                    <img src="https://flyarystan.com/media/fcgp4e3s/web_142x175_seat_upd_02.jpg ">
                </div>
                <div class="advantages">

                    <h3>Закажите питание онлайн со скидкой 30%</h3>
                    <p>Доступно не позднее 24 часов до вылета</p>
                </div>
                <div class="advantages__img">
                    <img src="https://flyarystan.com/media/c5yfza2d/web_142x175_meal_upd.jpg">
                </div>              
            </div>
        </section>
        <section class="section__container section-items">
            <div class="section-grid">
                <div class="section-item">
                    <h2>Лучшие предложения</h2>
                    <h3>Наши направления  ></h3>
                </div>
                <div class="section-item">
                    <img src="https://flyarystan.com/media/1wwipc3k/nqz_267x167_.jpg">
                    <h3><a href="index.html" target="_blank">Астана  ></a> </h3>
                </div>
                <div class="section-item">
                    <img src="https://flyarystan.com/media/utlihs1i/ala_267x167_.jpg">
                    <h3>Алматы  ></h3>
                </div>
                <div class="section-item">
                    <img src="https://flyarystan.com/media/1xqhtoyn/plx_267x167_.jpg">
                    <h3>Семей  ></h3>
                </div>
            </div>
        </section>

        <section class="memories">
            <div class="section__container memories__container">
                <div class="memories__grid">
                    <div class="memories__card1">
                        <section class="first">
                            <h4>Подпишитесь на <br>рассылки</h4>
                            <p>и узнавайте первыми о новых маршрутах и специальных предложениях.</p>
                        </section>
                        <section class="second">
                            <div class="second-grid">
                                <div class="input__action">
                                    <input type="text" class="input-field" placeholder="Email">
                                </div>
                                <div class="input__action">
                                    <input type="text" class="input-field" placeholder="Город">
                                </div>
                            </div>
                        </section>
                        <section class="third">
                            <div class="third-grid">
                                <div class="text">
                                    Нажимая на кнопку «Подписаться», вы соглашаетесь на обработку ваших персональных данных.
                                </div>
                                <div class="subscribe">
                                    <button class="btn">Подписаться</button>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="memories__card2">
                        <section class="first">
                            <h4>Мобильное приложение</h4>
                            <p>Бронируйте билеты быстро и легко с приложением FlyArystan</p>
                        </section>
                        <aside>
                            <img src="https://flyarystan.com/media/ojymtocj/mobile.webp">
                        </aside>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
        <div class="section__container footer__container">
            <div class="footer__col">
            <h3>Наши направления</h3>
            <p>
                Алматы - Уральск
            </p>
            <p>
                Алматы - Павлодар
            </p>
            <p>
                Алматы - Шымкент
            </p>
            <p>
                Алматы - Караганда
            </p>
            <p>
                Все направления  >
            </p>
            </div>
            <div class="footer__col">
                <h4>Города</h4>
                <p>Астана</p>
                <p>Павлодар</p>
                <p>Шымкент</p>
                <p>Уральск</p>
                <p>Все города  ></p>
            </div>
            <div class="footer__col">
                <h4>Карта сайта</h4>
            </div>
            <div class="footer__col">
                <h4>
                    Свяжитесь с нами</h4>
            </div>
            <div class="footer__col">
                <h4>Присоединяйтесь к нам:</h4>
                <div class="socials">
                    <span><i class="ri-facebook-fill"></i></span>
                    <span><i class="ri-twitter-fill"></i></span>
                    <span><i class="ri-instagram-line"></i></span>
                    <span><i class="ri-youtube-fill"></i></span>
                </div>
            </div>
        </div>
        <div class="section__container footer__bar">
            <p>Copyright FlyArystan. Все права защищены.</p>
        </div>
        </footer>
    </body>
</html>
