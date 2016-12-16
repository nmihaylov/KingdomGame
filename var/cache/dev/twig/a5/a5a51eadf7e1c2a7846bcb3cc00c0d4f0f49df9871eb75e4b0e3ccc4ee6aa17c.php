<?php

/* battles/partials/battles.html.twig */
class __TwigTemplate_0503ad1ef698da095c7aa1728b055f9666a107a340d9f33e9ca2cdded207952b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_091a42e4e7510d603bea886ced3ff3a773354593474c33ee43d255666d453c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091a42e4e7510d603bea886ced3ff3a773354593474c33ee43d255666d453c3b->enter($__internal_091a42e4e7510d603bea886ced3ff3a773354593474c33ee43d255666d453c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "battles/partials/battles.html.twig"));

        // line 1
        echo "<div class=\"col-sm-6\">
    <h3>Attacking</h3>
    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>ID</th>
            <th>Attacker</th>
            <th>Defender</th>
            <th>Impact after</th>
            <th>Return on</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attackerBattles"]) ? $context["attackerBattles"] : $this->getContext($context, "attackerBattles")));
        foreach ($context['_seq'] as $context["_key"] => $context["attackerBattle"]) {
            // line 16
            echo "
        <tr>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["attackerBattle"], "id", array()), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_kingdom", array("id" => $this->getAttribute($this->getAttribute($context["attackerBattle"], "attacker", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attackerBattle"], "attacker", array()), "name", array()), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_kingdom", array("id" => $this->getAttribute($this->getAttribute($context["attackerBattle"], "defender", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attackerBattle"], "defender", array()), "name", array()), "html", null, true);
            echo "</a></td>
            <td>
                ";
            // line 22
            if ($this->getAttribute($context["attackerBattle"], "finished", array())) {
                // line 23
                echo "                    Finished
                ";
            } else {
                // line 25
                echo "                    ";
                $context["difference"] = $this->getAttribute(twig_date_converter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["attackerBattle"], "impactOn", array()), "Y-m-d H:i:s")), "diff", array(0 => twig_date_converter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "Y-m-d H:i:s"))), "method");
                // line 26
                echo "                    ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["difference"]) ? $context["difference"] : $this->getContext($context, "difference")), "%d days %h hours %i minutes %s seconds"), "html", null, true);
                echo "
                ";
            }
            // line 28
            echo "            </td>
            <td>
                ";
            // line 30
            if ($this->getAttribute($context["attackerBattle"], "areUnitsReturned", array())) {
                // line 31
                echo "                    Returned
                ";
            } else {
                // line 33
                echo "                    ";
                $context["difference"] = $this->getAttribute(twig_date_converter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["attackerBattle"], "unitsReturn", array()), "Y-m-d H:i:s")), "diff", array(0 => twig_date_converter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "Y-m-d H:i:s"))), "method");
                // line 34
                echo "                    ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["difference"]) ? $context["difference"] : $this->getContext($context, "difference")), "%d days %h hours %i minutes %s seconds"), "html", null, true);
                echo "
                ";
            }
            // line 36
            echo "            </td>
            <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("battle_report", array("id" => $this->getAttribute($context["attackerBattle"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default btn-xs\">View
                    more</a></td>
        </tr>
        </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attackerBattle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </table>
</div>
<div class=\"col-sm-6\">
    <h3>Defending</h3>
    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>ID</th>
            <th>Attacker</th>
            <th>Defender</th>
            <th>Impact after</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["defenderBattles"]) ? $context["defenderBattles"] : $this->getContext($context, "defenderBattles")));
        foreach ($context['_seq'] as $context["_key"] => $context["defenderBattle"]) {
            // line 58
            echo "
        <tr>
            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["defenderBattle"], "id", array()), "html", null, true);
            echo "</td>>
            <td><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_kingdom", array("id" => $this->getAttribute($this->getAttribute($context["defenderBattle"], "attacker", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["defenderBattle"], "attacker", array()), "name", array()), "html", null, true);
            echo "</a></td>
            <td><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_kingdom", array("id" => $this->getAttribute($this->getAttribute($context["defenderBattle"], "defender", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["defenderBattle"], "defender", array()), "name", array()), "html", null, true);
            echo "</a></td>
            <td>
                ";
            // line 64
            if ($this->getAttribute($context["defenderBattle"], "finished", array())) {
                // line 65
                echo "                    Finished
                ";
            } else {
                // line 67
                echo "                    ";
                $context["difference"] = $this->getAttribute(twig_date_converter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["defenderBattle"], "impactOn", array()), "Y-m-d H:i:s")), "diff", array(0 => twig_date_converter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "Y-m-d H:i:s"))), "method");
                // line 68
                echo "                    ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["difference"]) ? $context["difference"] : $this->getContext($context, "difference")), "%d days %h hours %i minutes %s seconds"), "html", null, true);
                echo "
                ";
            }
            // line 70
            echo "            </td>

            <td><a href=\"#\" class=\"btn btn-default btn-xs\">View more</a></td>
        </tr>
        </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['defenderBattle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    </table>
</div>";
        
        $__internal_091a42e4e7510d603bea886ced3ff3a773354593474c33ee43d255666d453c3b->leave($__internal_091a42e4e7510d603bea886ced3ff3a773354593474c33ee43d255666d453c3b_prof);

    }

    public function getTemplateName()
    {
        return "battles/partials/battles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 76,  168 => 70,  162 => 68,  159 => 67,  155 => 65,  153 => 64,  146 => 62,  140 => 61,  136 => 60,  132 => 58,  128 => 57,  111 => 42,  100 => 37,  97 => 36,  91 => 34,  88 => 33,  84 => 31,  82 => 30,  78 => 28,  72 => 26,  69 => 25,  65 => 23,  63 => 22,  56 => 20,  50 => 19,  46 => 18,  42 => 16,  38 => 15,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"col-sm-6\">
    <h3>Attacking</h3>
    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>ID</th>
            <th>Attacker</th>
            <th>Defender</th>
            <th>Impact after</th>
            <th>Return on</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        {% for attackerBattle in attackerBattles %}

        <tr>
            <td>{{ attackerBattle.id }}</td>
            <td><a href=\"{{ path(\"view_kingdom\", {id: attackerBattle.attacker.id}) }}\">{{ attackerBattle.attacker.name }}</a></td>
            <td><a href=\"{{ path(\"view_kingdom\", {id: attackerBattle.defender.id}) }}\">{{ attackerBattle.defender.name }}</a></td>
            <td>
                {% if attackerBattle.finished %}
                    Finished
                {% else %}
                    {% set difference = date(attackerBattle.impactOn|date(\"Y-m-d H:i:s\")).diff(date(now|date(\"Y-m-d H:i:s\"))) %}
                    {{ difference|date(\"%d \\days %h \\hours %i \\minutes %s \\seconds\") }}
                {% endif %}
            </td>
            <td>
                {% if attackerBattle.areUnitsReturned %}
                    Returned
                {% else %}
                    {% set difference = date(attackerBattle.unitsReturn|date(\"Y-m-d H:i:s\")).diff(date(now|date(\"Y-m-d H:i:s\"))) %}
                    {{ difference|date(\"%d \\days %h \\hours %i \\minutes %s \\seconds\") }}
                {% endif %}
            </td>
            <td><a href=\"{{ path(\"battle_report\", {id: attackerBattle.id}) }}\" class=\"btn btn-default btn-xs\">View
                    more</a></td>
        </tr>
        </tbody>
        {% endfor %}
    </table>
</div>
<div class=\"col-sm-6\">
    <h3>Defending</h3>
    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>ID</th>
            <th>Attacker</th>
            <th>Defender</th>
            <th>Impact after</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        {% for defenderBattle in defenderBattles %}

        <tr>
            <td>{{ defenderBattle.id }}</td>>
            <td><a href=\"{{ path(\"view_kingdom\", {id: defenderBattle.attacker.id}) }}\">{{ defenderBattle.attacker.name }}</a></td>
            <td><a href=\"{{ path(\"view_kingdom\", {id: defenderBattle.defender.id}) }}\">{{ defenderBattle.defender.name }}</a></td>
            <td>
                {% if defenderBattle.finished %}
                    Finished
                {% else %}
                    {% set difference = date(defenderBattle.impactOn|date(\"Y-m-d H:i:s\")).diff(date(now|date(\"Y-m-d H:i:s\"))) %}
                    {{ difference|date(\"%d \\days %h \\hours %i \\minutes %s \\seconds\") }}
                {% endif %}
            </td>

            <td><a href=\"#\" class=\"btn btn-default btn-xs\">View more</a></td>
        </tr>
        </tbody>
        {% endfor %}
    </table>
</div>";
    }
}
