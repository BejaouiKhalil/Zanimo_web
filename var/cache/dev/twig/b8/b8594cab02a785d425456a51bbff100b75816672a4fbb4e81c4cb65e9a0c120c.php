<?php

/* AccessoryBundle:Accessory:show.html.twig */
class __TwigTemplate_b4040c37f035674c4af226304361762f63c768a0a4f5d6c793f437cca58b748d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AccessoryBundle:Accessory:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4b7c6c8a347d0e1f8bfd3c4f0f645c22392c9c3ee39bf396ba146ee25bf9a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4b7c6c8a347d0e1f8bfd3c4f0f645c22392c9c3ee39bf396ba146ee25bf9a47->enter($__internal_b4b7c6c8a347d0e1f8bfd3c4f0f645c22392c9c3ee39bf396ba146ee25bf9a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccessoryBundle:Accessory:show.html.twig"));

        $__internal_dcb72296d7f9910cb8aa3c23e1a988df288b0bbf6915713c2771a1303a498357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb72296d7f9910cb8aa3c23e1a988df288b0bbf6915713c2771a1303a498357->enter($__internal_dcb72296d7f9910cb8aa3c23e1a988df288b0bbf6915713c2771a1303a498357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccessoryBundle:Accessory:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4b7c6c8a347d0e1f8bfd3c4f0f645c22392c9c3ee39bf396ba146ee25bf9a47->leave($__internal_b4b7c6c8a347d0e1f8bfd3c4f0f645c22392c9c3ee39bf396ba146ee25bf9a47_prof);

        
        $__internal_dcb72296d7f9910cb8aa3c23e1a988df288b0bbf6915713c2771a1303a498357->leave($__internal_dcb72296d7f9910cb8aa3c23e1a988df288b0bbf6915713c2771a1303a498357_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_82cf053565da687f0622cf77938f8f9f637f32986b02fb7822556fb26231c538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82cf053565da687f0622cf77938f8f9f637f32986b02fb7822556fb26231c538->enter($__internal_82cf053565da687f0622cf77938f8f9f637f32986b02fb7822556fb26231c538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b5d6839adc753e44b45236c0fb075fb6499134d1a3ffda8e0caeaeb86e374755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d6839adc753e44b45236c0fb075fb6499134d1a3ffda8e0caeaeb86e374755->enter($__internal_b5d6839adc753e44b45236c0fb075fb6499134d1a3ffda8e0caeaeb86e374755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AccessoryBundle:Accessory:show";
        
        $__internal_b5d6839adc753e44b45236c0fb075fb6499134d1a3ffda8e0caeaeb86e374755->leave($__internal_b5d6839adc753e44b45236c0fb075fb6499134d1a3ffda8e0caeaeb86e374755_prof);

        
        $__internal_82cf053565da687f0622cf77938f8f9f637f32986b02fb7822556fb26231c538->leave($__internal_82cf053565da687f0622cf77938f8f9f637f32986b02fb7822556fb26231c538_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_812253bd4e6477bb78891a38655a7711189a2136551ccd4c9b12d6dd4191bc13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812253bd4e6477bb78891a38655a7711189a2136551ccd4c9b12d6dd4191bc13->enter($__internal_812253bd4e6477bb78891a38655a7711189a2136551ccd4c9b12d6dd4191bc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_5cbe8c697f907c017563436506ef9fb22475b24598825bbff6c579481b10144a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cbe8c697f907c017563436506ef9fb22475b24598825bbff6c579481b10144a->enter($__internal_5cbe8c697f907c017563436506ef9fb22475b24598825bbff6c579481b10144a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        echo twig_include($this->env, $context, "::header.html.twig");
        
        $__internal_5cbe8c697f907c017563436506ef9fb22475b24598825bbff6c579481b10144a->leave($__internal_5cbe8c697f907c017563436506ef9fb22475b24598825bbff6c579481b10144a_prof);

        
        $__internal_812253bd4e6477bb78891a38655a7711189a2136551ccd4c9b12d6dd4191bc13->leave($__internal_812253bd4e6477bb78891a38655a7711189a2136551ccd4c9b12d6dd4191bc13_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_074b209ea0d71ce23b8c93e7326feed46f7fe71a2ca5ae700b29d39ae81aeda1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074b209ea0d71ce23b8c93e7326feed46f7fe71a2ca5ae700b29d39ae81aeda1->enter($__internal_074b209ea0d71ce23b8c93e7326feed46f7fe71a2ca5ae700b29d39ae81aeda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc496c02d9b204dac72882af952da44f57d89d8b27840705689855cd7634066a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc496c02d9b204dac72882af952da44f57d89d8b27840705689855cd7634066a->enter($__internal_bc496c02d9b204dac72882af952da44f57d89d8b27840705689855cd7634066a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
  <!-- <h1>Accessory</h1>

    <table>
        <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["accessory"] ?? $this->getContext($context, "accessory")), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nom</th>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["accessory"] ?? $this->getContext($context, "accessory")), "name", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["accessory"] ?? $this->getContext($context, "accessory")), "price", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["accessory"] ?? $this->getContext($context, "accessory")), "description", array()), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>
    <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["accessory"] ?? $this->getContext($context, "accessory")), "imageUrl", array())), "html", null, true);
        echo "\">
    <ul>
        <li>
            <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list");
        echo "\">Back to the list</a>
        </li>
    </ul>
    -->
<div class=\"pusher\">

    <div class=\"ui hidden divider\"></div>

    <div class=\"ui two column stackable grid\">
        <div class=\"column\">



            <div data-product-image=\"http://demo.sylius.org/media/cache/resolve/sylius_shop_product_large_thumbnail/b3/ea/dc284833dba18973d05c5146c65b.jpeg\" data-product-link=\"http://demo.sylius.org/media/cache/resolve/sylius_shop_product_original/b3/ea/dc284833dba18973d05c5146c65b.jpeg\"></div>
            <a href=\"../../media/cache/sylius_shop_product_original/b3/ea/dc284833dba18973d05c5146c65b.jpg\" class=\"ui fluid image\" data-lightbox=\"sylius-product-image\">
                <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["accessory"] ?? $this->getContext($context, "accessory")), "imageUrl", array())), "html", null, true);
        echo "\" id=\"main-image\" alt=\"Mug &quot;ab&quot;\" />
            </a>
            <div class=\"ui divider\"></div>



            <div class=\"ui small images\">
                <div class=\"ui image\">
                    <div class=\"sylius-image-variants\">
                    </div>
                    <a href=\"../../media/cache/sylius_shop_product_original/b3/ea/dc284833dba18973d05c5146c65b.jpg\" data-lightbox=\"sylius-product-image\">
                        <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["accessory"] ?? $this->getContext($context, "accessory")), "imageUrl", array())), "html", null, true);
        echo "\" data-large-thumbnail=\"http://demo.sylius.org/media/cache/resolve/sylius_shop_product_large_thumbnail/b3/ea/dc284833dba18973d05c5146c65b.jpeg\" alt=\"Mug &quot;ab&quot;\" />
                    </a>
                </div>
                <div class=\"ui image\">
                    <div class=\"sylius-image-variants\">
                    </div>
                    <a href=\"../../media/cache/sylius_shop_product_original/ad/a5/0506e976e885257ddf9f503f6334.jpg\" data-lightbox=\"sylius-product-image\">
                        <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["accessory"] ?? $this->getContext($context, "accessory")), "imageUrl", array())), "html", null, true);
        echo "\" alt=\"Mug &quot;ab&quot;\" />
                    </a>
                </div>
            </div>


        </div>


    <div class=\"column\">
        <h1 id=\"sylius-product-name\" class=\"ui monster dividing header\">";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["accessory"] ?? $this->getContext($context, "accessory")), "name", array()), "html", null, true);
        echo "</h1>



        <div class=\"ui text menu\">
            <div class=\"item\">
                <div id=\"average-rating\" class=\"ui star large rating\" data-rating=\"0\" data-max-rating=\"5\" data-average-rating=\"0\" style=\"pointer-events: none;\"></div>
            </div>
            <a href=\"mug-ab/reviews/index.html\" class=\"item\">0 Reviews</a>
            <a href=\"mug-ab/reviews/new.html\" class=\"item\">Add your review</a>
        </div>



        <div class=\"ui stackable grid\">
            <div class=\"four wide column\">

