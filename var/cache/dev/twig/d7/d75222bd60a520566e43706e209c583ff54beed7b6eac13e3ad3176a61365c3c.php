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
        $__internal_8faa43fc37c001ad81a4183e83c987474d576e6ccee758ffcded4ccdca32a8f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8faa43fc37c001ad81a4183e83c987474d576e6ccee758ffcded4ccdca32a8f9->enter($__internal_8faa43fc37c001ad81a4183e83c987474d576e6ccee758ffcded4ccdca32a8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "battles/kingdom.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8faa43fc37c001ad81a4183e83c987474d576e6ccee758ffcded4ccdca32a8f9->leave($__internal_8faa43fc37c001ad81a4183e83c987474d576e6ccee758ffcded4ccdca32a8f9_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_841cf316347cec6aa775ca757a38e84ff8745511e495b8d9e1e159951dbcd053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841cf316347cec6aa775ca757a38e84ff8745511e495b8d9e1e159951dbcd053->enter($__internal_841cf316347cec6aa775ca757a38e84ff8745511e495b8d9e1e159951dbcd053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        // line 4
        echo "
";
        
        $__internal_841cf316347cec6aa775ca757a38e84ff8745511e495b8d9e1e159951dbcd053->leave($__internal_841cf316347cec6aa775ca757a38e84ff8745511e495b8d9e1e159951dbcd053_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_f07eb75802723ab299781262a6d31ddd5e399273b788cb1d36c9e5d3f1e65c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07eb75802723ab299781262a6d31ddd5e399273b788cb1d36c9e5d3f1e65c60->enter($__internal_f07eb75802723ab299781262a6d31ddd5e399273b788cb1d36c9e5d3f1e65c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["kingdom"]) ? $context["kingdom"] : $this->getContext($context, "kingdom")), "player", array()), "username", array()), "html", null, true);
        echo "'s kingdom - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kingdom"]) ? $context["kingdom"] : $this->getContext($context, "kingdom")), "name", array()), "html", null, true);
        echo "</h2>
    ";
        // line 10
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("attack_kingdom", array("id" => $this->getAttribute((isset($context["kingdom"]) ? $context["kingdom"] : $this->getContext($context, "kingdom")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">Attack this kingdom</a>
    ";
        // line 12
        echo "    <a href=\"#\" class=\"btn btn-info\">View more about this kingdom - NOT WORKING</a>
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
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["kingdom"]) ? $context["kingdom"] : $this->getContext($context, "kingdom")), "buildings", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["building"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["building"], "building", array()), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["building"], "level", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['building'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
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
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["kingdom"]) ? $context["kingdom"] : $this->getContext($context, "kingdom")), "units", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 41
            echo "            <tr>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unit"], "unit", array()), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "amount", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>


";
        
        $__internal_f07eb75802723ab299781262a6d31ddd5e399273b788cb1d36c9e5d3f1e65c60->leave($__internal_f07eb75802723ab299781262a6d31ddd5e399273b788cb1d36c9e5d3f1e65c60_prof);

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
        return array (  133 => 46,  124 => 43,  120 => 42,  117 => 41,  113 => 40,  99 => 28,  90 => 25,  86 => 24,  83 => 23,  79 => 22,  67 => 12,  62 => 10,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id %}

{% endblock %}

{% block main %}
<h2>{{ kingdom.player.username }}'s kingdom - {{ kingdom.name }}</h2>
    {#TODO: remove this button for my kingdoms#}
    <a href=\"{{ path(\"attack_kingdom\", {id: kingdom.id}) }}\" class=\"btn btn-danger\">Attack this kingdom</a>
    {#TODO: to finish the belwo funcitonality#}
    <a href=\"#\" class=\"btn btn-info\">View more about this kingdom - NOT WORKING</a>
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
