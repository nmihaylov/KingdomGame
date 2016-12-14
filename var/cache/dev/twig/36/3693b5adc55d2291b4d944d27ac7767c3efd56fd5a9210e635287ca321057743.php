<?php

/* battles/allKingdoms.html.twig */
class __TwigTemplate_37e7129a45728725024c7bda930f99c51d8e8b6947d4d8252935bafe3dff5109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "battles/allKingdoms.html.twig", 1);
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
        $__internal_ad6bae39c46582573bad4ffe1f105134663f1d6c063ed375b8d3eea061be976b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6bae39c46582573bad4ffe1f105134663f1d6c063ed375b8d3eea061be976b->enter($__internal_ad6bae39c46582573bad4ffe1f105134663f1d6c063ed375b8d3eea061be976b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "battles/allKingdoms.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad6bae39c46582573bad4ffe1f105134663f1d6c063ed375b8d3eea061be976b->leave($__internal_ad6bae39c46582573bad4ffe1f105134663f1d6c063ed375b8d3eea061be976b_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_79eeb1ac3b1ec6c7e6db61b755e9cf26849c183c00a18114afdc2373cf45a233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79eeb1ac3b1ec6c7e6db61b755e9cf26849c183c00a18114afdc2373cf45a233->enter($__internal_79eeb1ac3b1ec6c7e6db61b755e9cf26849c183c00a18114afdc2373cf45a233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "map";
        
        $__internal_79eeb1ac3b1ec6c7e6db61b755e9cf26849c183c00a18114afdc2373cf45a233->leave($__internal_79eeb1ac3b1ec6c7e6db61b755e9cf26849c183c00a18114afdc2373cf45a233_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_6907cc50283a0a0bb0fb9d3650c77e5b5382e598f4b7e54b31934ca4d12e3d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6907cc50283a0a0bb0fb9d3650c77e5b5382e598f4b7e54b31934ca4d12e3d0d->enter($__internal_6907cc50283a0a0bb0fb9d3650c77e5b5382e598f4b7e54b31934ca4d12e3d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
<h2>Map</h2>

<div class=\"col-sm-12\">
    <table class=\"table table-striped table-hover\">
        <thead>
        <th>Kingdom name</th>
        <th>Coordinates</th>
        <th>Action</th>
        </thead>
        <tboday>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kingdoms"]) ? $context["kingdoms"] : $this->getContext($context, "kingdoms")));
        foreach ($context['_seq'] as $context["_key"] => $context["kingdom"]) {
            // line 18
            echo "            <tr>
                ";
            // line 19
            if (twig_in_filter($context["kingdom"], (isset($context["myKingdoms"]) ? $context["myKingdoms"] : $this->getContext($context, "myKingdoms")))) {
                // line 20
                echo "                <td class=\"text-danger\">Mine - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "name", array()), "html", null, true);
                echo "</td>
                ";
            } else {
                // line 22
                echo "                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "name", array()), "html", null, true);
                echo "</td>
                ";
            }
            // line 24
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "x", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "y", array()), "html", null, true);
            echo "</td>
                ";
            // line 25
            if (twig_in_filter($context["kingdom"], (isset($context["myKingdoms"]) ? $context["myKingdoms"] : $this->getContext($context, "myKingdoms")))) {
                // line 26
                echo "                    <td>-</td>
                ";
            } else {
                // line 28
                echo "                    <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_kingdom", array("id" => $this->getAttribute($context["kingdom"], "id", array()))), "html", null, true);
                echo "\">View</a></td>
                ";
            }
            // line 30
            echo "            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kingdom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tboday>
    </table>
</div>

";
        
        $__internal_6907cc50283a0a0bb0fb9d3650c77e5b5382e598f4b7e54b31934ca4d12e3d0d->leave($__internal_6907cc50283a0a0bb0fb9d3650c77e5b5382e598f4b7e54b31934ca4d12e3d0d_prof);

    }

    public function getTemplateName()
    {
        return "battles/allKingdoms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 32,  106 => 30,  100 => 28,  96 => 26,  94 => 25,  87 => 24,  81 => 22,  75 => 20,  73 => 19,  70 => 18,  66 => 17,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'map' %}

{% block main %}

<h2>Map</h2>

<div class=\"col-sm-12\">
    <table class=\"table table-striped table-hover\">
        <thead>
        <th>Kingdom name</th>
        <th>Coordinates</th>
        <th>Action</th>
        </thead>
        <tboday>
            {% for kingdom in kingdoms %}
            <tr>
                {% if kingdom in myKingdoms %}
                <td class=\"text-danger\">Mine - {{ kingdom.name }}</td>
                {% else %}
                <td>{{ kingdom.name }}</td>
                {% endif %}
                <td>{{ kingdom.x }} : {{ kingdom.y }}</td>
                {% if kingdom in myKingdoms %}
                    <td>-</td>
                {% else %}
                    <td><a href=\"{{ path(\"view_kingdom\", {id: kingdom.id}) }}\">View</a></td>
                {% endif %}
            </tr>
            {% endfor %}
        </tboday>
    </table>
</div>

{% endblock %}
";
    }
}
