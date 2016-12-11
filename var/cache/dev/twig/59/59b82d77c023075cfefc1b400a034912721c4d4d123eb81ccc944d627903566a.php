<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0e42d7c3f15527154c4642131ce6e7c3ee44f99cd9c7fccfbcb1b9f0642db22c extends Twig_Template
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
        $__internal_acc963cd10dd5305fb91621693e2e9fc328e584be68bbfea87d8f2c46c6321ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc963cd10dd5305fb91621693e2e9fc328e584be68bbfea87d8f2c46c6321ae->enter($__internal_acc963cd10dd5305fb91621693e2e9fc328e584be68bbfea87d8f2c46c6321ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_acc963cd10dd5305fb91621693e2e9fc328e584be68bbfea87d8f2c46c6321ae->leave($__internal_acc963cd10dd5305fb91621693e2e9fc328e584be68bbfea87d8f2c46c6321ae_prof);

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
