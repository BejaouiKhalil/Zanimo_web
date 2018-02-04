<?php

/* @Accessory/Accessory/add.html.twig */
class __TwigTemplate_d42d836206f7371d8d123616b6956693c642dfc5cae9d5ac98983266e622a46c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":admin:layout.html.twig", "@Accessory/Accessory/add.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1d2b650b5e2bb165c325015af4ad1ca4ffc44526372fb1851613c9a6d2d2c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d2b650b5e2bb165c325015af4ad1ca4ffc44526372fb1851613c9a6d2d2c05->enter($__internal_a1d2b650b5e2bb165c325015af4ad1ca4ffc44526372fb1851613c9a6d2d2c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Accessory/Accessory/add.html.twig"));

        $__internal_d7fa17e28be12881043b162b1e67be9f0caf94676708cdc4a97a800d0215fe94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fa17e28be12881043b162b1e67be9f0caf94676708cdc4a97a800d0215fe94->enter($__internal_d7fa17e28be12881043b162b1e67be9f0caf94676708cdc4a97a800d0215fe94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Accessory/Accessory/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1d2b650b5e2bb165c325015af4ad1ca4ffc44526372fb1851613c9a6d2d2c05->leave($__internal_a1d2b650b5e2bb165c325015af4ad1ca4ffc44526372fb1851613c9a6d2d2c05_prof);

        
        $__internal_d7fa17e28be12881043b162b1e67be9f0caf94676708cdc4a97a800d0215fe94->leave($__internal_d7fa17e28be12881043b162b1e67be9f0caf94676708cdc4a97a800d0215fe94_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_3cb932f671f497d93226c964234e30c5d74c2a8a3dabe46a0a988a06650a9aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb932f671f497d93226c964234e30c5d74c2a8a3dabe46a0a988a06650a9aab->enter($__internal_3cb932f671f497d93226c964234e30c5d74c2a8a3dabe46a0a988a06650a9aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_07f2bb0df4e29373289deab1da984e52311e2658b8996535aec5e77b00f29406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f2bb0df4e29373289deab1da984e52311e2658b8996535aec5e77b00f29406->enter($__internal_07f2bb0df4e29373289deab1da984e52311e2658b8996535aec5e77b00f29406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
    <div class=\"m-portlet\">
        <div class=\"m-portlet__head\">
            <div class=\"m-portlet__head-caption\">
                <div class=\"m-portlet__head-title\">
\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">
\t\t\t\t\t\t<i class=\"la la-gear\"></i>
\t\t\t\t\t\t</span>
                    <h3 class=\"m-portlet__head-text\">
                        New accessory
                    </h3>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        <form class=\"m-form\">
            <div class=\"m-portlet__body\">
                <div class=\"m-form__section m-form__section--first\">
                    <div class=\"form-group m-form__group row\">
                        <label class=\"col-lg-3 col-form-label\"> Name:</label>
                        <div class=\"col-lg-6\">
                            <input type=\"text\" class=\"form-control m-input\" placeholder=\"Enter full name\">
                            <span class=\"m-form__help\">Please enter Accessory name</span>
                        </div>
                    </div>
                    <div class=\"form-group m-form__group row\">
                        <label class=\"col-lg-3 col-form-label\">Price :</label>
                        <div class=\"col-lg-6\">
                            <input type=\"text\" class=\"form-control m-input\" placeholder=\"Enter Price\">
                            <span class=\"m-form__help\">Please enter Accessory price</span>
                        </div>
                    </div>
                    <div class=\"form-group m-form__group row\">
                        <label class=\"col-lg-3 col-form-label\">Contact</label>
                        <div class=\"col-lg-6\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\"><span class=\"input-group-text\"><i class=\"la la-chain\"></i></span></div>
                                <input type=\"text\" class=\"form-control m-input\" placeholder=\"Phone number\">
                            </div>
                        </div>
                    </div>
                    <div class=\"m-form__group form-group row\">
                        <label class=\"col-lg-3 col-form-label\">Communication:</label>
                        <div class=\"col-lg-6\">
                            <div class=\"m-checkbox-inline\">
                                <label class=\"m-checkbox\">
                                    <input type=\"checkbox\"> Email
                                    <span></span>
                                </label>
                                <label class=\"m-checkbox\">
                                    <input type=\"checkbox\"> SMS
                                    <span></span>
                                </label>
                                <label class=\"m-checkbox\">
                                    <input type=\"checkbox\"> Phone
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"m-portlet__foot m-portlet__foot--fit\">
                <div class=\"m-form__actions m-form__actions\">
                    <div class=\"row\">
                        <div class=\"col-lg-3\"></div>
                        <div class=\"col-lg-6\">
                            <button type=\"reset\" class=\"btn btn-success\">Submit</button>
                            <button type=\"reset\" class=\"btn btn-secondary\">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div></div></div>
";
        
        $__internal_07f2bb0df4e29373289deab1da984e52311e2658b8996535aec5e77b00f29406->leave($__internal_07f2bb0df4e29373289deab1da984e52311e2658b8996535aec5e77b00f29406_prof);

        
        $__internal_3cb932f671f497d93226c964234e30c5d74c2a8a3dabe46a0a988a06650a9aab->leave($__internal_3cb932f671f497d93226c964234e30c5d74c2a8a3dabe46a0a988a06650a9aab_prof);

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
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ':admin:layout.html.twig' %}
{% block content %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
    <div class=\"m-portlet\">
        <div class=\"m-portlet__head\">
            <div class=\"m-portlet__head-caption\">
                <div class=\"m-portlet__head-title\">
\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">
\t\t\t\t\t\t<i class=\"la la-gear\"></i>
\t\t\t\t\t\t</span>
                    <h3 class=\"m-portlet__head-text\">
                        New accessory
                    </h3>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        <form class=\"m-form\">
            <div class=\"m-portlet__body\">
                <div class=\"m-form__section m-form__section--first\">
                    <div class=\"form-group m-form__group row\">
                        <label class=\"col-lg-3 col-form-label\"> Name:</label>
                        <div class=\"col-lg-6\">
                            <input type=\"text\" class=\"form-control m-input\" placeholder=\"Enter full name\">
                            <span class=\"m-form__help\">Please enter Accessory name</span>
                        </div>
                    </div>
                    <div class=\"form-group m-form__group row\">
                        <label class=\"col-lg-3 col-form-label\">Price :</label>
                        <div class=\"col-lg-6\">
                            <input type=\"text\" class=\"form-control m-input\" placeholder=\"Enter Price\">
                            <span class=\"m-form__help\">Please enter Accessory price</span>
                        </div>
                    </div>
                    <div class=\"form-group m-form__group row\">
                        <label class=\"col-lg-3 col-form-label\">Contact</label>
                        <div class=\"col-lg-6\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\"><span class=\"input-group-text\"><i class=\"la la-chain\"></i></span></div>
                                <input type=\"text\" class=\"form-control m-input\" placeholder=\"Phone number\">
                            </div>
                        </div>
                    </div>
                    <div class=\"m-form__group form-group row\">
                        <label class=\"col-lg-3 col-form-label\">Communication:</label>
                        <div class=\"col-lg-6\">
                            <div class=\"m-checkbox-inline\">
                                <label class=\"m-checkbox\">
                                    <input type=\"checkbox\"> Email
                                    <span></span>
                                </label>
                                <label class=\"m-checkbox\">
                                    <input type=\"checkbox\"> SMS
                                    <span></span>
                                </label>
                                <label class=\"m-checkbox\">
                                    <input type=\"checkbox\"> Phone
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"m-portlet__foot m-portlet__foot--fit\">
                <div class=\"m-form__actions m-form__actions\">
                    <div class=\"row\">
                        <div class=\"col-lg-3\"></div>
                        <div class=\"col-lg-6\">
                            <button type=\"reset\" class=\"btn btn-success\">Submit</button>
                            <button type=\"reset\" class=\"btn btn-secondary\">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div></div></div>
{% endblock %}", "@Accessory/Accessory/add.html.twig", "C:\\xampp\\htdocs\\Zanimo\\src\\AccessoryBundle\\Resources\\views\\Accessory\\add.html.twig");
    }
}
