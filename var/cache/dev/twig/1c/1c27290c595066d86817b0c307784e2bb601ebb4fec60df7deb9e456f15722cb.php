<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c00262fdd786a859dd00de948494b79f20fb2a543e039d9930089a1675af5d93 extends Twig_Template
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
        $__internal_e555600e497fef1d2fc68e42c02974160f0d664fe3c3df4bb3055c2a32436ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e555600e497fef1d2fc68e42c02974160f0d664fe3c3df4bb3055c2a32436ffa->enter($__internal_e555600e497fef1d2fc68e42c02974160f0d664fe3c3df4bb3055c2a32436ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e555600e497fef1d2fc68e42c02974160f0d664fe3c3df4bb3055c2a32436ffa->leave($__internal_e555600e497fef1d2fc68e42c02974160f0d664fe3c3df4bb3055c2a32436ffa_prof);

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
