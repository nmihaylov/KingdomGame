<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_34de788da78adcb6ec0ee9aa7812e278bda5b838d26ad8fce5b5e17ab257bc66 extends Twig_Template
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
        $__internal_edccadf62f10e6e8a346dd62e00859f624b771a31a4e4d0046ab02a5b203f66f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edccadf62f10e6e8a346dd62e00859f624b771a31a4e4d0046ab02a5b203f66f->enter($__internal_edccadf62f10e6e8a346dd62e00859f624b771a31a4e4d0046ab02a5b203f66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_edccadf62f10e6e8a346dd62e00859f624b771a31a4e4d0046ab02a5b203f66f->leave($__internal_edccadf62f10e6e8a346dd62e00859f624b771a31a4e4d0046ab02a5b203f66f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
