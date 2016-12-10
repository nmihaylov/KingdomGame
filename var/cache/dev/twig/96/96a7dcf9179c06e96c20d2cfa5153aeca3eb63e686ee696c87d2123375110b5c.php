<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_81cc7ddc1ebbf00b552a4559bcbf01903f61a4889563c7067308c78796dbd8ac extends Twig_Template
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
        $__internal_0668810b335f0dbefeef24f4b692095d0543abd50dce8d50b72c70b31b5a7f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0668810b335f0dbefeef24f4b692095d0543abd50dce8d50b72c70b31b5a7f36->enter($__internal_0668810b335f0dbefeef24f4b692095d0543abd50dce8d50b72c70b31b5a7f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0668810b335f0dbefeef24f4b692095d0543abd50dce8d50b72c70b31b5a7f36->leave($__internal_0668810b335f0dbefeef24f4b692095d0543abd50dce8d50b72c70b31b5a7f36_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
