<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_6d394d8a56ac9ce7238457eb68b6af3505f286bbd7eea7a0f40b48cbb8ec6a12 extends Twig_Template
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
        $__internal_5484257bcc116c36cfe4df0b96041f47f377ac23a4c7a5aca94c9aa8cf369755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5484257bcc116c36cfe4df0b96041f47f377ac23a4c7a5aca94c9aa8cf369755->enter($__internal_5484257bcc116c36cfe4df0b96041f47f377ac23a4c7a5aca94c9aa8cf369755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5484257bcc116c36cfe4df0b96041f47f377ac23a4c7a5aca94c9aa8cf369755->leave($__internal_5484257bcc116c36cfe4df0b96041f47f377ac23a4c7a5aca94c9aa8cf369755_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
