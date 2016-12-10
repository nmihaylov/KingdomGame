<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_299b25c19db94d62c41705c3eba8372d2ab48c1afd46c4c256cb5c64344a6e33 extends Twig_Template
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
        $__internal_93be1c48342c872704c7032e76e6e72303a46907412e051408a0f22ab6743e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93be1c48342c872704c7032e76e6e72303a46907412e051408a0f22ab6743e15->enter($__internal_93be1c48342c872704c7032e76e6e72303a46907412e051408a0f22ab6743e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_93be1c48342c872704c7032e76e6e72303a46907412e051408a0f22ab6743e15->leave($__internal_93be1c48342c872704c7032e76e6e72303a46907412e051408a0f22ab6743e15_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
