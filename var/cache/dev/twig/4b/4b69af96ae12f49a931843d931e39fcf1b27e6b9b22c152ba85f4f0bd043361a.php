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
        $__internal_8d41c2fdbc9c8ea12bdbe35c3c7e69bc1caf45db82498678699dcbba84a61204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d41c2fdbc9c8ea12bdbe35c3c7e69bc1caf45db82498678699dcbba84a61204->enter($__internal_8d41c2fdbc9c8ea12bdbe35c3c7e69bc1caf45db82498678699dcbba84a61204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "units/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d41c2fdbc9c8ea12bdbe35c3c7e69bc1caf45db82498678699dcbba84a61204->leave($__internal_8d41c2fdbc9c8ea12bdbe35c3c7e69bc1caf45db82498678699dcbba84a61204_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_a3e882e8ecc071b14dac502a81d6deab244a593ca1584f4de903e31e58640bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e882e8ecc071b14dac502a81d6deab244a593ca1584f4de903e31e58640bf0->enter($__internal_a3e882e8ecc071b14dac502a81d6deab244a593ca1584f4de903e31e58640bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
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
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["kingdom"]) ? $context["kingdom"] : $this->getContext($context, "kingdom")), "units", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 16
            echo "                <tr>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unit"], "unit", array()), "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "amount", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            </tbody>
        </table>
    </div>

    ";
        // line 26
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
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unitsInProgress"]) ? $context["unitsInProgress"] : $this->getContext($context, "unitsInProgress")));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 38
            echo "                    <tr>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["unit"], "unit", array()), "unit", array()), "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "amount", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 42
            $context["difference"] = $this->getAttribute(twig_date_converter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unit"], "finishesOn", array()), "Y-m-d H:i:s")), "diff", array(0 => twig_date_converter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "Y-m-d H:i:s"))), "method");
            // line 43
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
        // line 47
        echo "                </tbody>
            </table>
        </div>
    ";
        // line 51
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
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["units"]) ? $context["units"] : $this->getContext($context, "units")));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 68
            echo "                <div class=\"row\">
                    <form name=\"unit\" method=\"post\" action=\"";
            // line 69
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("arm_unit");
            echo "\">
                        <div class=\"col-sm-2\">
                            <label class=\"control-label\" for=\"unit_unit_count_";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "name", array()), "html", null, true);
            echo "</label>
                        </div>
                        <div class=\"col-sm-2\">
                            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["unit"], "unitDependencies", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["unitDependency"]) {
                // line 75
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
            // line 77
            echo "                        </div>

                        <div class=\"col-sm-2\">
                            ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["unit"], "costs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["unit_cost"]) {
                // line 81
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
            // line 83
            echo "                        </div>
                        <div class=\"col-sm-2\">
                            <input type=\"hidden\" id=\"unit_unit_id\" name=\"kingdom_unit[unit]\"
                                   value=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "id", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" id=\"unit_unit_id\" name=\"kingdom_unit[kingdom]\"
                                   value=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kingdom"]) ? $context["kingdom"] : $this->getContext($context, "kingdom")), "id", array()), "html", null, true);
            echo "\">
                            <input class=\"form-control\" type=\"number\" id=\"unit_unit_count_";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "id", array()), "html", null, true);
            echo "\"
                                   name=\"kingdom_unit[amount]\" class=\"form-control\">
                        </div>
                        <div class=\"col-sm-2\">
                            <button type=\"submit\" class=\"btn btn-primary btn-xs\">Arm units</button>
                        </div>
                        ";
            // line 95
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
        // line 100
        echo "        </div>
    </div>
";
        
        $__internal_a3e882e8ecc071b14dac502a81d6deab244a593ca1584f4de903e31e58640bf0->leave($__internal_a3e882e8ecc071b14dac502a81d6deab244a593ca1584f4de903e31e58640bf0_prof);

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
        return array (  233 => 100,  222 => 95,  213 => 89,  209 => 88,  204 => 86,  199 => 83,  188 => 81,  184 => 80,  179 => 77,  168 => 75,  164 => 74,  156 => 71,  151 => 69,  148 => 68,  144 => 67,  126 => 51,  121 => 47,  110 => 43,  108 => 42,  103 => 40,  99 => 39,  96 => 38,  92 => 37,  79 => 26,  73 => 21,  64 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}

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
