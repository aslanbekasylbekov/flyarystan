<?php 
include 'database.php';

$sql = "SELECT * FROM flights";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="book.css">
    <link rel = "icon" href ="flyarystan-logo.png">

        <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <!--BoxiCoins-->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="container">
                <div class="content">
                    <div class="logo">
                        <a href="https://flyarystan.com/">
                            <img src="https://flyarystan.com/Assets/img/logo-new.png" alt="arystan?" id="logo">
                        </a>
                    </div>
                    
                    <div class="nav-path">
                        <div class="circle">
                        <div class="circle1" 
                        style="width:15px; height: 15px;
                        border: solid 1px #A31F34;
                        border-radius: 20px; display: flex; align-items: center;">
                            <div class="circle1-inner" 
                            style="width: 8px; height: 8px;
                            background: #A31F34;
                            border-radius: 20px; position: relative; left: 2.5px;"></div>
                        </div>
                        
                        <div class="separate"></div>
                        <div class="circle2"                         style="width:15px; height: 15px;
                        border: solid 1px #A31F34;
                        border-radius: 20px; opacity: 0.2;"
                        ></div>
                        
                        <div class="separate"></div>
                        <div class="circle3"                         style="width:15px; height: 15px;
                        border: solid 1px #A31F34;
                        border-radius: 20px; opacity: 0.2;"></div>

                        <div class="separate"></div>
                        <div class="circle4"                         style="width:15px; height: 15px;
                        border: solid 1px #A31F34;
                        border-radius: 20px; opacity: 0.2;"></div>
                        
                        <div class="separate"></div>
                        <div class="circle5"                         style="width:15px; height: 15px;
                        border: solid 1px #A31F34;
                        border-radius: 20px; opacity: 0.2;"></div>
                        
                        </div>
                        <div class="navpath-text">
                            <p id="race">Рейс</p>
                            <p id="passenger">Пассажир</p>
                            <p id="additional">Дополнительные услуги</p>
                            <p id="payment">Оплата</p>
                            <p id="accept">Подтверждение</p>
                        </div>
                    </div>
                    <div class="nav-user">
                        <div class="user-container">
                            <div class="user-login">
                                <i class='bx bxs-user'></i>
                                <p>Войти | Зарегистрироваться</p>
                            </div>
                            <div class="user-language">
                                <p>RU</p>
                                <i class='bx bx-chevron-down'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="direction">
            <div class="dir-container">
                <div class="dir-content">
                    <div class="dir-search">
                        <div class="loop">
                            <i class='bx bx-search'></i>
                        </div>
                        <div class="search-text">
                            <p>Новый поиск</p>
                        </div>
                    </div>
                    <div class="ala-uralsk">
                        <div class="tab">
                            <p>Алматы (ALA) - Уральск (URA)</p>
                        </div>
                        <div class="category">
                            <p>Чт, дек 28 | 1 Взрослый; 0 Ребенок, 0 Младенец |  В одну сторону</p>
                        </div>
                    </div>
                    <div class="dir-price">
                        <p>ИТОГО</p>
                        <p>0 KZT</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-direction">
            <div class="nav-container">
                <div class="nav-content">
                    <div class="nav-text">
                        <p class="main-div-text">Рейс туда</p>
                        <p class="second-div-text">Алматы - Уральск</p>
                    </div>
                    <div class="nav-selector">
                        <p>KZT</p>
                        <i class='bx bx-chevron-down'></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="pick-date">
            <div class="pick-container">
                <div class="pick-content">
                    <div class="pick-arrow"><i class='bx bx-chevron-left'></i></div>
                    <div class="pick">
                        <p class="same" id="num">25</p>
                        <p class="same">дек, Пн</p>
                        <p class="quality" id="cost1">29 264 KZT</p>
                    </div>
                    <div class="pick">
                        <div class="pick-close">
                        <p class="same" id="num">26</p>
                        <p class="same">дек, Вт</p>
                        </div>
                        <div class="cost2-cont">
                        <p class="quality" id="cost2">34 264 KZT</p>
                        </div>
                    </div>
                    <div class="pick">
                        <div class="pick-close">
                            <p class="same" id="num">27</p>
                            <p class="same">дек, Ср</p>
                            <i class='bx bxs-plane-alt'></i>
                            </div>
                        <p class="quality"></p>
                    </div>
                    <div class="pick">
                        <div class="pick-close">
                            <p class="same" id="num">28</p>
                            <p class="same">дек, Чт</p>
                            </div>
                        <div class="cost3-cont">
                            <p class="quality" id="cost3">60 764 KZT</p>
                            </div>
                    </div>
                    <div class="pick">
                        <div class="pick-close">
                            <p class="same" id="num">29</p>
                            <p class="same">дек, Пт</p>
                            </div>
                        <div class="cost3-cont">
                            <p class="quality" id="cost3">60 764 KZT</p>
                            </div>
                    </div>
                    <div class="pick">
                        <div class="pick-close">
                            <p class="same" id="num">30</p>
                            <p class="same">дек, Сб</p>
                            </div>
                        <div class="cost3-cont">
                            <p class="quality" id="cost3">60 764 KZT</p>
                            </div>
                    </div>
                    <div class="pick">
                        <div class="pick-close">
                            <p class="same" id="num">31</p>
                            <p class="same">дек, Вс</p>
                            </div>
                        <div class="cost3-cont">
                            <p class="quality" id="cost3">60 764 KZT</p>
                            </div>
                    </div>
                    <div class="pick-arrow"><i class='bx bx-chevron-right'></i></div>
                    <div class="pick" id="special-pick">
                        <i class='bx bx-calendar-alt' ></i>
                        <p>Календарь низких цен</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="time">
            <div class="time-container">
                <div class="time-content">
                    <div class="time-first">
                        <div class="first-number">
                            <p>Количество рейсов: 3</p>
                        </div>
                        <div class="first-choices">
                            <div class="first-profit">
                                <p>ВЫГОДНЫЙ</p>
                                <i class='bx bxs-info-circle' ></i>
                            </div>
                            <div class="first-smooth">
                                <a href="ticket2.php" target="_blank"><p>ГИБКИЙ</p></a>
                                <i class='bx bxs-info-circle' ></i>
                            </div>
                        </div>
                    </div>
                    <div class="time-second">
                        <div class="time-info">
                            <div class="time-info-first">
                                <h1>15:05</h1>
                                <h2>Алматы</h2>
                                <h4>28.12.2023</h4>
                                <div class="first-details">
                                    <p>Детали рейса</p>
                                    <i class='bx bxs-info-circle' ></i>
                                </div>  
                                
                            </div>
                            <div class="time-info-path">
                                <div class="path-go">
                                    <i class='bx bxs-plane-take-off'></i>
                                </div>
                                <div class="path-way">
                                    <p>3ч 25мин</p>
                                    <div class="path-line"></div>
                                    <p id="btext">Прямой</p>
                                </div>
                                <div class="path-finish">
                                    <i class='bx bxs-plane-land' ></i>
                                </div>
                            </div>
                            <div class="time-info-second">
                                <h1>17:30</h1>
                                <h2>Уральск
                                </h2>
                                <h4>28.12.2023</h4>
                            </div>
                        </div>
                        <div class="time-place">
                            <i class='bx bx-no-entry'></i>
                            <p>НЕТ МЕСТ</p>
                        </div>
                        <div class="time-price">
                            <h4>ЛУЧШЕЕ ПРЕДЛОЖЕНИЕ</h4>
                            <h3>60 764</h3>
                            <p>KZT</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="time">
        <div class="time-container">
            <div class="time-content">
                <div class="time-second">
                    <div class="time-info">
                        <div class="time-info-first">
                            <h1>10:30</h1>
                            <h2>Алматы</h2>
                            <h4>28.12.2023</h4>
                            <div class="first-details">
                                <p>Детали рейса</p>
                                <i class='bx bxs-info-circle' ></i>
                            </div>  
                            
                        </div>
                        <div class="time-info-path">
                            <div class="path-go">
                                <i class='bx bxs-plane-take-off'></i>
                            </div>
                            <div class="path-way">
                                <p>3ч 25мин</p>
                                <div class="path-line"></div>
                                <p id="btext">Прямой</p>
                            </div>
                            <div class="path-finish">
                                <i class='bx bxs-plane-land' ></i>
                            </div>
                        </div>
                        <div class="time-info-second">
                            <h1>13:55</h1>
                            <h2>Уральск
                            </h2>
                            <h4>28.12.2023</h4>
                        </div>
                    </div>
                    <div class="time-place">
                        <i class='bx bx-no-entry'></i>
                        <p>НЕТ МЕСТ</p>
                    </div>
                    <div class="time-price">
                        <h4>ЛУЧШЕЕ ПРЕДЛОЖЕНИЕ</h4>
                        <h3>60 764</h3>
                        <p>KZT</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="time">
        <div class="time-container">
            <div class="time-content">
                <div class="time-second">
                    <div class="time-info">
                        <div class="time-info-first">
                            <h1>18:20</h1>
                            <h2>Алматы</h2>
                            <h4>28.12.2023</h4>
                            <div class="first-details">
                                <p>Детали рейса</p>
                                <i class='bx bxs-info-circle' ></i>
                            </div>  
                            
                        </div>
                        <div class="time-info-path">
                            <div class="path-go">
                                <i class='bx bxs-plane-take-off'></i>
                            </div>
                            <div class="path-way">
                                <p>3ч 25мин</p>
                                <div class="path-line"></div>
                                <p id="btext">Прямой</p>
                            </div>
                            <div class="path-finish">
                                <i class='bx bxs-plane-land' ></i>
                            </div>
                        </div>
                        <div class="time-info-second">
                            <h1>21:45</h1>
                            <h2>Уральск
                            </h2>
                            <h4>28.12.2023</h4>
                        </div>
                    </div>
                    <div class="time-place">
                        <i class='bx bx-no-entry'></i>
                        <p>НЕТ МЕСТ</p>
                    </div>
                    <div class="time-price">
                        <h4>ЛУЧШЕЕ ПРЕДЛОЖЕНИЕ</h4>
                        <h3>60 764</h3>
                        <p>KZT</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>