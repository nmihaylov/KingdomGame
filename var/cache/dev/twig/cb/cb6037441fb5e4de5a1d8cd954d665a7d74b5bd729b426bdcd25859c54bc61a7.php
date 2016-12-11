<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_9d4d172274c2f187e9d998bee521f1f5fc773957e706ca8855979c20a40aea08 extends Twig_Template
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
        $__internal_8007e2c2d72556fdd7e5001c7bd00887686e46337bfcc71000558eea820782e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8007e2c2d72556fdd7e5001c7bd00887686e46337bfcc71000558eea820782e2->enter($__internal_8007e2c2d72556fdd7e5001c7bd00887686e46337bfcc71000558eea820782e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8007e2c2d72556fdd7e5001c7bd00887686e46337bfcc71000558eea820782e2->leave($__internal_8007e2c2d72556fdd7e5001c7bd00887686e46337bfcc71000558eea820782e2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
