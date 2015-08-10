<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7, IE=9" />
    <meta name="viewport" content="width=1220" />
    <title>Монтаж натяжных потолков, глянцевые, матовые, металлик</title>
    <meta name="description" content="">
    <meta name="lestinet-site-verification" content="HlrCGO9PBsy6POQaAHsgrd5630" />
    <link href="/v2/styles/reset.css" rel="stylesheet" />
    <link href="/v2/styles/global.css" rel="stylesheet" />
    <link href="/v2/styles/compilation.css" rel="stylesheet" />

    <link href="/v2/nyromodal/styles/nyroModal.css" rel="stylesheet" type="text/css" />
    <script src="/v2/scripts/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="/v2/nyromodal/js/jquery.nyroModal.custom.min.js" type="text/javascript"></script>
    <!--[if IE 6]><script src="/v2/nyromodal/js/jquery.nyroModal-ie6.min.js" type="text/javascript"></script><![endif]-->
    <script src="/v2/scripts/global.js" type="text/javascript"></script>
    <script src="/scripts/service.js" type="text/javascript"></script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-21190109-9']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <script type="text/javascript">
        function ct_load_script() {
            var ct = document.createElement('script'); ct.type = 'text/javascript';
            ct.src = 'http://cc.calltracking.ru/phone.e32ef.392.async.js?nc='+Math.floor(new Date().getTime()/300000);
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ct, s);
        }
        if ( null != window.onload ) { wol = window.onload; window.onload = function() { wol(); ct_load_script(); }
        } else { window.onload = ct_load_script; }
    </script>
    <script type="text/javascript" src="/scripts/gallery/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="/scripts/gallery/gallery.js"></script>
    <link rel="stylesheet" href="/scripts/gallery/jquery.fancybox.css">
    <script>
        $(document).ready(function(){
            var loc = window.location.hash.replace("#","");
            var defaultActive = $('div.tabs-links ul li.active').attr('content');

            $('div.tabs-links li').removeClass('active');
            $('#content div.tabs-content-item').removeClass('active');

            if (loc == "") {loc = defaultActive};

            $('div.tabs-links ul li').each(function(i) {
                var text = $(this).html();
                var content = $(this).attr('content');
                if (loc == content) {
                    $(this).addClass('active');
                    $('#content div.' + content).addClass('active');
                    if(content == 'project') {
                        var project = $('#content div.project').attr('project');
                        $('#content div.project').load('/ajax/projects.php', {
                            'project' : project,
                        });
                    }
                }
                $(this).html('<a href="#'+content+'">'+text+'</a>')
            });
        });
    </script>

    <link href="/styles/ceiling.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="header">
    <div class="viewport">
        <div class="logotype">
            <a href="/"><img src="/v2/images/layout/logotype.png" width="354" height="74" alt="" /></a>
        </div>
        <div class="about">
            <ul>
                <li><a href="/content/o-kompanii.html">О компании</a></li>
                <li><a href="/content/sotrudnichestvo.html">Сотрудничество</a></li>
                <li><a href="/content/preimushestva.html">Преимущества</a></li>
                <li><a href="/content/vakansii.html">Вакансии</a></li>
            </ul>
        </div>
        <div class="contact">
            <div class="phone"><strong>+7 (495) 729-53-30</strong></div>
            <div class="schedule" style="color: #ea3743; font-weight: bold;">звоните, мы работаем без выходных!</div>
            <div class="button"><a href="/content/zvonok.html">Обратный звонок</a></div>
        </div>
        <div class="feedback">
            <ul>
                <li class="testimonials"><span class="icon"></span><a href="/otzyvy/">Отзывы и рекомендации</a></li>
                <li><a href="/otvety/mastera">Задать вопрос мастеру</a></li>
                <li><a href="/content/zakaz.html">Сделать онлайн заказ</a></li>
                <li><a href="/content/kontakti.html">Контактная информация</a></li>
            </ul>
        </div>
    </div>
</div>


