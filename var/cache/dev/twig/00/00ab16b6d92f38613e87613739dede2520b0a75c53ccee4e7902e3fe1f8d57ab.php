<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_293d86128222a9be6a0f69d980a749f7601d7708268e0ea77a8ad3a386943ff2 extends Twig_Template
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
        $__internal_ad0aa85d3fd10d1f5725cbae1fdf63c5a9dbc8b1d8dac30362e3747fda1feb37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0aa85d3fd10d1f5725cbae1fdf63c5a9dbc8b1d8dac30362e3747fda1feb37->enter($__internal_ad0aa85d3fd10d1f5725cbae1fdf63c5a9dbc8b1d8dac30362e3747fda1feb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_ad0aa85d3fd10d1f5725cbae1fdf63c5a9dbc8b1d8dac30362e3747fda1feb37->leave($__internal_ad0aa85d3fd10d1f5725cbae1fdf63c5a9dbc8b1d8dac30362e3747fda1feb37_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
