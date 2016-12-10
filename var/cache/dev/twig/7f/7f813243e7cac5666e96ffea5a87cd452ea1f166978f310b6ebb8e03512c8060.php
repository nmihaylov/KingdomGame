<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_3d1fab578d4e61273176d8049aa7c5bcdcbfde2c021fc9c75a556df342f132eb extends Twig_Template
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
        $__internal_31a4ed4c0bc67b21be68f92896797d7805d0bc898043f0f61a8939fc44cb4183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a4ed4c0bc67b21be68f92896797d7805d0bc898043f0f61a8939fc44cb4183->enter($__internal_31a4ed4c0bc67b21be68f92896797d7805d0bc898043f0f61a8939fc44cb4183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_31a4ed4c0bc67b21be68f92896797d7805d0bc898043f0f61a8939fc44cb4183->leave($__internal_31a4ed4c0bc67b21be68f92896797d7805d0bc898043f0f61a8939fc44cb4183_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
