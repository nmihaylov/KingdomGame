<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_3806348b48c829b213f01554c3306802e5e491e959d292e6c93b81722473998e extends Twig_Template
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
        $__internal_79347094266f5fc69c0001db4c368f7a8e440372683a75481df7d25c8a144e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79347094266f5fc69c0001db4c368f7a8e440372683a75481df7d25c8a144e1a->enter($__internal_79347094266f5fc69c0001db4c368f7a8e440372683a75481df7d25c8a144e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_79347094266f5fc69c0001db4c368f7a8e440372683a75481df7d25c8a144e1a->leave($__internal_79347094266f5fc69c0001db4c368f7a8e440372683a75481df7d25c8a144e1a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
