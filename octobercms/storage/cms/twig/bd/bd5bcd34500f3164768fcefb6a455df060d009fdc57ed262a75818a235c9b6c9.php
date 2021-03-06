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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/propertygroups.htm */
class __TwigTemplate_1c9da7fc559bfc2ef536fe67fc494247d45905947d949b2b82d5abd52c1f4806 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showBrandFilter", [], "any", false, false, false, 1)) {
            // line 2
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::brands")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 4
        if ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showPriceFilter", [], "any", false, false, false, 4) || twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showOnSaleFilter", [], "any", false, false, false, 4))) {
            // line 5
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::price")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::labels")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 9
            echo "    <div class=\"mall-property-group mb-6 pb-1\">
        <div class=\"mall-property-group__name\">
            <h3 class=\"position-relative font-6 font-weight-semibold pb-3 mb-5 decorated-right\">
\t\t\t\t<span>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "display_name", [], "any", false, false, false, 12), "html", null, true);
            echo "</span>
\t\t\t</h3>
        </div>
        ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, $context["group"], "description", [], "any", false, false, false, 15)) {
                // line 16
                echo "            <div class=\"mall-property-group__description\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "description", [], "any", false, false, false, 16), "html", null, true);
                echo "</div>
        ";
            }
            // line 18
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['props'] = twig_get_attribute($this->env, $this->source, $context["group"], "filterable_properties", [], "any", false, false, false, 18)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::properties")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 19
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/propertygroups.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  80 => 18,  74 => 16,  72 => 15,  66 => 12,  61 => 9,  57 => 8,  53 => 7,  47 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.showBrandFilter %}
    {% partial __SELF__ ~ '::brands' %}
{% endif %}
{% if __SELF__.showPriceFilter or __SELF__.showOnSaleFilter %}
    {% partial __SELF__ ~ '::price' %}
{% endif %}
{% partial __SELF__ ~ '::labels' %}
{% for group in groups %}
    <div class=\"mall-property-group mb-6 pb-1\">
        <div class=\"mall-property-group__name\">
            <h3 class=\"position-relative font-6 font-weight-semibold pb-3 mb-5 decorated-right\">
\t\t\t\t<span>{{ group.display_name }}</span>
\t\t\t</h3>
        </div>
        {% if group.description %}
            <div class=\"mall-property-group__description\">{{ group.description }}</div>
        {% endif %}
        {% partial __SELF__ ~ '::properties' props=group.filterable_properties %}
    </div>
{% endfor %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/propertygroups.htm", "");
    }
}
