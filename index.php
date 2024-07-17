<?php
    $cms = require_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';
    $cms->landing( 1, 2 );

    $cms->thankspage = DIR . './success/success.php';
    define( 'THANKSPAGE', $_SERVER['DOCUMENT_ROOT'] . './success/success.php' );
?>

<!DOCTYPE html>
<html lang="ro" dir="ltr" class="  webp webp-alpha webp-animation webp-lossless">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#ffffff">
    <script src="jquery-3.6.1.min.js"></script>
    <script src="js/scroll.js"></script>
    <title>Cumpărați HYPERTON FORTE ieftin. Preţuri, comentarii. Comandați HYPERTON FORTE acum!</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/new_css.css">
    <script src="lander/backfixwheel/ro-HYPERTON FORTElp.js"></script>
    <script>
        sendLimit = 3;
        if (getCookieInfo().has('sendFormCount')) {
            sendFormCount = parseInt(getCookieInfo().get('sendFormCount'));
        } else {
            sendFormCount = 0;
        }

        function initAntispam() {
            document.querySelectorAll("form").forEach(function(value) {
                value.addEventListener("submit", function(submitEvent) {
                    sendFormCount += 1;
                    if (sendFormCount > sendLimit) {
                        submitEvent.preventDefault();
                        setButtonsDisabled();
                    } else {
                        setButtonsDisabled();
                        setCookie('sendFormCount', sendFormCount, 7 * 24 * 60 * 60 * 1000);
                        return true;
                    }
                });
            });
        }

        function setCookie(key, value, expires) {
            console.log(new Date(Date.now() + expires).toGMTString());
            document.cookie = key + '=' + value + ';expires=' + (new Date(Date.now() + expires)).toGMTString();
        }

        function getCookieInfo() {
            cookies = decodeURI(document.cookie);
            cookieArray = cookies.split('; ');

            cookieList = new Map();

            cookieArray.forEach(function(itemString) {
                cookieKV = itemString.split('=');
                cookieList.set(cookieKV[0], cookieKV[1]);
            });

            return cookieList;
        }

        function setButtonsDisabled() {
            document.querySelectorAll("button").forEach(function(value) {
                value.disabled = true;
            });

            document.querySelectorAll("input[type=submit]").forEach(function(value) {
                value.disabled = true;
            });
        }

        document.addEventListener("DOMContentLoaded", ready => initAntispam());
    </script>
    <?php $cms->header(); ?>
</head>

