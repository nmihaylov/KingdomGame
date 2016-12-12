<?php

/* battles/kingdom.html.twig */
class __TwigTemplate_83ff36281952d417e6b3ef1af3261bb63bf9d055eae3def84d6869b66fac0c31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "battles/kingdom.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c10dfaea5d5297ba36b1666e69748362ce863554d2f606803a6a6cc10cf5d9c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10dfaea5d5297ba36b1666e69748362ce863554d2f606803a6a6cc10cf5d9c3->enter($__internal_c10dfaea5d5297ba36b1666e69748362ce863554d2f606803a6a6cc10cf5d9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "battles/kingdom.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c10dfaea5d5297ba36b1666e69748362ce863554d2f606803a6a6cc10cf5d9c3->leave($__internal_c10dfaea5d5297ba36b1666e69748362ce863554d2f606803a6a6cc10cf5d9c3_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_66a4ea2184641bac12a0cba1931a2dc742e95d7835fa3ffa37de8b0400c6a2f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a4ea2184641bac12a0cba1931a2dc742e95d7835fa3ffa37de8b0400c6a2f8->enter($__internal_66a4ea2184641bac12a0cba1931a2dc742e95d7835fa3ffa37de8b0400c6a2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        // line 4
        echo "
";
        
        $__internal_66a4ea2184641bac12a0cba1931a2dc742e95d7835fa3ffa37de8b0400c6a2f8->leave($__internal_66a4ea2184641bac12a0cba1931a2dc742e95d7835fa3ffa37de8b0400c6a2f8_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_f0078bc4688a2655becd7df2f1a72f6d53cc6997f6475e00d2a3b75db2ce7006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0078bc4688a2655becd7df2f1a72f6d53cc6997f6475e00d2a3b75db2ce7006->enter($__internal_f0078bc4688a2655becd7df2f1a72f6d53cc6997f6475e00d2a3b75db2ce7006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["kingdom"]) ? $context["kingdom"] : $this->getContext($context, "kingdom")), "player", array()), "username", array()), "html", null, true);
        echo "'s kingdom - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kingdom"]) ? $context["kingdom"] : $this->getContext($context, "kingdom")), "name", array()), "html", null, true);
        echo "</h2>
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("attack_kingdom", array("id" => $this->getAttribute((isset($context["kingdom"]) ? $context["kingdom"] : $this->getContext($context, "kingdom")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">Attack this kingdom</a>
    ";
        // line 11
        echo "    <a href=\"#\" class=\"btn btn-info\">View more about this kingdom</a>
    <h3>Buildings</h3>
    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>Name</th>
            <th>Level</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["kingdom"]) ? $context["kingdom"] : $this->getContext($context, "kingdom")), "buildings", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["building"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["building"], "building", array()), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["building"], "level", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['building'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>

    <h3>Units in Kingdom</h3>
    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>Name</th>
            <th>Amount</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["kingdom"]) ? $context["kingdom"] : $this->getContext($context, "kingdom")), "units", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 40
            echo "            <tr>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unit"], "unit", array()), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "amount", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>


";
        
        $__internal_f0078bc4688a2655becd7df2f1a72f6d53cc6997f6475e00d2a3b75db2ce7006->leave($__internal_f0078bc4688a2655becd7df2f1a72f6d53cc6997f6475e00d2a3b75db2ce7006_prof);

    }

    public function getTemplateName()
    {
        return "battles/kingdom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 45,  123 => 42,  119 => 41,  116 => 40,  112 => 39,  98 => 27,  89 => 24,  85 => 23,  82 => 22,  78 => 21,  66 => 11,  62 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id %}

{% endblock %}

{% block main %}
<h2>{{ kingdom.player.username }}'s kingdom - {{ kingdom.name }}</h2>
    <a href=\"{{ path(\"attack_kingdom\", {id: kingdom.id}) }}\" class=\"btn btn-danger\">Attack this kingdom</a>
    {#TODO: to finish the belwo funcitonality#}
    <a href=\"#\" class=\"btn btn-info\">View more about this kingdom</a>
    <h3>Buildings</h3>
    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>Name</th>
            <th>Level</th>
        </tr>
        </thead>
        <tbody>
        {% for building in kingdom.buildings %}
            <tr>
                <td>{{ building.building.name }}</td>
                <td>{{ building.level }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <h3>Units in Kingdom</h3>
    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>Name</th>
            <th>Amount</th>
        </tr>
        </thead>
        <tbody>
        {% for unit in kingdom.units %}
            <tr>
                <td>{{ unit.unit.name }}</td>
                <td>{{ unit.amount }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>


{% endblock %}

";
    }
}