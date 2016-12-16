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
        $__internal_4acae6e4ff4b47cab7b887b634ece519aa6319cc3f601b7a4a237557692c63b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4acae6e4ff4b47cab7b887b634ece519aa6319cc3f601b7a4a237557692c63b1->enter($__internal_4acae6e4ff4b47cab7b887b634ece519aa6319cc3f601b7a4a237557692c63b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4acae6e4ff4b47cab7b887b634ece519aa6319cc3f601b7a4a237557692c63b1->leave($__internal_4acae6e4ff4b47cab7b887b634ece519aa6319cc3f601b7a4a237557692c63b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a95a464861f04a669c2cb66e349c287d11c1fc3f22888491aa5602febc2530d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95a464861f04a669c2cb66e349c287d11c1fc3f22888491aa5602febc2530d9->enter($__internal_a95a464861f04a669c2cb66e349c287d11c1fc3f22888491aa5602febc2530d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a95a464861f04a669c2cb66e349c287d11c1fc3f22888491aa5602febc2530d9->leave($__internal_a95a464861f04a669c2cb66e349c287d11c1fc3f22888491aa5602febc2530d9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b4e66fdcc9b2cf197ba54cb41f4b99ccafd71d908316969a9478d3742b57788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4e66fdcc9b2cf197ba54cb41f4b99ccafd71d908316969a9478d3742b57788->enter($__internal_7b4e66fdcc9b2cf197ba54cb41f4b99ccafd71d908316969a9478d3742b57788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7b4e66fdcc9b2cf197ba54cb41f4b99ccafd71d908316969a9478d3742b57788->leave($__internal_7b4e66fdcc9b2cf197ba54cb41f4b99ccafd71d908316969a9478d3742b57788_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_943c57b2ce4acab1de859664b83b9e3ddf96d6ebabac943a95bcee065dd69a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943c57b2ce4acab1de859664b83b9e3ddf96d6ebabac943a95bcee065dd69a39->enter($__internal_943c57b2ce4acab1de859664b83b9e3ddf96d6ebabac943a95bcee065dd69a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_943c57b2ce4acab1de859664b83b9e3ddf96d6ebabac943a95bcee065dd69a39->leave($__internal_943c57b2ce4acab1de859664b83b9e3ddf96d6ebabac943a95bcee065dd69a39_prof);

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
