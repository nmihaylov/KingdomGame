<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c080c8eca870caee56f9e06aa3a39bf72b807d153facf28079fd3b7c03c0145d extends Twig_Template
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
        $__internal_a81f1a95a491d5393896792e7184b99b99eac5ff659d0ef385dbb76cd224af9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81f1a95a491d5393896792e7184b99b99eac5ff659d0ef385dbb76cd224af9c->enter($__internal_a81f1a95a491d5393896792e7184b99b99eac5ff659d0ef385dbb76cd224af9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a81f1a95a491d5393896792e7184b99b99eac5ff659d0ef385dbb76cd224af9c->leave($__internal_a81f1a95a491d5393896792e7184b99b99eac5ff659d0ef385dbb76cd224af9c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