<span class=\"ui huge header\" id=\"product-price\">
    ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["accessory"] ?? $this->getContext($context, "accessory")), "price", array()), "html", null, true);
        echo " Dt
</span>
            </div>
            <div class=\"twelve wide right aligned column\">
                <span class=\"ui sub header\">";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute(($context["accessory"] ?? $this->getContext($context, "accessory")), "id", array()), "html", null, true);
        echo "</span>
            </div>
        </div>



        <div class=\"ui basic segment\">
            <p>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute(($context["accessory"] ?? $this->getContext($context, "accessory")), "description", array()), "html", null, true);
        echo "</p>
        </div>




        <div id=\"sylius-variants-pricing\" data-unavailable-text=\"Unavailable\">
            <div data-mug_type=\"mug_type_medium\" data-value=\"\$6.58\" ></div>
            <div data-mug_type=\"mug_type_double\" data-value=\"\$8.82\" ></div>
            <div data-mug_type=\"mug_type_monster\" data-value=\"\$6.99\" ></div>
        </div>


        <div class=\"ui segment\" id=\"sylius-product-selecting-variant\">


            <form name=\"sylius_add_to_cart\" method=\"post\" action=\"http://demo.sylius.org/en_US/ajax/cart/add?productId=425065\" id=\"sylius-product-adding-to-cart\" class=\"ui loadable form\" novalidate=\"novalidate\" data-redirect=\"/en_US/cart/\">

                <div class=\"ui red label bottom pointing hidden sylius-validation-error\" id=\"sylius-cart-validation-error\"></div>
                <div class=\"required field\"><label for=\"sylius_add_to_cart_cartItem_variant_mug_type\" class=\"required\">Mug type</label><select id=\"sylius_add_to_cart_cartItem_variant_mug_type\" name=\"sylius_add_to_cart[cartItem][variant][mug_type]\" data-option=\"mug_type\" class=\" ui dropdown\"><option value=\"mug_type_medium\" selected=\"selected\">Medium mug</option><option value=\"mug_type_double\">Double mug</option><option value=\"mug_type_monster\">Monster mug</option></select></div>
                <div class=\"required field\"><label for=\"sylius_add_to_cart_cartItem_quantity\" class=\"required\">Quantity</label><input type=\"number\" id=\"sylius_add_to_cart_cartItem_quantity\" name=\"sylius_add_to_cart[cartItem][quantity]\" required=\"required\" min=\"1\" value=\"1\" /></div>



                <button type=\"submit\" class=\"ui huge primary icon labeled button\"><i class=\"cart icon\"></i> Add to cart</button>
                <input type=\"hidden\" id=\"sylius_add_to_cart__token\" name=\"sylius_add_to_cart[_token]\" value=\"mviYU7N_oMfgDQRr9FCaDz3wQWwHnaAXodMI1uHzcGo\" />
            </form>
        </div>

        <div class=\"ui hidden divider\"></div>


    </div>
    </div>



    <div class=\"ui top attached large tabular menu\">
        <a class=\"item active\" data-tab=\"details\">Details</a>
        <a class=\"item\" data-tab=\"attributes\">Attributes</a>
        <a class=\"item\" data-tab=\"reviews\">Reviews (0)</a>
    </div>

    <div class=\"ui bottom attached tab segment active\" data-tab=\"details\">

        ";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute(($context["accessory"] ?? $this->getContext($context, "accessory")), "description", array()), "html", null, true);
        echo "
    </div>
    <div class=\"ui bottom attached tab segment\" data-tab=\"attributes\">


        <table id=\"sylius-product-attributes\" class=\"ui definition table\">
            <tbody>
            <tr>
                <td class=\"sylius-product-attribute-name\">Mug material</td>
                <td class=\"sylius-product-attribute-value\">
                    Centipede                            </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class=\"ui bottom attached tab segment\" data-tab=\"reviews\" id=\"sylius-product-reviews\">



        <div class=\"ui icon info message\">
            <i class=\"info circle icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    Info
                </div>
                <p>There are no reviews</p>
            </div>
        </div>




        <a href=\"mug-ab/reviews/index.html\">
            <div class=\"ui labeled icon button\"><i class=\"icon list\"></i> View more</div>
        </a>
        <a href=\"mug-ab/reviews/new.html\">
            <div class=\"ui blue labeled icon button\"><i class=\"icon plus\"></i> Add your review</div>
        </a>
    </div>
