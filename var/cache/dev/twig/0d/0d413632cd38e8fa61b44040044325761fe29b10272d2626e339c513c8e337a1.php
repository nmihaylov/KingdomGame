<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_fb22d3e117bbf1e0028fd2ed0bd4a212685f829baa8c138369471de8abf65acd extends Twig_Template
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
        $__internal_a91a1cceadf5f8554d3e4e4e7f7163815cd9487d0680ae9c12fc3f2da27a6ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91a1cceadf5f8554d3e4e4e7f7163815cd9487d0680ae9c12fc3f2da27a6ca6->enter($__internal_a91a1cceadf5f8554d3e4e4e7f7163815cd9487d0680ae9c12fc3f2da27a6ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a91a1cceadf5f8554d3e4e4e7f7163815cd9487d0680ae9c12fc3f2da27a6ca6->leave($__internal_a91a1cceadf5f8554d3e4e4e7f7163815cd9487d0680ae9c12fc3f2da27a6ca6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
