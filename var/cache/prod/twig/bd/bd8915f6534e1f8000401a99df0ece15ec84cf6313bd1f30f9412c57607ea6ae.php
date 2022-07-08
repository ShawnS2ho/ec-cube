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

/* @Coupon4/default/coupon_shopping_item_confirm.twig */
class __TwigTemplate_80fb629a8a210567a19142dc54034faecadef6d4d640dd33ce7487719e5db74f extends \Eccube\Twig\Template
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
        // line 10
        echo "<script type=\"text/javascript\">
    \$(function () {
        // append to layout
        \$(\".ec-orderConfirm\").last().before(\$(\"#coupon\").detach());
    })
</script>

<div id=\"coupon\" class=\"ec-orderCoupon\">
    <div class=\"ec-rectHeading\">
        <h2>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.header"), "html", null, true);
        echo "</h2>
    </div>

    <div id=\"customer_detail_box\" class=\"column is-edit\">
        ";
        // line 23
        if (($context["CouponOrder"] ?? null)) {
            // line 24
            echo "            <strong class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.message.use_code", ["%code%" => twig_get_attribute($this->env, $this->source, ($context["CouponOrder"] ?? null), "coupon_cd", [], "any", false, false, false, 24)]), "html", null, true);
            echo "</strong>
        ";
        } else {
            // line 26
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.message.empty"), "html", null, true);
            echo "
        ";
        }
        // line 28
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Coupon4/default/coupon_shopping_item_confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 28,  63 => 26,  57 => 24,  55 => 23,  48 => 19,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Coupon4/default/coupon_shopping_item_confirm.twig", "/var/www/html/ec-cube/app/Plugin/Coupon4/Resource/template/default/coupon_shopping_item_confirm.twig");
    }
}
