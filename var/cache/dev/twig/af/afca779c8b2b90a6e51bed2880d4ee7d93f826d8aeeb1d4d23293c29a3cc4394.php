<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_c7bb3b0f6fd9e7f207a491a7c29ef27c4b3e7acefed5531263858d190fc51104 extends Twig_Template
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
        $__internal_d0eb707e9ea3d119e19cc3b8a5cbc34cd63f104c9bb393348b9e421a0be8b36c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0eb707e9ea3d119e19cc3b8a5cbc34cd63f104c9bb393348b9e421a0be8b36c->enter($__internal_d0eb707e9ea3d119e19cc3b8a5cbc34cd63f104c9bb393348b9e421a0be8b36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d0eb707e9ea3d119e19cc3b8a5cbc34cd63f104c9bb393348b9e421a0be8b36c->leave($__internal_d0eb707e9ea3d119e19cc3b8a5cbc34cd63f104c9bb393348b9e421a0be8b36c_prof);

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
