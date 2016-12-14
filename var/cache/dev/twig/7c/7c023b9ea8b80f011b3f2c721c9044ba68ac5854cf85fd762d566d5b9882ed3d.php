<?php

/* buildings/index.html.twig */
class __TwigTemplate_c289e5ce1d205f2fc5a8d23f654b1b99ba913f4d4bbb2d5d1b741d70c0562ee8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "buildings/index.html.twig", 1);
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
        $__internal_74291179adffba1abf00f0f704bd321c49f73c8f4707f9b8bf4d428031a372f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74291179adffba1abf00f0f704bd321c49f73c8f4707f9b8bf4d428031a372f2->enter($__internal_74291179adffba1abf00f0f704bd321c49f73c8f4707f9b8bf4d428031a372f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "buildings/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74291179adffba1abf00f0f704bd321c49f73c8f4707f9b8bf4d428031a372f2->leave($__internal_74291179adffba1abf00f0f704bd321c49f73c8f4707f9b8bf4d428031a372f2_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_00abee9b2498bf245fe10b95fbf96274584d1996047d58599043d71cbe62483a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00abee9b2498bf245fe10b95fbf96274584d1996047d58599043d71cbe62483a->enter($__internal_00abee9b2498bf245fe10b95fbf96274584d1996047d58599043d71cbe62483a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        // line 6
        echo "    ";
        // line 7
        echo "    ";
        // line 8
        echo "    ";
        // line 9
        echo "    ";
        // line 10
        echo "    ";
        // line 11
        echo "    ";
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        // line 14
        echo "    ";
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        // line 17
        echo "    ";
        // line 18
        echo "    ";
        // line 19
        echo "    ";
        // line 20
        echo "    ";
        // line 21
        echo "    ";
        // line 22
        echo "    ";
        // line 23
        echo "    ";
        // line 24
        echo "    ";
        // line 25
        echo "    ";
        // line 26
        echo "    ";
        // line 27
        echo "    ";
        // line 28
        echo "    ";
        // line 29
        echo "    ";
        if ((isset($context["err"]) ? $context["err"] : $this->getContext($context, "err"))) {
            // line 30
            echo "        <div class=\"alert alert-dismissible alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <strong>";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["err"]) ? $context["err"] : $this->getContext($context, "err")), "html", null, true);
            echo "</strong>
        </div>
    ";
        }
        // line 35
        echo "    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>Name</th>
            <th>Current level</th>
            <th>Costs for next level</th>
            <th>Build next</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["buildings"]) ? $context["buildings"] : $this->getContext($context, "buildings")));
        foreach ($context['_seq'] as $context["_key"] => $context["building"]) {
            // line 46
            echo "            <tr>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["building"], "building", array()), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["building"], "level", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["building"], "building", array()), "costs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["building_cost"]) {
                // line 51
                echo "                        <b>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["building_cost"], "resource", array()), "name", array()), "html", null, true);
                echo "</b>: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["building_cost"], "amount", array()) * (($this->getAttribute($context["building"], "level", array()) + 1) / 2)), "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['building_cost'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                </td>
                <td>
                    <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("building_evolve", array("id" => $this->getAttribute($this->getAttribute($context["building"], "building", array()), "id", array()))), "html", null, true);
            echo "\">Build
                        on ";
            // line 56
            echo twig_escape_filter($this->env, ($this->getAttribute($context["building"], "level", array()) + 1), "html", null, true);
            echo " level</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['building'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>

    <h3>Buildings in porgress</h3>
    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>Name</th>
            <th>Level to be</th>
            <th>Finish after</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["buildingsInProgress"]) ? $context["buildingsInProgress"] : $this->getContext($context, "buildingsInProgress")));
        foreach ($context['_seq'] as $context["_key"] => $context["building"]) {
            // line 73
            echo "            <tr>
                <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["building"], "building", array()), "building", array()), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["building"], "building", array()), "level", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 77
            $context["difference"] = $this->getAttribute(twig_date_converter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["building"], "finishesOn", array()), "Y-m-d H:i:s")), "diff", array(0 => twig_date_converter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "Y-m-d H:i:s"))), "method");
            // line 78
            echo "                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["difference"]) ? $context["difference"] : $this->getContext($context, "difference")), "%d days %h hours %i minutes %s seconds"), "html", null, true);
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['building'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        </tbody>
    </table>
";
        
        $__internal_00abee9b2498bf245fe10b95fbf96274584d1996047d58599043d71cbe62483a->leave($__internal_00abee9b2498bf245fe10b95fbf96274584d1996047d58599043d71cbe62483a_prof);

    }

    public function getTemplateName()
    {
        return "buildings/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 82,  196 => 78,  194 => 77,  189 => 75,  185 => 74,  182 => 73,  178 => 72,  163 => 59,  154 => 56,  150 => 55,  146 => 53,  135 => 51,  131 => 50,  126 => 48,  122 => 47,  119 => 46,  115 => 45,  103 => 35,  97 => 32,  93 => 30,  90 => 29,  88 => 28,  86 => 27,  84 => 26,  82 => 25,  80 => 24,  78 => 23,  76 => 22,  74 => 21,  72 => 20,  70 => 19,  68 => 18,  66 => 17,  64 => 16,  62 => 15,  60 => 14,  58 => 13,  56 => 12,  54 => 11,  52 => 10,  50 => 9,  48 => 8,  46 => 7,  44 => 6,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    {#<table class=\"table table-striped table-hover \">#}
    {#<thead>#}
    {#<tr>#}
    {#<th>Name</th>#}
    {#<th>Level</th>#}
    {#{% for resource in resources %}#}
    {#<th>{{ resource.name }} </th>#}
    {#{% endfor %}#}
    {#<th>Build next</th>#}
    {#</tr>#}
    {#</thead>#}
    {#<tbody>#}
    {#{% for building in buildings %}#}
    {#<tr>#}
    {#<td>{{ building.building.name }}</td>#}
    {#<td>{{ building.level }}</td>#}
    {#{% for cost in building.building.costs %}#}
    {#<td>{{ cost.amount * (1.5 * (building.level + 1)) }}</td>#}
    {#{% endfor %}#}
    {#<td><a class=\"btn btn-primary btn-xs\" href=\"{{ path(\"building_evolve\", {id: building.building.id}) }}\">Build#}
    {#on {{ building.level + 1 }} level</a></td>#}
    {#</tr>#}
    {#{% endfor %}#}
    {#</tbody>#}
    {#</table>#}
    {% if err %}
        <div class=\"alert alert-dismissible alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <strong>{{ err }}</strong>
        </div>
    {% endif %}
    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>Name</th>
            <th>Current level</th>
            <th>Costs for next level</th>
            <th>Build next</th>
        </tr>
        </thead>
        <tbody>
        {% for building in buildings %}
            <tr>
                <td>{{ building.building.name }}</td>
                <td>{{ building.level }}</td>
                <td>
                    {% for building_cost in building.building.costs %}
                        <b>{{ building_cost.resource.name }}</b>: {{ building_cost.amount * ((building.level + 1 ) / 2) }}
                    {% endfor %}
                </td>
                <td>
                    <a class=\"btn btn-primary btn-xs\" href=\"{{ path(\"building_evolve\", {id: building.building.id}) }}\">Build
                        on {{ building.level + 1 }} level</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <h3>Buildings in porgress</h3>
    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>Name</th>
            <th>Level to be</th>
            <th>Finish after</th>
        </tr>
        </thead>
        <tbody>
        {% for building in buildingsInProgress %}
            <tr>
                <td>{{ building.building.building.name }}</td>
                <td>{{ building.building.level }}</td>
                <td>
                    {% set difference = date(building.finishesOn|date(\"Y-m-d H:i:s\")).diff(date(now|date(\"Y-m-d H:i:s\"))) %}
                    {{ difference|date(\"%d \\days %h \\hours %i \\minutes %s \\seconds\") }}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}";
    }
}
