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
        $__internal_08af5ffdb54ace4ce17894f92d3b20591a2fc4c83efdd1297b29b68067e3797f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08af5ffdb54ace4ce17894f92d3b20591a2fc4c83efdd1297b29b68067e3797f->enter($__internal_08af5ffdb54ace4ce17894f92d3b20591a2fc4c83efdd1297b29b68067e3797f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08af5ffdb54ace4ce17894f92d3b20591a2fc4c83efdd1297b29b68067e3797f->leave($__internal_08af5ffdb54ace4ce17894f92d3b20591a2fc4c83efdd1297b29b68067e3797f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_488cbcd5e412389a486e264d56876a4f884b4b909455fe0fd5fed3c540c3d636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488cbcd5e412389a486e264d56876a4f884b4b909455fe0fd5fed3c540c3d636->enter($__internal_488cbcd5e412389a486e264d56876a4f884b4b909455fe0fd5fed3c540c3d636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_488cbcd5e412389a486e264d56876a4f884b4b909455fe0fd5fed3c540c3d636->leave($__internal_488cbcd5e412389a486e264d56876a4f884b4b909455fe0fd5fed3c540c3d636_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_13780113cb9bfedba02ebb5d4508169c887aecc841acdfb5d913394e7608e79d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13780113cb9bfedba02ebb5d4508169c887aecc841acdfb5d913394e7608e79d->enter($__internal_13780113cb9bfedba02ebb5d4508169c887aecc841acdfb5d913394e7608e79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_13780113cb9bfedba02ebb5d4508169c887aecc841acdfb5d913394e7608e79d->leave($__internal_13780113cb9bfedba02ebb5d4508169c887aecc841acdfb5d913394e7608e79d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a9c8e283acc68ebee3afbab11a8f14e6be6d2bfb8a606a433a34762a3dd0cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9c8e283acc68ebee3afbab11a8f14e6be6d2bfb8a606a433a34762a3dd0cc0->enter($__internal_2a9c8e283acc68ebee3afbab11a8f14e6be6d2bfb8a606a433a34762a3dd0cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2a9c8e283acc68ebee3afbab11a8f14e6be6d2bfb8a606a433a34762a3dd0cc0->leave($__internal_2a9c8e283acc68ebee3afbab11a8f14e6be6d2bfb8a606a433a34762a3dd0cc0_prof);

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
