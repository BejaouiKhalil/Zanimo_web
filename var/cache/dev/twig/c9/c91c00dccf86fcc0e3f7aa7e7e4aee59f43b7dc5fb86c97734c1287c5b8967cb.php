<?php

/* ::base.html.twig */
class __TwigTemplate_b771e732b285e795feb818546d4018f9f8306718540edde4c3cb36dfb89e0aeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e224f629d94a3ab6423a26b046a0c16b487ad27eeb4fffdf8c13a101557070a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e224f629d94a3ab6423a26b046a0c16b487ad27eeb4fffdf8c13a101557070a5->enter($__internal_e224f629d94a3ab6423a26b046a0c16b487ad27eeb4fffdf8c13a101557070a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_4a7f5416dfa4b0d1aed5ba939253f8edd3cd89f88b73a816ee78106103a5caf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7f5416dfa4b0d1aed5ba939253f8edd3cd89f88b73a816ee78106103a5caf1->enter($__internal_4a7f5416dfa4b0d1aed5ba939253f8edd3cd89f88b73a816ee78106103a5caf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_e224f629d94a3ab6423a26b046a0c16b487ad27eeb4fffdf8c13a101557070a5->leave($__internal_e224f629d94a3ab6423a26b046a0c16b487ad27eeb4fffdf8c13a101557070a5_prof);

        
        $__internal_4a7f5416dfa4b0d1aed5ba939253f8edd3cd89f88b73a816ee78106103a5caf1->leave($__internal_4a7f5416dfa4b0d1aed5ba939253f8edd3cd89f88b73a816ee78106103a5caf1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c5c3bbc99dade9786296efe73542d10beaa18ce229363d04df852b0e3a0ab9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c5c3bbc99dade9786296efe73542d10beaa18ce229363d04df852b0e3a0ab9e->enter($__internal_9c5c3bbc99dade9786296efe73542d10beaa18ce229363d04df852b0e3a0ab9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10c973a95c46603caa6677ddca397300734008ae8b65a95a1fee12acaa8b9c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c973a95c46603caa6677ddca397300734008ae8b65a95a1fee12acaa8b9c1c->enter($__internal_10c973a95c46603caa6677ddca397300734008ae8b65a95a1fee12acaa8b9c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_10c973a95c46603caa6677ddca397300734008ae8b65a95a1fee12acaa8b9c1c->leave($__internal_10c973a95c46603caa6677ddca397300734008ae8b65a95a1fee12acaa8b9c1c_prof);

        
        $__internal_9c5c3bbc99dade9786296efe73542d10beaa18ce229363d04df852b0e3a0ab9e->leave($__internal_9c5c3bbc99dade9786296efe73542d10beaa18ce229363d04df852b0e3a0ab9e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f9eeef6f501f66e70c98bda0d570d92cecec96434257da0000db22154f03b1a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9eeef6f501f66e70c98bda0d570d92cecec96434257da0000db22154f03b1a8->enter($__internal_f9eeef6f501f66e70c98bda0d570d92cecec96434257da0000db22154f03b1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_eacb5996829da67779197ca97a65d489d3e75cefc2f4d61f016d2f6032942902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eacb5996829da67779197ca97a65d489d3e75cefc2f4d61f016d2f6032942902->enter($__internal_eacb5996829da67779197ca97a65d489d3e75cefc2f4d61f016d2f6032942902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_eacb5996829da67779197ca97a65d489d3e75cefc2f4d61f016d2f6032942902->leave($__internal_eacb5996829da67779197ca97a65d489d3e75cefc2f4d61f016d2f6032942902_prof);

        
        $__internal_f9eeef6f501f66e70c98bda0d570d92cecec96434257da0000db22154f03b1a8->leave($__internal_f9eeef6f501f66e70c98bda0d570d92cecec96434257da0000db22154f03b1a8_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_0e62f5366315ede1d66030d412fe281f23759996d5cc3e0ec31fa764d0103f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e62f5366315ede1d66030d412fe281f23759996d5cc3e0ec31fa764d0103f50->enter($__internal_0e62f5366315ede1d66030d412fe281f23759996d5cc3e0ec31fa764d0103f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_85bfde061cdbab88263237cde2dadb49f308dd5307a0f42ac57586d1bd50bdf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85bfde061cdbab88263237cde2dadb49f308dd5307a0f42ac57586d1bd50bdf6->enter($__internal_85bfde061cdbab88263237cde2dadb49f308dd5307a0f42ac57586d1bd50bdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_85bfde061cdbab88263237cde2dadb49f308dd5307a0f42ac57586d1bd50bdf6->leave($__internal_85bfde061cdbab88263237cde2dadb49f308dd5307a0f42ac57586d1bd50bdf6_prof);

        
        $__internal_0e62f5366315ede1d66030d412fe281f23759996d5cc3e0ec31fa764d0103f50->leave($__internal_0e62f5366315ede1d66030d412fe281f23759996d5cc3e0ec31fa764d0103f50_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_eff6fff41e0539bf594be7b2d959c56dfc6705dd06a367f7eec42252f8f0c06a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff6fff41e0539bf594be7b2d959c56dfc6705dd06a367f7eec42252f8f0c06a->enter($__internal_eff6fff41e0539bf594be7b2d959c56dfc6705dd06a367f7eec42252f8f0c06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_43fe02c030792ff8ce998328c327099fac309b7dcdec257167e2883d3ebc6385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43fe02c030792ff8ce998328c327099fac309b7dcdec257167e2883d3ebc6385->enter($__internal_43fe02c030792ff8ce998328c327099fac309b7dcdec257167e2883d3ebc6385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_43fe02c030792ff8ce998328c327099fac309b7dcdec257167e2883d3ebc6385->leave($__internal_43fe02c030792ff8ce998328c327099fac309b7dcdec257167e2883d3ebc6385_prof);

        
        $__internal_eff6fff41e0539bf594be7b2d959c56dfc6705dd06a367f7eec42252f8f0c06a->leave($__internal_eff6fff41e0539bf594be7b2d959c56dfc6705dd06a367f7eec42252f8f0c06a_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_786b0cd92560313448d6d6f5ebc56f27a0fe25fe774ab34f90370ae305436d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_786b0cd92560313448d6d6f5ebc56f27a0fe25fe774ab34f90370ae305436d6f->enter($__internal_786b0cd92560313448d6d6f5ebc56f27a0fe25fe774ab34f90370ae305436d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f83bc57a471c80fed0f1263cbfdb7c2357d227867f5390820f55538de211d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f83bc57a471c80fed0f1263cbfdb7c2357d227867f5390820f55538de211d98->enter($__internal_6f83bc57a471c80fed0f1263cbfdb7c2357d227867f5390820f55538de211d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6f83bc57a471c80fed0f1263cbfdb7c2357d227867f5390820f55538de211d98->leave($__internal_6f83bc57a471c80fed0f1263cbfdb7c2357d227867f5390820f55538de211d98_prof);

        
        $__internal_786b0cd92560313448d6d6f5ebc56f27a0fe25fe774ab34f90370ae305436d6f->leave($__internal_786b0cd92560313448d6d6f5ebc56f27a0fe25fe774ab34f90370ae305436d6f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 15,  143 => 14,  126 => 13,  109 => 12,  96 => 7,  87 => 6,  69 => 5,  57 => 17,  54 => 14,  51 => 13,  49 => 12,  42 => 9,  40 => 6,  36 => 5,  30 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\"/>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block header %}{% endblock %}
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('js/app.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\Zanimo\\app/Resources\\views/base.html.twig");
    }
}
