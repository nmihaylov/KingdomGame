<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c759592781b2c69ca127ed5f9bb6c19415bab7e9230841973422b218f72e3013 extends Twig_Template
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
        $__internal_02d83449c84531f58d0d7c09a76711b49af6917d9ef35e5eafb56c3e752912fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d83449c84531f58d0d7c09a76711b49af6917d9ef35e5eafb56c3e752912fa->enter($__internal_02d83449c84531f58d0d7c09a76711b49af6917d9ef35e5eafb56c3e752912fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_02d83449c84531f58d0d7c09a76711b49af6917d9ef35e5eafb56c3e752912fa->leave($__internal_02d83449c84531f58d0d7c09a76711b49af6917d9ef35e5eafb56c3e752912fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
