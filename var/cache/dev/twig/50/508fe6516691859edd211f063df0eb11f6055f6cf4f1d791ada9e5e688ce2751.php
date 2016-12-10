<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4a3adc675c0b1bf1e9f2549d33944d9e97555d5279e8a481b0dfa8485e4ca98c extends Twig_Template
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
        $__internal_4260dd3ee20a5570f5121c3596b80ae7f3b8542a2473eeea2dbba61a78b7af5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4260dd3ee20a5570f5121c3596b80ae7f3b8542a2473eeea2dbba61a78b7af5a->enter($__internal_4260dd3ee20a5570f5121c3596b80ae7f3b8542a2473eeea2dbba61a78b7af5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4260dd3ee20a5570f5121c3596b80ae7f3b8542a2473eeea2dbba61a78b7af5a->leave($__internal_4260dd3ee20a5570f5121c3596b80ae7f3b8542a2473eeea2dbba61a78b7af5a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f90a31f81920139336472751b7973763af21fbee6b98cfb51da97be3503759bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90a31f81920139336472751b7973763af21fbee6b98cfb51da97be3503759bd->enter($__internal_f90a31f81920139336472751b7973763af21fbee6b98cfb51da97be3503759bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f90a31f81920139336472751b7973763af21fbee6b98cfb51da97be3503759bd->leave($__internal_f90a31f81920139336472751b7973763af21fbee6b98cfb51da97be3503759bd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_99e1d476803d3072231e50b0ddf1a99e5f3c420958ccbc6eed70a45119795890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e1d476803d3072231e50b0ddf1a99e5f3c420958ccbc6eed70a45119795890->enter($__internal_99e1d476803d3072231e50b0ddf1a99e5f3c420958ccbc6eed70a45119795890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_99e1d476803d3072231e50b0ddf1a99e5f3c420958ccbc6eed70a45119795890->leave($__internal_99e1d476803d3072231e50b0ddf1a99e5f3c420958ccbc6eed70a45119795890_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ae91b5c4f134083357a0479719606be180629d492dc91a6c7bb0f23510b9820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae91b5c4f134083357a0479719606be180629d492dc91a6c7bb0f23510b9820->enter($__internal_5ae91b5c4f134083357a0479719606be180629d492dc91a6c7bb0f23510b9820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5ae91b5c4f134083357a0479719606be180629d492dc91a6c7bb0f23510b9820->leave($__internal_5ae91b5c4f134083357a0479719606be180629d492dc91a6c7bb0f23510b9820_prof);

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
