<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a55ceb3b08007be2f1a70139b0934012761a384bd0fd278b18150cd28bd8ce75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0ec2d95b68c719b96aaf5b03fab5284a7fce5b8c3fcc148e9d97400a717165e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0ec2d95b68c719b96aaf5b03fab5284a7fce5b8c3fcc148e9d97400a717165e->enter($__internal_f0ec2d95b68c719b96aaf5b03fab5284a7fce5b8c3fcc148e9d97400a717165e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1fa4175d37920ac2c8f8a296012079a6c76322c48f112b53053c9ac3902610b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa4175d37920ac2c8f8a296012079a6c76322c48f112b53053c9ac3902610b4->enter($__internal_1fa4175d37920ac2c8f8a296012079a6c76322c48f112b53053c9ac3902610b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0ec2d95b68c719b96aaf5b03fab5284a7fce5b8c3fcc148e9d97400a717165e->leave($__internal_f0ec2d95b68c719b96aaf5b03fab5284a7fce5b8c3fcc148e9d97400a717165e_prof);

        
        $__internal_1fa4175d37920ac2c8f8a296012079a6c76322c48f112b53053c9ac3902610b4->leave($__internal_1fa4175d37920ac2c8f8a296012079a6c76322c48f112b53053c9ac3902610b4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_079ccc101372667cec4406fe0da259da250f0941d1b00d4493bc5879cb3bb2f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_079ccc101372667cec4406fe0da259da250f0941d1b00d4493bc5879cb3bb2f1->enter($__internal_079ccc101372667cec4406fe0da259da250f0941d1b00d4493bc5879cb3bb2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e10c921796073864a8ad5700c5c9678c9941528d2419224f5fb3259c0c0e8b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10c921796073864a8ad5700c5c9678c9941528d2419224f5fb3259c0c0e8b4d->enter($__internal_e10c921796073864a8ad5700c5c9678c9941528d2419224f5fb3259c0c0e8b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e10c921796073864a8ad5700c5c9678c9941528d2419224f5fb3259c0c0e8b4d->leave($__internal_e10c921796073864a8ad5700c5c9678c9941528d2419224f5fb3259c0c0e8b4d_prof);

        
        $__internal_079ccc101372667cec4406fe0da259da250f0941d1b00d4493bc5879cb3bb2f1->leave($__internal_079ccc101372667cec4406fe0da259da250f0941d1b00d4493bc5879cb3bb2f1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d43300f886c72b5b8d377675b9d942047ec99ed69c6ea0b5fbd238a6e039d9fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d43300f886c72b5b8d377675b9d942047ec99ed69c6ea0b5fbd238a6e039d9fc->enter($__internal_d43300f886c72b5b8d377675b9d942047ec99ed69c6ea0b5fbd238a6e039d9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b95ab0be6fd011bfcb33a337c75e9814a1e3633e0deb4109b356558061bfed29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95ab0be6fd011bfcb33a337c75e9814a1e3633e0deb4109b356558061bfed29->enter($__internal_b95ab0be6fd011bfcb33a337c75e9814a1e3633e0deb4109b356558061bfed29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b95ab0be6fd011bfcb33a337c75e9814a1e3633e0deb4109b356558061bfed29->leave($__internal_b95ab0be6fd011bfcb33a337c75e9814a1e3633e0deb4109b356558061bfed29_prof);

        
        $__internal_d43300f886c72b5b8d377675b9d942047ec99ed69c6ea0b5fbd238a6e039d9fc->leave($__internal_d43300f886c72b5b8d377675b9d942047ec99ed69c6ea0b5fbd238a6e039d9fc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c54e068088e8f4e51c7f52a99b3072374d1c01df0a05baec5df2c20277e680a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c54e068088e8f4e51c7f52a99b3072374d1c01df0a05baec5df2c20277e680a4->enter($__internal_c54e068088e8f4e51c7f52a99b3072374d1c01df0a05baec5df2c20277e680a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_515d931d88c34c107ee4b19a999c41918a534af5b670367045253c965133198e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_515d931d88c34c107ee4b19a999c41918a534af5b670367045253c965133198e->enter($__internal_515d931d88c34c107ee4b19a999c41918a534af5b670367045253c965133198e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_515d931d88c34c107ee4b19a999c41918a534af5b670367045253c965133198e->leave($__internal_515d931d88c34c107ee4b19a999c41918a534af5b670367045253c965133198e_prof);

        
        $__internal_c54e068088e8f4e51c7f52a99b3072374d1c01df0a05baec5df2c20277e680a4->leave($__internal_c54e068088e8f4e51c7f52a99b3072374d1c01df0a05baec5df2c20277e680a4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\Zanimo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
