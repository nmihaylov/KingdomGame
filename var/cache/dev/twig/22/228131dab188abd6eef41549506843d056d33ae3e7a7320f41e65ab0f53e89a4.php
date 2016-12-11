<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_87e56e22357d5a2db53cc89d4aef0b5a332583f3d2e121bed468e4a2ba58e1e7 extends Twig_Template
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
        $__internal_64ef66f1a762cf305ab0dacfad57e3a48c6c59f0291b0cc47a054b22339b84ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ef66f1a762cf305ab0dacfad57e3a48c6c59f0291b0cc47a054b22339b84ab->enter($__internal_64ef66f1a762cf305ab0dacfad57e3a48c6c59f0291b0cc47a054b22339b84ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_64ef66f1a762cf305ab0dacfad57e3a48c6c59f0291b0cc47a054b22339b84ab->leave($__internal_64ef66f1a762cf305ab0dacfad57e3a48c6c59f0291b0cc47a054b22339b84ab_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
