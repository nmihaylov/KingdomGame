<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_6d65891fdf9cb6f452106d50a8760bd1dff060290e6403b0200beb420551fa0a extends Twig_Template
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
        $__internal_a8e61904f6af15610c041e1b5e8f0928468474505188b150bd682a83986a080c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e61904f6af15610c041e1b5e8f0928468474505188b150bd682a83986a080c->enter($__internal_a8e61904f6af15610c041e1b5e8f0928468474505188b150bd682a83986a080c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a8e61904f6af15610c041e1b5e8f0928468474505188b150bd682a83986a080c->leave($__internal_a8e61904f6af15610c041e1b5e8f0928468474505188b150bd682a83986a080c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
