<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_556c0a6507b16eddb13fc14a21258ff5ba664ed12b9d440c0fe8345c37513cd8 extends Twig_Template
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
        $__internal_860d2e656c3e6cc14ab7fb2a58f9eec4d824b2adfa87a9ec8f0d3b70c34d9ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860d2e656c3e6cc14ab7fb2a58f9eec4d824b2adfa87a9ec8f0d3b70c34d9ddd->enter($__internal_860d2e656c3e6cc14ab7fb2a58f9eec4d824b2adfa87a9ec8f0d3b70c34d9ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_860d2e656c3e6cc14ab7fb2a58f9eec4d824b2adfa87a9ec8f0d3b70c34d9ddd->leave($__internal_860d2e656c3e6cc14ab7fb2a58f9eec4d824b2adfa87a9ec8f0d3b70c34d9ddd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
