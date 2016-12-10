<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_50e580ecf64a2a67c98f0b3dbbbdc21524fef535435d8b61401584d65492b4c8 extends Twig_Template
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
        $__internal_f12230ced4fc4003d9898eddce6d76324a908e110edf0de9eb4030e592d391e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12230ced4fc4003d9898eddce6d76324a908e110edf0de9eb4030e592d391e0->enter($__internal_f12230ced4fc4003d9898eddce6d76324a908e110edf0de9eb4030e592d391e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f12230ced4fc4003d9898eddce6d76324a908e110edf0de9eb4030e592d391e0->leave($__internal_f12230ced4fc4003d9898eddce6d76324a908e110edf0de9eb4030e592d391e0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ab51c7c19e8dc8e658036d115aa1eec5424b75ac9a61c50abacdf24edb949bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab51c7c19e8dc8e658036d115aa1eec5424b75ac9a61c50abacdf24edb949bc->enter($__internal_5ab51c7c19e8dc8e658036d115aa1eec5424b75ac9a61c50abacdf24edb949bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5ab51c7c19e8dc8e658036d115aa1eec5424b75ac9a61c50abacdf24edb949bc->leave($__internal_5ab51c7c19e8dc8e658036d115aa1eec5424b75ac9a61c50abacdf24edb949bc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
