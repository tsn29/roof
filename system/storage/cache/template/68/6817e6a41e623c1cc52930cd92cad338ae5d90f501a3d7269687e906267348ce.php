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

/* shop/template/common/header.twig */
class __TwigTemplate_ad71588591f66ecba802528c0bd25b8b9cdb9f55e52bf3563cc396e04256885a extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
";
        // line 13
        if (($context["robots"] ?? null)) {
            // line 14
            echo "<meta name=\"robots\" content=\"";
            echo ($context["robots"] ?? null);
            echo "\" />
";
        }
        // line 16
        echo "<base href=\"";
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 17
        if (($context["description"] ?? null)) {
            // line 18
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 20
        if (($context["keywords"] ?? null)) {
            // line 21
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 23
        echo "<meta property=\"og:title\" content=\"";
        echo ($context["title"] ?? null);
        echo "\" />
<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:url\" content=\"";
        // line 25
        echo ($context["og_url"] ?? null);
        echo "\" />
";
        // line 26
        if (($context["og_image"] ?? null)) {
            // line 27
            echo "<meta property=\"og:image\" content=\"";
            echo ($context["og_image"] ?? null);
            echo "\" />
";
        } else {
            // line 29
            echo "<meta property=\"og:image\" content=\"";
            echo ($context["logo"] ?? null);
            echo "\" />
";
        }
        // line 31
        echo "<meta property=\"og:site_name\" content=\"";
        echo ($context["name"] ?? null);
        echo "\" />
<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/shop/stylesheet/stylesheet.css\" rel=\"stylesheet\">
<link href=\"/catalog/view/theme/shop/assets/css/main.52a4ace0c173403e989c.css\" rel=\"stylesheet\">
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 40
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 40);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 40);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 40);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 43
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/accordion.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/banner.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/catalog.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/categories-section.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/cookie.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/counter.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/footer.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/form.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/helpers.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/igallery.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/images-section.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/index.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/map.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/menu.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/partners.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/popup.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/product.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/product-card.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/smooth-scroll.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/tabs.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/text-dropdown.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/video-player.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/wow.js\" type=\"text/javascript\"></script>
<script src=\"/catalog/view/theme/shop/assets/js/youtube-player.js\" type=\"text/javascript\"></script>

