<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* shop/template/common/home.twig */
class __TwigTemplate_ceacb0008be19ddc3d02c3bbc63d3e910a95b92283a80b29b46f044d5129507c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "

<section class=\"banner\">
\t\t\t<div class=\"banner__content\">
\t\t\t\t<div class=\"banner__info\">
\t\t\t\t\t<h1 class=\"title1 banner__title\">TerraRoof.</h1>
\t\t\t\t\t<h2 class=\"title2 banner__subtitle\">Кровля для самых требовательных</h2>
\t\t\t\t\t<div class=\"banner__features\">
\t\t\t\t\t\t<div class=\"banner__features-title\">Полностью за наш счет:</div>
\t\t\t\t\t\t<div class=\"banner__features-list\">
\t\t\t\t\t\t\t<div class=\"banner__feature\">
\t\t\t\t\t\t\t\t<img class=\"banner__feature-icon\" src=\"/catalog/view/theme/shop/assets/img/icons/check-fill.svg\" alt=\"\">
\t\t\t\t\t\t\t\t<span class=\"banner__feature-text\">Доставка</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"banner__feature\">
\t\t\t\t\t\t\t\t<img class=\"banner__feature-icon\" src=\"/catalog/view/theme/shop/assets/img/icons/check-fill.svg\" alt=\"\">
\t\t\t\t\t\t\t\t<span class=\"banner__feature-text\">Обучение монтажу</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"banner__feature\">
\t\t\t\t\t\t\t\t<img class=\"banner__feature-icon\" src=\"/catalog/view/theme/shop/assets/img/icons/check-fill.svg\" alt=\"\">
\t\t\t\t\t\t\t\t<span class=\"banner__feature-text\">Аренда оборудования</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"btn banner__btn\" href=\"#\">Каталог продукции</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"banner__slider swiper\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t<?foreach (\$banners as \$b){?>
\t\t\t\t\t\t<div class=\"banner__slide swiper-slide\">
\t\t\t\t\t\t<?if(\$b['link']!=''){?>
\t\t\t\t\t\t<a href=\"<?=\$b['link']?>\"><img src=\"<?=\$b['image']?>\" alt=\"<?=\$b['title']?>\"></a>
\t\t\t\t\t\t<?} else {?>
\t\t\t\t\t\t\t<img src=\"<?=\$b['image']?>\" alt=\"<?=\$b['title']?>\">
\t\t\t\t\t\t<?}?>
\t\t\t\t\t\t</div>
\t\t\t\t\t<?}?>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"banner__pagination\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"main-product main__main-product\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"main-product__content\">
\t\t\t\t\t<div class=\"main-product__img\">
\t\t\t\t\t\t<img src=\"/catalog/view/theme/shop/assets/img/main-product.jpg\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"main-product__info\">
\t\t\t\t\t\t<div class=\"tags main-product__tags\">
\t\t\t\t\t\t\t<div class=\"tags__list\">
\t\t\t\t\t\t\t\t<div class=\"tag tags__item\">
\t\t\t\t\t\t\t\t\t<img class=\"tag__icon\" src=\"/catalog/view/theme/shop/assets/img/icons/tag.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"tag__text\">хит продаж</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h2 class=\"title2 main-product__title\">Композитная черепица</h2>
\t\t\t\t\t\t<div class=\"text-content text-dropdown main-product__text-content\" data-droptext-length=\"108\"
\t\t\t\t\t\t\tdata-droptext-width=\"767\">
\t\t\t\t\t\t\tИдеальна для резко-континентального климата Казахстана.
\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\tЗадерживает сход снега и не парусит при штормовых ветрах. Не нагревается, не выцветает, не
\t\t\t\t\t\t\tгорит.
\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\tГарантированно не требует ремонта более 40 лет.
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"btn main-product__btn\" href=\"#\">Перейти в каталог</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"callback-bg main__section\" id=\"callback\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"callback-bg__content\" style=\"background-image: url('assets/img/callback-bg.jpg');\">
\t\t\t\t\t<div class=\"callback-bg__main\">
\t\t\t\t\t\t<h2 class=\"title2 callback-bg__title\">Заменим старую кровлю <br> на новую за 2 недели!</h2>
\t\t\t\t\t\t<form class=\"callback-form callback-form--row callback-bg__form js-form\" autocomplete=\"off\">
\t\t\t\t\t\t\t<h3 class=\"title5 title5--sm-white callback-form__title\">Заказать звонок специалиста</h3>
\t\t\t\t\t\t\t<div class=\"callback-form__main callback-form__main--row\">
\t\t\t\t\t\t\t\t<div class=\"form-field callback-form__item\">
\t\t\t\t\t\t\t\t\t<input class=\"input form-field__input\" type=\"text\" placeholder=\"Ваше имя\"
\t\t\t\t\t\t\t\t\t\tdata-validate=\"name\" data-label=\"имя\">
\t\t\t\t\t\t\t\t\t<span class=\"form-field__error form-field__error--md-absolute\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-field callback-form__item\">
\t\t\t\t\t\t\t\t\t<input class=\"input form-field__input\" type=\"text\" placeholder=\"Телефон\"
\t\t\t\t\t\t\t\t\t\tdata-validate=\"phone\" data-label=\"телефон\">
\t\t\t\t\t\t\t\t\t<span class=\"form-field__error form-field__error--md-absolute\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button class=\"btn btn--border btn--sm-primary callback-form__btn\">Отправить</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"features main__section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"features__content\">
\t\t\t\t\t<div class=\"features__header\">
\t\t\t\t\t\t<h2 class=\"title2 features__title\">Наши решающие преимущества</h2>
\t\t\t\t\t\t<button class=\"link-more features__more js-open-popup\" data-popup-name=\"callback\">Заказать
\t\t\t\t\t\t\tпросчет Вашего проекта с 3D
\t\t\t\t\t\t\tвизуализацией</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"features__list\">
\t\t\t\t\t\t<div class=\"features__item accordion accordion--mobile\">
\t\t\t\t\t\t\t<div class=\"features__item-line wow animate__fadeIn\"></div>
\t\t\t\t\t\t\t<h3 class=\"title5 features__item-title accordion__btn wow animate__fadeIn\"
\t\t\t\t\t\t\t\tdata-wow-delay=\"0.3s\" data-wow-offset=\"265\">Эстетика на века:</h3>
\t\t\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t\t\t<div class=\"accordion__main\">
\t\t\t\t\t\t\t\t\t<p class=\"text features__item-text wow animate__fadeIn\" data-wow-delay=\"0.6s\"
\t\t\t\t\t\t\t\t\t\tdata-wow-offset=\"240\">кровельные материалы TerraRoof не выцветают, не
\t\t\t\t\t\t\t\t\t\tподвергаются коррозии и не теряют первоначальный вид.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"features__item accordion accordion--mobile\">
\t\t\t\t\t\t\t<div class=\"features__item-line wow animate__fadeIn\"></div>
\t\t\t\t\t\t\t<h3 class=\"title5 features__item-title accordion__btn wow animate__fadeIn\"
\t\t\t\t\t\t\t\tdata-wow-delay=\"0.3s\" data-wow-offset=\"265\">Идеальная шумо
\t\t\t\t\t\t\t\t-&nbsp;и&nbsp;теплоизоляция:</h3>
\t\t\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t\t\t<div class=\"accordion__main\">
\t\t\t\t\t\t\t\t\t<p class=\"text features__item-text wow animate__fadeIn\" data-wow-delay=\"0.6s\"
\t\t\t\t\t\t\t\t\t\tdata-wow-offset=\"240\">под нашей крышей не потревожит ни стук дождя, ни
\t\t\t\t\t\t\t\t\t\tшум метели, температура в Вашем доме комфортна при любой погоде.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"features__item accordion accordion--mobile\">
\t\t\t\t\t\t\t<div class=\"features__item-line wow animate__fadeIn\"></div>
\t\t\t\t\t\t\t<h3 class=\"title5 features__item-title accordion__btn wow animate__fadeIn\"
\t\t\t\t\t\t\t\tdata-wow-delay=\"0.3s\" data-wow-offset=\"265\">Гарантийный срок:</h3>
\t\t\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t\t\t<div class=\"accordion__main\">
\t\t\t\t\t\t\t\t\t<p class=\"text features__item-text wow animate__fadeIn\" data-wow-delay=\"0.6s\"
\t\t\t\t\t\t\t\t\t\tdata-wow-offset=\"240\">гарантийный срок от 30 до 100+ лет в зависимости
\t\t\t\t\t\t\t\t\t\tот материала. Выбор TerraRoof - Ваше грамотное вложение средств.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"features__item accordion accordion--mobile\">
\t\t\t\t\t\t\t<div class=\"features__item-line wow animate__fadeIn\"></div>
\t\t\t\t\t\t\t<h3 class=\"title5 features__item-title accordion__btn wow animate__fadeIn\"
\t\t\t\t\t\t\t\tdata-wow-delay=\"0.3s\" data-wow-offset=\"265\">Безупречный сервис:</h3>
\t\t\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t\t\t<div class=\"accordion__main\">
\t\t\t\t\t\t\t\t\t<p class=\"text features__item-text wow animate__fadeIn\" data-wow-delay=\"0.6s\"
\t\t\t\t\t\t\t\t\t\tdata-wow-offset=\"240\">более 4000 довольных клиентов. Мы ведем проект
\t\t\t\t\t\t\t\t\t\tот бесплатного создания 3Д модели до полного авторского надзора и приема
\t\t\t\t\t\t\t\t\t\tоставшихся материалов. Ваше время - наш приоритет.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"article main__section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"article__content\">
\t\t\t\t\t<div class=\"article__info\">
\t\t\t\t\t\t<h2 class=\"title2 article__title\"><strong>Бесплатная</strong> 3D‑визуализация</h2>
\t\t\t\t\t\t<div class=\"text article__text\">
\t\t\t\t\t\t\t<p>Не получается представить, как будет выглядеть Ваша крыша с новым материалом? При покупке
\t\t\t\t\t\t\t\tкровли мы создаем 3D-визуализацию в подарок!</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"btn article__btn article__btn--desktop js-open-popup\"
\t\t\t\t\t\t\tdata-popup-name=\"callback\">Узнать
\t\t\t\t\t\t\tподробнее</button>
\t\t\t\t\t\t<a class=\"btn article__btn article__btn--mobile\" href=\"#\">Каталог продукции</a>
\t\t\t\t\t</div>
\t\t\t\t\t<img class=\"article__img\" src=\"/catalog/view/theme/shop/assets/img/article.jpg\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"offer main__section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"offer__content\">
\t\t\t\t\t<div class=\"offer__img\">
\t\t\t\t\t\t<img src=\"/catalog/view/theme/shop/assets/img/offer.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"offer__info\">
\t\t\t\t\t\t<div class=\"tags offer__tags\">
\t\t\t\t\t\t\t<div class=\"tags__list\">
\t\t\t\t\t\t\t\t<div class=\"tag tags__item\">
\t\t\t\t\t\t\t\t\t<img class=\"tag__icon\" src=\"/catalog/view/theme/shop/assets/img/icons/sale.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"tag__text\">акция -20%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"title2 title2--white offer__title\">Лучшее предложение</div>
\t\t\t\t\t\t<p class=\"text text--white offer__text\">Композитная черепица Metrotile</p>
\t\t\t\t\t\t<a class=\"btn btn--white offer__btn\" href=\"#\">Заказать выгодно</a>
\t\t\t\t\t</div>
\t\t\t\t\t<img class=\"offer__bg\" src=\"/catalog/view/theme/shop/assets/img/icons/logo-blue.svg\" alt=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"video-section main__section\">
\t\t\t<div class=\"video-section__main\">
\t\t\t\t<div class=\"container video-section__container\">
\t\t\t\t\t<div class=\"video-section__body\">
\t\t\t\t\t\t<h3 class=\"title3 video-section__title\">Индивидуальный тур по крышам – уникальная возможность
\t\t\t\t\t\t\tоценить объекты TerraRoof</h3>
\t\t\t\t\t\t<button class=\"btn btn--xs-border video-section__btn js-open-popup\"
\t\t\t\t\t\t\tdata-popup-name=\"callback\">Подобрать время</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"video-section__video-box\">
\t\t\t\t<video class=\"video-section__video\" src=\"/catalog/view/theme/shop/assets/video/main.mp4\" loop=\"loop\" autoplay preload=\"auto\"
\t\t\t\t\tmuted></video>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"categories-section main__section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"categories-section__content\">
\t\t\t\t\t<h2 class=\"title2 categories-section__title\">Сэкономьте время - купите все для кровли в TerraRoof
\t\t\t\t\t</h2>
\t\t\t\t\t<div class=\"categories-section__list\">
\t\t\t\t\t\t<a class=\"categories-section__item\" href=\"#\">
\t\t\t\t\t\t\t<h3 class=\"categories-section__item-title\">
\t\t\t\t\t\t\t\t<span>Кровельные материалы</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"categories-section__item categories-section__item--active\" href=\"#\">
\t\t\t\t\t\t\t<h3 class=\"categories-section__item-title\">
\t\t\t\t\t\t\t\t<span>Мансардные окна</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"categories-section__item\" href=\"#\">
\t\t\t\t\t\t\t<h3 class=\"categories-section__item-title\">
\t\t\t\t\t\t\t\t<span>Гидроизоляция</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"categories-section__item categories-section__item--img\">
\t\t\t\t\t\t\t<img class=\"categories-section__item-bg\" src=\"/catalog/view/theme/shop/assets/img/categories-section/1.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"categories-section__item\" href=\"#\">
\t\t\t\t\t\t\t<h3 class=\"categories-section__item-title\">
\t\t\t\t\t\t\t\t<span>Водосточные системы</span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"categories-section__item categories-section__item--img\">
\t\t\t\t\t\t\t<img class=\"categories-section__item-bg\" src=\"/catalog/view/theme/shop/assets/img/categories-section/2.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"callback-bg main__section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"callback-bg__content\" style=\"background-image: url('assets/img/callback-bg2.jpg');\">
\t\t\t\t\t<div class=\"callback-bg__main\">
\t\t\t\t\t\t<h2 class=\"title2 callback-bg__title\">Самый большой склад <br> в Центральной Азии 30 000 кв.м
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<form class=\"callback-form callback-form--row callback-bg__form js-form\" autocomplete=\"off\">
\t\t\t\t\t\t\t<h3 class=\"title5 title5--sm-white callback-form__title\">Отгрузим день в день, свяжитесь с
\t\t\t\t\t\t\t\tнами</h3>
\t\t\t\t\t\t\t<div class=\"callback-form__main callback-form__main--row\">
\t\t\t\t\t\t\t\t<div class=\"form-field callback-form__item\">
\t\t\t\t\t\t\t\t\t<input class=\"input form-field__input\" type=\"text\" placeholder=\"Ваше имя\"
\t\t\t\t\t\t\t\t\t\tdata-validate=\"name\" data-label=\"имя\">
\t\t\t\t\t\t\t\t\t<span class=\"form-field__error form-field__error--md-absolute\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-field callback-form__item\">
\t\t\t\t\t\t\t\t\t<input class=\"input form-field__input\" type=\"text\" placeholder=\"Телефон\"
\t\t\t\t\t\t\t\t\t\tdata-validate=\"phone\" data-label=\"телефон\">
\t\t\t\t\t\t\t\t\t<span class=\"form-field__error form-field__error--md-absolute\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button class=\"btn btn--border btn--sm-primary callback-form__btn\">Отправить</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"images-section main__section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"images-section__content\">
\t\t\t\t\t<h2 class=\"title2 images-section__title\">Мы сделаем Ваш дом объектом восхищения</h2>
\t\t\t\t\t<div class=\"images-section__slider-box\">
\t\t\t\t\t\t<div class=\"images-section__slider swiper\">
\t\t\t\t\t\t\t<div class=\"swiper-wrapper images-section__slider-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"images-section__slide swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"swiper images-section__inner-slider\">
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/1.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/2.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/3.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/4.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/5.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/6.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/7.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/8.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/9.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/10.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"images-section__slide swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"swiper images-section__inner-slider\">
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/1.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/2.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/3.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/4.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/5.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/6.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/7.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/8.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/9.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/10.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"images-section__slide swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"swiper images-section__inner-slider\">
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/1.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/2.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/3.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/4.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/5.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/6.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/7.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/8.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/9.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/10.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"images-section__slide swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"swiper images-section__inner-slider\">
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/1.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/2.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/3.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/4.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/5.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/6.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/7.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/8.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/9.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/10.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"images-section__slide swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"swiper images-section__inner-slider\">
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/1.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/2.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/3.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/4.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/5.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/6.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/7.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/8.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/9.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide images-section__inner-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"images-section__img\" src=\"/catalog/view/theme/shop/assets/img/house-images/10.jpg\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"images-section__slide images-section__slide--btn swiper-slide\">
\t\t\t\t\t\t\t\t\t<button class=\"images-section__slide-btn js-open-popup\" data-popup-name=\"callback\">
\t\t\t\t\t\t\t\t\t\t<span>Подобрать</span>
\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/shop/assets/img/icons/logo-blue.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"images-section__pagination\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"btn images-section__mobile-btn js-open-popup\" data-popup-name=\"callback\">
\t\t\t\t\t\tПодобрать
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"info-section main__section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"info-section__content\">
\t\t\t\t\t<div class=\"info-section__main\">
\t\t\t\t\t\t<h2 class=\"title2 info-section__title\">Возьмем на себя <strong>обучение Вашей бригады</strong>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<button class=\"link-more link-more--primary info-section__more js-open-popup\"
\t\t\t\t\t\t\tdata-popup-name=\"callback\">Связаться с техническим
\t\t\t\t\t\t\tотделом</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"video-player info-section__video\" data-src=\"/catalog/view/theme/shop/assets/video/info.mp4\">
\t\t\t\t\t\t<img class=\"video-player__bg\" src=\"/catalog/view/theme/shop/assets/img/info-section.jpg\" alt=\"\">
\t\t\t\t\t\t<button class=\"video-player__play\"></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"partners main__section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"partners__content\">
\t\t\t\t\t<h2 class=\"title2 partners__title\">Наши партнеры</h2>
\t\t\t\t\t<div class=\"partners__slider-box\">
\t\t\t\t\t\t<div class=\"partners__slider swiper\">
\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"swiper-slide partners__slide\">
\t\t\t\t\t\t\t\t\t<img class=\"partners__img\" src=\"/catalog/view/theme/shop/assets/img/partners/bazis-a.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"swiper-slide partners__slide\">
\t\t\t\t\t\t\t\t\t<img class=\"partners__img\" src=\"/catalog/view/theme/shop/assets/img/partners/bi-group.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"swiper-slide partners__slide\">
\t\t\t\t\t\t\t\t\t<img class=\"partners__img\" src=\"/catalog/view/theme/shop/assets/img/partners/mabetex.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"swiper-slide partners__slide\">
\t\t\t\t\t\t\t\t\t<img class=\"partners__img\" src=\"/catalog/view/theme/shop/assets/img/partners/bazis-a.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"swiper-slide partners__slide\">
\t\t\t\t\t\t\t\t\t<img class=\"partners__img\" src=\"/catalog/view/theme/shop/assets/img/partners/bi-group.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"swiper-slide partners__slide\">
\t\t\t\t\t\t\t\t\t<img class=\"partners__img\" src=\"/catalog/view/theme/shop/assets/img/partners/mabetex.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"partners__pagination\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"faq main__faq\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"faq__content\">
\t\t\t\t\t<div class=\"faq__info\">
\t\t\t\t\t\t<h2 class=\"title2 faq__title\">Ответы на ваши вопросы</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"faq__list\">
\t\t\t\t\t\t<div class=\"faq__item accordion\">
\t\t\t\t\t\t\t<button class=\"faq__item-header accordion__btn\">
\t\t\t\t\t\t\t\tХочу заменить старую кровлю. Как это будет происходить?
\t\t\t\t\t\t\t\t<span class=\"faq__item-arrow\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t\t\t<div class=\"accordion__main faq__item-main\">
\t\t\t\t\t\t\t\t\t<div class=\"text faq__item-text\">
\t\t\t\t\t\t\t\t\t\t<p>Мы предоставляем услугу ре-руфинга (замены устаревшей кровли) в любое время
\t\t\t\t\t\t\t\t\t\t\tгода. В среднем процесс занимает от 2-ух недель, в течение которых смена
\t\t\t\t\t\t\t\t\t\t\tкровельного покрытия происходит частями. Таким образом, хозяевам дома нет
\t\t\t\t\t\t\t\t\t\t\tнеобходимости съезжать или каким-то другим образом менять привычный ритм
\t\t\t\t\t\t\t\t\t\t\tжизни. Более того, благодаря нашей инновационной линейке скрытого крепления
\t\t\t\t\t\t\t\t\t\t\tв некоторых случаях можно уложить новую черепичную крышу поверх
\t\t\t\t\t\t\t\t\t\t\tсуществующей, экономя время и деньги на демонтаже. Точный ответ для вашего
\t\t\t\t\t\t\t\t\t\t\tслучая сможет дать эксперт после осмотра.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"faq__item accordion\">
\t\t\t\t\t\t\t<button class=\"faq__item-header accordion__btn\">
\t\t\t\t\t\t\t\tПри какой погоде можно делать монтаж?
\t\t\t\t\t\t\t\t<span class=\"faq__item-arrow\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t\t\t<div class=\"accordion__main faq__item-main\">
\t\t\t\t\t\t\t\t\t<div class=\"text faq__item-text\">
\t\t\t\t\t\t\t\t\t\t<p>Переживаете, что для монтажа кровли нужны идеальные погодные условия? Рады
\t\t\t\t\t\t\t\t\t\t\tзаверить вас, что это не так. Компания TerraRoof имеет опыт и знания, чтобы
\t\t\t\t\t\t\t\t\t\t\tзаменить старую кровлю или уложить новый кровельный материал в любых
\t\t\t\t\t\t\t\t\t\t\tпогодных условиях, будь то жаркое лето или зима с температурой до -30
\t\t\t\t\t\t\t\t\t\t\tградусов. Единственным ограничением может быть штормовой ветер, но это
\t\t\t\t\t\t\t\t\t\t\tредкое явление, которое не длится долго и не может критично повлиять на ход
\t\t\t\t\t\t\t\t\t\t\tработ. Наши высококвалифицированные эксперты, обученные по международным
\t\t\t\t\t\t\t\t\t\t\tстандартам, с многолетним опытом работы и глубоким знанием всех тонкостей
\t\t\t\t\t\t\t\t\t\t\tклиматических условий Казахстана смогут сделать монтаж в любой сезон.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"faq__item accordion\">
\t\t\t\t\t\t\t<button class=\"faq__item-header accordion__btn\">
\t\t\t\t\t\t\t\tКакой материал подходит для экстремальных погодных условий?
\t\t\t\t\t\t\t\t<span class=\"faq__item-arrow\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t\t\t<div class=\"accordion__main faq__item-main\">
\t\t\t\t\t\t\t\t\t<div class=\"text faq__item-text\">
\t\t\t\t\t\t\t\t\t\t<p>Вся представленная компанией TerraRoof продукция подобрана исходя из знания
\t\t\t\t\t\t\t\t\t\t\tрезко-континентального климата Казахстана. Все бренды, включая европейские
\t\t\t\t\t\t\t\t\t\t\tмарки кровельных покрытий, могут десятилетиями выдерживать воздействие
\t\t\t\t\t\t\t\t\t\t\tэкстремальных погодных условий, включая ветер, жару, влажность и дождь.
\t\t\t\t\t\t\t\t\t\t\tTerraRoof располагает многочисленными международными отчетами об испытаниях
\t\t\t\t\t\t\t\t\t\t\tи фактическими результатами полевых работ, подтверждающими, что продукция
\t\t\t\t\t\t\t\t\t\t\tустойчива к землетрясениям, пожарам и замораживанию / оттаиванию и может
\t\t\t\t\t\t\t\t\t\t\tвыдерживать ураганные ветра со скоростью до 193 км/ч. При минимальном объеме
\t\t\t\t\t\t\t\t\t\t\tпериодического технического обслуживания выбранная кровля прослужит
\t\t\t\t\t\t\t\t\t\t\tдесятилетия.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"faq__item accordion\">
\t\t\t\t\t\t\t<button class=\"faq__item-header accordion__btn\">
\t\t\t\t\t\t\t\tТочно ли все работы будут сделаны в срок? Какие я получу гарантии?
\t\t\t\t\t\t\t\t<span class=\"faq__item-arrow\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"accordion__content\">
\t\t\t\t\t\t\t\t<div class=\"accordion__main faq__item-main\">
\t\t\t\t\t\t\t\t\t<div class=\"text faq__item-text\">
\t\t\t\t\t\t\t\t\t\t<p>Репутация компании TerraRoof является для нас первостепенной, поэтому мы
\t\t\t\t\t\t\t\t\t\t\tвсегда выполняем все договорные обязательства точно, качественно и в срок.
\t\t\t\t\t\t\t\t\t\t\tКроме того, наши клиенты защищены гарантиями непосредственно производителей
\t\t\t\t\t\t\t\t\t\t\tматериалов, представленных в нашей линейке. Гарантийные сроки зависят от
\t\t\t\t\t\t\t\t\t\t\tконкретного кровельного материала и составляют от 30 до 100+ (в случае
\t\t\t\t\t\t\t\t\t\t\tсланцевой кровли) лет.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"price-list main__section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"price-list__content\">
\t\t\t\t\t<div class=\"price-list__contacts\">
\t\t\t\t\t\t<div class=\"contact-item price-list__contact\">
\t\t\t\t\t\t\t<h3 class=\"title4 price-list__title\">Узнайте актуальные цены</h3>
\t\t\t\t\t\t\t<a class=\"btn btn--border price-list__btn\" href=\"#\">Скачать прайс</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"contact-item price-list__contact\">
\t\t\t\t\t\t\t<div class=\"contact-item__icon\">
\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/shop/assets/img/icons/location.svg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text text--gray contact-item__name\">Центральный штаб</div>
\t\t\t\t\t\t\t<div class=\"contact-item__value\">г. Астана, ул. Керей, Жанибек хандар, 30</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"contact-item price-list__contact\">
\t\t\t\t\t\t\t<div class=\"contact-item__icon\">
\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/shop/assets/img/icons/message.svg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text text--gray contact-item__name\">Почта:</div>
\t\t\t\t\t\t\t<a class=\"contact-item__value\" href=\"mailto:info@terraroof.kz\">info@terraroof.kz</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"social main__social\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"social__content\">
\t\t\t\t\t<h2 class=\"title2 title2--white social__title\">Мы в социальных сетях</h2>
\t\t\t\t\t<p class=\"text text--white social__text\">Подпишитесь на нас и следите за новостями, акциями и
\t\t\t\t\t\tспец.предложениями!</p>
\t\t\t\t\t<div class=\"social__list\">
\t\t\t\t\t\t<a class=\"social__item\" href=\"https://www.instagram.com/\" target=\"_blank\">
\t\t\t\t\t\t\t<img class=\"social__item-icon\" src=\"/catalog/view/theme/shop/assets/img/icons/social/instagram.svg\" alt=\"\">
\t\t\t\t\t\t\t<span class=\"social__item-text\">Instagram</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"social__item\" href=\"https://www.facebook.com/\" target=\"_blank\">
\t\t\t\t\t\t\t<img class=\"social__item-icon\" src=\"/catalog/view/theme/shop/assets/img/icons/social/facebook.svg\" alt=\"\">
\t\t\t\t\t\t\t<span class=\"social__item-text\">Facebook</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"social__item\" href=\"https://www.youtube.com/\" target=\"_blank\">
\t\t\t\t\t\t\t<img class=\"social__item-icon\" src=\"/catalog/view/theme/shop/assets/img/icons/social/youtube.svg\" alt=\"\">
\t\t\t\t\t\t\t<span class=\"social__item-text\">YouTube</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"social__item\" href=\"https://www.whatsapp.com/\" target=\"_blank\">
\t\t\t\t\t\t\t<img class=\"social__item-icon\" src=\"/catalog/view/theme/shop/assets/img/icons/social/whatsapp.svg\" alt=\"\">
\t\t\t\t\t\t\t<span class=\"social__item-text\">WhatsApp</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"gallery main__gallery\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"gallery__content\">
\t\t\t\t\t<div class=\"gallery__header\">
\t\t\t\t\t\t<h3 class=\"title4 gallery__title gallery__title--long\">Подпишись на наш инстаграм и следи за
\t\t\t\t\t\t\tновостями, акциями и спец.предложениями!</h3>
\t\t\t\t\t\t<a class=\"btn btn--border gallery__btn\" href=\"https://www.instagram.com/\"
\t\t\t\t\t\t\ttarget=\"_blank\">Подписаться</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gallery__list\">
\t\t\t\t\t\t<a class=\"gallery__item\" href=\"https://www.instagram.com/p/CnTT-QcI4WS/\" target=\"_blank\">
\t\t\t\t\t\t\t<img class=\"gallery__img\" src=\"/catalog/view/theme/shop/assets/img/instagram-images/1.jpg\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"gallery__item\" href=\"https://www.instagram.com/p/CngNTTuILS6/\" target=\"_blank\">
\t\t\t\t\t\t\t<img class=\"gallery__img\" src=\"/catalog/view/theme/shop/assets/img/instagram-images/2.jpg\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"gallery__item\" href=\"https://www.instagram.com/p/CnEriSwrxyo/\" target=\"_blank\">
\t\t\t\t\t\t\t<img class=\"gallery__img\" src=\"/catalog/view/theme/shop/assets/img/instagram-images/3.jpg\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"gallery main__section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"gallery__content\">
\t\t\t\t\t<div class=\"gallery__header\">
\t\t\t\t\t\t<h3 class=\"title4 gallery__title\">Подпишись на наш Youtube-канал и следи за новыми видео</h3>
\t\t\t\t\t\t<a class=\"btn btn--border gallery__btn\" href=\"https://www.youtube.com/\"
\t\t\t\t\t\t\ttarget=\"_blank\">Подписаться</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gallery__list\">
\t\t\t\t\t\t<div class=\"youtube-player gallery__item gallery__item--video\"
\t\t\t\t\t\t\tdata-src=\"https://www.youtube.com/embed/Gx543KbuGFY\">
\t\t\t\t\t\t\t<img class=\"youtube-player__preview gallery__img\" src=\"/catalog/view/theme/shop/assets/img/youtube-previews/1.jpg\"
\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t<button class=\"youtube-player__play\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"youtube-player gallery__item gallery__item--video\"
\t\t\t\t\t\t\tdata-src=\"https://www.youtube.com/embed/Gx543KbuGFY\">
\t\t\t\t\t\t\t<img class=\"youtube-player__preview gallery__img\" src=\"/catalog/view/theme/shop/assets/img/youtube-previews/2.jpg\"
\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t<button class=\"youtube-player__play\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"youtube-player gallery__item gallery__item--video\"
\t\t\t\t\t\t\tdata-src=\"https://www.youtube.com/embed/Gx543KbuGFY\">
\t\t\t\t\t\t\t<img class=\"youtube-player__preview gallery__img\" src=\"/catalog/view/theme/shop/assets/img/youtube-previews/3.jpg\"
\t\t\t\t\t\t\t\talt=\"\">
\t\t\t\t\t\t\t<button class=\"youtube-player__play\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<div class=\"callback-box\">
\t\t\t<button class=\"icon-circle callback-box__btn\">
\t\t\t\t<img class=\"icon-circle__icon\" src=\"/catalog/view/theme/shop/assets/img/icons/whatsapp.svg\" alt=\"\">
\t\t\t</button>
\t\t</div>

";
        // line 807
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "shop/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  846 => 807,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop/template/common/home.twig", "");
    }
}
