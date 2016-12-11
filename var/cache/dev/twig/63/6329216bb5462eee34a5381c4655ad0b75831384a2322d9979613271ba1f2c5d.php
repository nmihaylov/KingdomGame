<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_31c84a10ec27fae57d034ac7ea605d4beb395e23ccf04dc295b2144d3c484b3d extends Twig_Template
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
        $__internal_719ee2d9881bf79d6ceab310194b2e4906ab234f6e0cf40c107baab0c3ad5a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719ee2d9881bf79d6ceab310194b2e4906ab234f6e0cf40c107baab0c3ad5a83->enter($__internal_719ee2d9881bf79d6ceab310194b2e4906ab234f6e0cf40c107baab0c3ad5a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_719ee2d9881bf79d6ceab310194b2e4906ab234f6e0cf40c107baab0c3ad5a83->leave($__internal_719ee2d9881bf79d6ceab310194b2e4906ab234f6e0cf40c107baab0c3ad5a83_prof);

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
