<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_1109d4abfc0f03c4f2f0d3c18be2a2f0183c44bb58b8ff9fe5e4e13a9fe1d43a extends Twig_Template
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
        $__internal_1652fa2bc01c303d57697e323f0c9e8cd47fcb8993d2b1c10c99203a5b5f4957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1652fa2bc01c303d57697e323f0c9e8cd47fcb8993d2b1c10c99203a5b5f4957->enter($__internal_1652fa2bc01c303d57697e323f0c9e8cd47fcb8993d2b1c10c99203a5b5f4957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1652fa2bc01c303d57697e323f0c9e8cd47fcb8993d2b1c10c99203a5b5f4957->leave($__internal_1652fa2bc01c303d57697e323f0c9e8cd47fcb8993d2b1c10c99203a5b5f4957_prof);

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
