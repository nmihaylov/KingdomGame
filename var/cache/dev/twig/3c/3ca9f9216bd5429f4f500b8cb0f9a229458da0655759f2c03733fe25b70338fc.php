<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_2f5d04adf9ac50463a6caf6d8aff56c18e8af98a0c40fcb1b59675cfa3279113 extends Twig_Template
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
        $__internal_d5121db38d586d66efc5ee86b4193a8e8e19dd4385d7175b9fc4532b7b782fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5121db38d586d66efc5ee86b4193a8e8e19dd4385d7175b9fc4532b7b782fec->enter($__internal_d5121db38d586d66efc5ee86b4193a8e8e19dd4385d7175b9fc4532b7b782fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_d5121db38d586d66efc5ee86b4193a8e8e19dd4385d7175b9fc4532b7b782fec->leave($__internal_d5121db38d586d66efc5ee86b4193a8e8e19dd4385d7175b9fc4532b7b782fec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