<div id="services">
    <div class="viewport">
        <div class="primary">
            <div class="category">
                <div class="name"><a href="/">Ремонт &laquo;под ключ&raquo;</a></div>
                <div class="services">

                                        <h4>Объекты</h4>
                        <ul>
                                                                                                    <li class="">  <a href="/index.html">Квартира</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/ofis.html">Офис</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/kottedzh.html">Коттедж</a></li>
                                    
                                                                                    </ul>
                    
                                        <h4>Помещения</h4>
                    <ul>
                                                                                        <li class="">  <a href="/index.html">Ванная</a></li>
                                
                                                                                                                    <li class="">  <a href="/index.html">Комната</a></li>
                                
                                                                                                                    <li class="">  <a href="/index.html">Кухня</a></li>
                                
                                                                                                                    <li class="">  <a href="/tualet.html">Туалет</a></li>
                                
                                                                        </ul>
                    
                                            <h4>Вид работ</h4>
                        <ul>
                                                                                                    <li class="">  <a href="/okna-pod-kluch.html">Окна под ключ</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/elektrika.html">Электрика</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/santehnika.html">Сантехника</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/slabotochka.html">Слаботочка</a></li>
                                    
                                                                                    </ul>
                                    </div>
            </div>
            <div class="category">
                <div class="name"><a href="/uslugi/potolok.html">Потолок</a></div>
                <div class="services">

                                            <h4>Монтаж</h4>
                        <ul>
                                                                                                
                                        <li class="active">Натяжной</li>
                                    
                                                                                                                                        <li class="">  <a href="/uslugi/potolok/podvesnoy.html">Подвесной</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/potolok/gipsokarton.html">Гипсокартонный</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/potolok/armstrong.html">Армстронг</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/potolok/reechnoiy.html">Реечный</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/potolok/grilyato.html">Грильято</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/potolok/kassetnoy.html">Кассетный</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/potolok/lepnina.html">Лепнина</a></li>
                                    
                                                                                    </ul>
                    
                                            <h4>Ремонт</h4>
                        <ul>
                                                                                                    <li class="">  <a href="/uslugi/potolok/chernovaya-otdelka.html">Черновая отделка</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/potolok/shpaklevka.html">Шпатлевка и выравнивание</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/potolok/shtukaturka.html">Штукатурка</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/potolok/pokraska.html">Покраска</a></li>
                                    
                                                                                    </ul>
                    
                </div>
            </div>
            <div class="category">
                <div class="name"><a href="/uslugi/pol.html">Пол</a></div>
                <div class="services">

                                            <h4>Укладка</h4>
                        <ul>
                                                                                                    <li class="">  <a href="/uslugi/pol/plitka.html">Плитка</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/pol/laminat.html">Ламинат</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/pol/parketnaya-doska.html">Паркетная доска</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/pol/linoleum.html">Линолеум</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/pol/plintus.html">Плинтус</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/pol/kovrolin.html">Ковролин</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/pol/probka.html">Пробковое покрытие</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/pol/polovaya-doska.html">Половая доска</a></li>
                                    
                                                                                    </ul>
                    
                                            <h4>Устройство</h4>
                        <ul>
                                                                                                    <li class="">  <a href="/uslugi/pol/tepliy-pol.html">Теплый пол</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/pol/podium.html">Подиум</a></li>
                                    
                                                                                    </ul>
                    
                                            <h4>Ремонт</h4>
                        <ul>
                                                                                                    <li class="">  <a href="/uslugi/pol/viravnivanie.html">Выравнивание и стяжка</a></li>
                                    
                                                                                    </ul>
                                        <ul class="projects">
                        <li><a href="/uslugi/pol.html">Пол &laquo;под ключ&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <div class="category">
                <div class="name"><a href="/uslugi/stena.html">Стены</a></div>
                <div class="services">

                                            <h4>Монтаж</h4>
                        <ul>
                                                                                                    <li class="">  <a href="/uslugi/stena/lepnina.html">Лепнина</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/stena/peregorodki.html">Стены и перегородки</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/stena/arki.html">Гипсокартонные арки</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/stena/plitka.html">Плитка</a></li>
                                    
                                                                                    </ul>
                    
                                            <h4>Ремонт</h4>
                        <ul>
                                                                                                    <li class="">  <a href="/uslugi/stena/shpaklevka.html">Шпатлевка</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/stena/shtukaturka.html">Штукатурка</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/stena/oboi.html">Оклейка и покраска обоев</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/stena/obshivka.html">Обшивка</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/stena/pokraska.html">Покраска</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/stena/chernovaya-otdelka.html">Черновая отделка</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/stena/shtroblenie.html">Штробление</a></li>
                                    
                                                                                    </ul>
                                                                <ul class="projects">
                                                                                                    <li class="">  <a href="/steni.html">Стены &laquo;под ключ&raquo;</a></li>
                                    
                                                                                    </ul>
                                    </div>
            </div>
            <div class="category">
                <div class="name"><a href="/uslugi/elektrika.html">Электрика</a></div>
                <div class="services">
                                            <ul>
                                                                                                    <li class="">  <a href="/uslugi/elektrika/elektroprovodka.html">Электропроводка</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/elektrika/rozetki.html">Установка розеток</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/elektrika/vikluchateli.html">Монтаж выключателей</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/elektrika/svet.html">Установка световых приборов</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/elektrika/elektrooborudovanie.html">Монтаж электрооборудования</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/elektrika/avtomati-uzo.html">Автоматы, УЗО</a></li>
                                    
                                                                                    </ul>
                                                                <ul class="projects">
                                                                                                    <li class="">  <a href="/elektrika.html">Электрика &laquo;под ключ&raquo;</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/slabotochka.html">Слаботочка &laquo;под ключ&raquo;</a></li>
                                    
                                                                                    </ul>
                                    </div>
            </div>
            <div class="category">
                <div class="name"><a href="/uslugi/santehnika.html">Сантехника</a></div>
                <div class="services">
                                            <h4>Установка</h4>
                        <ul>
                                                                                                    <li class="">  <a href="/index.html">Унитаз</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/santehnika/vanna.html">Ванна</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/santehnika/smesitel.html">Смеситель</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/santehnika/dushevaya-kabina.html">Душевая кабина</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/santehnika/polotencesushitel.html">Полотенцесушитель</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/santehnika/schetchiki-filtri.html">Счетчики и фильтры</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/santehnika/rakoviny.html">Умывальник</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/santehnika/moyka.html">Мойка</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/santehnika/bide.html">Биде</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/santehnika/pissuar.html">Писсуар</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/santehnika/ekran.html">Экранов</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/santehnika/radiator.html">Радиаторов и батарей</a></li>
                                    
                                                                                    </ul>
                    
                                            <h4>Ремонт</h4>
                        <ul>
                                                                                                    <li class="">  <a href="/uslugi/santehnika/razvodka-trub.html">Разводка труб</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/santehnika/remont-trub.html">Устранение засоров</a></li>
                                    
                                                                                    </ul>
                    
                                            <ul class="projects">
                                                                                                    <li class="">  <a href="/santehnika.html">Сантехника &laquo;под ключ&raquo;</a></li>
                                    
                                                                                    </ul>
                                    </div>
            </div>
        </div>
        <div class="secondary">
            <div class="category">
                <div class="name"><a href="/">Остальные услуги</a></div>
                <div class="services">
                                            <ul>
                                                                                                    <li class="">  <a href="/uslugi/mebel.html">Сборка мебели</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/tehnika.html">Подключение техники</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/interyer.html">Работы с интерьером</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/interyer/zhaluzi.html">Жалюзи и светофильтры</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/interyer/shtori.html">Шторы</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/interyer/cleaning.html">Клининговые услуги</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/dver.html">Ремонт дверей</a></li>
                                    
                                                                                                                                    <li class="">  <a href="/uslugi/okno.html">Монтаж и ремонт окон</a></li>
                                    
                                                                                    </ul>
                                    </div>
            </div>
        </div>
    </div>
</div>
