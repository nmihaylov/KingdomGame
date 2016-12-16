<?php

/* user/dashboard.html.twig */
class __TwigTemplate_ddab520110fbb3db46b2275fc0b6f8d49ed4c9d976bea1e6257567503a9d46a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/dashboard.html.twig", 1);
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
        $__internal_30cee8c697269b454a1535ed2b2aee1126f305bcd9818068a1082398ae9b0e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30cee8c697269b454a1535ed2b2aee1126f305bcd9818068a1082398ae9b0e57->enter($__internal_30cee8c697269b454a1535ed2b2aee1126f305bcd9818068a1082398ae9b0e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30cee8c697269b454a1535ed2b2aee1126f305bcd9818068a1082398ae9b0e57->leave($__internal_30cee8c697269b454a1535ed2b2aee1126f305bcd9818068a1082398ae9b0e57_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_d6b23a7420e65a7f3084039ee4ecab3a27ba874784e423d984ea87635df150d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6b23a7420e65a7f3084039ee4ecab3a27ba874784e423d984ea87635df150d4->enter($__internal_d6b23a7420e65a7f3084039ee4ecab3a27ba874784e423d984ea87635df150d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "dashboard";
        
        $__internal_d6b23a7420e65a7f3084039ee4ecab3a27ba874784e423d984ea87635df150d4->leave($__internal_d6b23a7420e65a7f3084039ee4ecab3a27ba874784e423d984ea87635df150d4_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_a2319e145b789e2c5f3eeb9785ba0c43a89e09dc713abee033d00d9cb549020c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2319e145b789e2c5f3eeb9785ba0c43a89e09dc713abee033d00d9cb549020c->enter($__internal_a2319e145b789e2c5f3eeb9785ba0c43a89e09dc713abee033d00d9cb549020c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div class=\"col-sm-12\">
        Username: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "username", array()), "html", null, true);
        echo "
        <br>
        Full name: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "fullName", array()), "html", null, true);
        echo "
    </div>

    <div class=\"col-sm-6\">
        <div class=\"btn-group-vertical\">
            <div class=\"btn-group\">

                <a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    Kingdom: ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "kingdoms", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["kingdom"]) {
            // line 18
            echo "                        ";
            if (($this->getAttribute($context["kingdom"], "id", array()) == (isset($context["kingdomId"]) ? $context["kingdomId"] : $this->getContext($context, "kingdomId")))) {
                // line 19
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "name", array()), "html", null, true);
                echo "
                            [";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "x", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "y", array()), "html", null, true);
                echo "]
                        ";
            }
            // line 22
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kingdom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                    <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "kingdoms", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["kingdom"]) {
            // line 27
            echo "                        <li>
                            ";
            // line 28
            if (($this->getAttribute($context["kingdom"], "id", array()) == (isset($context["kingdomId"]) ? $context["kingdomId"] : $this->getContext($context, "kingdomId")))) {
                // line 29
                echo "                                <a class=\"list-group-item active\">✓ ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "name", array()), "html", null, true);
                echo " [";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "x", array()), "html", null, true);
                echo "
                                    : ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "y", array()), "html", null, true);
                echo "
                                    ]</a>

                            ";
            } else {
                // line 34
                echo "                                <a class=\"list-group-item\"
                                   href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("change_Kingdom", array("id" => $this->getAttribute($context["kingdom"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "name", array()), "html", null, true);
                echo "
                                    [";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "x", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "y", array()), "html", null, true);
                echo "]</a>
                            ";
            }
            // line 38
            echo "                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kingdom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </ul>
            </div>
            <br/>
            <div class=\"btn-group-vertical\">
                <a class=\"btn btn-default\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("buildings_list");
        echo "\">Show buildings</a>
                <br/>
                <a class=\"btn btn-default\" href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("units");
        echo "\">Show units</a>
            </div>
        </div>
    </div>

    <div class=\"col-sm-12\">
        ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KingdomGameBundle:KingdomCurrent:battles"));
        // line 54
        echo "
    </div>
";
        
        $__internal_a2319e145b789e2c5f3eeb9785ba0c43a89e09dc713abee033d00d9cb549020c->leave($__internal_a2319e145b789e2c5f3eeb9785ba0c43a89e09dc713abee033d00d9cb549020c_prof);

    }

    public function getTemplateName()
    {
        return "user/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 54,  168 => 52,  159 => 46,  154 => 44,  148 => 40,  141 => 38,  134 => 36,  128 => 35,  125 => 34,  118 => 30,  111 => 29,  109 => 28,  106 => 27,  102 => 26,  97 => 23,  91 => 22,  84 => 20,  79 => 19,  76 => 18,  72 => 17,  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'dashboard' %}

{% block main %}
    <div class=\"col-sm-12\">
        Username: {{ player.username }}
        <br>
        Full name: {{ player.fullName }}
    </div>

    <div class=\"col-sm-6\">
        <div class=\"btn-group-vertical\">
            <div class=\"btn-group\">

                <a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    Kingdom: {% for kingdom in player.kingdoms %}
                        {% if kingdom.id == kingdomId %}
                            {{ kingdom.name }}
                            [{{ kingdom.x }} : {{ kingdom.y }}]
                        {% endif %}
                    {% endfor %}
                    <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    {% for kingdom in player.kingdoms %}
                        <li>
                            {% if kingdom.id == kingdomId %}
                                <a class=\"list-group-item active\">✓ {{ kingdom.name }} [{{ kingdom.x }}
                                    : {{ kingdom.y }}
                                    ]</a>

                            {% else %}
                                <a class=\"list-group-item\"
                                   href=\"{{ path(\"change_Kingdom\", {id: kingdom.id }) }}\">{{ kingdom.name }}
                                    [{{ kingdom.x }} : {{ kingdom.y }}]</a>
                            {% endif %}
                        </li>
                    {% endfor %}
                </ul>
            </div>
            <br/>
            <div class=\"btn-group-vertical\">
                <a class=\"btn btn-default\" href=\"{{ path(\"buildings_list\") }}\">Show buildings</a>
                <br/>
                <a class=\"btn btn-default\" href=\"{{ path(\"units\") }}\">Show units</a>
            </div>
        </div>
    </div>

    <div class=\"col-sm-12\">
        {{ render(controller(
        'KingdomGameBundle:KingdomCurrent:battles'
        )) }}
    </div>
{% endblock %}
";
    }
}