";
        
        $__internal_bc496c02d9b204dac72882af952da44f57d89d8b27840705689855cd7634066a->leave($__internal_bc496c02d9b204dac72882af952da44f57d89d8b27840705689855cd7634066a_prof);

        
        $__internal_074b209ea0d71ce23b8c93e7326feed46f7fe71a2ca5ae700b29d39ae81aeda1->leave($__internal_074b209ea0d71ce23b8c93e7326feed46f7fe71a2ca5ae700b29d39ae81aeda1_prof);

    }

    public function getTemplateName()
    {
        return "AccessoryBundle:Accessory:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 148,  224 => 103,  214 => 96,  207 => 92,  186 => 74,  173 => 64,  163 => 57,  149 => 46,  131 => 31,  125 => 28,  118 => 24,  111 => 20,  104 => 16,  97 => 12,  88 => 5,  79 => 4,  60 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block title %}AccessoryBundle:Accessory:show{% endblock %}
{%  block header %} {{ include('::header.html.twig') }}{% endblock %}
{% block body %}

  <!-- <h1>Accessory</h1>

    <table>
        <tbody>
        <tr>
            <th>Id</th>
            <td>{{ accessory.id }}</td>
        </tr>
        <tr>
            <th>Nom</th>
            <td>{{ accessory.name }}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{ accessory.price }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ accessory.description }}</td>
        </tr>
        </tbody>
    </table>
    <img src=\"{{ asset(accessory.imageUrl) }}\">
    <ul>
        <li>
            <a href=\"{{ path('list') }}\">Back to the list</a>
        </li>
    </ul>
    -->
