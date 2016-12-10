<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_81fe486d4be9596ea6a237a00f5c599cc1e3e5889a0a5fa36384c9a2912ae203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_2eec00604754a8f408beffa32fb98d734d3fbd75fca9b8beedd58e76c15653d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eec00604754a8f408beffa32fb98d734d3fbd75fca9b8beedd58e76c15653d6->enter($__internal_2eec00604754a8f408beffa32fb98d734d3fbd75fca9b8beedd58e76c15653d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eec00604754a8f408beffa32fb98d734d3fbd75fca9b8beedd58e76c15653d6->leave($__internal_2eec00604754a8f408beffa32fb98d734d3fbd75fca9b8beedd58e76c15653d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_61640074ad536a4762d7b2afa29c635b91c06355bd90cc5f482158ccc4ef0204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61640074ad536a4762d7b2afa29c635b91c06355bd90cc5f482158ccc4ef0204->enter($__internal_61640074ad536a4762d7b2afa29c635b91c06355bd90cc5f482158ccc4ef0204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_61640074ad536a4762d7b2afa29c635b91c06355bd90cc5f482158ccc4ef0204->leave($__internal_61640074ad536a4762d7b2afa29c635b91c06355bd90cc5f482158ccc4ef0204_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b09d78ba2bc5c0bde49fe661b48ddd6e2d33c672bd00143aec906bc1ea4e0e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09d78ba2bc5c0bde49fe661b48ddd6e2d33c672bd00143aec906bc1ea4e0e6b->enter($__internal_b09d78ba2bc5c0bde49fe661b48ddd6e2d33c672bd00143aec906bc1ea4e0e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b09d78ba2bc5c0bde49fe661b48ddd6e2d33c672bd00143aec906bc1ea4e0e6b->leave($__internal_b09d78ba2bc5c0bde49fe661b48ddd6e2d33c672bd00143aec906bc1ea4e0e6b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b86deea83a4442eeaaa46aed01adea0e2249a453079563660317f64f1fc87471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86deea83a4442eeaaa46aed01adea0e2249a453079563660317f64f1fc87471->enter($__internal_b86deea83a4442eeaaa46aed01adea0e2249a453079563660317f64f1fc87471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b86deea83a4442eeaaa46aed01adea0e2249a453079563660317f64f1fc87471->leave($__internal_b86deea83a4442eeaaa46aed01adea0e2249a453079563660317f64f1fc87471_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