";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 72
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 72);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 72);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 75
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "</head>
<body  class=\"body\">
<header class=\"header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"header__content\">
\t\t\t\t<a class=\"logo header__logo\" href=\"/\">
\t\t\t\t\t<img class=\"logo__img\" src=\"/catalog/view/theme/shop/assets/img/logo.png\" alt=\"\">
\t\t\t\t\t<span class=\"logo__text\">Кровля достойная Вашего дома</span>
\t\t\t\t</a>
\t\t\t\t<nav class=\"menu header__menu\">
\t\t\t\t\t<div class=\"menu__content\">
\t\t\t\t\t\t<div class=\"menu__title\">Меню</div>
\t\t\t\t\t\t<ul class=\"menu__list\">
\t\t\t\t\t\t\t<li class=\"menu__item\">
\t\t\t\t\t\t\t\t<a class=\"menu__link menu__link--active\" href=\"/\">Главная</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"menu__item\">
\t\t\t\t\t\t\t\t<a class=\"menu__link\" href=\"/about/\">О компании</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"menu__item menu__item--has-submenu\">
\t\t\t\t\t\t\t\t<a class=\"menu__link\" href=\"/shop/\">Каталог</a>
\t\t\t\t\t\t\t\t<ul class=\"submenu menu__submenu\">
\t\t\t\t\t\t\t\t\t<li class=\"submenu__item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"submenu__item-link\" href=\"/catalog.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"submenu__item-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/shop/assets/img/icons/sale-second.svg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"submenu__item-text\">Акции</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"submenu__item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"submenu__item-link\" href=\"catalog.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"submenu__item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/shop/assets/img/catalog-menu/1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"submenu__item-text\">Керамическая черепица</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"submenu__item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"submenu__item-link\" href=\"catalog.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"submenu__item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/shop/assets/img/catalog-menu/2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"submenu__item-text\">Композитная черепица</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"submenu__item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"submenu__item-link\" href=\"catalog.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"submenu__item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/shop/assets/img/catalog-menu/3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"submenu__item-text\">Гибкая (битумная) черепица</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"submenu__item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"submenu__item-link\" href=\"catalog.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"submenu__item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/shop/assets/img/catalog-menu/4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"submenu__item-text\">Металлочерепица</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"submenu__item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"submenu__item-link\" href=\"catalog.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"submenu__item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/shop/assets/img/catalog-menu/5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"submenu__item-text\">Медная кровля</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"submenu__item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"submenu__item-link\" href=\"catalog.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"submenu__item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/shop/assets/img/catalog-menu/5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"submenu__item-text\">Солнечная крыша</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"submenu__item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"submenu__item-link\" href=\"catalog.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"submenu__item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/shop/assets/img/catalog-menu/6.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"submenu__item-text\">Цинк-титановая кровля</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"submenu__item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"submenu__item-link\" href=\"catalog.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"submenu__item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/shop/assets/img/catalog-menu/5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"submenu__item-text\">Кровельная гидроизоляция</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"submenu__item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"submenu__item-link\" href=\"catalog.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"submenu__item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/shop/assets/img/catalog-menu/7.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"submenu__item-text\">Водосточные системы</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"submenu__item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"submenu__item-link\" href=\"catalog.html\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"submenu__item-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/shop/assets/img/catalog-menu/5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"submenu__item-text\">Аксессуары</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"menu__item\">
\t\t\t\t\t\t\t\t<a class=\"menu__link\" href=\"/blog/\">Блог</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"menu__item\">
\t\t\t\t\t\t\t\t<a class=\"menu__link\" href=\"/contacts/\">Контакты</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"menu__contacts\">
\t\t\t\t\t\t\t<a class=\"menu__contact\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"menu__contact-icon\">
\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/shop/assets/img/icons/whatsapp.svg\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"menu__contact-text\">Заказать расчет</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"menu__contact\" href=\"tel:+77776333330\">
\t\t\t\t\t\t\t\t<div class=\"menu__contact-icon menu__contact-icon--second\">
\t\t\t\t\t\t\t\t\t<img src=\"/catalog/view/theme/shop/assets/img/icons/phone.svg\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"menu__contact-text menu__contact-text--gray\">+7 (777) 633 33 30</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"menu__toggle\">
\t\t\t\t\t\t<span class=\"menu__lines\"></span>
\t\t\t\t\t</button>
\t\t\t\t</nav>
\t\t\t\t<div class=\"user-nav header__user-nav\">
\t\t\t\t\t<a class=\"user-nav__link\" href=\"/cart/\">
\t\t\t\t\t\t<img src=\"/catalog/view/theme/shop/assets/img/icons/cart.svg\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"user-nav__link\" href=\"#\">
\t\t\t\t\t\t<img src=\"/catalog/view/theme/shop/assets/img/icons/user.svg\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<a class=\"header__contact\" href=\"tel:+77776333330\">
\t\t\t\t\t<div class=\"header__contact-icon\">
\t\t\t\t\t\t<img src=\"/catalog/view/theme/shop/assets/img/icons/phone.svg\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header__contact-info\">
\t\t\t\t\t\t<div class=\"header__contact-title\">+7 (777) 633 33 30</div>
\t\t\t\t\t\t<div class=\"header__contact-text\">работаем по всему Казахстану</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</header>
\t<main class=\"main main--home\">";
    }

    public function getTemplateName()
    {
        return "shop/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 77,  211 => 75,  207 => 74,  196 => 72,  192 => 71,  164 => 45,  155 => 43,  151 => 42,  138 => 40,  134 => 39,  122 => 31,  116 => 29,  110 => 27,  108 => 26,  104 => 25,  98 => 23,  92 => 21,  90 => 20,  84 => 18,  82 => 17,  77 => 16,  71 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop/template/common/header.twig", "");
    }
}
