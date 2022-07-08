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

/* @Coupon4/default/coupon_shopping_item.twig */
class __TwigTemplate_a9ac18404690e2b2fe544402d543c71d2e0e24532b92c1784b154eaaa7c62f40 extends \Eccube\Twig\Template
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
        \$('#coupon_button').on(\"click\", function () {
            \$(this).attr('disabled', 'disabled');
            \$.ajax({
                type: 'POST',
                data: \$('#shopping-form').serialize(),
                url: '";
        // line 17
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_redirect_to");
        echo "',
                success: function(data) {
                    window.location.href = '";
        // line 19
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_coupon_shopping");
        echo "';
                },
                error: function() {
                    window.location.href = '";
        // line 22
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_coupon_shopping");
        echo "';
                }
            });
            return false;
        });

        // append to layout
        \$(\".ec-orderConfirm\").last().before(\$(\"#coupon\").detach());
    })
</script>

<div id=\"coupon\" class=\"ec-orderCoupon\">
    <div class=\"ec-rectHeading\">
        <h2>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.header"), "html", null, true);
        echo "</h2>
    </div>
    <div id=\"customer_detail_box\" class=\"column\">
        ";
        // line 38
        if (($context["CouponOrder"] ?? null)) {
            // line 39
            echo "            <strong class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.message.use_code", ["%code%" => twig_get_attribute($this->env, $this->source, ($context["CouponOrder"] ?? null), "coupon_cd", [], "any", false, false, false, 39)]), "html", null, true);
            echo "</strong>
        ";
        } else {
            // line 41
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.message.empty"), "html", null, true);
            echo "
        ";
        }
        // line 43
        echo "        <p><a class=\"btn btn-default btn-sm\" id=\"coupon_button\" href=\"";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_coupon_shopping");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.button.add_coupon"), "html", null, true);
        echo "</a></p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Coupon4/default/coupon_shopping_item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 43,  87 => 41,  81 => 39,  79 => 38,  73 => 35,  57 => 22,  51 => 19,  46 => 17,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Coupon4/default/coupon_shopping_item.twig", "/var/www/html/ec-cube/app/Plugin/Coupon4/Resource/template/default/coupon_shopping_item.twig");
    }
}
