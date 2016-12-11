<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_1c6da36de13158d0a9d25225dbaa42b759252c09cb3b45cf3ebdc58270ff7c93 extends Twig_Template
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
        $__internal_5b941ebe4a90568fe993692245fb889b9d2cadbf49666ff5e1e0f7eb2c14fd07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b941ebe4a90568fe993692245fb889b9d2cadbf49666ff5e1e0f7eb2c14fd07->enter($__internal_5b941ebe4a90568fe993692245fb889b9d2cadbf49666ff5e1e0f7eb2c14fd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5b941ebe4a90568fe993692245fb889b9d2cadbf49666ff5e1e0f7eb2c14fd07->leave($__internal_5b941ebe4a90568fe993692245fb889b9d2cadbf49666ff5e1e0f7eb2c14fd07_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
