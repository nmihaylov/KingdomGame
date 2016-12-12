<?php

/* units/index.html.twig */
class __TwigTemplate_8bd9d26c9a82d19f3c74869b40665b7bfd7c3c4a3aea5fce629fe95c22e8e830 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "units/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c4084e5a23fb7b041bc491d8a1686fa6db6487bfe0b2dbe1e03a6efe5d8038f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c4084e5a23fb7b041bc491d8a1686fa6db6487bfe0b2dbe1e03a6efe5d8038f->enter($__internal_2c4084e5a23fb7b041bc491d8a1686fa6db6487bfe0b2dbe1e03a6efe5d8038f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "units/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c4084e5a23fb7b041bc491d8a1686fa6db6487bfe0b2dbe1e03a6efe5d8038f->leave($__internal_2c4084e5a23fb7b041bc491d8a1686fa6db6487bfe0b2dbe1e03a6efe5d8038f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_121bd3910489bc67bd6af1c043fe99fa9af87bb11ab28aeee07b0c4e7592a8cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121bd3910489bc67bd6af1c043fe99fa9af87bb11ab28aeee07b0c4e7592a8cb->enter($__internal_121bd3910489bc67bd6af1c043fe99fa9af87bb11ab28aeee07b0c4e7592a8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h3>Units in Kingdom</h3>
    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>Name</th>
            <th>Amount</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["kingdom"]) ? $context["kingdom"] : $this->getContext($context, "kingdom")), "units", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unit"], "unit", array()), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "amount", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </tbody>
    </table>

    <h3>Barracks - arm more units</h3>
    <table class=\"table table-striped table-hover\">
        <thead>
        <tr>
            <th>Name</th>
            <th>Costs per 1 unit</th>
            <th>Add units</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["units"]) ? $context["units"] : $this->getContext($context, "units")));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 33
            echo "            <tr>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["unit"], "costs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["unit_cost"]) {
                // line 37
                echo "                        <b>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unit_cost"], "resource", array()), "name", array()), "html", null, true);
                echo "</b>: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["unit_cost"], "amount", array()), "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit_cost'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                </td>
                <td>
                    <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("arm_unit", array("id" => $this->getAttribute($context["unit"], "id", array()))), "html", null, true);
            echo "\">Arm 1 unit</a>
                </td>

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
        
        $__internal_121bd3910489bc67bd6af1c043fe99fa9af87bb11ab28aeee07b0c4e7592a8cb->leave($__internal_121bd3910489bc67bd6af1c043fe99fa9af87bb11ab28aeee07b0c4e7592a8cb_prof);

    }

    public function getTemplateName()
    {
        return "units/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 46,  117 => 41,  113 => 39,  102 => 37,  98 => 36,  93 => 34,  90 => 33,  86 => 32,  71 => 19,  62 => 16,  58 => 15,  55 => 14,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
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

    <h3>Barracks - arm more units</h3>
    <table class=\"table table-striped table-hover\">
        <thead>
        <tr>
            <th>Name</th>
            <th>Costs per 1 unit</th>
            <th>Add units</th>
        </tr>
        </thead>
        <tbody>
        {% for unit in units %}
            <tr>
                <td>{{ unit.name }}</td>
                <td>
                    {% for unit_cost in unit.costs %}
                        <b>{{ unit_cost.resource.name }}</b>: {{ unit_cost.amount }}
                    {% endfor %}
                </td>
                <td>
                    <a class=\"btn btn-primary btn-xs\" href=\"{{ path(\"arm_unit\", {id: unit.id}) }}\">Arm 1 unit</a>
                </td>

            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}";
    }
}