<div class=\"pusher\">

    <div class=\"ui hidden divider\"></div>

    <div class=\"ui two column stackable grid\">
        <div class=\"column\">



            <div data-product-image=\"http://demo.sylius.org/media/cache/resolve/sylius_shop_product_large_thumbnail/b3/ea/dc284833dba18973d05c5146c65b.jpeg\" data-product-link=\"http://demo.sylius.org/media/cache/resolve/sylius_shop_product_original/b3/ea/dc284833dba18973d05c5146c65b.jpeg\"></div>
            <a href=\"../../media/cache/sylius_shop_product_original/b3/ea/dc284833dba18973d05c5146c65b.jpg\" class=\"ui fluid image\" data-lightbox=\"sylius-product-image\">
                <img src=\"{{ asset(accessory.imageUrl) }}\" id=\"main-image\" alt=\"Mug &quot;ab&quot;\" />
            </a>
            <div class=\"ui divider\"></div>



            <div class=\"ui small images\">
                <div class=\"ui image\">
                    <div class=\"sylius-image-variants\">
                    </div>
                    <a href=\"../../media/cache/sylius_shop_product_original/b3/ea/dc284833dba18973d05c5146c65b.jpg\" data-lightbox=\"sylius-product-image\">
                        <img src=\"{{ asset(accessory.imageUrl) }}\" data-large-thumbnail=\"http://demo.sylius.org/media/cache/resolve/sylius_shop_product_large_thumbnail/b3/ea/dc284833dba18973d05c5146c65b.jpeg\" alt=\"Mug &quot;ab&quot;\" />
                    </a>
                </div>
                <div class=\"ui image\">
                    <div class=\"sylius-image-variants\">
                    </div>
                    <a href=\"../../media/cache/sylius_shop_product_original/ad/a5/0506e976e885257ddf9f503f6334.jpg\" data-lightbox=\"sylius-product-image\">
                        <img src=\"{{ asset(accessory.imageUrl) }}\" alt=\"Mug &quot;ab&quot;\" />
                    </a>
                </div>
            </div>


        </div>


    <div class=\"column\">
        <h1 id=\"sylius-product-name\" class=\"ui monster dividing header\">{{ accessory.name }}</h1>



        <div class=\"ui text menu\">
            <div class=\"item\">
                <div id=\"average-rating\" class=\"ui star large rating\" data-rating=\"0\" data-max-rating=\"5\" data-average-rating=\"0\" style=\"pointer-events: none;\"></div>
            </div>
            <a href=\"mug-ab/reviews/index.html\" class=\"item\">0 Reviews</a>
            <a href=\"mug-ab/reviews/new.html\" class=\"item\">Add your review</a>
        </div>



        <div class=\"ui stackable grid\">
            <div class=\"four wide column\">

