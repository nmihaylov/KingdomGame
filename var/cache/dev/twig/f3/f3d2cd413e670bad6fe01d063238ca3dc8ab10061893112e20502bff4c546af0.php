<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_21dc84312d8097c7c2963864b821139cc0fb5b53055399863d34220472c46e22 extends Twig_Template
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
        $__internal_63c14e435fb1871b334c379840c2416ed4f16aa2deaf3324ef5e5e355277e907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c14e435fb1871b334c379840c2416ed4f16aa2deaf3324ef5e5e355277e907->enter($__internal_63c14e435fb1871b334c379840c2416ed4f16aa2deaf3324ef5e5e355277e907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_63c14e435fb1871b334c379840c2416ed4f16aa2deaf3324ef5e5e355277e907->leave($__internal_63c14e435fb1871b334c379840c2416ed4f16aa2deaf3324ef5e5e355277e907_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
