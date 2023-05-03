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

/* shop/template/extension/module/category.twig */
class __TwigTemplate_07dcdda104c22eae2c7c1950490a0e4d2bac61aac4a64f651552ec7f7a2fffc8 extends \Twig\Template
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
        echo "<aside class=\"catalog-sidebar catalog__sidebar\">
\t\t\t\t\t\t\t<div class=\"catalog-sidebar__content\">
\t\t\t\t\t\t\t\t<div class=\"catalog-sidebar__title\">Каталог</div>
\t\t\t\t\t\t\t\t<ul class=\"catalog-sidebar__list\">
\t\t\t\t\t\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "\t\t\t\t\t\t\t\t\t<li class=\"catalog-sidebar__item\">
\t\t\t\t\t\t\t\t\t\t<button class=\"catalog-sidebar__btn\">";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 7);
            echo "</button>
\t\t\t\t\t\t\t\t\t\t";
            // line 8
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 8)) {
                // line 9
                echo "\t\t\t\t\t\t\t\t\t\t<ul class=\"catalog-sidebar__sublist\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 11
                    echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"catalog-sidebar__subitem\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"checkbox__input\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"checkbox__switch\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"checkbox__text\">";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 15);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"catalog-sidebar__close js-close-catalog-sidebar\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</aside>";
    }

    public function getTemplateName()
    {
        return "shop/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  84 => 22,  79 => 19,  69 => 15,  63 => 11,  59 => 10,  56 => 9,  54 => 8,  50 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop/template/extension/module/category.twig", "");
    }
}
