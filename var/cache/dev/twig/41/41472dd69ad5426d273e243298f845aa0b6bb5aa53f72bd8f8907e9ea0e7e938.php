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
        $__internal_ccc410c9dddd5be8d36ca8571391d993975051c93906a3e53dfeed49e8031e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc410c9dddd5be8d36ca8571391d993975051c93906a3e53dfeed49e8031e30->enter($__internal_ccc410c9dddd5be8d36ca8571391d993975051c93906a3e53dfeed49e8031e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccc410c9dddd5be8d36ca8571391d993975051c93906a3e53dfeed49e8031e30->leave($__internal_ccc410c9dddd5be8d36ca8571391d993975051c93906a3e53dfeed49e8031e30_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e05422af7ac2cd2aa0d671522cb620bca3384c0851b644e7348ede139f9aee48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05422af7ac2cd2aa0d671522cb620bca3384c0851b644e7348ede139f9aee48->enter($__internal_e05422af7ac2cd2aa0d671522cb620bca3384c0851b644e7348ede139f9aee48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e05422af7ac2cd2aa0d671522cb620bca3384c0851b644e7348ede139f9aee48->leave($__internal_e05422af7ac2cd2aa0d671522cb620bca3384c0851b644e7348ede139f9aee48_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_19fac8d58a6cdd162d0782adad6b469c738f22e499e21418edc9ed2ecafb7ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19fac8d58a6cdd162d0782adad6b469c738f22e499e21418edc9ed2ecafb7ce8->enter($__internal_19fac8d58a6cdd162d0782adad6b469c738f22e499e21418edc9ed2ecafb7ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_19fac8d58a6cdd162d0782adad6b469c738f22e499e21418edc9ed2ecafb7ce8->leave($__internal_19fac8d58a6cdd162d0782adad6b469c738f22e499e21418edc9ed2ecafb7ce8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_786c30fa770333ac45df941df212ada85fe8d3a0bd7574767b001651ad9f0d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786c30fa770333ac45df941df212ada85fe8d3a0bd7574767b001651ad9f0d4a->enter($__internal_786c30fa770333ac45df941df212ada85fe8d3a0bd7574767b001651ad9f0d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_786c30fa770333ac45df941df212ada85fe8d3a0bd7574767b001651ad9f0d4a->leave($__internal_786c30fa770333ac45df941df212ada85fe8d3a0bd7574767b001651ad9f0d4a_prof);

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
