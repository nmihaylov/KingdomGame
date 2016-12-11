<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6060154c4f8f44756c49606f26d8765a0965d3add1f34b56639640d49b4e29ff extends Twig_Template
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
        $__internal_528ac8537c58db9b8d9838bfcbb22a7c5f1d3d3e441f66049c556ca43f4c3733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528ac8537c58db9b8d9838bfcbb22a7c5f1d3d3e441f66049c556ca43f4c3733->enter($__internal_528ac8537c58db9b8d9838bfcbb22a7c5f1d3d3e441f66049c556ca43f4c3733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_528ac8537c58db9b8d9838bfcbb22a7c5f1d3d3e441f66049c556ca43f4c3733->leave($__internal_528ac8537c58db9b8d9838bfcbb22a7c5f1d3d3e441f66049c556ca43f4c3733_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0062fce23d3d6a81ddac35591b20942720ca13c05920b74fc1bdc6f9c7928cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0062fce23d3d6a81ddac35591b20942720ca13c05920b74fc1bdc6f9c7928cb->enter($__internal_c0062fce23d3d6a81ddac35591b20942720ca13c05920b74fc1bdc6f9c7928cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c0062fce23d3d6a81ddac35591b20942720ca13c05920b74fc1bdc6f9c7928cb->leave($__internal_c0062fce23d3d6a81ddac35591b20942720ca13c05920b74fc1bdc6f9c7928cb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a70f83157f99ae2b8c23c321f74fa24930b6ef3d12e7c358fa0a6e8767f2fc39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70f83157f99ae2b8c23c321f74fa24930b6ef3d12e7c358fa0a6e8767f2fc39->enter($__internal_a70f83157f99ae2b8c23c321f74fa24930b6ef3d12e7c358fa0a6e8767f2fc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a70f83157f99ae2b8c23c321f74fa24930b6ef3d12e7c358fa0a6e8767f2fc39->leave($__internal_a70f83157f99ae2b8c23c321f74fa24930b6ef3d12e7c358fa0a6e8767f2fc39_prof);

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
