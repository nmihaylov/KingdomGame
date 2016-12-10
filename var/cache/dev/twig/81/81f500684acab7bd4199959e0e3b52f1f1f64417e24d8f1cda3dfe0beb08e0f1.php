<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_b6e64381161475bdb530fdc6f2d34ec7237f17cc5a4666f9a18ce4c447d94a7a extends Twig_Template
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
        $__internal_506b14bb0d874f8cba4b7e8cb26b8b2f741479b0e98ce2965c52d084a01f2dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506b14bb0d874f8cba4b7e8cb26b8b2f741479b0e98ce2965c52d084a01f2dbf->enter($__internal_506b14bb0d874f8cba4b7e8cb26b8b2f741479b0e98ce2965c52d084a01f2dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_506b14bb0d874f8cba4b7e8cb26b8b2f741479b0e98ce2965c52d084a01f2dbf->leave($__internal_506b14bb0d874f8cba4b7e8cb26b8b2f741479b0e98ce2965c52d084a01f2dbf_prof);

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
