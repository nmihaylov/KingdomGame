<?php

/* blog/index.html.twig */
class __TwigTemplate_91c872ff667791b90aa5326abd09738179494015e6d2e2190824532ca2e1336b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
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
        $__internal_185370983256b5e1d34a11ba694fce0a2e1c33625b473a4742627863db88de7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185370983256b5e1d34a11ba694fce0a2e1c33625b473a4742627863db88de7c->enter($__internal_185370983256b5e1d34a11ba694fce0a2e1c33625b473a4742627863db88de7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_185370983256b5e1d34a11ba694fce0a2e1c33625b473a4742627863db88de7c->leave($__internal_185370983256b5e1d34a11ba694fce0a2e1c33625b473a4742627863db88de7c_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_dde0af3b04df7ca7a3bec46bfeec57d10d2b10ed469483df69abade1ad8f359d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde0af3b04df7ca7a3bec46bfeec57d10d2b10ed469483df69abade1ad8f359d->enter($__internal_dde0af3b04df7ca7a3bec46bfeec57d10d2b10ed469483df69abade1ad8f359d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        
        $__internal_dde0af3b04df7ca7a3bec46bfeec57d10d2b10ed469483df69abade1ad8f359d->leave($__internal_dde0af3b04df7ca7a3bec46bfeec57d10d2b10ed469483df69abade1ad8f359d_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
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
