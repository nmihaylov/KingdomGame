<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b86e2f48c6401650cfb01ee18e712437742ee81c9e5376f79459f43a9ce59308 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_4b074247f8a51c3e45a7ef30d413897a0622af8912b06376b308452447e89ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b074247f8a51c3e45a7ef30d413897a0622af8912b06376b308452447e89ee3->enter($__internal_4b074247f8a51c3e45a7ef30d413897a0622af8912b06376b308452447e89ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b074247f8a51c3e45a7ef30d413897a0622af8912b06376b308452447e89ee3->leave($__internal_4b074247f8a51c3e45a7ef30d413897a0622af8912b06376b308452447e89ee3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_238aaf51a5074f98e718fbc7c8f806f496b581ba879b17e9d004eb3dc3f8c989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238aaf51a5074f98e718fbc7c8f806f496b581ba879b17e9d004eb3dc3f8c989->enter($__internal_238aaf51a5074f98e718fbc7c8f806f496b581ba879b17e9d004eb3dc3f8c989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_238aaf51a5074f98e718fbc7c8f806f496b581ba879b17e9d004eb3dc3f8c989->leave($__internal_238aaf51a5074f98e718fbc7c8f806f496b581ba879b17e9d004eb3dc3f8c989_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_adf81c5ec54650c6bd05954e6629b0e4a4854c666ffc357c83190899cd785010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf81c5ec54650c6bd05954e6629b0e4a4854c666ffc357c83190899cd785010->enter($__internal_adf81c5ec54650c6bd05954e6629b0e4a4854c666ffc357c83190899cd785010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_adf81c5ec54650c6bd05954e6629b0e4a4854c666ffc357c83190899cd785010->leave($__internal_adf81c5ec54650c6bd05954e6629b0e4a4854c666ffc357c83190899cd785010_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_40f511926359d83ac7cffe7ab40d2fd5efcf1830b1f24622c1027cdd38046c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f511926359d83ac7cffe7ab40d2fd5efcf1830b1f24622c1027cdd38046c61->enter($__internal_40f511926359d83ac7cffe7ab40d2fd5efcf1830b1f24622c1027cdd38046c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_40f511926359d83ac7cffe7ab40d2fd5efcf1830b1f24622c1027cdd38046c61->leave($__internal_40f511926359d83ac7cffe7ab40d2fd5efcf1830b1f24622c1027cdd38046c61_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
