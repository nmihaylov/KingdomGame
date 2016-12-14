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
        $__internal_8a987cb977638ee3e2a546be173b67f9fa670efb1f3dba036c8fe029fb3d5456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a987cb977638ee3e2a546be173b67f9fa670efb1f3dba036c8fe029fb3d5456->enter($__internal_8a987cb977638ee3e2a546be173b67f9fa670efb1f3dba036c8fe029fb3d5456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "units/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a987cb977638ee3e2a546be173b67f9fa670efb1f3dba036c8fe029fb3d5456->leave($__internal_8a987cb977638ee3e2a546be173b67f9fa670efb1f3dba036c8fe029fb3d5456_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_188ebc25560513bd9ff2089b2c123305de2d3f48abaed0043a77c3df315240ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188ebc25560513bd9ff2089b2c123305de2d3f48abaed0043a77c3df315240ee->enter($__internal_188ebc25560513bd9ff2089b2c123305de2d3f48abaed0043a77c3df315240ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    ";
        if ((isset($context["err"]) ? $context["err"] : $this->getContext($context, "err"))) {
            // line 5
            echo "        <div class=\"alert alert-dismissible alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <strong>";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["err"]) ? $context["err"] : $this->getContext($context, "err")), "html", null, true);
            echo "</strong>
        </div>
    ";
        }
        // line 10
        echo "    <div class=\"col-sm-6\">
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
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["kingdom"]) ? $context["kingdom"] : $this->getContext($context, "kingdom")), "units", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 21
            echo "                <tr>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unit"], "unit", array()), "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "amount", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </tbody>
        </table>
    </div>


    <div class=\"col-sm-12\">
        <h3>Units in progress</h3>
        <table class=\"table table-striped table-hover \">
            <thead>
            <tr>
                <th>Name</th>
                <th>Amount to be added</th>
                <th>Finish after</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unitsInProgress"]) ? $context["unitsInProgress"] : $this->getContext($context, "unitsInProgress")));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 43
            echo "                <tr>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["unit"], "unit", array()), "unit", array()), "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "amount", array()), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 47
            $context["difference"] = $this->getAttribute(twig_date_converter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unit"], "finishesOn", array()), "Y-m-d H:i:s")), "diff", array(0 => twig_date_converter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "Y-m-d H:i:s"))), "method");
            // line 48
            echo "                        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["difference"]) ? $context["difference"] : $this->getContext($context, "difference")), "%d days %h hours %i minutes %s seconds"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </tbody>
        </table>
    </div>


    <div class=\"col-sm-12\">
        <h3>Barracks - arm more units</h3>
        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                <th>Name</th>
                <th>You need</th>
                <th>Costs per 1 unit</th>
                <th>Add units</th>
            </tr>
            </thead>
            <tbody>

            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["units"]) ? $context["units"] : $this->getContext($context, "units")));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 71
            echo "                <tr>
                    <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "name", array()), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["unit"], "unitDependencies", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["unitDependency"]) {
                // line 75
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unitDependency"], "building", array()), "name", array()), "html", null, true);
                echo ": level ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["unitDependency"], "buildingLevel", array()), "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unitDependency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                    </td>
                    <td>
                        ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["unit"], "costs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["unit_cost"]) {
                // line 80
                echo "                            <b>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unit_cost"], "resource", array()), "name", array()), "html", null, true);
                echo "</b>: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["unit_cost"], "amount", array()), "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit_cost'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                    </td>
                    <td>
                        ";
            // line 85
            echo "                        <a class=\"btn btn-primary btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("arm_unit", array("id" => $this->getAttribute($context["unit"], "id", array()))), "html", null, true);
            echo "\">Arm 5 units</a>
                    </td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "            </tbody>
        </table>
    </div>


    <div class=\"col-sm-12\">
        <h3>Barracks - arm more units</h3>
        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                <th>Name</th>
                <th>Costs per 1 unit</th>
                <th>Count</th>
                <th>Add units</th>
            </tr>
            </thead>
            ";
        // line 107
        echo "            <tbody>


            ";
        // line 111
        echo "            ";
        // line 112
        echo "            ";
        // line 113
        echo "            ";
        // line 114
        echo "            ";
        // line 115
        echo "
            ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["units"]) ? $context["units"] : $this->getContext($context, "units")));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 117
            echo "                <form name=\"unit\" method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("arm_unit", array("id" => $this->getAttribute($context["unit"], "id", array()))), "html", null, true);
            echo "\">

                    <tr>
                        <td>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "name", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["unit"], "costs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["unit_cost"]) {
                // line 123
                echo "                                <b>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unit_cost"], "resource", array()), "name", array()), "html", null, true);
                echo "</b>: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["unit_cost"], "amount", array()), "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit_cost'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                        </td>
                        <td>
                            <input type=\"hidden\" id=\"unit_unit_id\" name=\"unit[unit_id]\" value=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "id", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"unit_unit_id\" name=\"unit[kingdom_id] value=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kingdom"]) ? $context["kingdom"] : $this->getContext($context, "kingdom")), "id", array()), "html", null, true);
            echo "\">
                            <input type=\"number\" id=\"unit_unit_count\" name=\"unit[amount]\" required=\"required\"
                                   class=\"form-control\">
                        </td>
                        <td>
                            <button type=\"submit\">Arm units</button>
                        </td>

                    </tr>
                    ";
            // line 138
            echo "                </form>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "            </tbody>
        </table>
    </div>

