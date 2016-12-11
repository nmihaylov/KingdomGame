<?php

/* :user:register.html.twig */
class __TwigTemplate_85b73362369789e2e7c1efb34f79a4135c94bde88e8a9052341ff273657ae18d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:register.html.twig", 1);
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
        $__internal_a339883dc1dc1726ddc4f26569fc70d8ff0c33aed63c204d069557c2d5c43963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a339883dc1dc1726ddc4f26569fc70d8ff0c33aed63c204d069557c2d5c43963->enter($__internal_a339883dc1dc1726ddc4f26569fc70d8ff0c33aed63c204d069557c2d5c43963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a339883dc1dc1726ddc4f26569fc70d8ff0c33aed63c204d069557c2d5c43963->leave($__internal_a339883dc1dc1726ddc4f26569fc70d8ff0c33aed63c204d069557c2d5c43963_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1c2f1774c40c1e3813ae497e016da670cebc11d6807d46c2a7bd6d3a15ecad50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2f1774c40c1e3813ae497e016da670cebc11d6807d46c2a7bd6d3a15ecad50->enter($__internal_1c2f1774c40c1e3813ae497e016da670cebc11d6807d46c2a7bd6d3a15ecad50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "register";
        
        $__internal_1c2f1774c40c1e3813ae497e016da670cebc11d6807d46c2a7bd6d3a15ecad50->leave($__internal_1c2f1774c40c1e3813ae497e016da670cebc11d6807d46c2a7bd6d3a15ecad50_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_f90dd0eef486539f52b2c0616e20aed7caf6508b65b85dd10f6ce324b17e542b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90dd0eef486539f52b2c0616e20aed7caf6508b65b85dd10f6ce324b17e542b->enter($__internal_f90dd0eef486539f52b2c0616e20aed7caf6508b65b85dd10f6ce324b17e542b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
        echo "\" method=\"post\">
                <fieldset>
                    <legend>Login</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_username\">Username</label>
                        <div class=\"col-sm-4 \">
                            <input class=\"form-control\" id=\"user_username\" placeholder=\"Username\" name=\"user[username]\" required type=\"text\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_fullName\">Full Name</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"user_fullName\" placeholder=\"Full Name\" name=\"user[fullName]\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_password_first\">Password</label>
                        <div class=\"col-sm-4\">
                            <input type=\"password\" class=\"form-control\" id=\"user_password_first\" placeholder=\"Password\" name=\"user[password][first]\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_password_second\">Confirm Password</label>
                        <div class=\"col-sm-4\">
                            <input type=\"password\" class=\"form-control\" id=\"user_password_second\" placeholder=\"Password\" name=\"user[password][second]\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("game_index");
        echo "\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                        </div>
                    </div>

                    ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_f90dd0eef486539f52b2c0616e20aed7caf6508b65b85dd10f6ce324b17e542b->leave($__internal_f90dd0eef486539f52b2c0616e20aed7caf6508b65b85dd10f6ce324b17e542b_prof);

    }

    public function getTemplateName()
    {
        return ":user:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 42,  89 => 37,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'register' %}

{% block main %}
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('user_register') }}\" method=\"post\">
                <fieldset>
                    <legend>Login</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_username\">Username</label>
                        <div class=\"col-sm-4 \">
                            <input class=\"form-control\" id=\"user_username\" placeholder=\"Username\" name=\"user[username]\" required type=\"text\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_fullName\">Full Name</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"user_fullName\" placeholder=\"Full Name\" name=\"user[fullName]\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_password_first\">Password</label>
                        <div class=\"col-sm-4\">
                            <input type=\"password\" class=\"form-control\" id=\"user_password_first\" placeholder=\"Password\" name=\"user[password][first]\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_password_second\">Confirm Password</label>
                        <div class=\"col-sm-4\">
                            <input type=\"password\" class=\"form-control\" id=\"user_password_second\" placeholder=\"Password\" name=\"user[password][second]\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('game_index') }}\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                        </div>
                    </div>

                    {{  form_row(form._token) }}
                </fieldset>
            </form>
        </div>
    </div>
{% endblock %}
";
    }
}
