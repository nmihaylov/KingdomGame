<?php

/* :blog:index.html.twig */
class __TwigTemplate_22059df9265925c8bb6a5fa8171310e75e43c83791c90d6656d16fda65625e13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":blog:index.html.twig", 1);
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
        $__internal_bf6de4e5072904cfaee5f175235bcc7c9ea1fc26c4dbf5474e8307af68ee8cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6de4e5072904cfaee5f175235bcc7c9ea1fc26c4dbf5474e8307af68ee8cdf->enter($__internal_bf6de4e5072904cfaee5f175235bcc7c9ea1fc26c4dbf5474e8307af68ee8cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf6de4e5072904cfaee5f175235bcc7c9ea1fc26c4dbf5474e8307af68ee8cdf->leave($__internal_bf6de4e5072904cfaee5f175235bcc7c9ea1fc26c4dbf5474e8307af68ee8cdf_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_450bf08499a2a82206400a180545d9039104c2c854d4812778e6b64e618ec360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450bf08499a2a82206400a180545d9039104c2c854d4812778e6b64e618ec360->enter($__internal_450bf08499a2a82206400a180545d9039104c2c854d4812778e6b64e618ec360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        
        $__internal_450bf08499a2a82206400a180545d9039104c2c854d4812778e6b64e618ec360->leave($__internal_450bf08499a2a82206400a180545d9039104c2c854d4812778e6b64e618ec360_prof);

    }

    public function getTemplateName()
    {
        return ":blog:index.html.twig";
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
