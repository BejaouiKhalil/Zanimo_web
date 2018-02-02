<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_64466c9d8ab246c8e95abb8e009ea94da2f8931228246be834c161ca9b1b437f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75d8fb29cb460f6433cb60beb0ffd961fd8bec4b7f725d77cb5e93e413189b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d8fb29cb460f6433cb60beb0ffd961fd8bec4b7f725d77cb5e93e413189b02->enter($__internal_75d8fb29cb460f6433cb60beb0ffd961fd8bec4b7f725d77cb5e93e413189b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_5051a2ce456ea304b0bed83548733504117a78b34fd93c0278f48f9a239ae719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5051a2ce456ea304b0bed83548733504117a78b34fd93c0278f48f9a239ae719->enter($__internal_5051a2ce456ea304b0bed83548733504117a78b34fd93c0278f48f9a239ae719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75d8fb29cb460f6433cb60beb0ffd961fd8bec4b7f725d77cb5e93e413189b02->leave($__internal_75d8fb29cb460f6433cb60beb0ffd961fd8bec4b7f725d77cb5e93e413189b02_prof);

        
        $__internal_5051a2ce456ea304b0bed83548733504117a78b34fd93c0278f48f9a239ae719->leave($__internal_5051a2ce456ea304b0bed83548733504117a78b34fd93c0278f48f9a239ae719_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_14e5020953b7e5b8d29322d74859594b1d6efc3ec739f53769932b780d1bf732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e5020953b7e5b8d29322d74859594b1d6efc3ec739f53769932b780d1bf732->enter($__internal_14e5020953b7e5b8d29322d74859594b1d6efc3ec739f53769932b780d1bf732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_200830254874ba7d9f19458aa5ab0f815171bc05209946401dcb2675d9958cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_200830254874ba7d9f19458aa5ab0f815171bc05209946401dcb2675d9958cbf->enter($__internal_200830254874ba7d9f19458aa5ab0f815171bc05209946401dcb2675d9958cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_200830254874ba7d9f19458aa5ab0f815171bc05209946401dcb2675d9958cbf->leave($__internal_200830254874ba7d9f19458aa5ab0f815171bc05209946401dcb2675d9958cbf_prof);

        
        $__internal_14e5020953b7e5b8d29322d74859594b1d6efc3ec739f53769932b780d1bf732->leave($__internal_14e5020953b7e5b8d29322d74859594b1d6efc3ec739f53769932b780d1bf732_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\Zanimo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
