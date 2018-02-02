<?php

/* AccessoryBundle:Default:index.html.twig */
class __TwigTemplate_84bdc240ee487c5e04e50591db37ba8712b0239d9944787b67de5dbdd132a58d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa35f151bd84218842835c100e7fbd6868e93dfc0721c16c0c4a26bc261091fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa35f151bd84218842835c100e7fbd6868e93dfc0721c16c0c4a26bc261091fe->enter($__internal_aa35f151bd84218842835c100e7fbd6868e93dfc0721c16c0c4a26bc261091fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccessoryBundle:Default:index.html.twig"));

        $__internal_9f40998e17a04c13317b45282ac8778f1673a5137ac805d8af632fcdd5dd1610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f40998e17a04c13317b45282ac8778f1673a5137ac805d8af632fcdd5dd1610->enter($__internal_9f40998e17a04c13317b45282ac8778f1673a5137ac805d8af632fcdd5dd1610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccessoryBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_aa35f151bd84218842835c100e7fbd6868e93dfc0721c16c0c4a26bc261091fe->leave($__internal_aa35f151bd84218842835c100e7fbd6868e93dfc0721c16c0c4a26bc261091fe_prof);

        
        $__internal_9f40998e17a04c13317b45282ac8778f1673a5137ac805d8af632fcdd5dd1610->leave($__internal_9f40998e17a04c13317b45282ac8778f1673a5137ac805d8af632fcdd5dd1610_prof);

    }

    public function getTemplateName()
    {
        return "AccessoryBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "AccessoryBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\Zanimo\\src\\AccessoryBundle/Resources/views/Default/index.html.twig");
    }
}
