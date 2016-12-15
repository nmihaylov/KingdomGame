<?php

/* game/index.html.twig */
class __TwigTemplate_9658bef3ac65601fa23d9b813aa3d861c2b3cdf756b01b506e17627f5a3837a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "game/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a20d717734e0ca7718dbf27b938d00c5f530779cf92cc94dd435e5ee17aa13a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a20d717734e0ca7718dbf27b938d00c5f530779cf92cc94dd435e5ee17aa13a->enter($__internal_5a20d717734e0ca7718dbf27b938d00c5f530779cf92cc94dd435e5ee17aa13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "game/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a20d717734e0ca7718dbf27b938d00c5f530779cf92cc94dd435e5ee17aa13a->leave($__internal_5a20d717734e0ca7718dbf27b938d00c5f530779cf92cc94dd435e5ee17aa13a_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_1ae3ffdaa8977b8fcdedf19cd179dfc9dcafa54c5d8e543d441cc5a24b874f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae3ffdaa8977b8fcdedf19cd179dfc9dcafa54c5d8e543d441cc5a24b874f53->enter($__internal_1ae3ffdaa8977b8fcdedf19cd179dfc9dcafa54c5d8e543d441cc5a24b874f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        
        $__internal_1ae3ffdaa8977b8fcdedf19cd179dfc9dcafa54c5d8e543d441cc5a24b874f53->leave($__internal_1ae3ffdaa8977b8fcdedf19cd179dfc9dcafa54c5d8e543d441cc5a24b874f53_prof);

    }

    public function getTemplateName()
    {
        return "game/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}

{% endblock %}
";
    }
}
