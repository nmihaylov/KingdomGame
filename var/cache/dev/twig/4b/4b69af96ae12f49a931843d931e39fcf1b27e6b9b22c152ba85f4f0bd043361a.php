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
        $__internal_7b939e6af2d5d250b6363cacb29c8c94e8bef692b027eaf4929014a1c9d2e3c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b939e6af2d5d250b6363cacb29c8c94e8bef692b027eaf4929014a1c9d2e3c5->enter($__internal_7b939e6af2d5d250b6363cacb29c8c94e8bef692b027eaf4929014a1c9d2e3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "units/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b939e6af2d5d250b6363cacb29c8c94e8bef692b027eaf4929014a1c9d2e3c5->leave($__internal_7b939e6af2d5d250b6363cacb29c8c94e8bef692b027eaf4929014a1c9d2e3c5_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_e3f5bb88d0fb086ccafb7d9129b43778b95c26e5d858e39a149a298020c9ace8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f5bb88d0fb086ccafb7d9129b43778b95c26e5d858e39a149a298020c9ace8->enter($__internal_e3f5bb88d0fb086ccafb7d9129b43778b95c26e5d858e39a149a298020c9ace8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["kingdom"]) ? $context["kingdom"] : $this->getContext($context, "kingdom")), "units", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 20
            echo "            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unit"], "unit", array()), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "amount", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
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
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["units"]) ? $context["units"] : $this->getContext($context, "units")));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 40
            echo "            <tr>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["unit"], "costs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["unit_cost"]) {
                // line 44
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
            // line 46
            echo "                </td>
                <td>
                    ";
            // line 49
            echo "                    <a class=\"btn btn-primary btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("arm_unit", array("id" => $this->getAttribute($context["unit"], "id", array()))), "html", null, true);
            echo "\">Arm 1 unit</a>
                </td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </tbody>
    </table>





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
        // line 72
        echo "        <tbody>


        ";
        // line 76
        echo "        ";
        // line 77
        echo "        ";
        // line 78
        echo "        ";
        // line 79
        echo "        ";
        // line 80
        echo "
        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["units"]) ? $context["units"] : $this->getContext($context, "units")));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 82
            echo "            <form name=\"unit\" method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("arm_unit", array("id" => $this->getAttribute($context["unit"], "id", array()))), "html", null, true);
            echo "\">

                <tr>
                    <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "name", array()), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["unit"], "costs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["unit_cost"]) {
                // line 88
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
            // line 90
            echo "                    </td>
                    <td>
                        <input type=\"hidden\" id=\"unit_unit_id\" name=\"unit[unit_id]\" value=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "id", array()), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"unit_unit_id\" name=\"unit[kingdom_id] value=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kingdom"]) ? $context["kingdom"] : $this->getContext($context, "kingdom")), "id", array()), "html", null, true);
            echo "\">
                        <input type=\"number\" id=\"unit_unit_count\" name=\"unit[amount]\" required=\"required\" class=\"form-control\">
                    </td>
                    <td>
                        <button type=\"submit\">Arm units</button>
                    </td>

                </tr>
                ";
            // line 102
            echo "            </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "        </tbody>
    </table>

";
        
        $__internal_e3f5bb88d0fb086ccafb7d9129b43778b95c26e5d858e39a149a298020c9ace8->leave($__internal_e3f5bb88d0fb086ccafb7d9129b43778b95c26e5d858e39a149a298020c9ace8_prof);

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
        return array (  235 => 104,  228 => 102,  217 => 93,  213 => 92,  209 => 90,  198 => 88,  194 => 87,  189 => 85,  182 => 82,  178 => 81,  175 => 80,  173 => 79,  171 => 78,  169 => 77,  167 => 76,  162 => 72,  143 => 54,  131 => 49,  127 => 46,  116 => 44,  112 => 43,  107 => 41,  104 => 40,  100 => 39,  84 => 25,  75 => 22,  71 => 21,  68 => 20,  64 => 19,  53 => 10,  47 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
                    {#TODO: make more than just 1 per click#}
                    <a class=\"btn btn-primary btn-xs\" href=\"{{ path(\"arm_unit\", {id: unit.id}) }}\">Arm 1 unit</a>
                </td>

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
                        <input type=\"number\" id=\"unit_unit_count\" name=\"unit[amount]\" required=\"required\" class=\"form-control\">
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

{% endblock %}";
    }
}
