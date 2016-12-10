<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_098f51a7b5584622f883bbcfc9a8824f3b36913071d2ee4474619609b374510c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_7bbe395fac0da4a74dbd6b0ade5ddaaa2443f6857acabe70b25e4414f090abca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bbe395fac0da4a74dbd6b0ade5ddaaa2443f6857acabe70b25e4414f090abca->enter($__internal_7bbe395fac0da4a74dbd6b0ade5ddaaa2443f6857acabe70b25e4414f090abca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bbe395fac0da4a74dbd6b0ade5ddaaa2443f6857acabe70b25e4414f090abca->leave($__internal_7bbe395fac0da4a74dbd6b0ade5ddaaa2443f6857acabe70b25e4414f090abca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_472996bfe6780f983199e314efd95c4a147cd1a625124c489826129e4992a66d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472996bfe6780f983199e314efd95c4a147cd1a625124c489826129e4992a66d->enter($__internal_472996bfe6780f983199e314efd95c4a147cd1a625124c489826129e4992a66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_472996bfe6780f983199e314efd95c4a147cd1a625124c489826129e4992a66d->leave($__internal_472996bfe6780f983199e314efd95c4a147cd1a625124c489826129e4992a66d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d750a4c391d64616ecf4811ba6a09fde4bd4f19ed96d6b61077dfa8b4347f2c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d750a4c391d64616ecf4811ba6a09fde4bd4f19ed96d6b61077dfa8b4347f2c8->enter($__internal_d750a4c391d64616ecf4811ba6a09fde4bd4f19ed96d6b61077dfa8b4347f2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d750a4c391d64616ecf4811ba6a09fde4bd4f19ed96d6b61077dfa8b4347f2c8->leave($__internal_d750a4c391d64616ecf4811ba6a09fde4bd4f19ed96d6b61077dfa8b4347f2c8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
