<?php

/* :security:login.html.twig */
class __TwigTemplate_d51fcc629cd0c5b6ea1052a9778015c9f307954a0acadfd443a3bdb8bdbd9cf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":security:login.html.twig", 1);
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
        $__internal_1ed106432fdc47c68b776c4e5db5b76248d22ce880b3020189306200ec709097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ed106432fdc47c68b776c4e5db5b76248d22ce880b3020189306200ec709097->enter($__internal_1ed106432fdc47c68b776c4e5db5b76248d22ce880b3020189306200ec709097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ed106432fdc47c68b776c4e5db5b76248d22ce880b3020189306200ec709097->leave($__internal_1ed106432fdc47c68b776c4e5db5b76248d22ce880b3020189306200ec709097_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_04bfdf36e7481411a743ea8ed8e2011da01202355a454f1dbd2490a61d9a94bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04bfdf36e7481411a743ea8ed8e2011da01202355a454f1dbd2490a61d9a94bf->enter($__internal_04bfdf36e7481411a743ea8ed8e2011da01202355a454f1dbd2490a61d9a94bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "login";
        
        $__internal_04bfdf36e7481411a743ea8ed8e2011da01202355a454f1dbd2490a61d9a94bf->leave($__internal_04bfdf36e7481411a743ea8ed8e2011da01202355a454f1dbd2490a61d9a94bf_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_ce7b88cd035fb716b1fe65451200cadac535a70dbfad218e2be05fa66326d254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7b88cd035fb716b1fe65451200cadac535a70dbfad218e2be05fa66326d254->enter($__internal_ce7b88cd035fb716b1fe65451200cadac535a70dbfad218e2be05fa66326d254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_ce7b88cd035fb716b1fe65451200cadac535a70dbfad218e2be05fa66326d254->leave($__internal_ce7b88cd035fb716b1fe65451200cadac535a70dbfad218e2be05fa66326d254_prof);

    }

    public function getTemplateName()
    {
        return ":security:login.html.twig";
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
