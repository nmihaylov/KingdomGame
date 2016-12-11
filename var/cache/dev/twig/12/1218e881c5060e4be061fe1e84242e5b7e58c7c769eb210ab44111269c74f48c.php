<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a2d43eb6e0ddba4680071b6c8abdfcaf5e9497142e236598be0e64ab27af7e4c extends Twig_Template
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
        $__internal_564bbc1878fac73f38f8f23104d3066e3343f323dd77a309a661da7aa6188d31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_564bbc1878fac73f38f8f23104d3066e3343f323dd77a309a661da7aa6188d31->enter($__internal_564bbc1878fac73f38f8f23104d3066e3343f323dd77a309a661da7aa6188d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_564bbc1878fac73f38f8f23104d3066e3343f323dd77a309a661da7aa6188d31->leave($__internal_564bbc1878fac73f38f8f23104d3066e3343f323dd77a309a661da7aa6188d31_prof);

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