<span class=\"ui huge header\" id=\"product-price\">
    {{ accessory.price }} Dt
</span>
            </div>
            <div class=\"twelve wide right aligned column\">
                <span class=\"ui sub header\">{{ accessory.id }}</span>
            </div>
        </div>



        <div class=\"ui basic segment\">
            <p>{{ accessory.description }}</p>
        </div>




        <div id=\"sylius-variants-pricing\" data-unavailable-text=\"Unavailable\">
            <div data-mug_type=\"mug_type_medium\" data-value=\"\$6.58\" ></div>
            <div data-mug_type=\"mug_type_double\" data-value=\"\$8.82\" ></div>
            <div data-mug_type=\"mug_type_monster\" data-value=\"\$6.99\" ></div>
        </div>


        <div class=\"ui segment\" id=\"sylius-product-selecting-variant\">


            <form name=\"sylius_add_to_cart\" method=\"post\" action=\"http://demo.sylius.org/en_US/ajax/cart/add?productId=425065\" id=\"sylius-product-adding-to-cart\" class=\"ui loadable form\" novalidate=\"novalidate\" data-redirect=\"/en_US/cart/\">

                <div class=\"ui red label bottom pointing hidden sylius-validation-error\" id=\"sylius-cart-validation-error\"></div>
                <div class=\"required field\"><label for=\"sylius_add_to_cart_cartItem_variant_mug_type\" class=\"required\">Mug type</label><select id=\"sylius_add_to_cart_cartItem_variant_mug_type\" name=\"sylius_add_to_cart[cartItem][variant][mug_type]\" data-option=\"mug_type\" class=\" ui dropdown\"><option value=\"mug_type_medium\" selected=\"selected\">Medium mug</option><option value=\"mug_type_double\">Double mug</option><option value=\"mug_type_monster\">Monster mug</option></select></div>
                <div class=\"required field\"><label for=\"sylius_add_to_cart_cartItem_quantity\" class=\"required\">Quantity</label><input type=\"number\" id=\"sylius_add_to_cart_cartItem_quantity\" name=\"sylius_add_to_cart[cartItem][quantity]\" required=\"required\" min=\"1\" value=\"1\" /></div>



                <button type=\"submit\" class=\"ui huge primary icon labeled button\"><i class=\"cart icon\"></i> Add to cart</button>
                <input type=\"hidden\" id=\"sylius_add_to_cart__token\" name=\"sylius_add_to_cart[_token]\" value=\"mviYU7N_oMfgDQRr9FCaDz3wQWwHnaAXodMI1uHzcGo\" />
            </form>
        </div>

        <div class=\"ui hidden divider\"></div>


    </div>
    </div>



    <div class=\"ui top attached large tabular menu\">
        <a class=\"item active\" data-tab=\"details\">Details</a>
        <a class=\"item\" data-tab=\"attributes\">Attributes</a>
        <a class=\"item\" data-tab=\"reviews\">Reviews (0)</a>
    </div>

    <div class=\"ui bottom attached tab segment active\" data-tab=\"details\">

        {{ accessory.description }}
    </div>
    <div class=\"ui bottom attached tab segment\" data-tab=\"attributes\">


        <table id=\"sylius-product-attributes\" class=\"ui definition table\">
            <tbody>
            <tr>
                <td class=\"sylius-product-attribute-name\">Mug material</td>
                <td class=\"sylius-product-attribute-value\">
                    Centipede                            </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class=\"ui bottom attached tab segment\" data-tab=\"reviews\" id=\"sylius-product-reviews\">



        <div class=\"ui icon info message\">
            <i class=\"info circle icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    Info
                </div>
                <p>There are no reviews</p>
            </div>
        </div>




        <a href=\"mug-ab/reviews/index.html\">
            <div class=\"ui labeled icon button\"><i class=\"icon list\"></i> View more</div>
        </a>
        <a href=\"mug-ab/reviews/new.html\">
            <div class=\"ui blue labeled icon button\"><i class=\"icon plus\"></i> Add your review</div>
        </a>
    </div>
{% endblock %}
", "AccessoryBundle:Accessory:show.html.twig", "C:\\xampp\\htdocs\\Zanimo\\src\\AccessoryBundle/Resources/views/Accessory/show.html.twig");
    }
}
