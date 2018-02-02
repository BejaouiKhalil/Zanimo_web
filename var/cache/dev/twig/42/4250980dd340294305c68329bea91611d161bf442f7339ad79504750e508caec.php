<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_942143af46b2d887f1719297d66559827cf1bd840ee9f5bad137eec7f269645d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c602ba2ac909b2c259e12774a4eaf68eda462413a346e1daf46ef40ca6591347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c602ba2ac909b2c259e12774a4eaf68eda462413a346e1daf46ef40ca6591347->enter($__internal_c602ba2ac909b2c259e12774a4eaf68eda462413a346e1daf46ef40ca6591347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b8a7c71df1ff7ac913bd027eb466d558fa311702d8f51ed880890e8c94f82ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a7c71df1ff7ac913bd027eb466d558fa311702d8f51ed880890e8c94f82ba7->enter($__internal_b8a7c71df1ff7ac913bd027eb466d558fa311702d8f51ed880890e8c94f82ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c602ba2ac909b2c259e12774a4eaf68eda462413a346e1daf46ef40ca6591347->leave($__internal_c602ba2ac909b2c259e12774a4eaf68eda462413a346e1daf46ef40ca6591347_prof);

        
        $__internal_b8a7c71df1ff7ac913bd027eb466d558fa311702d8f51ed880890e8c94f82ba7->leave($__internal_b8a7c71df1ff7ac913bd027eb466d558fa311702d8f51ed880890e8c94f82ba7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_82ece3601b9948b036b90485a045fb7f2dcbed9b68dbe87f818752374dc24f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ece3601b9948b036b90485a045fb7f2dcbed9b68dbe87f818752374dc24f38->enter($__internal_82ece3601b9948b036b90485a045fb7f2dcbed9b68dbe87f818752374dc24f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6187a09e6bd2211d59c84a47163e7120fb6c0f94e1e20118de17a91510833efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6187a09e6bd2211d59c84a47163e7120fb6c0f94e1e20118de17a91510833efb->enter($__internal_6187a09e6bd2211d59c84a47163e7120fb6c0f94e1e20118de17a91510833efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6187a09e6bd2211d59c84a47163e7120fb6c0f94e1e20118de17a91510833efb->leave($__internal_6187a09e6bd2211d59c84a47163e7120fb6c0f94e1e20118de17a91510833efb_prof);

        
        $__internal_82ece3601b9948b036b90485a045fb7f2dcbed9b68dbe87f818752374dc24f38->leave($__internal_82ece3601b9948b036b90485a045fb7f2dcbed9b68dbe87f818752374dc24f38_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0bb178aa4fc85e1de541fafc3c3fa5e4812b396201d4fd7e66df0fbc245ea57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0bb178aa4fc85e1de541fafc3c3fa5e4812b396201d4fd7e66df0fbc245ea57->enter($__internal_c0bb178aa4fc85e1de541fafc3c3fa5e4812b396201d4fd7e66df0fbc245ea57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7ef2119c955fd190b166803680e2e8cfb18729c31e521dbcd568086340a39e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef2119c955fd190b166803680e2e8cfb18729c31e521dbcd568086340a39e74->enter($__internal_7ef2119c955fd190b166803680e2e8cfb18729c31e521dbcd568086340a39e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7ef2119c955fd190b166803680e2e8cfb18729c31e521dbcd568086340a39e74->leave($__internal_7ef2119c955fd190b166803680e2e8cfb18729c31e521dbcd568086340a39e74_prof);

        
        $__internal_c0bb178aa4fc85e1de541fafc3c3fa5e4812b396201d4fd7e66df0fbc245ea57->leave($__internal_c0bb178aa4fc85e1de541fafc3c3fa5e4812b396201d4fd7e66df0fbc245ea57_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd2972afb545755cd90519d48c47739e5d9af481bacb68759c5790afd299dca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd2972afb545755cd90519d48c47739e5d9af481bacb68759c5790afd299dca6->enter($__internal_cd2972afb545755cd90519d48c47739e5d9af481bacb68759c5790afd299dca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_63d57b08db3aca213a0793c7f76dbbb445272fe5b0b5301a2f282a7d53d9b879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d57b08db3aca213a0793c7f76dbbb445272fe5b0b5301a2f282a7d53d9b879->enter($__internal_63d57b08db3aca213a0793c7f76dbbb445272fe5b0b5301a2f282a7d53d9b879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_63d57b08db3aca213a0793c7f76dbbb445272fe5b0b5301a2f282a7d53d9b879->leave($__internal_63d57b08db3aca213a0793c7f76dbbb445272fe5b0b5301a2f282a7d53d9b879_prof);

        
        $__internal_cd2972afb545755cd90519d48c47739e5d9af481bacb68759c5790afd299dca6->leave($__internal_cd2972afb545755cd90519d48c47739e5d9af481bacb68759c5790afd299dca6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\Zanimo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
