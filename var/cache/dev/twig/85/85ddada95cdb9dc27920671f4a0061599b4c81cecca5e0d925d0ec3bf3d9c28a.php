<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e88834d989388a757f0b04cc9e3bd4ffdd65f1f305de75993d7fafdab3669a6b extends Twig_Template
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
        $__internal_62744e1e691f601434ab8db4a4112c83d141fc65062b10605673edcd234bb5f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62744e1e691f601434ab8db4a4112c83d141fc65062b10605673edcd234bb5f0->enter($__internal_62744e1e691f601434ab8db4a4112c83d141fc65062b10605673edcd234bb5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_62744e1e691f601434ab8db4a4112c83d141fc65062b10605673edcd234bb5f0->leave($__internal_62744e1e691f601434ab8db4a4112c83d141fc65062b10605673edcd234bb5f0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
