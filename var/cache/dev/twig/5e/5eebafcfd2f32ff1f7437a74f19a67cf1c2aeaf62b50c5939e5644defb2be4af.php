<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_bb8afd2787e110b4e3306617e010a5187075033fae58256d54cd35af55e19d01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5cafc63d6b8567fa7b3a50c5ef477c6e43c8e5632f8f080bf4578f159f042c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5cafc63d6b8567fa7b3a50c5ef477c6e43c8e5632f8f080bf4578f159f042c4->enter($__internal_e5cafc63d6b8567fa7b3a50c5ef477c6e43c8e5632f8f080bf4578f159f042c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f1874c3e03c3b8c56b291a6dac90b278135c0086ade094aa0b71b137332d4ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1874c3e03c3b8c56b291a6dac90b278135c0086ade094aa0b71b137332d4ee1->enter($__internal_f1874c3e03c3b8c56b291a6dac90b278135c0086ade094aa0b71b137332d4ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_e5cafc63d6b8567fa7b3a50c5ef477c6e43c8e5632f8f080bf4578f159f042c4->leave($__internal_e5cafc63d6b8567fa7b3a50c5ef477c6e43c8e5632f8f080bf4578f159f042c4_prof);

        
        $__internal_f1874c3e03c3b8c56b291a6dac90b278135c0086ade094aa0b71b137332d4ee1->leave($__internal_f1874c3e03c3b8c56b291a6dac90b278135c0086ade094aa0b71b137332d4ee1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7ae44e19b49c0b84b711f63f5f83f31beec2a3e676c4b6c1ab5c14a153af661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ae44e19b49c0b84b711f63f5f83f31beec2a3e676c4b6c1ab5c14a153af661->enter($__internal_a7ae44e19b49c0b84b711f63f5f83f31beec2a3e676c4b6c1ab5c14a153af661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b865e0cab4a2ee498f2e5c2565633cbf94326b617c13bc2f85db3ab01d19031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b865e0cab4a2ee498f2e5c2565633cbf94326b617c13bc2f85db3ab01d19031->enter($__internal_2b865e0cab4a2ee498f2e5c2565633cbf94326b617c13bc2f85db3ab01d19031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2b865e0cab4a2ee498f2e5c2565633cbf94326b617c13bc2f85db3ab01d19031->leave($__internal_2b865e0cab4a2ee498f2e5c2565633cbf94326b617c13bc2f85db3ab01d19031_prof);

        
        $__internal_a7ae44e19b49c0b84b711f63f5f83f31beec2a3e676c4b6c1ab5c14a153af661->leave($__internal_a7ae44e19b49c0b84b711f63f5f83f31beec2a3e676c4b6c1ab5c14a153af661_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5733398158c4e969e331c25ad88a70b836704bf36864db044897c39abd3f4de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5733398158c4e969e331c25ad88a70b836704bf36864db044897c39abd3f4de7->enter($__internal_5733398158c4e969e331c25ad88a70b836704bf36864db044897c39abd3f4de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dacc2d6bfd8a8a7448fd5d1ce351589880974a2efe2af2c34eff35260352d744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dacc2d6bfd8a8a7448fd5d1ce351589880974a2efe2af2c34eff35260352d744->enter($__internal_dacc2d6bfd8a8a7448fd5d1ce351589880974a2efe2af2c34eff35260352d744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_dacc2d6bfd8a8a7448fd5d1ce351589880974a2efe2af2c34eff35260352d744->leave($__internal_dacc2d6bfd8a8a7448fd5d1ce351589880974a2efe2af2c34eff35260352d744_prof);

        
        $__internal_5733398158c4e969e331c25ad88a70b836704bf36864db044897c39abd3f4de7->leave($__internal_5733398158c4e969e331c25ad88a70b836704bf36864db044897c39abd3f4de7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cad25436cc16c1bf6d9a6750cc09cb7a3af03fd97e074fafc2be4218e63556e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cad25436cc16c1bf6d9a6750cc09cb7a3af03fd97e074fafc2be4218e63556e->enter($__internal_2cad25436cc16c1bf6d9a6750cc09cb7a3af03fd97e074fafc2be4218e63556e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_405bb1c57869bab9277fd3da43adf82532203f3c580b87a9b8acdb33eaf2855a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405bb1c57869bab9277fd3da43adf82532203f3c580b87a9b8acdb33eaf2855a->enter($__internal_405bb1c57869bab9277fd3da43adf82532203f3c580b87a9b8acdb33eaf2855a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_405bb1c57869bab9277fd3da43adf82532203f3c580b87a9b8acdb33eaf2855a->leave($__internal_405bb1c57869bab9277fd3da43adf82532203f3c580b87a9b8acdb33eaf2855a_prof);

        
        $__internal_2cad25436cc16c1bf6d9a6750cc09cb7a3af03fd97e074fafc2be4218e63556e->leave($__internal_2cad25436cc16c1bf6d9a6750cc09cb7a3af03fd97e074fafc2be4218e63556e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\Zanimo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
