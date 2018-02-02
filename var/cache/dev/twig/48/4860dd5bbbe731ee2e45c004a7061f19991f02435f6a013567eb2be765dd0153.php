<?php

/* @Accessory/Accessory/add.html.twig */
class __TwigTemplate_d42d836206f7371d8d123616b6956693c642dfc5cae9d5ac98983266e622a46c extends Twig_Template
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
        $__internal_70be73badf53f003d0e72be2ba28fc76a9018b3eeb2d836fc0d51a0a9ef205a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70be73badf53f003d0e72be2ba28fc76a9018b3eeb2d836fc0d51a0a9ef205a6->enter($__internal_70be73badf53f003d0e72be2ba28fc76a9018b3eeb2d836fc0d51a0a9ef205a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Accessory/Accessory/add.html.twig"));

        $__internal_8bedad5cce60998f01bf34bc4f01d434641daebcceff4a78e0c138994aec7bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bedad5cce60998f01bf34bc4f01d434641daebcceff4a78e0c138994aec7bbb->enter($__internal_8bedad5cce60998f01bf34bc4f01d434641daebcceff4a78e0c138994aec7bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Accessory/Accessory/add.html.twig"));

        // line 1
        echo "<h1>Adding a new product</h1>

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_70be73badf53f003d0e72be2ba28fc76a9018b3eeb2d836fc0d51a0a9ef205a6->leave($__internal_70be73badf53f003d0e72be2ba28fc76a9018b3eeb2d836fc0d51a0a9ef205a6_prof);

        
        $__internal_8bedad5cce60998f01bf34bc4f01d434641daebcceff4a78e0c138994aec7bbb->leave($__internal_8bedad5cce60998f01bf34bc4f01d434641daebcceff4a78e0c138994aec7bbb_prof);

    }

    public function getTemplateName()
    {
        return "@Accessory/Accessory/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Adding a new product</h1>

{{ form_start(form) }}

{{ form_end(form) }}", "@Accessory/Accessory/add.html.twig", "C:\\xampp\\htdocs\\Zanimo\\src\\AccessoryBundle\\Resources\\views\\Accessory\\add.html.twig");
    }
}
