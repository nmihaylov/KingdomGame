<?php

/* battles/sendUnits.html.twig */
class __TwigTemplate_3bdfdfe37f2296465170904809c141ef0a835d5110b369f60a51b4ef452d8974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "battles/sendUnits.html.twig", 1);
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
        $__internal_886b4b114c471a9e6e64a38b90ca3f20843011935106b4622181d307eb84b80e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_886b4b114c471a9e6e64a38b90ca3f20843011935106b4622181d307eb84b80e->enter($__internal_886b4b114c471a9e6e64a38b90ca3f20843011935106b4622181d307eb84b80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "battles/sendUnits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_886b4b114c471a9e6e64a38b90ca3f20843011935106b4622181d307eb84b80e->leave($__internal_886b4b114c471a9e6e64a38b90ca3f20843011935106b4622181d307eb84b80e_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_c52a2024ef330007b2333f55e63a0eb12affeff64ea2c8d841c6cd74e9992368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52a2024ef330007b2333f55e63a0eb12affeff64ea2c8d841c6cd74e9992368->enter($__internal_c52a2024ef330007b2333f55e63a0eb12affeff64ea2c8d841c6cd74e9992368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        // line 4
        echo "
";
        
        $__internal_c52a2024ef330007b2333f55e63a0eb12affeff64ea2c8d841c6cd74e9992368->leave($__internal_c52a2024ef330007b2333f55e63a0eb12affeff64ea2c8d841c6cd74e9992368_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_32e3634076585c4b155395843d49a539dc660724966ef468d9f44d371bbe42cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e3634076585c4b155395843d49a539dc660724966ef468d9f44d371bbe42cc->enter($__internal_32e3634076585c4b155395843d49a539dc660724966ef468d9f44d371bbe42cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "    <div class=\"col-sm-6\">
        <h3>My Kingdom</h3>
        <table class=\"table table-striped table-hover \">
            <thead>
            <tr>
                <th>Name</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["myKingdom"]) ? $context["myKingdom"] : $this->getContext($context, "myKingdom")), "units", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 19
            echo "                <tr>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unit"], "unit", array()), "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "amount", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </tbody>
        </table>
    </div>
    <div class=\"col-sm-6\">
        <h3>Attacked Kingdom</h3>
        <table class=\"table table-striped table-hover \">
            <thead>
            <tr>
                <th>Name</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["attackedKingdom"]) ? $context["attackedKingdom"] : $this->getContext($context, "attackedKingdom")), "units", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 38
            echo "                <tr>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unit"], "unit", array()), "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "amount", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
        </table>
    </div>
    <div class=\"col-sm-6\">
        <h3>Send units</h3>
        <table class=\"table table-striped table-hover \">
            <thead>
            <tr>
                <th>Name</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["attackedKingdom"]) ? $context["attackedKingdom"] : $this->getContext($context, "attackedKingdom")), "units", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 57
            echo "                <tr>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unit"], "unit", array()), "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "amount", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </tbody>
        </table>
        <a href=\"#\" class=\"btn btn-danger\">Fight!</a>
    </div>
";
        
        $__internal_32e3634076585c4b155395843d49a539dc660724966ef468d9f44d371bbe42cc->leave($__internal_32e3634076585c4b155395843d49a539dc660724966ef468d9f44d371bbe42cc_prof);

    }

    public function getTemplateName()
    {
        return "battles/sendUnits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 62,  148 => 59,  144 => 58,  141 => 57,  137 => 56,  122 => 43,  113 => 40,  109 => 39,  106 => 38,  102 => 37,  87 => 24,  78 => 21,  74 => 20,  71 => 19,  67 => 18,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id %}

{% endblock %}

{% block main %}
    <div class=\"col-sm-6\">
        <h3>My Kingdom</h3>
        <table class=\"table table-striped table-hover \">
            <thead>
            <tr>
                <th>Name</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>
            {% for unit in myKingdom.units %}
                <tr>
                    <td>{{ unit.unit.name }}</td>
                    <td>{{ unit.amount }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <div class=\"col-sm-6\">
        <h3>Attacked Kingdom</h3>
        <table class=\"table table-striped table-hover \">
            <thead>
            <tr>
                <th>Name</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>
            {% for unit in attackedKingdom.units %}
                <tr>
                    <td>{{ unit.unit.name }}</td>
                    <td>{{ unit.amount }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <div class=\"col-sm-6\">
        <h3>Send units</h3>
        <table class=\"table table-striped table-hover \">
            <thead>
            <tr>
                <th>Name</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>
            {% for unit in attackedKingdom.units %}
                <tr>
                    <td>{{ unit.unit.name }}</td>
                    <td>{{ unit.amount }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        <a href=\"#\" class=\"btn btn-danger\">Fight!</a>
    </div>
{% endblock %}

";
    }
}
