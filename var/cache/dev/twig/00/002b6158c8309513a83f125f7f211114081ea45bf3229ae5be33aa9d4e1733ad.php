<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2131f4ed4dc936b6cb1d5a1b96e56ca81bba43094a02c8faa3307a2bdbf81e78 extends Twig_Template
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
        $__internal_a099a03aee0312b506c3460ff62c57f8bfec231183706f9ec01f6bf559e5c808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a099a03aee0312b506c3460ff62c57f8bfec231183706f9ec01f6bf559e5c808->enter($__internal_a099a03aee0312b506c3460ff62c57f8bfec231183706f9ec01f6bf559e5c808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a099a03aee0312b506c3460ff62c57f8bfec231183706f9ec01f6bf559e5c808->leave($__internal_a099a03aee0312b506c3460ff62c57f8bfec231183706f9ec01f6bf559e5c808_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b163b96ef813ad9188ed53eb1b951db25280429050635aefd493a39e19f131ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b163b96ef813ad9188ed53eb1b951db25280429050635aefd493a39e19f131ef->enter($__internal_b163b96ef813ad9188ed53eb1b951db25280429050635aefd493a39e19f131ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b163b96ef813ad9188ed53eb1b951db25280429050635aefd493a39e19f131ef->leave($__internal_b163b96ef813ad9188ed53eb1b951db25280429050635aefd493a39e19f131ef_prof);

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
