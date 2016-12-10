<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_c8d1b98062c3e31b0ce5996096f4a46b56a5bc1f2a2b79451c3203c3f5e04790 extends Twig_Template
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
        $__internal_48f30c26a6fa576cbe7d44541d27d65095e450d88ea4e61a27379fdd10967d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f30c26a6fa576cbe7d44541d27d65095e450d88ea4e61a27379fdd10967d6a->enter($__internal_48f30c26a6fa576cbe7d44541d27d65095e450d88ea4e61a27379fdd10967d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_48f30c26a6fa576cbe7d44541d27d65095e450d88ea4e61a27379fdd10967d6a->leave($__internal_48f30c26a6fa576cbe7d44541d27d65095e450d88ea4e61a27379fdd10967d6a_prof);

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
