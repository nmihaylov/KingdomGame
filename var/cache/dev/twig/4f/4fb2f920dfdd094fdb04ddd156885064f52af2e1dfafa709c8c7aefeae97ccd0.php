<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_d544e2429eb14067dd3835d6fd328d35dd5cbfd4bbb044872e9a10898bc087d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e5e0cf2641f9f0c31c791ca55e1bd6e8dca4a1e068b81b1e8d5e307c566251d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5e0cf2641f9f0c31c791ca55e1bd6e8dca4a1e068b81b1e8d5e307c566251d->enter($__internal_7e5e0cf2641f9f0c31c791ca55e1bd6e8dca4a1e068b81b1e8d5e307c566251d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7e5e0cf2641f9f0c31c791ca55e1bd6e8dca4a1e068b81b1e8d5e307c566251d->leave($__internal_7e5e0cf2641f9f0c31c791ca55e1bd6e8dca4a1e068b81b1e8d5e307c566251d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_217d50847df771079dd346d0203d6c245211989c5783c779b4d41d54742c33d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217d50847df771079dd346d0203d6c245211989c5783c779b4d41d54742c33d7->enter($__internal_217d50847df771079dd346d0203d6c245211989c5783c779b4d41d54742c33d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_217d50847df771079dd346d0203d6c245211989c5783c779b4d41d54742c33d7->leave($__internal_217d50847df771079dd346d0203d6c245211989c5783c779b4d41d54742c33d7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
