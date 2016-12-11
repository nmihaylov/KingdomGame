<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_7b2595a3ce0824ef0c4dfd66d4fff2b49d6e973b35fa16ee7464e08a95146f57 extends Twig_Template
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
        $__internal_9c89df8ffd9aa0833e3e48b00195c025a10e9b97cce2d4ea67960af987c53269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c89df8ffd9aa0833e3e48b00195c025a10e9b97cce2d4ea67960af987c53269->enter($__internal_9c89df8ffd9aa0833e3e48b00195c025a10e9b97cce2d4ea67960af987c53269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9c89df8ffd9aa0833e3e48b00195c025a10e9b97cce2d4ea67960af987c53269->leave($__internal_9c89df8ffd9aa0833e3e48b00195c025a10e9b97cce2d4ea67960af987c53269_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
