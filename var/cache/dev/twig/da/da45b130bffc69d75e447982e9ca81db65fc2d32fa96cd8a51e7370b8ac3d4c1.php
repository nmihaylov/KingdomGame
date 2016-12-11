<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_dfca061a0f363863d1d4898bc2fc0a27159520f96a135fb7041ff9662a738195 extends Twig_Template
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
        $__internal_14e0d35f3814255f5ba47cebc5068fdd86808d01d90acc4f6ea281342921933f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e0d35f3814255f5ba47cebc5068fdd86808d01d90acc4f6ea281342921933f->enter($__internal_14e0d35f3814255f5ba47cebc5068fdd86808d01d90acc4f6ea281342921933f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_14e0d35f3814255f5ba47cebc5068fdd86808d01d90acc4f6ea281342921933f->leave($__internal_14e0d35f3814255f5ba47cebc5068fdd86808d01d90acc4f6ea281342921933f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
