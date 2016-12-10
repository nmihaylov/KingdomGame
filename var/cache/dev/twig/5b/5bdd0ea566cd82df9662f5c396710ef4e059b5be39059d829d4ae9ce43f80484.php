<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_678c61a28bc2d8c360d22be4a875cc56a898ca952106d4c990fab3b0572164ee extends Twig_Template
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
        $__internal_962814d11c537515bd70a920a8e9725bdd8950736ba75c63584a76623e0efbe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962814d11c537515bd70a920a8e9725bdd8950736ba75c63584a76623e0efbe9->enter($__internal_962814d11c537515bd70a920a8e9725bdd8950736ba75c63584a76623e0efbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_962814d11c537515bd70a920a8e9725bdd8950736ba75c63584a76623e0efbe9->leave($__internal_962814d11c537515bd70a920a8e9725bdd8950736ba75c63584a76623e0efbe9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3527dae2eb7fef93e5d052195be217233eaf455ba9770d0a19b0e842e69319f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3527dae2eb7fef93e5d052195be217233eaf455ba9770d0a19b0e842e69319f0->enter($__internal_3527dae2eb7fef93e5d052195be217233eaf455ba9770d0a19b0e842e69319f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3527dae2eb7fef93e5d052195be217233eaf455ba9770d0a19b0e842e69319f0->leave($__internal_3527dae2eb7fef93e5d052195be217233eaf455ba9770d0a19b0e842e69319f0_prof);

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
