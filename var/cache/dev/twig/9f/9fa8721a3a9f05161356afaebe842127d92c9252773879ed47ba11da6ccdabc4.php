<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_aedb96106c87f76fa7b9eec3c90b78885a90be84908a0ca48beda5f8f39b8e28 extends Twig_Template
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
        $__internal_c477a8f8e1ba966ad897012b2862144550ae13a1f6b84fab30c84ed45eba5a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c477a8f8e1ba966ad897012b2862144550ae13a1f6b84fab30c84ed45eba5a52->enter($__internal_c477a8f8e1ba966ad897012b2862144550ae13a1f6b84fab30c84ed45eba5a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c477a8f8e1ba966ad897012b2862144550ae13a1f6b84fab30c84ed45eba5a52->leave($__internal_c477a8f8e1ba966ad897012b2862144550ae13a1f6b84fab30c84ed45eba5a52_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
