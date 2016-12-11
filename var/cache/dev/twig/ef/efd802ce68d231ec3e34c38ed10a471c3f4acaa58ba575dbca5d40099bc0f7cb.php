<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_915027a3734adba32608abb0c5dad71f0018c0d3759de71ff3e2e8febc85a669 extends Twig_Template
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
        $__internal_022c08fd5ff16d0b1266fca4e7971f0bfa587ee80ebb3d9dfd2774a46500f7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_022c08fd5ff16d0b1266fca4e7971f0bfa587ee80ebb3d9dfd2774a46500f7dc->enter($__internal_022c08fd5ff16d0b1266fca4e7971f0bfa587ee80ebb3d9dfd2774a46500f7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_022c08fd5ff16d0b1266fca4e7971f0bfa587ee80ebb3d9dfd2774a46500f7dc->leave($__internal_022c08fd5ff16d0b1266fca4e7971f0bfa587ee80ebb3d9dfd2774a46500f7dc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
