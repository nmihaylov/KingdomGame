<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8fabc6b80aa7828240465b882301455332efe2388681acb8994790f9f6a90ba4 extends Twig_Template
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
        $__internal_1845552a9f5f400733eeff1ffc159890272e20d861557c7fc059207e389112cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1845552a9f5f400733eeff1ffc159890272e20d861557c7fc059207e389112cf->enter($__internal_1845552a9f5f400733eeff1ffc159890272e20d861557c7fc059207e389112cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1845552a9f5f400733eeff1ffc159890272e20d861557c7fc059207e389112cf->leave($__internal_1845552a9f5f400733eeff1ffc159890272e20d861557c7fc059207e389112cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
