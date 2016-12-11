<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ab96f7004e244461c0036d8a3e5402ad601184a86f2babaae5bc096ed829ba55 extends Twig_Template
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
        $__internal_b703938450a7fc2252511ca0715f0be0613059646e247a63de61c928c7ec5a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b703938450a7fc2252511ca0715f0be0613059646e247a63de61c928c7ec5a0d->enter($__internal_b703938450a7fc2252511ca0715f0be0613059646e247a63de61c928c7ec5a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_b703938450a7fc2252511ca0715f0be0613059646e247a63de61c928c7ec5a0d->leave($__internal_b703938450a7fc2252511ca0715f0be0613059646e247a63de61c928c7ec5a0d_prof);

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
