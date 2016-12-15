<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0026e74374173f6c5abedecd490e86004225241681088407dedd8be11de81199 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_2c74f120c964218b341be7d429a2154cdd932fc7dffb1e7edb334d2921136fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c74f120c964218b341be7d429a2154cdd932fc7dffb1e7edb334d2921136fcd->enter($__internal_2c74f120c964218b341be7d429a2154cdd932fc7dffb1e7edb334d2921136fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c74f120c964218b341be7d429a2154cdd932fc7dffb1e7edb334d2921136fcd->leave($__internal_2c74f120c964218b341be7d429a2154cdd932fc7dffb1e7edb334d2921136fcd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_96188aaa78864fdb94a6d65c1950c8d12876fd6ac6d1bcb642f22603e77687c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96188aaa78864fdb94a6d65c1950c8d12876fd6ac6d1bcb642f22603e77687c6->enter($__internal_96188aaa78864fdb94a6d65c1950c8d12876fd6ac6d1bcb642f22603e77687c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_96188aaa78864fdb94a6d65c1950c8d12876fd6ac6d1bcb642f22603e77687c6->leave($__internal_96188aaa78864fdb94a6d65c1950c8d12876fd6ac6d1bcb642f22603e77687c6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f12cd4623ab44df57e0ecbe44be6bfd1797b47e23183ebbf934c576b141f8b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12cd4623ab44df57e0ecbe44be6bfd1797b47e23183ebbf934c576b141f8b8c->enter($__internal_f12cd4623ab44df57e0ecbe44be6bfd1797b47e23183ebbf934c576b141f8b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f12cd4623ab44df57e0ecbe44be6bfd1797b47e23183ebbf934c576b141f8b8c->leave($__internal_f12cd4623ab44df57e0ecbe44be6bfd1797b47e23183ebbf934c576b141f8b8c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_10a9eb29c28c2fde002ee370ce045e925e7cd59a9a2af15b19ca05887bae1066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a9eb29c28c2fde002ee370ce045e925e7cd59a9a2af15b19ca05887bae1066->enter($__internal_10a9eb29c28c2fde002ee370ce045e925e7cd59a9a2af15b19ca05887bae1066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_10a9eb29c28c2fde002ee370ce045e925e7cd59a9a2af15b19ca05887bae1066->leave($__internal_10a9eb29c28c2fde002ee370ce045e925e7cd59a9a2af15b19ca05887bae1066_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