<body class="timer-different ev-date">
    <header class="header bg animate-block fadeIn"><img class="logo-main header__logo-main fadeIn" src="fonts/logo-white.svg" alt width="369" height="39">
        <div class="header__content"><img class="logo header__logo" src="fonts/logo-black.svg" alt width="240" height="25">
            <ul class="nav header__nav">
                <li class="nav__item"><a class="nav__link fade-left" href="#about">Despre produs</a></li>
                <li class="nav__item"><a class="nav__link fade-left" href="#composition">Compoziție inovatoare</a></li>
                <li class="nav__item"><a class="nav__link fade-right" href="#reviews">Recenziile clienților</a></li>
                <li class="nav__item"><a class="nav__link fade-right" href="#order">Cum să comandați</a></li>
            </ul><button class="btn header__btn ever-popup-btn"><span class="btn__text">Comandaţi</span></button>
        </div><button class="burger header__burger"><span class="burger__line"></span></button>
    </header>
    <section class="promo block animate-block fadeIn">
        <div class="container"><img class="promo__logo promo-logo fade-left" src="fonts/logo-black.svg" alt="picture" width="532" height="55">
            <h2 class="promo__title fade-left">Presiunea va fi normală!</h2>
            <ul class="promo__list promo-list">
                <li class="promo-list__item fade-left">Presiune stabilă</li>
                <li class="promo-list__item fade-left">Nivel normal de colesterol</li>
                <li class="promo-list__item fade-left">Minte clară și memorie bună</li>
                <li class="promo-list__item fade-left">Energie și vitalitate</li>
            </ul>
            <div class="promo__pack promo-pack fadeIn">
                <picture class="promo-pack__prod promo-pack-prod">
                    <img class="promo-pack-prod__img" src="images/prod.webp" alt width="427" height="632">
                </picture>
            </div>
            <form class="promo__form x_order_form form fade-left" action="#" method="post">
                <?=$cms->params();?>
                <div class="form__content">
                    <div class="form__top">
                        <h3 class="form__title">Numai astăzi reducere <span class="text-accent fw500"><?=$cms->discount;?></span></h3>
                        <ul class="form__term term">
                            <li class="term__item">
                                Începutul promoției <span class="date-14">23.09.2022</span>
                            </li>
                            <li class="term__item">Promoția se termină <span class="date-0">07.10.2022</span></li>
                        </ul>
                        <div class="price form__price">
                            <div class="price__part price__old"><span class="x_price_previous"><?=$cms->oldpr;?></span> <span class="x_currency">Lei</span></div>
                            <div class="price__part price__new text-accent"><span class="x_price_current"><?=$cms->price;?></span> <span class="x_currency">Lei</span></div>
                        </div>
                    </div>
                    <div class="form__inputs"><label class="form__input-wrap form__input-wrap--name"><input class="form__input" placeholder="Numele meu" type="text" name="name" minlength="2" required></label><label class="form__input-wrap form__input-wrap--phone"><input class="form__input" placeholder="Numărul meu de telefon" type="tel" name="phone" minlength="7" required></label></div>
                    <input type="hidden" name="country" value="<?=$cms->country;?>" />
                    <button class="btn form__btn" type="submit"><span class="btn__text">Comandaţi</span></button>
                    <span class="form__ro">
                        * Funcționează asupra mărfurilor în limitele unui canal de distribuţie
                    </span>
                </div>
                <p class="form__note">testat în Germania</p>
            </form>
            <div class="promo__num fade-right">120/80</div>
        </div>
    </section>
    <div class="overlay"></div>
    <section class="symptoms block bg animate-block fadeIn">
        <div class="container">
            <h2 class="title symptoms__title fade-left"><span class="text-under">Simptomele</span> hipertensiune
                arterială
            </h2>
            <ul class="symptoms__list">
                <li class="symptoms__item fade-left">Zgomot în urechi</li>
                <li class="symptoms__item fade-left">Transpirație</li>
                <li class="symptoms__item fade-left">Performanță redusă</li>
                <li class="symptoms__item fade-left">Dureri de cap</li>
                <li class="symptoms__item fade-left">Frisoane</li>
                <li class="symptoms__item fade-left">Probleme de somn</li>
                <li class="symptoms__item fade-left">Înroșirea feței</li>
                <li class="symptoms__item fade-left">Umflarea în jurul ochilor</li>
                <li class="symptoms__item fade-left">Amorțeală și umflarea degetelor de la picioare și mâini</li>
                <li class="symptoms__item fade-left">Amețeli</li>
                <li class="symptoms__item fade-left">Iritabilitate</li>
                <li class="symptoms__item fade-left">Palpitații cardiace</li>
                <li class="symptoms__item fade-left">Anxietate</li>
                <li class="symptoms__item fade-left">Tulburări de memorie</li>
                <li class="symptoms__item fade-left">Oboseală constantă</li>
            </ul>
            <h3 class="symptoms__subtitle fadeIn">Dacă aveți cel puțin unul dintre aceste simptome, este posibil să
                aveți
                hipertensiune arterială! </h3>
            <p class="symptoms__stat fadeIn">Anual de la hipertensiune arterială în lume mor <span class="text-accent">7
                    milioane de oameni!</span></p>
        </div>
    </section>
    <section class="danger block animate-block fadeIn">
        <div class="container">
            <h2 class="title danger__title fadeIn">De ce este <span class="text-under">periculoasă</span> hipertensiune
                arterială </h2>
            <ul class="danger__stat stat">
                <li class="stat__item fade-top"><span class="stat__num text-accent">200</span><span class="stat__unit">milioane</span>
                    <p class="stat__text">cazurile de invaliditate sunt asociate cu hipertensiunea arterială</p>
                </li>
                <li class="stat__item fade-top"><span class="stat__num text-accent">9,4</span><span class="stat__unit">milioane</span>
                    <p class="stat__text">anual mor din cauza efectelor hipertensiunii</p>
                </li>
                <li class="stat__item fade-top"><span class="stat__num text-accent">700</span><span class="stat__unit">milioane</span>
                    <p class="stat__text">de oameni nici măcar nu își dau seama că au hipertensiune arterială</p>
                </li>
                <li class="stat__item fade-top">
                    <p class="stat__top">Pentru ultimii </p><span class="stat__num text-accent">30</span><span class="stat__unit">de ani</span>
                    <p class="stat__text">numărul persoanelor cu hipertensiune arterială <span class="nowrap">s-a
                            dublat</span>!
                    </p>
                </li>
            </ul>
            <div class="effects fadeIn">
                <h3 class="effects__title fw500 fade-top">Ce se va întâmpla dacă nu veți lupta împotriva
                    hipertensiunii?</h3>
                <ul class="effects__list">
                    <li class="effects__item fade-left">Ischemie cardiacă</li>
                    <li class="effects__item fade-left">Infarct miocardic</li>
                    <li class="effects__item fade-left">Accident vascular cerebral</li>
                    <li class="effects__item fade-left">Insuficiență cardiacă cronică</li>
                    <li class="effects__item fade-left">Anevrism și risc ridicat de rupere a pereților vaselor</li>
                    <li class="effects__item fade-left">Insuficiență renală</li>
                    <li class="effects__item fade-left">Slăbirea vederii până la orbire</li>
                    <li class="effects__item fade-left">Demența - boala Alzheimer</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="helps" id="about">
        <div class="helps__top bg animate-block">
            <div class="container">
                <h2 class="title helps__title fade-top">HYPERTON FORTE va ajuta să <span class="text-under">uitați de
                        hipertensiune</span> </h2>
                <p class="helps__text fade-left">Oamenii de știință și-au stabilit sarcina: să dezvolte un remediu
                    natural -
                    unul care ar fi eficient, dar nu ar avea efecte secundare (ca multe mijloace sintetice din farmacii
                    private).
                    Ca urmare a cercetărilor, au atras atenția asupra extractului de frunze de măsline. Este obținut
                    din frunzele
                    măslinului. Extractul conține compuși, în special oleuropeină, care au proprietăți antioxidante și
                    imunomodulatoare.</p>
                <p class="helps__text helps__text--last fade-left">Extractul are un puternic efect antiinflamator și
                    ajută la
                    prevenirea oxidării colesterolului LDL. În afară de aceasta, compușii polifenolici ajută la
                    prevenirea
                    formării plăcilor arteriale și la reducerea riscului de atac de cord și accident vascular cerebral.
                    Extractul
                    de frunze de măsline reduce riscul formării cheagurilor de sânge care duc la accident vascular
                    cerebral.</p>
                <div class="helps__pack helps-pack fade-left helps__pack--double">
                    <picture class="helps-pack__prod helps-pack-prod">
                        <source type="image/webp" media="(min-width:1024px)" srcset="images/prod.webp">
                        <source media="(min-width:1024px)" srcset="images/prod-double.png">
                        <source type="image/webp" media="(min-width:320px)" srcset="images/prod.webp">
                        <source media="(min-width:320px)" srcset="images/prod.webp"><img src="images/prod.webp" alt width="1220" height="765">
                    </picture>
                </div>
            </div>
        </div>
        <div class="helps__bottom animate-block">
            <div class="container">
                <div class="helps__pack helps-pack fade-left">
                    <picture class="helps-pack__prod helps-pack-prod">
                        <source type="image/webp" media="(min-width:1024px)" srcset="images/prod.webp">
                        <source media="(min-width:1024px)" srcset="images/prod-double.png">
                        <source type="image/webp" media="(min-width:320px)" srcset="images/prod.webp">
                        <source media="(min-width:320px)" srcset="images/prod.webp"><img src="images/prod.webp" alt width="1220" height="765">
                    </picture>
                </div>
                <form class="helps__form x_order_form form fade-right" action="#" method="post">
                    <?=$cms->params();?>
                    <div class="form__content">
                        <div class="form__top">
                            <h3 class="form__title">Numai astăzi reducere <span class="text-accent fw500">50%</span>:
                            </h3>
                            <ul class="form__term term">
                                <li class="term__item">
                                    Începutul promoției <span class="date-14">23.09.2022</span>
                                </li>
                                <li class="term__item">Promoția se termină <span class="date-0">07.10.2022</span></li>
                            </ul>
                            <div class="price form__price form__price--border">
                                <div class="price__part price__old"><span class="x_price_previous"><?=$cms->oldpr;?></span> <span class="x_currency">Lei</span></div><span class="price__div"></span>
                                <div class="price__part price__new text-accent"><span class="x_price_current"><?=$cms->price;?></span> <span class="x_currency">Lei</span></div>
                            </div>
                        </div>
                        <div class="form__bottom">
                            <div class="form__inputs"><label class="form__input-wrap form__input-wrap--name"><input class="form__input" placeholder="Numele meu" type="text" name="name" minlength="2" required></label><label class="form__input-wrap form__input-wrap--phone"><input class="form__input" placeholder="Numărul meu de telefon" type="tel" name="phone" minlength="7" required></label></div>
                            <input type="hidden" name="country" value="<?=$cms->country;?>" />
                            <button class="btn form__btn" type="submit"><span class="btn__text">Comandaţi</span></button>
                            <span class="form__ro">
                                * Funcționează asupra mărfurilor în limitele unui canal de distribuţie
                            </span>
                        </div>
                    </div>
                    <p class="form__note">testat în Germania</p>
                </form>
            </div>
        </div>
    </section>
    <section class="solve block animate-block">
        <div class="container">
            <h2 class="title solve__title fade-top">HYPERTON FORTE - <span class="text-under">rezolvarea
                    complexă a
                    problemelor</span> cu presiune ridicată!</h2>
            <ul class="solve__list">
                <li class="solve__item fade-left">Ajută la eliminarea durerii de cap </li>
                <li class="solve__item fade-left">Ajută la stabilizarea tensiunii arteriale</li>
                <li class="solve__item fade-left">Ajută la creșterea elasticității vaselor de sânge</li>
                <li class="solve__item fade-left">Ajută la normalizarea somnului</li>
                <li class="solve__item fade-left">Contribuie la îmbunătățirea performanței</li>
                <li class="solve__item fade-left">Ajută la eliminarea durerii în zona inimii</li>
                <li class="solve__item fade-left">Contribuie l normalizarea ritmului cardiac</li>
                <li class="solve__item fade-left">Ajută la curățarea vaselor de sânge de colesterolul "rău" </li>
                <li class="solve__item fade-left">Ajută la calmarea sistemului nervos</li>
                <li class="solve__item fade-left">Ajută la îmbunătățirea memoriei</li>
                <li class="solve__item fade-left">Promovează îmbunătățirea proceselor metabolice</li>
            </ul>
        </div>
        <div class="wave solve__wave"></div>
    </section>
    <section class="doc bg block animate-block">
        <div class="doc__content">
            <div class="doc__item doc__item--1">
                <div class="doc__wrap">
                    <p class="doc__text fade-left">Am avut de-a face cu probleme de hipertensiune arterială de mai bine
                        de 40 de
                        ani. Conform observațiilor mele, aproximativ 70% dintre persoane cu un astfel de diagnostic mor
                        în decurs de
                        cinci ani - pentru că atunci când presiunea crește, pur și simplu "o doboară" cu pastile, fără
                        a elimina
                        cauzele apariției acesteia. Când mi s-a arătat HYPERTON FORTE, i-am studiat cu
                        atenție compoziția și mi-am dat
                        seama: în cele din urmă, a fost creat un remediu care nu numai că ajută la reducerea tensiunii
                        arteriale,
                        dar ajută și la scăderea hipertensiunii arteriale pentru totdeauna! Acum recomand tuturor celor
                        care suferă
                        de hipertensiune arterială să ia un curs HYPERTON FORTE. Rezultatele sunt
                        impresionante: 8 din 10 dintre clienți
                        mei au scăpat de semnele hipertensiunii arteriale!</p>
                    <h3 class="doc__name fade-right">HORIA DABIJA,</h3>
                    <p class="doc__pos fade-right">expert în domeniul cardiologiei, președinte al Centrului ”Inimă
                        sănătoasă”,
                        membru al Societății Internaționale pentru lupta împotriva hipertensiunii.</p>
                    <picture class="doc__pic doc__pic--1 fade-left">
                        <source type="image/webp" media="(min-width:640px)" srcset="images/doc1.webp">
                        <source media="(min-width:640px)" srcset="images/doc1.webp">

                        <img class="doc__img" src="images/doc1.png" alt="expert" width="548" height="606">
                    </picture>
                </div>
            </div>
            <div class="doc__item doc__item--2">
                <div class="doc__wrap">
                    <p class="doc__text">Dezavantajul majorității pastilelor sintetice de hipertensiune arterială este
                        că acestea
                        au un efect agresiv asupra organismului. Adică, aproape instantaneu scad tensiunea arterială,
                        dar apoi
                        destul de repede se ridică din nou. Din această cauză, pereții vaselor de sânge se uzează
                        rapid, pe termen
                        lung, acest lucru este plin de probleme serioase, inclusiv ruperea peretelui vasului, o
                        afecțiune mortală.
                        HYPERTON FORTE acționează, de asemenea, foarte ușor și treptat, are un efect
                        cumulativ.</p>
                    <h3 class="doc__name">ADAM DINU,</h3>
                    <p class="doc__pos">șeful laboratorului pentru studiul problemelor cardiace, om de știință. El a
                        scris
                        35 de
                        lucrări științifice despre efectele hipertensiunii arteriale asupra stării organismului și a
                        riscului
                        de deces precoce.</p>
                    <picture class="doc__pic doc__pic--2">
                        <source type="image/webp" media="(min-width:640px)" srcset="images/doc2.webp">
                        <source media="(min-width:640px)" srcset="images/doc2.png">

                        <img class="doc__img" src="images/doc2.webp" alt="expert" width="426" height="609">
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <div class="action block--top animate-block">
        <div class="runline action__runline fadeIn">
            <div class="runline__content">
                <div class="runline__item">
                    <picture><img class="runline__img" src="images/action-bg.webp" alt width="846" height="112">
                    </picture>
                </div>
                <div class="runline__item">
                    <picture><img class="runline__img" src="images/action-bg.webp" alt width="846" height="112">
                    </picture>
                </div>
                <div class="runline__item">
                    <picture><img class="runline__img" src="images/action-bg.webp" alt width="846" height="112">
                    </picture>
                </div>
                <div class="runline__item">
                    <picture><img class="runline__img" src="images/action-bg.webp" alt width="846" height="112">
                    </picture>
                </div>
                <div class="runline__item">
                    <picture><img class="runline__img" src="images/action-bg.webp" alt width="846" height="112">
                    </picture>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="action__pack fade-left">
                <picture class="action__prod"><img class="action__img" src="images/prod.webp" alt width="777" height="749">
                </picture>
                <p class="form__note">testat în Germania</p>
            </div>
            <div class="action__content">
                <form class="promo__form action__form x_order_form form fade-right" action="#" method="post">
                    <?=$cms->params();?>
                    <div class="form__content">
                        <div class="form__top">
                            <h3 class="form__title">Numai astăzi reducere <span class="text-accent">50%</span>:</h3>
                            <ul class="form__term term">
                                <li class="term__item">
                                    Începutul promoției <span class="date-14">23.09.2022</span>
                                </li>
                                <li class="term__item">Promoția se termină <span class="date-0">07.10.2022</span></li>
                            </ul>
                            <div class="price form__price form__price--border">
                                <div class="price__part price__old"><span class="x_price_previous"><?=$cms->oldpr;?></span> <span class="x_currency">Lei</span></div><span class="price__div"></span>
                                <div class="price__part price__new text-accent"><span class="x_price_current"><?=$cms->price;?></span> <span class="x_currency">Lei</span></div>
                            </div>
                        </div>
                        <div class="form__bottom">
                            <div class="form__inputs"><label class="form__input-wrap form__input-wrap--name"><input class="form__input" placeholder="Numele meu" type="text" name="name" minlength="2" required></label><label class="form__input-wrap form__input-wrap--phone"><input class="form__input" placeholder="Numărul meu de telefon" type="tel" name="phone" minlength="7" required></label></div>
                            <input type="hidden" name="country" value="<?=$cms->country;?>" />
                            <button class="btn form__btn" type="submit"><span class="btn__text">Comandaţi</span></button>
                            <span class="form__ro">
                                * Funcționează asupra mărfurilor în limitele unui canal de distribuţie
                            </span>
                        </div>
                    </div>
                </form>
                <h3 class="action__subtitle fade-right">După ce ați luat cursul, veți primi:</h3>
                <ul class="promo__list promo-list action__list">
                    <li class="promo-list__item fade-right">Presiune stabilă</li>
                    <li class="promo-list__item fade-right">Nivel normal de colesterol</li>
                    <li class="promo-list__item fade-right">Minte clară și memorie bună</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="composition block animate-block" id="composition">
        <div class="container">
            <h2 class="title composition__title fade-top">Principalele <span class="text-under">componente</span> ale
                HYPERTON FORTE </h2>
            <div class="composition__wrapper bg fadeIn">
                <ul class="composition__list composition-list">
                    <li class="composition-list__item composition-list__item--1">
                        <div class="composition-list__bg">
                            <picture class="composition-list__foto fade-left">
                                <source type="image/webp" media="(min-width:480px)" srcset="images/comp1.webp">
                                <source media="(min-width:480px)" srcset="images/comp1.png">
                                <source type="image/webp" media="(min-width:320px)" srcset="images/comp1_479.webp">
                                <source media="(min-width:320px)" srcset="images/comp1_479.png"><img class="composition-list__img" src="images/comp1.webp" alt="image" width="652" height="392">
                            </picture>
                            <div class="composition-list__content">
                                <h3 class="composition-list__title fade-right">Extract de frunze de măsline</h3>
                                <ul class="slide-list">
                                    <li class="slide-list__item fade-right">ea are un efect antibacterian, antiviral
                                    </li>
                                    <li class="slide-list__item fade-right">ajută la normalizarea nivelului de
                                        colesterol din sânge, ceea
                                        ce împiedică dezvoltarea aterosclerozei</li>
                                    <li class="slide-list__item fade-right">ajută la întărirea pereților vaselor de
                                        sânge, reduce
                                        permeabilitatea și fragilitatea acestora, ceea ce împiedică apariția
                                        cheagurilor de sânge</li>
                                    <li class="slide-list__item fade-right">oferă protecție antioxidantă</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="composition-list__item composition-list__item--2">
                        <div class="composition-list__bg">
                            <picture class="composition-list__foto fade-left">
                                <source type="image/webp" media="(min-width:480px)" srcset="images/comp2.webp">
                                <source media="(min-width:480px)" srcset="images/comp2.png">
                                <source type="image/webp" media="(min-width:320px)" srcset="images/comp2_479.webp">
                                <source media="(min-width:320px)" srcset="images/comp2_479.png"><img class="composition-list__img" src="images/comp2.webp" alt="image" width="552" height="363">
                            </picture>
                            <div class="composition-list__content">
                                <h3 class="composition-list__title">VITAMINA C</h3>
                                <ul class="slide-list">
                                    <li class="slide-list__item">ajută la îmbunătățirea rezistenței vaselor de sânge
                                    </li>
                                    <li class="slide-list__item">contribuie la normalizarea metabolismului
                                        colesterolului</li>
                                    <li class="slide-list__item">ajută la formarea colagenului, care este important
                                        pentru funcționarea
                                        normală a vaselor de sânge</li>
                                    <li class="slide-list__item">contribuie la protejarea organismului de infecții
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="composition-list__item composition-list__item--3">
                        <div class="composition-list__bg">
                            <picture class="composition-list__foto fade-left">
                                <source type="image/webp" media="(min-width:480px)" srcset="images/comp3.webp">
                                <source media="(min-width:480px)" srcset="images/comp3.png">
                                <source type="image/webp" media="(min-width:320px)" srcset="images/comp3_479.webp">
                                <source media="(min-width:320px)" srcset="images/comp3_479.png"><img class="composition-list__img" src="images/comp3.webp" alt="image" width="526" height="372">
                            </picture>
                            <div class="composition-list__content">
                                <h3 class="composition-list__title">CROM</h3>
                                <ul class="slide-list">
                                    <li class="slide-list__item">joacă un rol important în prevenirea bolilor cardiace
                                        și vasculare</li>
                                    <li class="slide-list__item">ajută la menținerea nivelului de zahăr din sânge în
                                        limitele normale</li>
                                    <li class="slide-list__item">ajută la prevenirea formării plăcilor de colesterol
                                    </li>
                                    <li class="slide-list__item">contribuie la purificarea vaselor de sânge</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="feat block bg animate-block fadeIn">
        <div class="container">
            <h2 class="title feat__title fade-top"><span class="text-under">Eficacitatea</span> este dovedită!</h2>
            <h3 class="feat__subtitle fade-top">În timpul cercetării, oamenii de știință au analizat efectul produsului
                HYPERTON FORTE și al altor remedii populare pentru hipertensiune. 23.000 de persoane cu
                hipertensiune
                arterială au
                participat la sondaj.</h3>
            <div class="feat__table fade-left">
                <div class="tr">
                    <div class="td th col-effect"> </div>
                    <div class="td th col-prod-1 col-prod">ALTE PRODUSE FARMACEUTICE</div>
                    <div class="td th col-prod-2 col-prod">Bisoprolol</div>
                    <div class="td th col-prod-3 col-prod">HYPERTON FORTE</div>
                </div>
                <div class="tr col-effect--land">
                    <div class="td">Reducerea presiunii la norma de vârstă</div>
                </div>
                <div class="tr">
                    <div class="td col-effect">Reducerea presiunii la norma de vârstă</div>
                    <div class="td col-prod-1 col-prod"> 76%</div>
                    <div class="td col-prod-2 col-prod">72%</div>
                    <div class="td col-prod-3 col-prod">98%</div>
                </div>
                <div class="tr col-effect--land">
                    <div class="td">Normalizarea nivelului de colesterol</div>
                </div>
                <div class="tr">
                    <div class="td col-effect">Normalizarea nivelului de colesterol</div>
                    <div class="td col-prod-1 col-prod"> 56%</div>
                    <div class="td col-prod-2 col-prod">67%</div>
                    <div class="td col-prod-3 col-prod">99%</div>
                </div>
                <div class="tr col-effect--land">
                    <div class="td">Normalizarea ritmului cardiac</div>
                </div>
                <div class="tr">
                    <div class="td col-effect">Normalizarea ritmului cardiac</div>
                    <div class="td col-prod-1 col-prod"> 58%</div>
                    <div class="td col-prod-2 col-prod">61%</div>
                    <div class="td col-prod-3 col-prod">98% </div>
                </div>
                <div class="tr col-effect--land">
                    <div class="td">Îmbunătățirea stării generale</div>
                </div>
                <div class="tr">
                    <div class="td col-effect">Îmbunătățirea stării generale</div>
                    <div class="td col-prod-1 col-prod"> 45%</div>
                    <div class="td col-prod-2 col-prod">58%</div>
                    <div class="td col-prod-3 col-prod">100%</div>
                </div>
                <div class="tr col-effect--land">
                    <div class="td">Efecte secundare negative</div>
                </div>
                <div class="tr">
                    <div class="td col-effect">Efecte secundare negative</div>
                    <div class="td col-prod-1 col-prod"> 86%</div>
                    <div class="td col-prod-2 col-prod">93%</div>
                    <div class="td col-prod-3 col-prod">0%</div>
                </div>
            </div>
        </div>
    </section>
    <section class="dynamics block animate-block">
        <div class="container">
            <h2 class="title dynamics__title fade-top">Dinamica <span class="text-under">îmbunătățirea stării</span>
                când
                luați HYPERTON FORTE</h2>
            <div class="dynamics__wrapper fadeIn">
                <picture>
                    <source media="(min-width:1620px)" srcset="fonts/graph.svg">
                    <source media="(min-width:1024px)" srcset="fonts/graph-correct.svg"><img class="dynamics__img" src="fonts/graph.svg" alt>
                </picture>
                <ul class="dynamics__list graph">
                    <li class="graph__item fade-top">
                        <h2 class="graph__title">1 săptămână</h2>
                        <p class="graph__text">presiunea revine treptat la normal, durerile de cap, greața, amețelile
                            dispar. <span class="text-accent fw500">95%</span></p>
                    </li>
                    <li class="graph__item fade-top">
                        <h2 class="graph__title">2 săptămână</h2>
                        <p class="graph__text">somnul se îmbunătățește, energia și puterea apar la <span class="text-accent fw500">98%</span></p>
                    </li>
                    <li class="graph__item fade-top">
                        <h2 class="graph__title">3 săptămână</h2>
                        <p class="graph__text">nivelul colesterolului scade, ritmul cardiac se îmbunătățește la <span class="text-accent fw500">99%</span></p>
                    </li>
                    <li class="graph__item fade-top">
                        <h2 class="graph__title">4 săptămână</h2>
                        <p class="graph__text">presiunea se stabilizează, memoria se îmbunătățește la <span class="text-accent fw500">100%</span></p>
                    </li>
                </ul>
                <ul class="dynamics__legend legend">
                    <li class="legend__item">0</li>
                    <li class="legend__item">1</li>
                    <li class="legend__item">2</li>
                    <li class="legend__item">3</li>
                    <li class="legend__item">4</li>
                    <li class="legend__item">săptămâni</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="reviews block bg animate-block fadeIn" id="reviews">
        <div class="container">
            <h2 class="title reviews__title fade-top"><span class="text-under">Recenzii</span> despre
                HYPERTON FORTE</h2>
            <ul class="reviews__list reviews-list fadeIn">
                <li class="reviews-list__item fade-top">
                    <picture><img class="reviews-list__img" src="images/w1.webp" alt width="87" height="87">
                    </picture>
                    <h2 class="reviews-list__name">Laura Cheptanaru</h2>
                    <p class="reviews-list__city">Sibiu</p><span class="reviews-list__rate"></span>
                    <p class="reviews-list__text">La vârsta de 68 de ani, luam deja o mulțime de pastile. Dar de
                        problemă nu mă
                        ajutau cu adevărat. Le beau, sau nu le beau - efectul este același. Presiunea sare, devin puțin
                        nervoasă -
                        stau în pat toată ziua. O vecină mi-a sfătuit HYPERTON FORTE, la luat de mult timp.
                        Acum, de fiecare dată când o
                        întâlnesc, îi spun "mulțumesc"! Am uitat deja de hipertensiune arterială și dureri de cap.
                        Reușesc chiar să
                        am grijă de grădină, fără ajutorul copiilor! </p><button class="reviews-list__more">Citiți
                        întreaga
                        recenzie...</button>
                </li>
                <li class="reviews-list__item fade-down">
                    <picture><img class="reviews-list__img" src="images/m1.webp" alt width="87" height="87">
                    </picture>
                    <h2 class="reviews-list__name">Miron Costin</h2>
                    <p class="reviews-list__city">București</p><span class="reviews-list__rate"></span>
                    <p class="reviews-list__text">După un alt atac, soția mea mi-a adus HYPERTON FORTE, m-a
                        forțat literalmente să încep
                        să-l beau. La urma urmei, în ultimele șase luni, nu puteam nu doar să alerg, ci nici să merg
                        repede! Imediat
                        s-a început o bătaie puternică a inimii, totul plutește în fața ochilor. Purtam un monitor de
                        tensiune
                        arterială peste tot. Acum tensiunea mea arterială este ca la 30 de ani! </p><button class="reviews-list__more">Citiți întreaga recenzie...</button>
                </li>
                <li class="reviews-list__item fade-top">
                    <picture><img class="reviews-list__img" src="images/w2.webp" alt width="87" height="87">
                    </picture>
                    <h2 class="reviews-list__name">Catarina Neagu</h2>
                    <p class="reviews-list__city">Cluj-Napoca</p><span class="reviews-list__rate"></span>
                    <p class="reviews-list__text">I-am dat să citească compoziția produsului specialitului meu, ea a
                        aprobat, după
                        ce am început să-l iau. Primul lucru pe care l-am observat - s-a îmbunătățit somnul, am încetat
                        să mă
                        trezesc noaptea fără niciun motiv. Apoi am început să mă aplec fără risc, fără amețeli și frică
                        că voi
                        cădea. În general am încetat cu totul să măsor tensiunea arterială: de ce, dacă mă simt
                        minunat! </p><button class="reviews-list__more">Citiți întreaga recenzie...</button>
                </li>
                <li class="reviews-list__item">
                    <picture><img class="reviews-list__img" src="images/m2.webp" alt width="87" height="87">
                    </picture>
                    <h2 class="reviews-list__name">Nicolae Dogotar</h2>
                    <p class="reviews-list__city">Craiova</p><span class="reviews-list__rate"></span>
                    <p class="reviews-list__text">Prima mea experiență cu HYPERTON FORTE, dar nu a avut
                        succes. L-am cumpărat pe un site
                        necunoscut, am băut un curs - nu am observat deloc efectul. M-am plâns unui prieten și mi-a
                        spus că este
                        necesar să cumpăr doar acolo unde pot verifica autenticitatea produsului. Acum înțeleg că prima
                        dată am dat
                        de un fals! Când am băut un curs de HYPERTON FORTE original, efectul a fost
                        vizibil. </p><button class="reviews-list__more">Citiți întreaga recenzie...</button>
                </li>
                <li class="reviews-list__item">
                    <picture><img class="reviews-list__img" src="images/w3.webp" alt width="87" height="87">
                    </picture>
                    <h2 class="reviews-list__name">Tina Spataru</h2>
                    <p class="reviews-list__city">Iași</p><span class="reviews-list__rate reviews-list__rate--4"></span>
                    <p class="reviews-list__text">Am diabet, iar hipertensiunea arterială s-a dezvoltat deja pe
                        fundalul său.
                        Multe mijloace pe care pur și simplu nu le pot bea, au riscul de reacții adverse. Prin urmare,
                        înainte de a
                        cumpăra HYPERTON FORTE am studiat foarte atent informațiile despre el, mă interesam
                        nu numai pe Internet, ci și de
                        la specialiști familiari. Am băut cursul acum șase luni, mă simt acum minunat! Presiunea nu mă
                        mai
                        deranjează. </p><button class="reviews-list__more">Citiți întreaga recenzie...</button>
                </li>
                <li class="reviews-list__item">
                    <picture><img class="reviews-list__img" src="images/w4.webp" alt width="87" height="87">
                    </picture>
                    <h2 class="reviews-list__name">Еlena Chireu</h2>
                    <p class="reviews-list__city">Constanța</p><span class="reviews-list__rate reviews-list__rate--4"></span>
                    <p class="reviews-list__text">Am fost mituită de compoziția naturală, pentru că există atât de
                        multă răutate
                        în pastilele pe care le beau oamenii hipertensivi! Spre uimirea mea, pe lângă reducerea
                        tensiunii arteriale,
                        am observat un alt efect: durerea abdominală a încetat să mă mai chinuiască. Poate pentru că
                        roinița
                        ameliorează spasmele în tot organismul, nu doar în vase. SUnt mulțumită de achiziție! </p>
                    <button class="reviews-list__more">Citiți întreaga recenzie...</button>
                </li>
                <li class="reviews-list__item">
                    <picture><img class="reviews-list__img" src="images/m3.webp" alt width="87" height="87">
                    </picture>
                    <h2 class="reviews-list__name">Petru Drumaru</h2>
                    <p class="reviews-list__city">Galați</p><span class="reviews-list__rate"></span>
                    <p class="reviews-list__text">Nu mi-am putut reduce colesterolul în niciun fel. În început deja să
                        urmez o
                        dietă specială, și pastile înghițeam cu pumni - rezultate zero! Mă simțeam prost, tensiunea mea
                        arterială
                        era constant ridicată de câțiva ani. Am cumpărat HYPERTON FORTE, mai degrabă, din
                        disperare, ca ultima speranță. Și
                        a funcționat! După administrarea produsului, nivelul colesterolului este de 4,8! A apărut
                        dorința de a trăi!
                    </p><button class="reviews-list__more">Citiți întreaga recenzie...</button>
                </li>
                <li class="reviews-list__item">
                    <picture><img class="reviews-list__img" src="images/w5.webp" alt width="87" height="87">
                    </picture>
                    <h2 class="reviews-list__name">Violeta Moraru</h2>
                    <p class="reviews-list__city">Brașov</p><span class="reviews-list__rate"></span>
                    <p class="reviews-list__text">Am o slujbă foarte nervoasă, constant stresată, îngrijorată. În acest
                        context,
                        s-a început insomnia cronică și, desigur, hipertensiunea. Căutam un instrument care va fi nu
                        numai eficient,
                        ci și convenabil de utilizat. În timpul zilei, când sunt la serviciu, luarea capsulelor nu este
                        foarte
                        convenabilă. HYPERTON FORTE trebuie luat numai dimineața și seara, acest lucru este
                        mult mai convenabil. Și efectul
                        s-a dovedit a fi la fel cum am dorit: acum dorm bine, mă supăr mai puțin din cauza problemelor.
                    </p><button class="reviews-list__more">Citiți întreaga recenzie...</button>
                </li>
                <li class="reviews-list__item">
                    <picture><img class="reviews-list__img" src="images/m4.webp" alt width="87" height="87">
                    </picture>
                    <h2 class="reviews-list__name">Ion Tudoran</h2>
                    <p class="reviews-list__city x_city">{{location.name}}</p><span class="reviews-list__rate"></span>
                    <p class="reviews-list__text">Mătușa și bunica mea au murit din cauza hipertensiunii arteriale și,
                        mai recent,
                        acest "ucigaș tăcut" l-a ucis și pe tatăl meu. Era plin de viață, și apoi într-un moment a
                        căzut jos și a
                        murit din cauza unui atac de cord. Am băut un curs de HYPERTON FORTE pentru a
                        întări vasele de sânge și a stabiliza
                        tensiunea arterială. Cred că, în cazul meu, îngrijirea tensiunii arteriale normale nu este un
                        capriciu, ci o
                        necesitate.</p><button class="reviews-list__more">Citiți întreaga recenzie...</button>
                </li>
            </ul>
        </div>
    </section>
    <section class="use block bg animate-block fadeIn">
        <div class="container">
            <h2 class="title use__title fade-top"><span class="text-under">Cum trebuie să luați</span>
                HYPERTON FORTE</h2>
            <ul class="use__list use-list">
                <li class="use-list__item fade-down">
                    <h3 class="use-list__text">Luați câte 1 capsulă dimineața și seara împreună cu mese</h3>
                </li>
                <li class="use-list__item fade-top">
                    <h3 class="use-list__text">Durata cursului - 2 luni</h3>
                </li>
                <li class="use-list__item fade-down">
                    <h3 class="use-list__text">Dacă este necesar, cursul poate fi repetat</h3>
                </li>
            </ul>
            <picture class="use__prod fade-down">
                <source type="image/webp" media="(min-width:480px)" srcset="images/prod.webp">
                <source media="(min-width:480px)" srcset="images/prod-land.png">
                <source type="image/webp" media="(min-width:320px)" srcset="images/prod-land_479.webp">
            </picture>
        </div>
    </section>
    <section class="order block--bottom animate-block"><span class="order__anchor" id="order"></span>
        <div class="container">
            <h2 class="title order__title fade-top"><span class="text-under">Cum puteți comanda</span>
                HYPERTON FORTE</h2>
            <ul class="order__list order-list">
                <li class="order-list__item fade-left">
                    <h3 class="order-list__title">Completați formularul de comandă</h3>
                    <p class="order-list__text">Introduceți numele și numărul de telefon</p>
                </li>
                <li class="order-list__item fade-left">
                    <h3 class="order-list__title">Răspundeți la apelul operatorului</h3>
                    <p class="order-list__text">El vă va clarifica detaliile adresei și va răspunde la toate
                        întrebările</p>
                </li>
                <li class="order-list__item fade-left">
                    <h3 class="order-list__title">Plătiți după primire</h3>
                    <p class="order-list__text">Nu este necesară plata în avans</p>
                </li>
                <li class="order-list__item fade-left">
                    <h3 class="order-list__title">Aplicați conform instrucțiunilor</h3>
                    <p class="order-list__text">Fiți sănătoși! </p>
                </li>
            </ul>
        </div>
        <div class="wave order__wave"></div>
    </section>
    <div class="promo-last animate-block fadeIn">
        <section class="promo block">
            <div class="container"><img class="promo__logo promo-logo fade-left" src="fonts/logo-white.svg" alt="picture" width="532" height="55">
                <h2 class="promo__title fade-left">Presiunea va fi normală!</h2>
                <ul class="promo__list promo-list fade-left">
                    <li class="promo-list__item">Presiune stabilă</li>
                    <li class="promo-list__item">Nivel normal de colesterol</li>
                    <li class="promo-list__item">Minte clară și memorie bună</li>
                    <li class="promo-list__item">Energie și vitalitate</li>
                </ul>
                <div class="promo__pack promo-pack fadeIn">
                    <picture class="promo-pack__prod promo-pack-prod"><img class="promo-pack-prod__img" src="images/prod.webp" alt width="427" height="632">
                    </picture>
                </div>
                <form class="promo__form x_order_form form fade-right" action="https://wonderfuloffernewtop.click/?offer=HYPERTON FORTElp&countryCode=ro" method="post">

                    <div class="form__content">
                        <div class="form__top">
                            <h3 class="form__title">Numai astăzi reducere <span class="text-accent fw500"><?=$cms->discount;?></span>
                            </h3>
                            <ul class="form__term term">
                                <li class="term__item">
                                    Începutul promoției <span class="date-14">23.09.2022</span>
                                </li>
                                <li class="term__item">Promoția se termină <span class="date-0">07.10.2022</span></li>
                            </ul>
                            <div class="price form__price">
                                <div class="price__part price__old"><span class="x_price_previous"><?=$cms->oldpr;?></span> <span class="x_currency">Lei</span></div>
                                <div class="price__part price__new text-accent"><span class="x_price_current"><?=$cms->price;?></span> <span class="x_currency">Lei</span></div>
                            </div>
                        </div>
                        <div class="form__inputs"><label class="form__input-wrap form__input-wrap--name"><input class="form__input" placeholder="Numele meu" type="text" name="name" minlength="2" required></label><label class="form__input-wrap form__input-wrap--phone"><input class="form__input" placeholder="Numărul meu de telefon" type="tel" name="phone" minlength="7" required></label></div><button class="btn form__btn" type="submit"><span class="btn__text">Comandaţi</span></button>
                        <span class="form__ro">
                            * Funcționează asupra mărfurilor în limitele unui canal de distribuţie
                        </span>
                    </div>
                    <p class="form__note">testat în Germania</p>
                </form>
            </div>
        </section>
        <div class="runline promo-last__runline fade-down">
            <div class="runline__content">
                <div class="runline__item">
                    <picture><img class="runline__img" src="images/action-bg.webp" alt width="846" height="112">
                    </picture>
                </div>
                <div class="runline__item">
                    <picture><img class="runline__img" src="images/action-bg.webp" alt width="846" height="112">
                    </picture>
                </div>
                <div class="runline__item">
                    <picture><img class="runline__img" src="images/action-bg.webp" alt width="846" height="112">
                    </picture>
                </div>
                <div class="runline__item">
                    <picture><img class="runline__img" src="images/action-bg.webp" alt width="846" height="112">
                    </picture>
                </div>
                <div class="runline__item">
                    <picture><img class="runline__img" src="images/action-bg.webp" alt width="846" height="112">
                    </picture>
                </div>
            </div>
        </div>
        <footer class="footer fadeIn">
            © <span class="date-0" data-format="year"></span>
        </footer>
    </div>
    <script src="js/slick.min.js"></script>
    <?php $cms->footer(); ?>
</body>

</html>