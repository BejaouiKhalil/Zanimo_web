<?php

/* AccessoryBundle:Accessory:list.html.twig */
class __TwigTemplate_791b7a59476331eeeb37671e3333c453ca1ba0f8d266bb5bd66012e0430d05bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AccessoryBundle:Accessory:list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0306c1a465a751b303a5b067f6dda353728a98c4a5d0570cf2077768d917e30b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0306c1a465a751b303a5b067f6dda353728a98c4a5d0570cf2077768d917e30b->enter($__internal_0306c1a465a751b303a5b067f6dda353728a98c4a5d0570cf2077768d917e30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccessoryBundle:Accessory:list.html.twig"));

        $__internal_b8e7feab1fc38a0f2a8e6b1d079856040b13769edba776759ccc827583a78965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e7feab1fc38a0f2a8e6b1d079856040b13769edba776759ccc827583a78965->enter($__internal_b8e7feab1fc38a0f2a8e6b1d079856040b13769edba776759ccc827583a78965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccessoryBundle:Accessory:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0306c1a465a751b303a5b067f6dda353728a98c4a5d0570cf2077768d917e30b->leave($__internal_0306c1a465a751b303a5b067f6dda353728a98c4a5d0570cf2077768d917e30b_prof);

        
        $__internal_b8e7feab1fc38a0f2a8e6b1d079856040b13769edba776759ccc827583a78965->leave($__internal_b8e7feab1fc38a0f2a8e6b1d079856040b13769edba776759ccc827583a78965_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f2c3566204a3138f4c67c6fe828cede120705e431d3dd6bb2937a7aefdc09b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f2c3566204a3138f4c67c6fe828cede120705e431d3dd6bb2937a7aefdc09b2->enter($__internal_2f2c3566204a3138f4c67c6fe828cede120705e431d3dd6bb2937a7aefdc09b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e6e07e1050edd48ac9ea9b23f37f2380a15803d6eaa0eb28e175332ee1d8aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6e07e1050edd48ac9ea9b23f37f2380a15803d6eaa0eb28e175332ee1d8aff->enter($__internal_7e6e07e1050edd48ac9ea9b23f37f2380a15803d6eaa0eb28e175332ee1d8aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AccessoryBundle:Accessory:list";
        
        $__internal_7e6e07e1050edd48ac9ea9b23f37f2380a15803d6eaa0eb28e175332ee1d8aff->leave($__internal_7e6e07e1050edd48ac9ea9b23f37f2380a15803d6eaa0eb28e175332ee1d8aff_prof);

        
        $__internal_2f2c3566204a3138f4c67c6fe828cede120705e431d3dd6bb2937a7aefdc09b2->leave($__internal_2f2c3566204a3138f4c67c6fe828cede120705e431d3dd6bb2937a7aefdc09b2_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_a52057cb6f6aa123a9ceb7b4ad7202c8bc4bf981d051f285d64ca21252e1ddfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a52057cb6f6aa123a9ceb7b4ad7202c8bc4bf981d051f285d64ca21252e1ddfe->enter($__internal_a52057cb6f6aa123a9ceb7b4ad7202c8bc4bf981d051f285d64ca21252e1ddfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_a96588d376e06a96579181378bc5ecf6a73b475ff69f3e2c6adc70de66b464ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a96588d376e06a96579181378bc5ecf6a73b475ff69f3e2c6adc70de66b464ba->enter($__internal_a96588d376e06a96579181378bc5ecf6a73b475ff69f3e2c6adc70de66b464ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        echo twig_include($this->env, $context, "::header.html.twig");
        
        $__internal_a96588d376e06a96579181378bc5ecf6a73b475ff69f3e2c6adc70de66b464ba->leave($__internal_a96588d376e06a96579181378bc5ecf6a73b475ff69f3e2c6adc70de66b464ba_prof);

        
        $__internal_a52057cb6f6aa123a9ceb7b4ad7202c8bc4bf981d051f285d64ca21252e1ddfe->leave($__internal_a52057cb6f6aa123a9ceb7b4ad7202c8bc4bf981d051f285d64ca21252e1ddfe_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa15632c9182f2db3fa1acdec5a531e3866089d529d74ebc7be23fcad510de86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa15632c9182f2db3fa1acdec5a531e3866089d529d74ebc7be23fcad510de86->enter($__internal_aa15632c9182f2db3fa1acdec5a531e3866089d529d74ebc7be23fcad510de86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ffb3c03aaaec465cfe3a5408054ec871d8d2ff04e3d49b0edfbc88b8a033080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ffb3c03aaaec465cfe3a5408054ec871d8d2ff04e3d49b0edfbc88b8a033080->enter($__internal_8ffb3c03aaaec465cfe3a5408054ec871d8d2ff04e3d49b0edfbc88b8a033080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<!--
    <h1>Accesories list</h1>

    <table>
        <thead>
        <tr>
            <th>id</th>
            <th>Nom</th>
            <th>prix</th>
            <th>description</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["accessories"] ?? $this->getContext($context, "accessories")));
        foreach ($context['_seq'] as $context["_key"] => $context["accessory"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("id" => $this->getAttribute($context["accessory"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["accessory"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["accessory"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["accessory"], "price", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["accessory"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("id" => $this->getAttribute($context["accessory"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['accessory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>
    -->
<div class=\"ui three column stackable grid\" id=\"products\">
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["accessories"] ?? $this->getContext($context, "accessories")));
        foreach ($context['_seq'] as $context["_key"] => $context["accessory"]) {
            // line 39
            echo "<div class=\"column\">
    <div class=\"ui fluid card\">
        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("id" => $this->getAttribute($context["accessory"], "id", array()))), "html", null, true);
            echo "\" class=\"blurring dimmable image\">
            <div class=\"ui dimmer\">
                <div class=\"content\">
                    <div class=\"center\">
                        <div class=\"ui inverted button\">View more</div>
                    </div>
                </div>
            </div>

            <img src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["accessory"], "imageUrl", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["accessory"], "name", array()), "html", null, true);
            echo "\" class=\"ui bordered image\" />
        </a>
        <div class=\"content\">
            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("id" => $this->getAttribute($context["accessory"], "id", array()))), "html", null, true);
            echo "\" class=\"header sylius-product-name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["accessory"], "name", array()), "html", null, true);
            echo "</a>
            <div class=\"sylius-product-price\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["accessory"], "price", array()), "html", null, true);
            echo "</div>
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['accessory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "</div>
";
        
        $__internal_8ffb3c03aaaec465cfe3a5408054ec871d8d2ff04e3d49b0edfbc88b8a033080->leave($__internal_8ffb3c03aaaec465cfe3a5408054ec871d8d2ff04e3d49b0edfbc88b8a033080_prof);

        
        $__internal_aa15632c9182f2db3fa1acdec5a531e3866089d529d74ebc7be23fcad510de86->leave($__internal_aa15632c9182f2db3fa1acdec5a531e3866089d529d74ebc7be23fcad510de86_prof);

    }

    public function getTemplateName()
    {
        return "AccessoryBundle:Accessory:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 59,  184 => 54,  178 => 53,  170 => 50,  158 => 41,  154 => 39,  150 => 38,  144 => 34,  132 => 28,  125 => 24,  121 => 23,  117 => 22,  111 => 21,  108 => 20,  104 => 19,  88 => 5,  79 => 4,  60 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block title %}AccessoryBundle:Accessory:list{% endblock %}
{%  block header %} {{ include('::header.html.twig') }}{% endblock %}
{% block body %}
<!--
    <h1>Accesories list</h1>

    <table>
        <thead>
        <tr>
            <th>id</th>
            <th>Nom</th>
            <th>prix</th>
            <th>description</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for accessory in accessories %}
            <tr>
                <td><a href=\"{{ path('show', { 'id': accessory.id}) }}\">{{ accessory.id }}</a></td>
                <td>{{ accessory.name }}</td>
                <td>{{ accessory.price }}</td>
                <td>{{ accessory.description }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('show', { 'id': accessory.id }) }}\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    -->
<div class=\"ui three column stackable grid\" id=\"products\">
{% for accessory in accessories %}
<div class=\"column\">
    <div class=\"ui fluid card\">
        <a href=\"{{ path('show', { 'id': accessory.id }) }}\" class=\"blurring dimmable image\">
            <div class=\"ui dimmer\">
                <div class=\"content\">
                    <div class=\"center\">
                        <div class=\"ui inverted button\">View more</div>
                    </div>
                </div>
            </div>

            <img src=\"{{ asset(accessory.imageUrl) }}\" alt=\"{{ accessory.name }}\" class=\"ui bordered image\" />
        </a>
        <div class=\"content\">
            <a href=\"{{ path('show', { 'id': accessory.id }) }}\" class=\"header sylius-product-name\">{{ accessory.name }}</a>
            <div class=\"sylius-product-price\">{{ accessory.price }}</div>
        </div>
    </div>
</div>
{% endfor %}
</div>
{% endblock %}
", "AccessoryBundle:Accessory:list.html.twig", "C:\\xampp\\htdocs\\Zanimo\\src\\AccessoryBundle/Resources/views/Accessory/list.html.twig");
    }
}
