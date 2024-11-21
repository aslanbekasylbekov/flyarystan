<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passenger</title>
    <link rel="stylesheet" href="book2.css">
    <link rel = "icon" href ="flyarystan-logo.png">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        
    <!--BoxiCoins-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
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
                        <i class='bx bxs-check-circle' id="first-circle"></i>
                        
                        
                        <div class="separate"></div>
                        <div class="circle2"                         style="width:15px; height: 15px;
                        border: solid 1px #A31F34;
                        border-radius: 20px; "
                        > <div class="circle2-inner" 
                        style="width: 8px; height: 8px;
                        background: #A31F34;
                        border-radius: 20px; position: relative; left: 2.5px;
                        top:2.5px"></div></div>
                        
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
        <div class="contact-info">
            <div class="contact-info-container">
                <div class="contact-info-content">
                    <div class="input-contact">
                        <a href="accept.html" target="_blank"><p>Контактные данные</p></a>
                        <i class='bx bx-chevron-right' ></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="direction">
            <div class="dir-container">
                <div class="dir-content">
                    <div class="ala-uralsk">
                        <div class="tab">
                            <p>Алматы (ALA) - Уральск (URA) - Прямой рейс</p>
                        </div>
                        <div class="category">
                            <p>Чт, дек 28 | 1 Взрослый | В одну сторону</p>
                        </div>
                    </div>
                    <div class="dir-price">
                        <p>ИТОГО</p>
                        <div class="itogo">
                            <div class="p-divider">
                            <p>60 764</p>
                            <h5>KZT</h5>
                            </div>  
                            <i class='bx bx-caret-down' ></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="passengers">
            <div class="passengers-container">
                <div class="passengers-content">
                    <div class="passengers-intro">
                        <p>Пассажиры</p>
                    </div>
                    <div class="pass-divider"></div>
                    <div class="passengers-info">
                        <div class="passengers-info-container">
                            <p>Пассажир 1:Взрослый</p>
                            <div class="box-container">
                            <div class="passengers-info-box">
                                <div class="info-box-one">
                                    <div class="status">
                                        <p>Статус*</p>
                                        <label><input type="radio" name="statustype" value="gn" />Г-н</label>
                                        <label><input type="radio" name="statustype" value="gj" />Г-жа</label>
                                    </div>
                                    <div class="citizenship">
                                        <p>Гражданство*</p>
                                        <select class="section">
                                            <option value="">Выберите гражданство</option>
                                            <option>Казахстан</option>
                                            <option>Россия</option>
                                            <option>Австралия</option>
                                            <option>Австрия</option>
                                            <option>Азейрбаджан</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="info-box-two">
                                    <div class="surname">
                                        <p>Фамилия*</p>
                                        <input type="text" placeholder="Введите фамилию латинскими буквами" required>
                                    </div>
                                    <div class="name">
                                        <p>Имя*</p>
                                        <input type="text" placeholder="Введите имя латинскими буквами" required >
                                    </div>
                                    <div class="birthday">
                                        <p>Дата рождения*</p>
                                        <input type="text" placeholder="ДД.ММ.ГГГГ" required >
                                    </div>
                                </div>
                                <div class="info-box-three">
                                    <div class="typedocument">
                                        <p>Тип документа*</p>
                                        <select class="section">
                                            <option value="">Выберите из списка</option>
                                            <option>Паспорт</option>
                                            <option>Удостоверение личности</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="info-box-four">
                                    <select class="section" id="heart">
                                        <option value=""> Треубуется особая помощь</option>
                                        <option>Кресло-каталка</option>
                                        <option>Пассажир с ограниченным слухом</option>
                                        <option>Пассажир с ограниченным зрением</option>
                                    </select>
                                </div>
                                <div class="box-divider"></div>
                                <div class="status">
                                    <label><input type="radio" name="contact" value="face" /> Выбрать как контактное лицо</label>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>