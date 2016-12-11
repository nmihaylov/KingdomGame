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
        $__internal_3fc8109bacebd232c16666e4eee280cd97188c08cd584103f7664b42f2b7acdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc8109bacebd232c16666e4eee280cd97188c08cd584103f7664b42f2b7acdc->enter($__internal_3fc8109bacebd232c16666e4eee280cd97188c08cd584103f7664b42f2b7acdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fc8109bacebd232c16666e4eee280cd97188c08cd584103f7664b42f2b7acdc->leave($__internal_3fc8109bacebd232c16666e4eee280cd97188c08cd584103f7664b42f2b7acdc_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_fd52301e930b9d3f7ad57e07f695772ae9dc2b3fa0ee244bac1ad6b807662847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd52301e930b9d3f7ad57e07f695772ae9dc2b3fa0ee244bac1ad6b807662847->enter($__internal_fd52301e930b9d3f7ad57e07f695772ae9dc2b3fa0ee244bac1ad6b807662847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "dashboard";
        
        $__internal_fd52301e930b9d3f7ad57e07f695772ae9dc2b3fa0ee244bac1ad6b807662847->leave($__internal_fd52301e930b9d3f7ad57e07f695772ae9dc2b3fa0ee244bac1ad6b807662847_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_1bb11192677e1295a19670704b97fa764bd3f02ece7d55658aacbe4d83527b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb11192677e1295a19670704b97fa764bd3f02ece7d55658aacbe4d83527b9e->enter($__internal_1bb11192677e1295a19670704b97fa764bd3f02ece7d55658aacbe4d83527b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
                // line 20
                echo "                    <a class=\"list-group-item\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("change_Kingdom", array("id" => $this->getAttribute($context["kingdom"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "name", array()), "html", null, true);
                echo " [";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "x", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "y", array()), "html", null, true);
                echo "]</a>
                ";
            }
            // line 22
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kingdom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
        <div class=\"btn btn-default\"><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("buildings_list");
        echo "\">Buildings</a></div>
    </div>
";
        
        $__internal_1bb11192677e1295a19670704b97fa764bd3f02ece7d55658aacbe4d83527b9e->leave($__internal_1bb11192677e1295a19670704b97fa764bd3f02ece7d55658aacbe4d83527b9e_prof);

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
        return array (  110 => 24,  107 => 23,  101 => 22,  89 => 20,  79 => 18,  77 => 17,  74 => 16,  70 => 15,  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
            {% for kingdom in player.kingdoms  %}

                {% if kingdom.id == kingdomId %}
                    <a class=\"list-group-item active\">{{ kingdom.name }} [{{ kingdom.x }} : {{ kingdom.y }}]</a>
                {% else %}
                    <a class=\"list-group-item\" href=\"{{ path(\"change_Kingdom\", {id: kingdom.id }) }}\">{{ kingdom.name }} [{{ kingdom.x }} : {{ kingdom.y }}]</a>
                {% endif %}
            {% endfor %}
        </div>
        <div class=\"btn btn-default\"><a href=\"{{ path(\"buildings_list\") }}\">Buildings</a></div>
    </div>
{% endblock %}
";
    }
}
