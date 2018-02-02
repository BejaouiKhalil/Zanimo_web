<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ef88fadc688161ad1c2d6fe0d74b690acf769e0b8fada078f18de3775ff5f6ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_7de0e04093de6412e8cc3f791baaea62f2fc31b00623fc9033a9cdbe21b5dd1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de0e04093de6412e8cc3f791baaea62f2fc31b00623fc9033a9cdbe21b5dd1d->enter($__internal_7de0e04093de6412e8cc3f791baaea62f2fc31b00623fc9033a9cdbe21b5dd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7377fdd6ada1c33d80b2b2c459bf110c4af047701fdb0b19691c901a5ea97ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7377fdd6ada1c33d80b2b2c459bf110c4af047701fdb0b19691c901a5ea97ac9->enter($__internal_7377fdd6ada1c33d80b2b2c459bf110c4af047701fdb0b19691c901a5ea97ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7de0e04093de6412e8cc3f791baaea62f2fc31b00623fc9033a9cdbe21b5dd1d->leave($__internal_7de0e04093de6412e8cc3f791baaea62f2fc31b00623fc9033a9cdbe21b5dd1d_prof);

        
        $__internal_7377fdd6ada1c33d80b2b2c459bf110c4af047701fdb0b19691c901a5ea97ac9->leave($__internal_7377fdd6ada1c33d80b2b2c459bf110c4af047701fdb0b19691c901a5ea97ac9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0de8343ca8bf2ac67c3f8a9ba533ffd255875eee4535b4b227bde38126b1244a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de8343ca8bf2ac67c3f8a9ba533ffd255875eee4535b4b227bde38126b1244a->enter($__internal_0de8343ca8bf2ac67c3f8a9ba533ffd255875eee4535b4b227bde38126b1244a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_10df74996e7b61e285855a97f1c9487ada38e10726b85855851eaf507e5cba1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10df74996e7b61e285855a97f1c9487ada38e10726b85855851eaf507e5cba1c->enter($__internal_10df74996e7b61e285855a97f1c9487ada38e10726b85855851eaf507e5cba1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_10df74996e7b61e285855a97f1c9487ada38e10726b85855851eaf507e5cba1c->leave($__internal_10df74996e7b61e285855a97f1c9487ada38e10726b85855851eaf507e5cba1c_prof);

        
        $__internal_0de8343ca8bf2ac67c3f8a9ba533ffd255875eee4535b4b227bde38126b1244a->leave($__internal_0de8343ca8bf2ac67c3f8a9ba533ffd255875eee4535b4b227bde38126b1244a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b9147b256c3d0a8ff6c43b266957918bde921eba75330abc76062c8341e9240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b9147b256c3d0a8ff6c43b266957918bde921eba75330abc76062c8341e9240->enter($__internal_3b9147b256c3d0a8ff6c43b266957918bde921eba75330abc76062c8341e9240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_04b1d582dd0a974a46fb1028a8e6b2255a21ac2b72ff13cec69b2e5a35bd37f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b1d582dd0a974a46fb1028a8e6b2255a21ac2b72ff13cec69b2e5a35bd37f9->enter($__internal_04b1d582dd0a974a46fb1028a8e6b2255a21ac2b72ff13cec69b2e5a35bd37f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_04b1d582dd0a974a46fb1028a8e6b2255a21ac2b72ff13cec69b2e5a35bd37f9->leave($__internal_04b1d582dd0a974a46fb1028a8e6b2255a21ac2b72ff13cec69b2e5a35bd37f9_prof);

        
        $__internal_3b9147b256c3d0a8ff6c43b266957918bde921eba75330abc76062c8341e9240->leave($__internal_3b9147b256c3d0a8ff6c43b266957918bde921eba75330abc76062c8341e9240_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b2f71a6b1b4b50eb95ddd21c6c8e3b5bb40dfe0a38d58cfb767924d5bfa2711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b2f71a6b1b4b50eb95ddd21c6c8e3b5bb40dfe0a38d58cfb767924d5bfa2711->enter($__internal_9b2f71a6b1b4b50eb95ddd21c6c8e3b5bb40dfe0a38d58cfb767924d5bfa2711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3ddddf5c049a9aabd131418dc91a3f952308ebe14dca9ac7f2c9382df919fca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ddddf5c049a9aabd131418dc91a3f952308ebe14dca9ac7f2c9382df919fca9->enter($__internal_3ddddf5c049a9aabd131418dc91a3f952308ebe14dca9ac7f2c9382df919fca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3ddddf5c049a9aabd131418dc91a3f952308ebe14dca9ac7f2c9382df919fca9->leave($__internal_3ddddf5c049a9aabd131418dc91a3f952308ebe14dca9ac7f2c9382df919fca9_prof);

        
        $__internal_9b2f71a6b1b4b50eb95ddd21c6c8e3b5bb40dfe0a38d58cfb767924d5bfa2711->leave($__internal_9b2f71a6b1b4b50eb95ddd21c6c8e3b5bb40dfe0a38d58cfb767924d5bfa2711_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Zanimo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
