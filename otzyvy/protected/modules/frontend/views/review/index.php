<?php
require '../../www/defines.php';
require '../../www/application/includes/services.php';

$data['styles'][] = 'service.css';
$data['styles'][] = 'faq.css';
$data['scripts'][] = 'service.js';

$data['title'] = 'Отзывы';
$data['description'] = 'Отзывы клиентов компании РСК&nbsp;&laquo;Молоток&raquo;, документы, видео';
$data['keywords'] = 'отзывы молоток читать';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" xml:lang="ru">
    <?php require DIR_TEMPLATES . 'includes/head.php' ?>
    <body>
        <?php
		require DIR_TEMPLATES . 'includes/header.php';
        ?>
        <div id="main">
            <div class="wrapper">
                <div id="navigation">
                    <ul class="links">
                        <?php
						require DIR_TEMPLATES . 'includes/service/navigation.php';
                        ?>
                    </ul>
                </div>
            </div>
            <div class="wrapper">
                <div id="roller"><img src="/images/banner-roller.png" width="170" height="149" alt="" />
                </div>
            </div>
            <div id="columns">
                <div class="wrapper">
                    <div class="content-wrapper">
                        <div class="content">
                            <?php $paths = '<li><a href="/">Главная страница</a></li>';
							$paths .= '<li><a href="/otzyvy/">Отзывы РСК&nbsp;&laquo;Молоток&raquo;</a></li>';
                            ?>
                            <ul class="path">
                                <?php echo $paths; ?>
                            </ul>
                            <h1 class="cat">Отзывы РСК&nbsp;&laquo;Молоток&raquo;</h1>
                            <div class="add_post">
                                <a onclick="_gaq.push(['_trackEvent', 'Feedback', 'Opinion', 'MSK']);" class="add_review" href="#">Оставить отзыв</a>
                                <?php $this -> renderPartial('/reviewForm/_form', array('model' => new ReviewForm())) ?>
                            </div>
                            <?php $this -> widget('zii.widgets.CListView', array(
									#'ajaxUpdate' => false,
									'dataProvider' => Review::model() -> publicSearch(),
									'itemView' => '_review',
									'template' => "{items}\n{pager}",
									'pager' => array(
										'header' => '',
										'nextPageLabel' => 'вперед &gt;',
										'prevPageLabel' => '&lt; назад',
									),
								));
                            ?>
                        </div>
                    </div>
                    <div class="sidebar left">
                        <?php
						require '../../www/application/templates/includes/project/advantages.php';
                        ?>
                        <div class="otvety">
                            <a href="/otvety/mastera/">Задать вопрос менеджеру</a>
                        </div>
                        <div class="footer"></div>
                    </div>
                    <div class="sidebar right">
                        <div class="other">
                            <img src="/images/sidebar-projects.png" width="74" height="61" alt="" /><a href="/#projects">Ремонт &laquo;под ключ&raquo;</a>
                        </div>
                        <div class="banner">
                            <div class="image">
                                <a href="/content/garantiya.html"><img src="/images/banner-image-5.png" width="156" height="122" alt="" /></a>
                            </div>
                            <div class="description">
                                <a href="/content/garantiya.html">Железная гарантия на все услуги</a>
                            </div>
                        </div>
                        <div class="order">
                            <div class="title">
                                Быстрый заказ
                            </div>
                            <form action="/content/zakaz.html" method="post">
                                <input class="text" type="text" name="name" value="Ваше имя" title="Ваше имя" />
                                <input class="text" type="text" name="phone" value="Ваш телефон" title="Ваш телефон" />
                                <textarea class="text" name="text" title="Что нужно сделать">Что нужно сделать</textarea>
                                <input class="trap" type="text" name="email" value="" />
                                <input name="submit" class="submit" type="submit" value="Отправить" />
                            </form>
                        </div>
                        <div class="footer"></div>
                    </div>
                </div>
            </div>
            <?php
			require DIR_TEMPLATES . 'includes/advantages.php';
            ?>
            <?php
			require DIR_TEMPLATES . 'includes/footer.php';
            ?>
    </body>
</html>
