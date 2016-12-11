<?php

/* :game:index.html.twig */
class __TwigTemplate_e7c093a937fc7e94f93f8d4693c2dbbb8e975ffdda59fbc6a87d2b2e09ad154f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":game:index.html.twig", 1);
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
        $__internal_5c80a04eb5ca15fe648be6bcf7a564cd92dd3c77db37eba23f91bbaf2b68439e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c80a04eb5ca15fe648be6bcf7a564cd92dd3c77db37eba23f91bbaf2b68439e->enter($__internal_5c80a04eb5ca15fe648be6bcf7a564cd92dd3c77db37eba23f91bbaf2b68439e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":game:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c80a04eb5ca15fe648be6bcf7a564cd92dd3c77db37eba23f91bbaf2b68439e->leave($__internal_5c80a04eb5ca15fe648be6bcf7a564cd92dd3c77db37eba23f91bbaf2b68439e_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_6d91b355d4d8af3f9d5e03cc58cc91811c25d878de2455853ed4ec82a5311e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d91b355d4d8af3f9d5e03cc58cc91811c25d878de2455853ed4ec82a5311e2f->enter($__internal_6d91b355d4d8af3f9d5e03cc58cc91811c25d878de2455853ed4ec82a5311e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        
        $__internal_6d91b355d4d8af3f9d5e03cc58cc91811c25d878de2455853ed4ec82a5311e2f->leave($__internal_6d91b355d4d8af3f9d5e03cc58cc91811c25d878de2455853ed4ec82a5311e2f_prof);

    }

    public function getTemplateName()
    {
        return ":game:index.html.twig";
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
