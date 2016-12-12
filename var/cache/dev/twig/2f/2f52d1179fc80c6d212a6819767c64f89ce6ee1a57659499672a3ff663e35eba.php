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
        $__internal_617912aee62f3cb8f8889e831206427ab0c49330749c608a9052ebc6d5ef1cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617912aee62f3cb8f8889e831206427ab0c49330749c608a9052ebc6d5ef1cc3->enter($__internal_617912aee62f3cb8f8889e831206427ab0c49330749c608a9052ebc6d5ef1cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_617912aee62f3cb8f8889e831206427ab0c49330749c608a9052ebc6d5ef1cc3->leave($__internal_617912aee62f3cb8f8889e831206427ab0c49330749c608a9052ebc6d5ef1cc3_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_811957493d453e692433c17668143dabb5cad0da2544cf13a7011c2c7a7a75b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811957493d453e692433c17668143dabb5cad0da2544cf13a7011c2c7a7a75b3->enter($__internal_811957493d453e692433c17668143dabb5cad0da2544cf13a7011c2c7a7a75b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "dashboard";
        
        $__internal_811957493d453e692433c17668143dabb5cad0da2544cf13a7011c2c7a7a75b3->leave($__internal_811957493d453e692433c17668143dabb5cad0da2544cf13a7011c2c7a7a75b3_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_faa2485465a2c8d90ce9f04f7862828b11770494a5c4e964bc6ad17385729393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa2485465a2c8d90ce9f04f7862828b11770494a5c4e964bc6ad17385729393->enter($__internal_faa2485465a2c8d90ce9f04f7862828b11770494a5c4e964bc6ad17385729393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div class=\"col-sm-6\">
        Username: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "username", array()), "html", null, true);
        echo "
        <br>
        Full name: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "fullName", array()), "html", null, true);
        echo "
        <br>
        <br>
        <br>
        <div class=\"list-group\">
            <h2>Kingdoms</h2>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "kingdoms", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["kingdom"]) {
            // line 16
            echo "
                ";
            // line 17
            if (($this->getAttribute($context["kingdom"], "id", array()) == (isset($context["kingdomId"]) ? $context["kingdomId"] : $this->getContext($context, "kingdomId")))) {
                // line 18
                echo "                    <a class=\"list-group-item active\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "name", array()), "html", null, true);
                echo " [";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "x", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "y", array()), "html", null, true);
                echo "]</a>

                ";
            } else {
                // line 21
                echo "                    <a class=\"list-group-item\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("change_Kingdom", array("id" => $this->getAttribute($context["kingdom"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "name", array()), "html", null, true);
                echo "
                        [";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "x", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "y", array()), "html", null, true);
                echo "]</a>
                ";
            }
            // line 24
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kingdom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
        </div>
        <a class=\"btn-link btn\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("buildings_list");
        echo "\">Show all buildings for current Kingdom</a>
        <a class=\"btn-link btn\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("units");
        echo "\">Show all units for current Kingdom</a>
    </div>
";
        
        $__internal_faa2485465a2c8d90ce9f04f7862828b11770494a5c4e964bc6ad17385729393->leave($__internal_faa2485465a2c8d90ce9f04f7862828b11770494a5c4e964bc6ad17385729393_prof);

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
        return array (  118 => 28,  114 => 27,  110 => 25,  104 => 24,  97 => 22,  90 => 21,  79 => 18,  77 => 17,  74 => 16,  70 => 15,  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'dashboard' %}

{% block main %}
    <div class=\"col-sm-6\">
        Username: {{ player.username }}
        <br>
        Full name: {{ player.fullName }}
        <br>
        <br>
        <br>
        <div class=\"list-group\">
            <h2>Kingdoms</h2>
            {% for kingdom in player.kingdoms %}

                {% if kingdom.id == kingdomId %}
                    <a class=\"list-group-item active\">{{ kingdom.name }} [{{ kingdom.x }} : {{ kingdom.y }}]</a>

                {% else %}
                    <a class=\"list-group-item\" href=\"{{ path(\"change_Kingdom\", {id: kingdom.id }) }}\">{{ kingdom.name }}
                        [{{ kingdom.x }} : {{ kingdom.y }}]</a>
                {% endif %}
            {% endfor %}

        </div>
        <a class=\"btn-link btn\" href=\"{{ path(\"buildings_list\") }}\">Show all buildings for current Kingdom</a>
        <a class=\"btn-link btn\" href=\"{{ path(\"units\") }}\">Show all units for current Kingdom</a>
    </div>
{% endblock %}
";
    }
}
