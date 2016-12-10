<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_cf9b37bcf76bdd41c4e2c830c8ac1e8fe2f1fc66f9183a76c740eff6b8a928b1 extends Twig_Template
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
        $__internal_32c00ba3b53efc563306dc45a3ac2be95daf3e524c6681ce7d66cd012d6b723e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c00ba3b53efc563306dc45a3ac2be95daf3e524c6681ce7d66cd012d6b723e->enter($__internal_32c00ba3b53efc563306dc45a3ac2be95daf3e524c6681ce7d66cd012d6b723e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_32c00ba3b53efc563306dc45a3ac2be95daf3e524c6681ce7d66cd012d6b723e->leave($__internal_32c00ba3b53efc563306dc45a3ac2be95daf3e524c6681ce7d66cd012d6b723e_prof);

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
