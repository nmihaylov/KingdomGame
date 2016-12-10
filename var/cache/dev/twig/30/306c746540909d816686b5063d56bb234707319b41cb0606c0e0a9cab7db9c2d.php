<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_7fbf1dd51cc6f173d749971d500c7053cc83322b564730a740585013cacdcc8a extends Twig_Template
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
        $__internal_338cefebb8de24ec2b56f713cde7b6d5596cbb7f50ad3ecfda526fdff282de59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338cefebb8de24ec2b56f713cde7b6d5596cbb7f50ad3ecfda526fdff282de59->enter($__internal_338cefebb8de24ec2b56f713cde7b6d5596cbb7f50ad3ecfda526fdff282de59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_338cefebb8de24ec2b56f713cde7b6d5596cbb7f50ad3ecfda526fdff282de59->leave($__internal_338cefebb8de24ec2b56f713cde7b6d5596cbb7f50ad3ecfda526fdff282de59_prof);

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
