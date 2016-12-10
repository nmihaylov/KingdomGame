<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_17c0ea480651b4d8922ecb2d496af78c5d58fe1b6cfe6eae629f47c7e40cb74d extends Twig_Template
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
        $__internal_ca71a19bf871016b17734aa65b72caa9b2c2408399f9a4d6dab22e2f6835de8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca71a19bf871016b17734aa65b72caa9b2c2408399f9a4d6dab22e2f6835de8f->enter($__internal_ca71a19bf871016b17734aa65b72caa9b2c2408399f9a4d6dab22e2f6835de8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_ca71a19bf871016b17734aa65b72caa9b2c2408399f9a4d6dab22e2f6835de8f->leave($__internal_ca71a19bf871016b17734aa65b72caa9b2c2408399f9a4d6dab22e2f6835de8f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
