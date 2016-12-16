<?php

/* kingdoms/partials/battles.html.twig */
class __TwigTemplate_f4ae85b244e870b880be6949fef0d2dda2aafe2692098ad7ffd7cb6134553144 extends Twig_Template
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
        $__internal_64b8e9acdd8e113f6dfe96d691103ccdfd10292d33f4cd0daab7962f3a83457a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b8e9acdd8e113f6dfe96d691103ccdfd10292d33f4cd0daab7962f3a83457a->enter($__internal_64b8e9acdd8e113f6dfe96d691103ccdfd10292d33f4cd0daab7962f3a83457a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "kingdoms/partials/battles.html.twig"));

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
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attackerBattles"]) ? $context["attackerBattles"] : $this->getContext($context, "attackerBattles")));
        foreach ($context['_seq'] as $context["_key"] => $context["attackerBattle"]) {
            // line 15
            echo "
        <tr>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["attackerBattle"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attackerBattle"], "attacker", array()), "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attackerBattle"], "defender", array()), "name", array()), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 21
            $context["difference"] = $this->getAttribute(twig_date_converter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["attackerBattle"], "impactOn", array()), "Y-m-d H:i:s")), "diff", array(0 => twig_date_converter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "Y-m-d H:i:s"))), "method");
            // line 22
            echo "                ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["difference"]) ? $context["difference"] : $this->getContext($context, "difference")), "%d days %h hours %i minutes %s seconds"), "html", null, true);
            echo "
            </td>
            <td><a href=\"#\" class=\"btn btn-default btn-xs\">View more</a></td>
        </tr>
        </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attackerBattle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
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
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["defenderBattles"]) ? $context["defenderBattles"] : $this->getContext($context, "defenderBattles")));
        foreach ($context['_seq'] as $context["_key"] => $context["defenderBattle"]) {
            // line 44
            echo "
        <tr>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["defenderBattle"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["defenderBattle"], "attacker", array()), "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["defenderBattle"], "defender", array()), "name", array()), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 50
            $context["difference"] = $this->getAttribute(twig_date_converter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["defenderBattle"], "impactOn", array()), "Y-m-d H:i:s")), "diff", array(0 => twig_date_converter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "Y-m-d H:i:s"))), "method");
            // line 51
            echo "                ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["difference"]) ? $context["difference"] : $this->getContext($context, "difference")), "%d days %h hours %i minutes %s seconds"), "html", null, true);
            echo "
            </td>
            <td><a href=\"#\" class=\"btn btn-default btn-xs\">View more</a></td>
        </tr>
        </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['defenderBattle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </table>
</div>";
        
        $__internal_64b8e9acdd8e113f6dfe96d691103ccdfd10292d33f4cd0daab7962f3a83457a->leave($__internal_64b8e9acdd8e113f6dfe96d691103ccdfd10292d33f4cd0daab7962f3a83457a_prof);

    }

    public function getTemplateName()
    {
        return "kingdoms/partials/battles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 57,  113 => 51,  111 => 50,  106 => 48,  102 => 47,  98 => 46,  94 => 44,  90 => 43,  73 => 28,  60 => 22,  58 => 21,  53 => 19,  49 => 18,  45 => 17,  41 => 15,  37 => 14,  22 => 1,);
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
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        {% for attackerBattle in attackerBattles %}

        <tr>
            <td>{{ attackerBattle.id }}</td>
            <td>{{ attackerBattle.attacker.name }}</td>
            <td>{{ attackerBattle.defender.name }}</td>
            <td>
                {% set difference = date(attackerBattle.impactOn|date(\"Y-m-d H:i:s\")).diff(date(now|date(\"Y-m-d H:i:s\"))) %}
                {{ difference|date(\"%d \\days %h \\hours %i \\minutes %s \\seconds\") }}
            </td>
            <td><a href=\"#\" class=\"btn btn-default btn-xs\">View more</a></td>
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
            <td>{{ defenderBattle.id }}</td>
            <td>{{ defenderBattle.attacker.name }}</td>
            <td>{{ defenderBattle.defender.name }}</td>
            <td>
                {% set difference = date(defenderBattle.impactOn|date(\"Y-m-d H:i:s\")).diff(date(now|date(\"Y-m-d H:i:s\"))) %}
                {{ difference|date(\"%d \\days %h \\hours %i \\minutes %s \\seconds\") }}
            </td>
            <td><a href=\"#\" class=\"btn btn-default btn-xs\">View more</a></td>
        </tr>
        </tbody>
        {% endfor %}
    </table>
</div>";
    }
}
