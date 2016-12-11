<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_540a489a9f72aea6dd49dd7229357b23b552b55a2b994ad08fbe1aeb25d3778e extends Twig_Template
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
        $__internal_6be843b69c2096e000ed3b79fe1b4f56e51b9250e58b4987ebf08cf043478a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be843b69c2096e000ed3b79fe1b4f56e51b9250e58b4987ebf08cf043478a7a->enter($__internal_6be843b69c2096e000ed3b79fe1b4f56e51b9250e58b4987ebf08cf043478a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_6be843b69c2096e000ed3b79fe1b4f56e51b9250e58b4987ebf08cf043478a7a->leave($__internal_6be843b69c2096e000ed3b79fe1b4f56e51b9250e58b4987ebf08cf043478a7a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
