<?php

/* user/profile.html.twig */
class __TwigTemplate_7b0de0ddadb6a96acc8d272628f2e9ca52fc0d1352bbef720a91e203c656f0dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
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
        $__internal_a2865186e107b52f8d545fa02b0ba519b9cf584661744db0965af7338c4094e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2865186e107b52f8d545fa02b0ba519b9cf584661744db0965af7338c4094e6->enter($__internal_a2865186e107b52f8d545fa02b0ba519b9cf584661744db0965af7338c4094e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2865186e107b52f8d545fa02b0ba519b9cf584661744db0965af7338c4094e6->leave($__internal_a2865186e107b52f8d545fa02b0ba519b9cf584661744db0965af7338c4094e6_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_d8f6db5e05e8648050a102f62a36e54154ec08e91d7b1a6d5fbcc536d5d455a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f6db5e05e8648050a102f62a36e54154ec08e91d7b1a6d5fbcc536d5d455a0->enter($__internal_d8f6db5e05e8648050a102f62a36e54154ec08e91d7b1a6d5fbcc536d5d455a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_d8f6db5e05e8648050a102f62a36e54154ec08e91d7b1a6d5fbcc536d5d455a0->leave($__internal_d8f6db5e05e8648050a102f62a36e54154ec08e91d7b1a6d5fbcc536d5d455a0_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_b2a16bc33cfecca0ccf5b44f18e8f5faf03c8c3fa672e38f00c6f2f245c6abd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a16bc33cfecca0ccf5b44f18e8f5faf03c8c3fa672e38f00c6f2f245c6abd8->enter($__internal_b2a16bc33cfecca0ccf5b44f18e8f5faf03c8c3fa672e38f00c6f2f245c6abd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div>
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "
        <br>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "
    </div>
";
        
        $__internal_b2a16bc33cfecca0ccf5b44f18e8f5faf03c8c3fa672e38f00c6f2f245c6abd8->leave($__internal_b2a16bc33cfecca0ccf5b44f18e8f5faf03c8c3fa672e38f00c6f2f245c6abd8_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'profile' %}

{% block main %}
    <div>
        {{ user.username }}
        <br>
        {{ user.fullName }}
    </div>
{% endblock %}
";
    }
}
