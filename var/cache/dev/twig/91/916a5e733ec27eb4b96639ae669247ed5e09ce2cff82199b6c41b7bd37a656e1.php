<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_cf7fe05ba9e6c1a1955f9715772774492caa8ae672c9983fb6c3ca79bfc96930 extends Twig_Template
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
        $__internal_70e00b9afa4b5ba1f8841f574e82230dd997de3397b7dac1484c26fd9565bf52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e00b9afa4b5ba1f8841f574e82230dd997de3397b7dac1484c26fd9565bf52->enter($__internal_70e00b9afa4b5ba1f8841f574e82230dd997de3397b7dac1484c26fd9565bf52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_70e00b9afa4b5ba1f8841f574e82230dd997de3397b7dac1484c26fd9565bf52->leave($__internal_70e00b9afa4b5ba1f8841f574e82230dd997de3397b7dac1484c26fd9565bf52_prof);

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
