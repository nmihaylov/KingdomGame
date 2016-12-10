<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_50303f046197833e81fdd641af9d4978f8b1741669eda7d6c9415f300ef97efa extends Twig_Template
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
        $__internal_ed0fcc24f4bf7526c0722b25c2bf385011c1109547f02f26e711e5ca45f0b5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0fcc24f4bf7526c0722b25c2bf385011c1109547f02f26e711e5ca45f0b5f9->enter($__internal_ed0fcc24f4bf7526c0722b25c2bf385011c1109547f02f26e711e5ca45f0b5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed0fcc24f4bf7526c0722b25c2bf385011c1109547f02f26e711e5ca45f0b5f9->leave($__internal_ed0fcc24f4bf7526c0722b25c2bf385011c1109547f02f26e711e5ca45f0b5f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3991746140121f6f984cb7e29bf07559c59cdd99e7d523ab4396388949a85353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3991746140121f6f984cb7e29bf07559c59cdd99e7d523ab4396388949a85353->enter($__internal_3991746140121f6f984cb7e29bf07559c59cdd99e7d523ab4396388949a85353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3991746140121f6f984cb7e29bf07559c59cdd99e7d523ab4396388949a85353->leave($__internal_3991746140121f6f984cb7e29bf07559c59cdd99e7d523ab4396388949a85353_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_88d5dc3f4953f346f35a79ea0c3df515a35abcf37221b674015b2828566fc478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d5dc3f4953f346f35a79ea0c3df515a35abcf37221b674015b2828566fc478->enter($__internal_88d5dc3f4953f346f35a79ea0c3df515a35abcf37221b674015b2828566fc478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_88d5dc3f4953f346f35a79ea0c3df515a35abcf37221b674015b2828566fc478->leave($__internal_88d5dc3f4953f346f35a79ea0c3df515a35abcf37221b674015b2828566fc478_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5755e4f2d595727f2ef8b41e2fb77a7b2cd27ec59d5cfadf8f9ab9c6eb33247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5755e4f2d595727f2ef8b41e2fb77a7b2cd27ec59d5cfadf8f9ab9c6eb33247->enter($__internal_d5755e4f2d595727f2ef8b41e2fb77a7b2cd27ec59d5cfadf8f9ab9c6eb33247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d5755e4f2d595727f2ef8b41e2fb77a7b2cd27ec59d5cfadf8f9ab9c6eb33247->leave($__internal_d5755e4f2d595727f2ef8b41e2fb77a7b2cd27ec59d5cfadf8f9ab9c6eb33247_prof);

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
