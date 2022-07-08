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

/* Block/recommend_product_block.twig */
class __TwigTemplate_11b7116a7bdea3a3ad40aa3ae35e51c53b4855c7025305251d6d7bff88ac8466 extends \Eccube\Twig\Template
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
        // line 9
        $context["recommend_products"] = twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('repository')->getCallable(), ["Plugin\\Recommend4\\Entity\\RecommendProduct"]), "getRecommendProduct", [], "any", false, false, false, 9);
        // line 10
        echo "
<!-- ▼item_list▼ -->
<div class=\"ec-shelfRole\">
    <ul class=\"ec-shelfGrid\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recommend_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["RecommendProduct"]) {
            // line 15
            echo "            <li class=\"ec-shelfGrid__item\">
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, false, 17), "mainFileName", [], "any", false, false, false, 17)), "save_image"), "html", null, true);
            echo "\">
                    <p>";
            // line 18
            echo twig_nl2br(twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "comment", [], "any", false, false, false, 18));
            echo "</p>
                    <dl>
                        <dt class=\"item_name\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
            echo "</dt>
                        <dd class=\"item_price\">
                            ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, false, 22), "hasProductClass", [], "any", false, false, false, 22)) {
                // line 23
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, false, 23), "getPrice02Min", [], "any", false, false, false, 23) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, false, 23), "getPrice02Max", [], "any", false, false, false, 23))) {
                    // line 24
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, false, 24), "getPrice02IncTaxMin", [], "any", false, false, false, 24)), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 26
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, false, 26), "getPrice02IncTaxMin", [], "any", false, false, false, 26)), "html", null, true);
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, false, 26), "getPrice02IncTaxMax", [], "any", false, false, false, 26)), "html", null, true);
                    echo "
                                ";
                }
                // line 28
                echo "                            ";
            } else {
                // line 29
                echo "                                ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, false, 29), "getPrice02IncTaxMin", [], "any", false, false, false, 29)), "html", null, true);
                echo "
                            ";
            }
            // line 31
            echo "                        </dd>
                    </dl>
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RecommendProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </ul>
</div>
<!-- ▲item_list▲ -->
";
    }

    public function getTemplateName()
    {
        return "Block/recommend_product_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 36,  98 => 31,  92 => 29,  89 => 28,  81 => 26,  75 => 24,  72 => 23,  70 => 22,  65 => 20,  60 => 18,  56 => 17,  52 => 16,  49 => 15,  45 => 14,  39 => 10,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/recommend_product_block.twig", "/var/www/html/ec-cube/app/template/default/Block/recommend_product_block.twig");
    }
}
