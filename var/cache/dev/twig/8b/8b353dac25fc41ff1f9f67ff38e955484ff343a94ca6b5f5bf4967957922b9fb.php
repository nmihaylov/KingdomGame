<?php

/* security/login.html.twig */
class __TwigTemplate_ef5c5843f4fde709fd586bfd2956d66b26fdaefe99533556fa0c8aaecbf47b88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bffba77af52b4bc9a53d5989afe2fcae32b92e5d85fb3e38c82b80af416136a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bffba77af52b4bc9a53d5989afe2fcae32b92e5d85fb3e38c82b80af416136a0->enter($__internal_bffba77af52b4bc9a53d5989afe2fcae32b92e5d85fb3e38c82b80af416136a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bffba77af52b4bc9a53d5989afe2fcae32b92e5d85fb3e38c82b80af416136a0->leave($__internal_bffba77af52b4bc9a53d5989afe2fcae32b92e5d85fb3e38c82b80af416136a0_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_d89765ce441cdcd2dfe7cd34f70d1650f6c860c3ed6e9162cd949ef44bff2aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89765ce441cdcd2dfe7cd34f70d1650f6c860c3ed6e9162cd949ef44bff2aa8->enter($__internal_d89765ce441cdcd2dfe7cd34f70d1650f6c860c3ed6e9162cd949ef44bff2aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "login";
        
        $__internal_d89765ce441cdcd2dfe7cd34f70d1650f6c860c3ed6e9162cd949ef44bff2aa8->leave($__internal_d89765ce441cdcd2dfe7cd34f70d1650f6c860c3ed6e9162cd949ef44bff2aa8_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_5b8e05ca100187acd1e2dcc52864300fdbac3481677e97a0e391a7f6cf7fd456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8e05ca100187acd1e2dcc52864300fdbac3481677e97a0e391a7f6cf7fd456->enter($__internal_5b8e05ca100187acd1e2dcc52864300fdbac3481677e97a0e391a7f6cf7fd456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo "\" method=\"post\">
                <fieldset>
                    <legend>Login</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_username\">Username</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"user_username\" placeholder=\"Username\" name=\"_username\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"password\">Password</label>
                        <div class=\"col-sm-4\">
                            <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\" name=\"_password\">
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_5b8e05ca100187acd1e2dcc52864300fdbac3481677e97a0e391a7f6cf7fd456->leave($__internal_5b8e05ca100187acd1e2dcc52864300fdbac3481677e97a0e391a7f6cf7fd456_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  76 => 24,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'login' %}

{% block main %}

    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('security_login') }}\" method=\"post\">
                <fieldset>
                    <legend>Login</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_username\">Username</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"user_username\" placeholder=\"Username\" name=\"_username\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"password\">Password</label>
                        <div class=\"col-sm-4\">
                            <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\" name=\"_password\">
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('blog_index') }}\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
{% endblock %}
";
    }
}
