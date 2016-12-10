<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_0aa77b67cf2a690496de40ebab64bbe164ce036af6158a8ca55ad3693e1b4a6b extends Twig_Template
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
        $__internal_bd6321a4433fb28ade21ef0bf2b6407af5015e69eeb8335be8b577a1d6541c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6321a4433fb28ade21ef0bf2b6407af5015e69eeb8335be8b577a1d6541c73->enter($__internal_bd6321a4433fb28ade21ef0bf2b6407af5015e69eeb8335be8b577a1d6541c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bd6321a4433fb28ade21ef0bf2b6407af5015e69eeb8335be8b577a1d6541c73->leave($__internal_bd6321a4433fb28ade21ef0bf2b6407af5015e69eeb8335be8b577a1d6541c73_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
