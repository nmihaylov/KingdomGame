<?php

/* blog/index.html.twig */
class __TwigTemplate_7527d9dd2472877c9c163f44bffa438194c56c00833b79be88fa11c73ff6dbf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d65f694a42cf7b265fa9b2fef6db7c77b8ec87152797d34874d482e096753642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65f694a42cf7b265fa9b2fef6db7c77b8ec87152797d34874d482e096753642->enter($__internal_d65f694a42cf7b265fa9b2fef6db7c77b8ec87152797d34874d482e096753642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d65f694a42cf7b265fa9b2fef6db7c77b8ec87152797d34874d482e096753642->leave($__internal_d65f694a42cf7b265fa9b2fef6db7c77b8ec87152797d34874d482e096753642_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_2de69f0eedf35e706e1ba42d38bde55da5239c22ff3919ea1673d05f019519d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de69f0eedf35e706e1ba42d38bde55da5239c22ff3919ea1673d05f019519d1->enter($__internal_2de69f0eedf35e706e1ba42d38bde55da5239c22ff3919ea1673d05f019519d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        
        $__internal_2de69f0eedf35e706e1ba42d38bde55da5239c22ff3919ea1673d05f019519d1->leave($__internal_2de69f0eedf35e706e1ba42d38bde55da5239c22ff3919ea1673d05f019519d1_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}

{% endblock %}
";
    }
}
