<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e711edd948cca4ad6f4f7f2a19375755f76312c15182e985b77278ad2bb1d534 extends Twig_Template
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
        $__internal_c607f870e8ef4b22babd77504b3264ec664651909c83eae8cc53b0db272bd38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c607f870e8ef4b22babd77504b3264ec664651909c83eae8cc53b0db272bd38f->enter($__internal_c607f870e8ef4b22babd77504b3264ec664651909c83eae8cc53b0db272bd38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c607f870e8ef4b22babd77504b3264ec664651909c83eae8cc53b0db272bd38f->leave($__internal_c607f870e8ef4b22babd77504b3264ec664651909c83eae8cc53b0db272bd38f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6ec8513073dbaa1b7fdb4bdd252fcef16d76a18a39ff7b7b017b4f914820dcf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec8513073dbaa1b7fdb4bdd252fcef16d76a18a39ff7b7b017b4f914820dcf1->enter($__internal_6ec8513073dbaa1b7fdb4bdd252fcef16d76a18a39ff7b7b017b4f914820dcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6ec8513073dbaa1b7fdb4bdd252fcef16d76a18a39ff7b7b017b4f914820dcf1->leave($__internal_6ec8513073dbaa1b7fdb4bdd252fcef16d76a18a39ff7b7b017b4f914820dcf1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2b90e75f4a25593e2ee57ea9abbeb0efe324e3aab1b108fe027c2fd84cd31df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b90e75f4a25593e2ee57ea9abbeb0efe324e3aab1b108fe027c2fd84cd31df1->enter($__internal_2b90e75f4a25593e2ee57ea9abbeb0efe324e3aab1b108fe027c2fd84cd31df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2b90e75f4a25593e2ee57ea9abbeb0efe324e3aab1b108fe027c2fd84cd31df1->leave($__internal_2b90e75f4a25593e2ee57ea9abbeb0efe324e3aab1b108fe027c2fd84cd31df1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd69fee476e53d62dfa6a5f8a0e46e93eadf705d2c182c82f5898956dc151180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd69fee476e53d62dfa6a5f8a0e46e93eadf705d2c182c82f5898956dc151180->enter($__internal_bd69fee476e53d62dfa6a5f8a0e46e93eadf705d2c182c82f5898956dc151180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bd69fee476e53d62dfa6a5f8a0e46e93eadf705d2c182c82f5898956dc151180->leave($__internal_bd69fee476e53d62dfa6a5f8a0e46e93eadf705d2c182c82f5898956dc151180_prof);

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
