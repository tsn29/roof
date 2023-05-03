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

/* shop/template/common/footer.twig */
class __TwigTemplate_3d4370c446f9e83234222cc351d3d1ab1427e11c4c69366be9d0cef0c52ed01f extends \Twig\Template
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
        echo "\t</main>

\t<footer class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer__content\">
\t\t\t\t<div class=\"footer__top\">
\t\t\t\t\t<a class=\"footer__logo\" href=\"#\">
\t\t\t\t\t\t<img class=\"footer__logo-img\" src=\"assets/img/logo-white.png\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"footer__menu\">
\t\t\t\t\t\t<li class=\"footer__menu-item\">
\t\t\t\t\t\t\t<a class=\"footer__menu-link\" href=\"about.html\">О компании</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"footer__menu-item\">
\t\t\t\t\t\t\t<a class=\"footer__menu-link\" href=\"#\">Публичная оферта</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"footer__menu-item\">
\t\t\t\t\t\t\t<a class=\"footer__menu-link\" href=\"#\">Политика конфиденциальности</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"social-links footer__social-links\">
\t\t\t\t\t\t<div class=\"social-links__list\">
\t\t\t\t\t\t\t<a class=\"social-links__link\" href=\"https://www.instagram.com/\" target=\"_blank\">
\t\t\t\t\t\t\t\t<img src=\"assets/img/icons/social/instagram-white.svg\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"social-links__link\" href=\"https://www.facebook.com/\" target=\"_blank\">
\t\t\t\t\t\t\t\t<img src=\"assets/img/icons/social/facebook-white.svg\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"social-links__link\" href=\"https://www.youtube.com/\" target=\"_blank\">
\t\t\t\t\t\t\t\t<img src=\"assets/img/icons/social/youtube-white.svg\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__bottom\">
\t\t\t\t\t<div class=\"footer__bottom-main\">
\t\t\t\t\t\t<div class=\"footer__copyright\">
\t\t\t\t\t\t\t<div class=\"footer__copyright-title\">Группа компаний «TWR Group»</div>
\t\t\t\t\t\t\t<div class=\"footer__copyright-text\">© 2023. Все права защищены</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"footer__company\" href=\"#\">
\t\t\t\t\t\t\t<img class=\"footer__company-img\" src=\"assets/img/footer-companies/terrawood.png\" alt=\"\">
\t\t\t\t\t\t\t<img class=\"footer__company-img footer__company-img--hover\"
\t\t\t\t\t\t\t\tsrc=\"assets/img/footer-companies/terrawood-hover.png\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"footer__company\" href=\"#\">
\t\t\t\t\t\t\t<img class=\"footer__company-img\" src=\"assets/img/footer-companies/noblex.png\" alt=\"\">
\t\t\t\t\t\t\t<img class=\"footer__company-img footer__company-img--hover\"
\t\t\t\t\t\t\t\tsrc=\"assets/img/footer-companies/noblex-hover.png\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"footer__company\" href=\"#\">
\t\t\t\t\t\t\t<img class=\"footer__company-img\" src=\"assets/img/footer-companies/metrotile.png\" alt=\"\">
\t\t\t\t\t\t\t<img class=\"footer__company-img footer__company-img--hover\"
\t\t\t\t\t\t\t\tsrc=\"assets/img/footer-companies/metrotile-hover.png\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t</footer>

\t<div class=\"cookie\">
\t\t<div class=\"container\">
\t\t\t<div class=\"cookie__content\">
\t\t\t\t<div class=\"text cookie__text\">Мы используем файлы cookies чтобы сайт работал лучше и быстрее. Надеемся,
\t\t\t\t\tвы не против.</div>
\t\t\t\t<button class=\"btn btn--border cookie__btn\">Хорошо</button>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"popup\" data-name=\"callback\">
\t\t<div class=\"popup__content\">
\t\t\t<form class=\"popup-form popup__form js-form\" autocomplete=\"off\">
\t\t\t\t<img class=\"popup-form__logo\" src=\"assets/img/logo.png\" alt=\"\">
\t\t\t\t<div class=\"title5 popup-form__title\">Оставьте заявку, и мы свяжемся с Вами!</div>
\t\t\t\t<div class=\"popup-form__main\">
\t\t\t\t\t<div class=\"form-field popup-form__item\">
\t\t\t\t\t\t<input class=\"input form-field__input\" type=\"text\" placeholder=\"Ваше имя\" data-validate=\"name\"
\t\t\t\t\t\t\tdata-label=\"имя\">
\t\t\t\t\t\t<span class=\"form-field__error\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-field popup-form__item\">
\t\t\t\t\t\t<input class=\"input form-field__input\" type=\"text\" placeholder=\"Телефон\" data-validate=\"phone\"
\t\t\t\t\t\t\tdata-label=\"телефон\">
\t\t\t\t\t\t<span class=\"form-field__error\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-field popup-form__item\">
\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t<select class=\"select__field form-field__input\" data-validate=\"empty\" data-label=\"город\">
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Город</option>
\t\t\t\t\t\t\t\t<option value=\"1\">Москва</option>
\t\t\t\t\t\t\t\t<option value=\"2\">Астана</option>
\t\t\t\t\t\t\t\t<option value=\"3\">Новосибирск</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"form-field__error\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"btn btn--border popup-form__btn\">Отправить</button>
\t\t\t\t\t<div class=\"popup-form__privacy\">Нажимая кнопку “Отправить”, вы соглашаетесь на обработку
\t\t\t\t\t\t<a href=\"#\">персональных данных</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<button class=\"popup__close\"></button>
\t\t</div>
\t</div>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "shop/template/common/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop/template/common/footer.twig", "");
    }
}
