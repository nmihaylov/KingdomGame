<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ee856e568aa1dd8af6d3cf873c896285e43c16650d896fc50e14361db5ee466b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a3ace6b80b2d5793c58f29cf76df358d987b04ab9cb000dc5b7465db75bc739f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ace6b80b2d5793c58f29cf76df358d987b04ab9cb000dc5b7465db75bc739f->enter($__internal_a3ace6b80b2d5793c58f29cf76df358d987b04ab9cb000dc5b7465db75bc739f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3ace6b80b2d5793c58f29cf76df358d987b04ab9cb000dc5b7465db75bc739f->leave($__internal_a3ace6b80b2d5793c58f29cf76df358d987b04ab9cb000dc5b7465db75bc739f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f2e26eec845a28f17dd55413beafe758fa3fca13fee72b0069dff3ce6656d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2e26eec845a28f17dd55413beafe758fa3fca13fee72b0069dff3ce6656d1c->enter($__internal_0f2e26eec845a28f17dd55413beafe758fa3fca13fee72b0069dff3ce6656d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0f2e26eec845a28f17dd55413beafe758fa3fca13fee72b0069dff3ce6656d1c->leave($__internal_0f2e26eec845a28f17dd55413beafe758fa3fca13fee72b0069dff3ce6656d1c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f8416d94d62fc82f625703b0c2fcb83f7f778ebaa5cff6496829c352b440998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f8416d94d62fc82f625703b0c2fcb83f7f778ebaa5cff6496829c352b440998->enter($__internal_2f8416d94d62fc82f625703b0c2fcb83f7f778ebaa5cff6496829c352b440998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2f8416d94d62fc82f625703b0c2fcb83f7f778ebaa5cff6496829c352b440998->leave($__internal_2f8416d94d62fc82f625703b0c2fcb83f7f778ebaa5cff6496829c352b440998_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc6f550f698d811741221ff69ae201527a68c91a3f7a0fefa644e17bcf6409e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6f550f698d811741221ff69ae201527a68c91a3f7a0fefa644e17bcf6409e6->enter($__internal_bc6f550f698d811741221ff69ae201527a68c91a3f7a0fefa644e17bcf6409e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bc6f550f698d811741221ff69ae201527a68c91a3f7a0fefa644e17bcf6409e6->leave($__internal_bc6f550f698d811741221ff69ae201527a68c91a3f7a0fefa644e17bcf6409e6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
