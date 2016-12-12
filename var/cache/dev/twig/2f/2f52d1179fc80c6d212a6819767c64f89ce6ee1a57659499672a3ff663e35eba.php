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
        $__internal_4bb2e1b142f9792d21e44aad250b7ff65d7915b3b9e8b81f7b6cb91e8c30faff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb2e1b142f9792d21e44aad250b7ff65d7915b3b9e8b81f7b6cb91e8c30faff->enter($__internal_4bb2e1b142f9792d21e44aad250b7ff65d7915b3b9e8b81f7b6cb91e8c30faff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bb2e1b142f9792d21e44aad250b7ff65d7915b3b9e8b81f7b6cb91e8c30faff->leave($__internal_4bb2e1b142f9792d21e44aad250b7ff65d7915b3b9e8b81f7b6cb91e8c30faff_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b6a2b88ceda490db348b0ca2a384100304cb23469a940f0a1d1fb67452754c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a2b88ceda490db348b0ca2a384100304cb23469a940f0a1d1fb67452754c07->enter($__internal_b6a2b88ceda490db348b0ca2a384100304cb23469a940f0a1d1fb67452754c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "dashboard";
        
        $__internal_b6a2b88ceda490db348b0ca2a384100304cb23469a940f0a1d1fb67452754c07->leave($__internal_b6a2b88ceda490db348b0ca2a384100304cb23469a940f0a1d1fb67452754c07_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_04fe0076131d506d66e11cee7eb5018411291f21451141b01bdd81c038a3f17b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04fe0076131d506d66e11cee7eb5018411291f21451141b01bdd81c038a3f17b->enter($__internal_04fe0076131d506d66e11cee7eb5018411291f21451141b01bdd81c038a3f17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
    <div class=\"col-sm-12\">
        <h2>Kingdoms</h2>
    </div>
    <div class=\"col-sm-6\">
        <div class=\"list-group\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "kingdoms", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["kingdom"]) {
            // line 17
            echo "
                ";
            // line 18
            if (($this->getAttribute($context["kingdom"], "id", array()) == (isset($context["kingdomId"]) ? $context["kingdomId"] : $this->getContext($context, "kingdomId")))) {
                // line 19
                echo "                    <a class=\"list-group-item active\">✓ ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "name", array()), "html", null, true);
                echo " [";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "x", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "y", array()), "html", null, true);
                echo "]</a>

                ";
            } else {
                // line 22
                echo "                    <a class=\"list-group-item\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("change_Kingdom", array("id" => $this->getAttribute($context["kingdom"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "name", array()), "html", null, true);
                echo "
                        [";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "x", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "y", array()), "html", null, true);
                echo "]</a>
                ";
            }
            // line 25
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kingdom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
        </div>
    </div>

    <div class=\"col-sm-6\">
        <a class=\"btn-link btn\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("buildings_list");
        echo "\">Show all buildings for current Kingdom</a>
        <a class=\"btn-link btn\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("units");
        echo "\">Show all units for current Kingdom</a>
    </div>

";
        
        $__internal_04fe0076131d506d66e11cee7eb5018411291f21451141b01bdd81c038a3f17b->leave($__internal_04fe0076131d506d66e11cee7eb5018411291f21451141b01bdd81c038a3f17b_prof);

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
        return array (  122 => 32,  118 => 31,  111 => 26,  105 => 25,  98 => 23,  91 => 22,  80 => 19,  78 => 18,  75 => 17,  71 => 16,  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
    <div class=\"col-sm-12\">
        <h2>Kingdoms</h2>
    </div>
    <div class=\"col-sm-6\">
        <div class=\"list-group\">
            {% for kingdom in player.kingdoms %}

                {% if kingdom.id == kingdomId %}
                    <a class=\"list-group-item active\">✓ {{ kingdom.name }} [{{ kingdom.x }} : {{ kingdom.y }}]</a>

                {% else %}
                    <a class=\"list-group-item\" href=\"{{ path(\"change_Kingdom\", {id: kingdom.id }) }}\">{{ kingdom.name }}
                        [{{ kingdom.x }} : {{ kingdom.y }}]</a>
                {% endif %}
            {% endfor %}

        </div>
    </div>

    <div class=\"col-sm-6\">
        <a class=\"btn-link btn\" href=\"{{ path(\"buildings_list\") }}\">Show all buildings for current Kingdom</a>
        <a class=\"btn-link btn\" href=\"{{ path(\"units\") }}\">Show all units for current Kingdom</a>
    </div>

{% endblock %}
";
    }
}
