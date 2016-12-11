<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_292f74d6f86d3dd7a85eed2d24ae83174fe49880de910aec321ef21332a4875f extends Twig_Template
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
        $__internal_9f2468603de8442c0d2f8b118665dccd99b2dd6614db04d5872092d5249bd546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2468603de8442c0d2f8b118665dccd99b2dd6614db04d5872092d5249bd546->enter($__internal_9f2468603de8442c0d2f8b118665dccd99b2dd6614db04d5872092d5249bd546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9f2468603de8442c0d2f8b118665dccd99b2dd6614db04d5872092d5249bd546->leave($__internal_9f2468603de8442c0d2f8b118665dccd99b2dd6614db04d5872092d5249bd546_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
