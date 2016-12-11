<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_bd93090a4652f56f5b00bcef4b5f4a192811bfbc8dd559f1b35243540041d1c3 extends Twig_Template
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
        $__internal_3ca412ec58538f079ebf2a31b476ce45bfd2b3cfc1921e5742a9adac785d3655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca412ec58538f079ebf2a31b476ce45bfd2b3cfc1921e5742a9adac785d3655->enter($__internal_3ca412ec58538f079ebf2a31b476ce45bfd2b3cfc1921e5742a9adac785d3655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3ca412ec58538f079ebf2a31b476ce45bfd2b3cfc1921e5742a9adac785d3655->leave($__internal_3ca412ec58538f079ebf2a31b476ce45bfd2b3cfc1921e5742a9adac785d3655_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
