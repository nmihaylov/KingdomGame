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
        $__internal_6fcc4c87a0a561b35cbe89a5f8e6f2810dfd23d1065df98990bbe7ea27b7b0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fcc4c87a0a561b35cbe89a5f8e6f2810dfd23d1065df98990bbe7ea27b7b0cf->enter($__internal_6fcc4c87a0a561b35cbe89a5f8e6f2810dfd23d1065df98990bbe7ea27b7b0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fcc4c87a0a561b35cbe89a5f8e6f2810dfd23d1065df98990bbe7ea27b7b0cf->leave($__internal_6fcc4c87a0a561b35cbe89a5f8e6f2810dfd23d1065df98990bbe7ea27b7b0cf_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_957aec77ef348dacaab4fbd05c1d541f9a6c791f1775ae111e8d3b90fc270410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957aec77ef348dacaab4fbd05c1d541f9a6c791f1775ae111e8d3b90fc270410->enter($__internal_957aec77ef348dacaab4fbd05c1d541f9a6c791f1775ae111e8d3b90fc270410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "dashboard";
        
        $__internal_957aec77ef348dacaab4fbd05c1d541f9a6c791f1775ae111e8d3b90fc270410->leave($__internal_957aec77ef348dacaab4fbd05c1d541f9a6c791f1775ae111e8d3b90fc270410_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_545cc3cf71e5d5e111944a1d0a5d65d25e7132fadb04e2070bf759ace5405967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545cc3cf71e5d5e111944a1d0a5d65d25e7132fadb04e2070bf759ace5405967->enter($__internal_545cc3cf71e5d5e111944a1d0a5d65d25e7132fadb04e2070bf759ace5405967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        ";
        // line 16
        echo "        ";
        // line 17
        echo "
        ";
        // line 19
        echo "        ";
        // line 20
        echo "
        ";
        // line 22
        echo "        ";
        // line 23
        echo "        ";
        // line 24
        echo "        ";
        // line 25
        echo "        ";
        // line 26
        echo "
        ";
        // line 28
        echo "
        <div class=\"btn-group-vertical\">
            <div class=\"btn-group\">
                <a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "kingdoms", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["kingdom"]) {
            // line 33
            echo "                        ";
            if (($this->getAttribute($context["kingdom"], "id", array()) == (isset($context["kingdomId"]) ? $context["kingdomId"] : $this->getContext($context, "kingdomId")))) {
                // line 34
                echo "                            ✓ ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "name", array()), "html", null, true);
                echo "
                            [";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "x", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "y", array()), "html", null, true);
                echo "]
                        ";
            }
            // line 37
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kingdom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                    <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "kingdoms", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["kingdom"]) {
            // line 42
            echo "                        <li>
                            ";
            // line 43
            if (($this->getAttribute($context["kingdom"], "id", array()) == (isset($context["kingdomId"]) ? $context["kingdomId"] : $this->getContext($context, "kingdomId")))) {
                // line 44
                echo "                                <a class=\"list-group-item active\">✓ ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "name", array()), "html", null, true);
                echo " [";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "x", array()), "html", null, true);
                echo "
                                    : ";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "y", array()), "html", null, true);
                echo "
                                    ]</a>

                            ";
            } else {
                // line 49
                echo "                                <a class=\"list-group-item\"
                                   href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("change_Kingdom", array("id" => $this->getAttribute($context["kingdom"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "name", array()), "html", null, true);
                echo "
                                    [";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "x", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "y", array()), "html", null, true);
                echo "]</a>
                            ";
            }
            // line 53
            echo "                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kingdom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </ul>
            </div>

            <div class=\"btn-group-vertical\">
                <a class=\"btn btn-default\" href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("buildings_list");
        echo "\">Show buildings</a>
                <a class=\"btn btn-default\" href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("units");
        echo "\">Show units</a>
            </div>
        </div>
    </div>

";
        
        $__internal_545cc3cf71e5d5e111944a1d0a5d65d25e7132fadb04e2070bf759ace5405967->leave($__internal_545cc3cf71e5d5e111944a1d0a5d65d25e7132fadb04e2070bf759ace5405967_prof);

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
        return array (  183 => 60,  179 => 59,  173 => 55,  166 => 53,  159 => 51,  153 => 50,  150 => 49,  143 => 45,  136 => 44,  134 => 43,  131 => 42,  127 => 41,  122 => 38,  116 => 37,  109 => 35,  104 => 34,  101 => 33,  97 => 32,  91 => 28,  88 => 26,  86 => 25,  84 => 24,  82 => 23,  80 => 22,  77 => 20,  75 => 19,  72 => 17,  70 => 16,  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
        {#<div class=\"list-group\">#}
        {#{% for kingdom in player.kingdoms %}#}

        {#{% if kingdom.id == kingdomId %}#}
        {#<a class=\"list-group-item active\">✓ {{ kingdom.name }} [{{ kingdom.x }} : {{ kingdom.y }}]</a>#}

        {#{% else %}#}
        {#<a class=\"list-group-item\" href=\"{{ path(\"change_Kingdom\", {id: kingdom.id }) }}\">{{ kingdom.name }}#}
        {#[{{ kingdom.x }} : {{ kingdom.y }}]</a>#}
        {#{% endif %}#}
        {#{% endfor %}#}

        {#</div>#}

        <div class=\"btn-group-vertical\">
            <div class=\"btn-group\">
                <a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    {% for kingdom in player.kingdoms %}
                        {% if kingdom.id == kingdomId %}
                            ✓ {{ kingdom.name }}
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

            <div class=\"btn-group-vertical\">
                <a class=\"btn btn-default\" href=\"{{ path(\"buildings_list\") }}\">Show buildings</a>
                <a class=\"btn btn-default\" href=\"{{ path(\"units\") }}\">Show units</a>
            </div>
        </div>
    </div>

{% endblock %}
";
    }
}
