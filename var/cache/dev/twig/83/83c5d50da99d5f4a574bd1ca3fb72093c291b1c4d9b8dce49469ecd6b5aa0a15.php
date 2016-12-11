<?php

/* user/dashboard.html.twig */
class __TwigTemplate_c7b6212f9803d469ac58354d7d517dbe631a924431cb4c3f8ab43a9c748c2b02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/dashboard.html.twig", 1);
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
        $__internal_03fb67e77a79b45d25c31cca49e96571d385fcfdcb9a985c3a131eb57d065415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03fb67e77a79b45d25c31cca49e96571d385fcfdcb9a985c3a131eb57d065415->enter($__internal_03fb67e77a79b45d25c31cca49e96571d385fcfdcb9a985c3a131eb57d065415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03fb67e77a79b45d25c31cca49e96571d385fcfdcb9a985c3a131eb57d065415->leave($__internal_03fb67e77a79b45d25c31cca49e96571d385fcfdcb9a985c3a131eb57d065415_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_3228f3e3fe25158ff10c4ef8ddd640e8a975d4b1207ee9d8a89a8819f5e7c009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3228f3e3fe25158ff10c4ef8ddd640e8a975d4b1207ee9d8a89a8819f5e7c009->enter($__internal_3228f3e3fe25158ff10c4ef8ddd640e8a975d4b1207ee9d8a89a8819f5e7c009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_3228f3e3fe25158ff10c4ef8ddd640e8a975d4b1207ee9d8a89a8819f5e7c009->leave($__internal_3228f3e3fe25158ff10c4ef8ddd640e8a975d4b1207ee9d8a89a8819f5e7c009_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_abcb8dbb9e8ce4147282664f9ed2b561a999044a39718dabdcaef6591d020aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abcb8dbb9e8ce4147282664f9ed2b561a999044a39718dabdcaef6591d020aa8->enter($__internal_abcb8dbb9e8ce4147282664f9ed2b561a999044a39718dabdcaef6591d020aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_abcb8dbb9e8ce4147282664f9ed2b561a999044a39718dabdcaef6591d020aa8->leave($__internal_abcb8dbb9e8ce4147282664f9ed2b561a999044a39718dabdcaef6591d020aa8_prof);

    }

    public function getTemplateName()
    {
        return "user/dashboard.html.twig";
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
