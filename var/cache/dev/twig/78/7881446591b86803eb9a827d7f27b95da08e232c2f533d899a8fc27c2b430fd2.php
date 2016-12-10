<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7fced96c59a5f95273a4f7201588c102519a7693d67b1150f151fe78bb9d4ab3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cc8ffd0db5df98bbee14022f223a3c8b8fe92a1eeee4b7d04276de75862a3da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc8ffd0db5df98bbee14022f223a3c8b8fe92a1eeee4b7d04276de75862a3da->enter($__internal_7cc8ffd0db5df98bbee14022f223a3c8b8fe92a1eeee4b7d04276de75862a3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cc8ffd0db5df98bbee14022f223a3c8b8fe92a1eeee4b7d04276de75862a3da->leave($__internal_7cc8ffd0db5df98bbee14022f223a3c8b8fe92a1eeee4b7d04276de75862a3da_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c56d5e3548a5cc3c6dc51530dfe0df727315d0a6221697dc8ad9763e26878068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56d5e3548a5cc3c6dc51530dfe0df727315d0a6221697dc8ad9763e26878068->enter($__internal_c56d5e3548a5cc3c6dc51530dfe0df727315d0a6221697dc8ad9763e26878068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c56d5e3548a5cc3c6dc51530dfe0df727315d0a6221697dc8ad9763e26878068->leave($__internal_c56d5e3548a5cc3c6dc51530dfe0df727315d0a6221697dc8ad9763e26878068_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_14e682cee8180719f165d6c76d1844add8eb55651d45a0f3a4e612114c3d88c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e682cee8180719f165d6c76d1844add8eb55651d45a0f3a4e612114c3d88c8->enter($__internal_14e682cee8180719f165d6c76d1844add8eb55651d45a0f3a4e612114c3d88c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_14e682cee8180719f165d6c76d1844add8eb55651d45a0f3a4e612114c3d88c8->leave($__internal_14e682cee8180719f165d6c76d1844add8eb55651d45a0f3a4e612114c3d88c8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
