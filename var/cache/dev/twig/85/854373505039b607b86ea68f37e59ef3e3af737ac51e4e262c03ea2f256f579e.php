<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_2f79aa99a3bb5bc22a12088e1a8702f04a2d010baf72dab383b0cd6903bbe335 extends Twig_Template
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
        $__internal_f333baaeb6f93759a227c594373156760177ece182ffd74752c2fbfb5aa97aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f333baaeb6f93759a227c594373156760177ece182ffd74752c2fbfb5aa97aac->enter($__internal_f333baaeb6f93759a227c594373156760177ece182ffd74752c2fbfb5aa97aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_f333baaeb6f93759a227c594373156760177ece182ffd74752c2fbfb5aa97aac->leave($__internal_f333baaeb6f93759a227c594373156760177ece182ffd74752c2fbfb5aa97aac_prof);

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
