<?php

/* ::header.html.twig */
class __TwigTemplate_a596df738ddfa4a5c7cee9441664dfd73f719997a8bd9ed1a4974d8786c9560a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6737f8d2a6f4892c0639488bdd778440d83242d08247c5068ad3f820da88cb36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6737f8d2a6f4892c0639488bdd778440d83242d08247c5068ad3f820da88cb36->enter($__internal_6737f8d2a6f4892c0639488bdd778440d83242d08247c5068ad3f820da88cb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

        $__internal_86c095ac14940598dfd4497155d8fa9ca538f7cfbf07d5b5a712715df593af07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c095ac14940598dfd4497155d8fa9ca538f7cfbf07d5b5a712715df593af07->enter($__internal_86c095ac14940598dfd4497155d8fa9ca538f7cfbf07d5b5a712715df593af07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_6737f8d2a6f4892c0639488bdd778440d83242d08247c5068ad3f820da88cb36->leave($__internal_6737f8d2a6f4892c0639488bdd778440d83242d08247c5068ad3f820da88cb36_prof);

        
        $__internal_86c095ac14940598dfd4497155d8fa9ca538f7cfbf07d5b5a712715df593af07->leave($__internal_86c095ac14940598dfd4497155d8fa9ca538f7cfbf07d5b5a712715df593af07_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_005d2da170879f3f9c99558bf0d403e8ef19bd21d257ad6243ded6c4d6b03256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_005d2da170879f3f9c99558bf0d403e8ef19bd21d257ad6243ded6c4d6b03256->enter($__internal_005d2da170879f3f9c99558bf0d403e8ef19bd21d257ad6243ded6c4d6b03256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_1ce0b441a9d92a19fac1f5b6c7dc1468e5c4ed5f02e4fbbe3989ff9a5ad3764a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce0b441a9d92a19fac1f5b6c7dc1468e5c4ed5f02e4fbbe3989ff9a5ad3764a->enter($__internal_1ce0b441a9d92a19fac1f5b6c7dc1468e5c4ed5f02e4fbbe3989ff9a5ad3764a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "<div class=\"pusher\">
    <div id=\"menu\" class=\"ui large sticky inverted stackable menu\">







        <div class=\"ui right stackable inverted menu\">
            <a href=\"#\" class=\"item\">Login</a>
            <a href=\"#\" class=\"item\">Register</a>
        </div>



    </div>

    <div class=\"ui container\">
        <header>
            <div class=\"ui basic segment\">
                <div class=\"ui tow column stackable grid\">








            <div class=\"ui large stackable menu\">

                <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list");
        echo "\" class=\"item\">Accessories</a>


                <a href=\"#\" class=\"item\">Animals</a>


                <a href=\"#\" class=\"item\">Animal Foods</a>

                <a href=\"#\" class=\"item\">Services</a>




            </div>


                    <div class=\"right aligned column\">

                        <div id=\"sylius-cart-button\" class=\"ui circular cart button\" style=\"margin-left: 500px;\">


                            <i class=\"cart icon\"></i>
                            <span id=\"sylius-cart-total\">
        \$0.00
    </span>


                        </div>
                        <div class=\"ui large flowing cart hidden popup\">


                            Your cart is empty.


                        </div>

                    </div>
                </div>
        </header>
        ";
        
        $__internal_1ce0b441a9d92a19fac1f5b6c7dc1468e5c4ed5f02e4fbbe3989ff9a5ad3764a->leave($__internal_1ce0b441a9d92a19fac1f5b6c7dc1468e5c4ed5f02e4fbbe3989ff9a5ad3764a_prof);

        
        $__internal_005d2da170879f3f9c99558bf0d403e8ef19bd21d257ad6243ded6c4d6b03256->leave($__internal_005d2da170879f3f9c99558bf0d403e8ef19bd21d257ad6243ded6c4d6b03256_prof);

    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 35,  47 => 3,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block header %}
<div class=\"pusher\">
    <div id=\"menu\" class=\"ui large sticky inverted stackable menu\">







        <div class=\"ui right stackable inverted menu\">
            <a href=\"#\" class=\"item\">Login</a>
            <a href=\"#\" class=\"item\">Register</a>
        </div>



    </div>

    <div class=\"ui container\">
        <header>
            <div class=\"ui basic segment\">
                <div class=\"ui tow column stackable grid\">








            <div class=\"ui large stackable menu\">

                <a href=\"{{ path('list') }}\" class=\"item\">Accessories</a>


                <a href=\"#\" class=\"item\">Animals</a>


                <a href=\"#\" class=\"item\">Animal Foods</a>

                <a href=\"#\" class=\"item\">Services</a>




            </div>


                    <div class=\"right aligned column\">

                        <div id=\"sylius-cart-button\" class=\"ui circular cart button\" style=\"margin-left: 500px;\">


                            <i class=\"cart icon\"></i>
                            <span id=\"sylius-cart-total\">
        \$0.00
    </span>


                        </div>
                        <div class=\"ui large flowing cart hidden popup\">


                            Your cart is empty.


                        </div>

                    </div>
                </div>
        </header>
        {% endblock %}", "::header.html.twig", "C:\\xampp\\htdocs\\Zanimo\\app/Resources\\views/header.html.twig");
    }
}
