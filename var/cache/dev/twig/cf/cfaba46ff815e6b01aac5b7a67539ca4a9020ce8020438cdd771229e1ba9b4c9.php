<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_3c717e3de5cfcaaf6cd8f52e8cb1ea0e80b52f79988b7b77ecc297c21eff9b2c extends Twig_Template
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
        $__internal_96e84e9a98bd1d296677dc103db5b9a0718dd080e48dec20afcc3fd669acdbf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e84e9a98bd1d296677dc103db5b9a0718dd080e48dec20afcc3fd669acdbf8->enter($__internal_96e84e9a98bd1d296677dc103db5b9a0718dd080e48dec20afcc3fd669acdbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_96e84e9a98bd1d296677dc103db5b9a0718dd080e48dec20afcc3fd669acdbf8->leave($__internal_96e84e9a98bd1d296677dc103db5b9a0718dd080e48dec20afcc3fd669acdbf8_prof);

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
