<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_fd8ef407794685aa259379534d589dfbeb75bbd2233a1baee401e5c3ad4dba9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f03ee45a7df804ac2fd7397881ae1297be2aea9cf4da55baa4c3dc71958ee5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03ee45a7df804ac2fd7397881ae1297be2aea9cf4da55baa4c3dc71958ee5cd->enter($__internal_f03ee45a7df804ac2fd7397881ae1297be2aea9cf4da55baa4c3dc71958ee5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_f03ee45a7df804ac2fd7397881ae1297be2aea9cf4da55baa4c3dc71958ee5cd->leave($__internal_f03ee45a7df804ac2fd7397881ae1297be2aea9cf4da55baa4c3dc71958ee5cd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
