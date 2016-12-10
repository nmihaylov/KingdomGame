<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_a0d50697dd730a6e701f68dbdf6abc12d943c65ca6b48388cf08b1c548bdff28 extends Twig_Template
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
        $__internal_d4fbdefde9bbd055cfceaae03ff2b0ada757277bbea6058908a222e2805704f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4fbdefde9bbd055cfceaae03ff2b0ada757277bbea6058908a222e2805704f6->enter($__internal_d4fbdefde9bbd055cfceaae03ff2b0ada757277bbea6058908a222e2805704f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_d4fbdefde9bbd055cfceaae03ff2b0ada757277bbea6058908a222e2805704f6->leave($__internal_d4fbdefde9bbd055cfceaae03ff2b0ada757277bbea6058908a222e2805704f6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
