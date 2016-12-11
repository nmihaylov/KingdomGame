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
        $__internal_a8d8f79eb65198dfb8da84372baf57115c23ab3f8cbfdca8bd640adc55b7ca3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d8f79eb65198dfb8da84372baf57115c23ab3f8cbfdca8bd640adc55b7ca3b->enter($__internal_a8d8f79eb65198dfb8da84372baf57115c23ab3f8cbfdca8bd640adc55b7ca3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8d8f79eb65198dfb8da84372baf57115c23ab3f8cbfdca8bd640adc55b7ca3b->leave($__internal_a8d8f79eb65198dfb8da84372baf57115c23ab3f8cbfdca8bd640adc55b7ca3b_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a134c4b56bfac88026236bdf88e848d7c698171ff0074d093d96e941864b794c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a134c4b56bfac88026236bdf88e848d7c698171ff0074d093d96e941864b794c->enter($__internal_a134c4b56bfac88026236bdf88e848d7c698171ff0074d093d96e941864b794c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "login";
        
        $__internal_a134c4b56bfac88026236bdf88e848d7c698171ff0074d093d96e941864b794c->leave($__internal_a134c4b56bfac88026236bdf88e848d7c698171ff0074d093d96e941864b794c_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_a41a237e78a46f1cd40cee7d728e2c48b0509e844af6b83cfba87efff2d9e87a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41a237e78a46f1cd40cee7d728e2c48b0509e844af6b83cfba87efff2d9e87a->enter($__internal_a41a237e78a46f1cd40cee7d728e2c48b0509e844af6b83cfba87efff2d9e87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("game_index");
        echo "\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_a41a237e78a46f1cd40cee7d728e2c48b0509e844af6b83cfba87efff2d9e87a->leave($__internal_a41a237e78a46f1cd40cee7d728e2c48b0509e844af6b83cfba87efff2d9e87a_prof);

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
                            <a class=\"btn btn-default\" href=\"{{ path('game_index') }}\">Cancel</a>
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
