<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ed136d8c8bbf14faf8ec4a5f42e3858e5607b98054a5ad7f18340524b771d832 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0983764ec38dd969c9530df1999c7f4b2ff0b7e5b493e9ecba232ddd63b0fe3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0983764ec38dd969c9530df1999c7f4b2ff0b7e5b493e9ecba232ddd63b0fe3f->enter($__internal_0983764ec38dd969c9530df1999c7f4b2ff0b7e5b493e9ecba232ddd63b0fe3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0983764ec38dd969c9530df1999c7f4b2ff0b7e5b493e9ecba232ddd63b0fe3f->leave($__internal_0983764ec38dd969c9530df1999c7f4b2ff0b7e5b493e9ecba232ddd63b0fe3f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b05e24bd88da44180fa939fb25262a2c7642d447ff8fc62ba3a32246e95acc99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05e24bd88da44180fa939fb25262a2c7642d447ff8fc62ba3a32246e95acc99->enter($__internal_b05e24bd88da44180fa939fb25262a2c7642d447ff8fc62ba3a32246e95acc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b05e24bd88da44180fa939fb25262a2c7642d447ff8fc62ba3a32246e95acc99->leave($__internal_b05e24bd88da44180fa939fb25262a2c7642d447ff8fc62ba3a32246e95acc99_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_980b2fb6c036672ecea6f8f0ccd9bf9f3c955c174b51dca2ded1c2aa82b488a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980b2fb6c036672ecea6f8f0ccd9bf9f3c955c174b51dca2ded1c2aa82b488a7->enter($__internal_980b2fb6c036672ecea6f8f0ccd9bf9f3c955c174b51dca2ded1c2aa82b488a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_980b2fb6c036672ecea6f8f0ccd9bf9f3c955c174b51dca2ded1c2aa82b488a7->leave($__internal_980b2fb6c036672ecea6f8f0ccd9bf9f3c955c174b51dca2ded1c2aa82b488a7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ad5e0d888dba105e458b98683d1ad372a13cbddeed5f2efb5a8f92f532d63e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad5e0d888dba105e458b98683d1ad372a13cbddeed5f2efb5a8f92f532d63e6->enter($__internal_8ad5e0d888dba105e458b98683d1ad372a13cbddeed5f2efb5a8f92f532d63e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8ad5e0d888dba105e458b98683d1ad372a13cbddeed5f2efb5a8f92f532d63e6->leave($__internal_8ad5e0d888dba105e458b98683d1ad372a13cbddeed5f2efb5a8f92f532d63e6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
