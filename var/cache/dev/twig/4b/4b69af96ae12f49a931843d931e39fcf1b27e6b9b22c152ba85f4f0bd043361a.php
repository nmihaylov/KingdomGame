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
        $__internal_2acc311953d934b28999e8582a2d2fb3c8e486aab7c3828a837b35597678262d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2acc311953d934b28999e8582a2d2fb3c8e486aab7c3828a837b35597678262d->enter($__internal_2acc311953d934b28999e8582a2d2fb3c8e486aab7c3828a837b35597678262d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "units/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2acc311953d934b28999e8582a2d2fb3c8e486aab7c3828a837b35597678262d->leave($__internal_2acc311953d934b28999e8582a2d2fb3c8e486aab7c3828a837b35597678262d_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_96f2fca6606f5f3abbaefcce138b7b48526c22789b08ddc772d88e9bcb636df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f2fca6606f5f3abbaefcce138b7b48526c22789b08ddc772d88e9bcb636df3->enter($__internal_96f2fca6606f5f3abbaefcce138b7b48526c22789b08ddc772d88e9bcb636df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 5
            echo "        <div class=\"alert alert-dismissible alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <strong>";
            // line 7
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</strong>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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

    ";
        // line 31
        echo "        <div class=\"col-sm-12\">
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
            echo "                    <tr>
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
            echo "                            ";
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
        echo "                </tbody>
            </table>
        </div>
    ";
        // line 56
        echo "    <div class=\"container\">
        <div class=\"col-sm-12\">
            <h3>Barracks - arm more units</h3>

            <div class=\"row\">
                <strong>
                    <div class=\"col-sm-2\">Name</div>
                    <div class=\"col-sm-2\">You need</div>
                    <div class=\"col-sm-2\">Costs per 1 unit</div>
                    <div class=\"col-sm-2\">Count</div>
                    <div class=\"col-sm-2\">Add units</div>
                </strong>
            </div>
            <hr>


            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["units"]) ? $context["units"] : $this->getContext($context, "units")));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 73
            echo "                <div class=\"row\">
                    <form name=\"unit\" method=\"post\" action=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("arm_unit");
            echo "\">
                        <div class=\"col-sm-2\">
                            <label class=\"control-label\" for=\"unit_unit_count_";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "name", array()), "html", null, true);
            echo "</label>
                        </div>
                        <div class=\"col-sm-2\">
                            ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["unit"], "unitDependencies", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["unitDependency"]) {
                // line 80
                echo "                                <b>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unitDependency"], "building", array()), "name", array()), "html", null, true);
                echo "</b>: level ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["unitDependency"], "buildingLevel", array()), "html", null, true);
                echo " <br/>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unitDependency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                        </div>

                        <div class=\"col-sm-2\">
                            ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["unit"], "costs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["unit_cost"]) {
                // line 86
                echo "                                <b>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unit_cost"], "resource", array()), "name", array()), "html", null, true);
                echo "</b>: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["unit_cost"], "amount", array()), "html", null, true);
                echo " <br/>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit_cost'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                        </div>
                        <div class=\"col-sm-2\">
                            <input type=\"hidden\" id=\"unit_unit_id\" name=\"kingdom_unit[unit]\"
                                   value=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "id", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"unit_unit_id\" name=\"kingdom_unit[kingdom]\"
                                   value=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kingdom"]) ? $context["kingdom"] : $this->getContext($context, "kingdom")), "id", array()), "html", null, true);
            echo "\">
                            <input class=\"form-control\" type=\"number\" id=\"unit_unit_count_";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "id", array()), "html", null, true);
            echo "\"
                                   name=\"kingdom_unit[amount]\" class=\"form-control\">
                        </div>
                        <div class=\"col-sm-2\">
                            <button type=\"submit\" class=\"btn btn-primary btn-xs\">Arm units</button>
                        </div>
                        ";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
            echo "
                    </form>
                </div>
                <div class=\"row\">&nbsp;</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "        </div>
    </div>
";
        
        $__internal_96f2fca6606f5f3abbaefcce138b7b48526c22789b08ddc772d88e9bcb636df3->leave($__internal_96f2fca6606f5f3abbaefcce138b7b48526c22789b08ddc772d88e9bcb636df3_prof);

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
        return array (  250 => 105,  239 => 100,  230 => 94,  226 => 93,  221 => 91,  216 => 88,  205 => 86,  201 => 85,  196 => 82,  185 => 80,  181 => 79,  173 => 76,  168 => 74,  165 => 73,  161 => 72,  143 => 56,  138 => 52,  127 => 48,  125 => 47,  120 => 45,  116 => 44,  113 => 43,  109 => 42,  96 => 31,  90 => 26,  81 => 23,  77 => 22,  74 => 21,  70 => 20,  58 => 10,  49 => 7,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    {% for flash_message in app.session.flashBag.get('error') %}
        <div class=\"alert alert-dismissible alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <strong>{{ flash_message }}</strong>
        </div>
    {% endfor %}
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

    {#{% if unitsInProgress %}#}
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
    {#{% endif %}#}
    <div class=\"container\">
        <div class=\"col-sm-12\">
            <h3>Barracks - arm more units</h3>

            <div class=\"row\">
                <strong>
                    <div class=\"col-sm-2\">Name</div>
                    <div class=\"col-sm-2\">You need</div>
                    <div class=\"col-sm-2\">Costs per 1 unit</div>
                    <div class=\"col-sm-2\">Count</div>
                    <div class=\"col-sm-2\">Add units</div>
                </strong>
            </div>
            <hr>


            {% for unit in units %}
                <div class=\"row\">
                    <form name=\"unit\" method=\"post\" action=\"{{ path(\"arm_unit\") }}\">
                        <div class=\"col-sm-2\">
                            <label class=\"control-label\" for=\"unit_unit_count_{{ unit.id }}\">{{ unit.name }}</label>
                        </div>
                        <div class=\"col-sm-2\">
                            {% for unitDependency in unit.unitDependencies %}
                                <b>{{ unitDependency.building.name }}</b>: level {{ unitDependency.buildingLevel }} <br/>
                            {% endfor %}
                        </div>

                        <div class=\"col-sm-2\">
                            {% for unit_cost in unit.costs %}
                                <b>{{ unit_cost.resource.name }}</b>: {{ unit_cost.amount }} <br/>
                            {% endfor %}
                        </div>
                        <div class=\"col-sm-2\">
                            <input type=\"hidden\" id=\"unit_unit_id\" name=\"kingdom_unit[unit]\"
                                   value=\"{{ unit.id }}\">
                            <input type=\"hidden\" id=\"unit_unit_id\" name=\"kingdom_unit[kingdom]\"
                                   value=\"{{ kingdom.id }}\">
                            <input class=\"form-control\" type=\"number\" id=\"unit_unit_count_{{ unit.id }}\"
                                   name=\"kingdom_unit[amount]\" class=\"form-control\">
                        </div>
                        <div class=\"col-sm-2\">
                            <button type=\"submit\" class=\"btn btn-primary btn-xs\">Arm units</button>
                        </div>
                        {{ form_row(form._token) }}
                    </form>
                </div>
                <div class=\"row\">&nbsp;</div>
            {% endfor %}
        </div>
    </div>
{% endblock %}";
    }
}
