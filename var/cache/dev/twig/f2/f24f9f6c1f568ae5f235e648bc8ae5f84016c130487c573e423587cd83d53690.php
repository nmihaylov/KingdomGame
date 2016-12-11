<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_647a367b4a327fedb753ad7d0dc62cca2fbe78aa695d76841ca33495d1e974b0 extends Twig_Template
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
        $__internal_9d5e56e85b506329b50d893fa1c9ba03c92eadfd1f14bc87997b5a14089356fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5e56e85b506329b50d893fa1c9ba03c92eadfd1f14bc87997b5a14089356fd->enter($__internal_9d5e56e85b506329b50d893fa1c9ba03c92eadfd1f14bc87997b5a14089356fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_9d5e56e85b506329b50d893fa1c9ba03c92eadfd1f14bc87997b5a14089356fd->leave($__internal_9d5e56e85b506329b50d893fa1c9ba03c92eadfd1f14bc87997b5a14089356fd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
