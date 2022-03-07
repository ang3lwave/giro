<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>My Giro</title>
</head>
<body>
    <section class="panel" id="first-page">
        <header class="d-flex justify-content-between align-items-end container">
            <div class="logo"> <img src="img/logo-white.png" alt="logo"> </div>
            <div class="contact">
                <div class="item d-flex justify-content-center align-items-center mb-2">
                    <img src="img/address.png" alt="address">
                    <p class="text-upper">Москва, Набережная 2 оф. 142</p>
                </div>
                <div class="item d-flex justify-content-center align-items-center mb-2">
                    <img src="img/phone.png" alt="phone">
                    <p class="text-upper">+7 923 398 9013</p>
                </div>
            </div>
            <button class="btn btn-order text-upper">Заказать<br>Звонок</button>
        </header>
        <div class="container d-flex flex-column justify-content-center align-items-center mb-2" style="margin-top: 75px;">
            <ul class="nav">
                <li class="text-upper"><a href="#advantages">О нас</a></li>
                <li class="text-upper"><a href="#catalog">Каталог</a></li>
                <li class="text-upper"><a href="#sub">Контакты</a></li>
            </ul>
            <h1 class="site-name text-upper">My Giro</h1>
            <p class="text-upper text-center mt-3">В нашем интернет-магазине представлен большой выбор гироскутеров, сигвеев и электросамокатов от известных мировых производителей.
                Все товары, представленные на нашем сайте, отобраны лучшими специалистами в этой области.
                Купить гироскутер, электросамокат или сигвей недорого, Вы можете в нашем интернет-магазине в любое время, когда Вам удобно.
                Доставка заказов осуществляется бесплатно, в любую точку России.
                Так же, вы можете заказать гироскутер, сигвей или электросамокат по низкой цене, позвонив нам.
                Или сделайте заказ, пообщавшись с нашим онлайн-консультантом консультантам.
                Продажа гироскутеров, электросамокатов и сигвеев, осуществляется напрямую, от производителей.
                Поэтому, в нашем интернет-магазине самые лучшие цены.</p>
            <a class="btn btn-white-big text-upper" style="margin-top: 50px;" href="#catalog">Каталог</a>
        </div>
    </section>
    <section class="panel" id="advantages">
        <h1 class="section-title text-upper">Наши преимущества</h1>
        <div class="container content d-flex justify-content-center align-items-center mt-5">
            <div class="content w-75 d-flex justify-content-around align-items-center" style="height: 250px;" id="advantages">
                <div class="item">
                    <img src="img/advantages/1.png" alt="advantages">
                    <p>БОЛЬШОЙ АССОРТИМЕНТ</p>
                </div>
                <div class="item">
                    <img src="img/advantages/4.png" alt="advantages">
                    <p>БЫСТРАЯ ДОСТАВКА</p>
                </div>
                <div class="item">
                    <img src="img/advantages/3.png" alt="advantages">
                    <p>ГАРАНТИЯ КАЧЕСТВА</p>
                </div>
                <div class="item">
                    <img src="img/advantages/2.png" alt="advantages">
                    <p>ОНЛАЙН-КОНСУЛЬТАНТ</p>
                </div>
            </div>
        </div>
    </section>
    <section id="about-segway">
        <div class="content d-flex justify-content-between align-items-center">
            <img class="section-image" src="img/segway.png" alt="segway">
            <div class="text-upper" style="width: 60%">
                <h1 class="section-title" style="text-align: start;">особенности гироскутеров</h1>
                <div class="mt-3">
                    <h1 class="title">Начнем с минусов</h1>
                    <ol>
                        <li><p>Трясёт</p></li>
                        <li><p>Нет сиденья</p></li>
                        <li><p>Только для одного</p></li>
                    </ol>
                </div>
                <div class="mt-3">
                    <h1 class="title">Перейдем к плюсам</h1>
                    <ol>
                        <li><p>компактност и небольшой вес</p></li>
                        <li><p>Экономичность</p></li>
                        <li><p>Доступность</p></li>
                        <li><p>Манёвренность</p></li>
                        <li><p>Простотой в освоении</p></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="panel" id="catalog">
        <h1 class="section-title text-upper">Каталог</h1>
        <input type="radio" id="all" checked name="categories" value="all">
        <input type="radio" id="all" checked name="categories" value="all">
        <input type="radio" id="all" checked name="categories" value="all">
    </section>
</body>
</html>