";
        
        $__internal_188ebc25560513bd9ff2089b2c123305de2d3f48abaed0043a77c3df315240ee->leave($__internal_188ebc25560513bd9ff2089b2c123305de2d3f48abaed0043a77c3df315240ee_prof);

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
        return array (  306 => 140,  299 => 138,  287 => 128,  283 => 127,  279 => 125,  268 => 123,  264 => 122,  259 => 120,  252 => 117,  248 => 116,  245 => 115,  243 => 114,  241 => 113,  239 => 112,  237 => 111,  232 => 107,  214 => 90,  202 => 85,  198 => 82,  187 => 80,  183 => 79,  179 => 77,  168 => 75,  164 => 74,  159 => 72,  156 => 71,  152 => 70,  132 => 52,  121 => 48,  119 => 47,  114 => 45,  110 => 44,  107 => 43,  103 => 42,  85 => 26,  76 => 23,  72 => 22,  69 => 21,  65 => 20,  53 => 10,  47 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    {% if err %}
        <div class=\"alert alert-dismissible alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <strong>{{ err }}</strong>
        </div>
    {% endif %}
    <div class=\"col-sm-6\">
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
    </div>


    <div class=\"col-sm-12\">
        <h3>Units in progress</h3>
        <table class=\"table table-striped table-hover \">
            <thead>
            <tr>
                <th>Name</th>
                <th>Amount to be added</th>
                <th>Finish after</th>
            </tr>
            </thead>
            <tbody>
            {% for unit in unitsInProgress %}
                <tr>
                    <td>{{ unit.unit.unit.name }}</td>
                    <td>{{ unit.amount }}</td>
                    <td>
                        {% set difference = date(unit.finishesOn|date(\"Y-m-d H:i:s\")).diff(date(now|date(\"Y-m-d H:i:s\"))) %}
                        {{ difference|date(\"%d \\days %h \\hours %i \\minutes %s \\seconds\") }}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>


    <div class=\"col-sm-12\">
        <h3>Barracks - arm more units</h3>
        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                <th>Name</th>
                <th>You need</th>
                <th>Costs per 1 unit</th>
                <th>Add units</th>
            </tr>
            </thead>
            <tbody>

            {% for unit in units %}
                <tr>
                    <td>{{ unit.name }}</td>
                    <td>
                        {% for unitDependency in unit.unitDependencies %}
                            {{ unitDependency.building.name }}: level {{ unitDependency.buildingLevel }}
                        {% endfor %}
                    </td>
                    <td>
                        {% for unit_cost in unit.costs %}
                            <b>{{ unit_cost.resource.name }}</b>: {{ unit_cost.amount }}
                        {% endfor %}
                    </td>
                    <td>
                        {#TODO: make more than just 1 per click#}
                        <a class=\"btn btn-primary btn-xs\" href=\"{{ path(\"arm_unit\", {id: unit.id}) }}\">Arm 5 units</a>
                    </td>

                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>


    <div class=\"col-sm-12\">
        <h3>Barracks - arm more units</h3>
        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                <th>Name</th>
                <th>Costs per 1 unit</th>
                <th>Count</th>
                <th>Add units</th>
            </tr>
            </thead>
            {#TEST FROM HERE#}
            <tbody>


            {#{{ form_start(form) }}#}
            {#{{ form_widget(form.unit_count) }}#}
            {#{{ form_widget(form.unit_id) }}#}
            {#<button type=\"submit\">Try this!</button>#}
            {#{{ form_end(form) }}#}

            {% for unit in units %}
                <form name=\"unit\" method=\"post\" action=\"{{ path(\"arm_unit\", {id: unit.id}) }}\">

                    <tr>
                        <td>{{ unit.name }}</td>
                        <td>
                            {% for unit_cost in unit.costs %}
                                <b>{{ unit_cost.resource.name }}</b>: {{ unit_cost.amount }}
                            {% endfor %}
                        </td>
                        <td>
                            <input type=\"hidden\" id=\"unit_unit_id\" name=\"unit[unit_id]\" value=\"{{ unit.id }}\">
                            <input type=\"hidden\" id=\"unit_unit_id\" name=\"unit[kingdom_id] value=\"{{ kingdom.id }}\">
                            <input type=\"number\" id=\"unit_unit_count\" name=\"unit[amount]\" required=\"required\"
                                   class=\"form-control\">
                        </td>
                        <td>
                            <button type=\"submit\">Arm units</button>
                        </td>

                    </tr>
                    {#{{ form_row(form._token) }}#}
                </form>
            {% endfor %}
            </tbody>
        </table>
    </div>

{% endblock %}";
    }
}
