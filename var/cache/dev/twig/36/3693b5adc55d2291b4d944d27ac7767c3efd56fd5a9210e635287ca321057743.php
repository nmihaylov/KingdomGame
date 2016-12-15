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
        $__internal_a0ef4124001efa28daee5a9a49aaaace1bec939ae64c39998a8205e5bb96d99f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ef4124001efa28daee5a9a49aaaace1bec939ae64c39998a8205e5bb96d99f->enter($__internal_a0ef4124001efa28daee5a9a49aaaace1bec939ae64c39998a8205e5bb96d99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "battles/allKingdoms.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0ef4124001efa28daee5a9a49aaaace1bec939ae64c39998a8205e5bb96d99f->leave($__internal_a0ef4124001efa28daee5a9a49aaaace1bec939ae64c39998a8205e5bb96d99f_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_4da80052b7853753540daa04635ee12730f2011572a5fac13602ec1e1264a6d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da80052b7853753540daa04635ee12730f2011572a5fac13602ec1e1264a6d2->enter($__internal_4da80052b7853753540daa04635ee12730f2011572a5fac13602ec1e1264a6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "map";
        
        $__internal_4da80052b7853753540daa04635ee12730f2011572a5fac13602ec1e1264a6d2->leave($__internal_4da80052b7853753540daa04635ee12730f2011572a5fac13602ec1e1264a6d2_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_6a3471c6c9856977fdddff897daa4d58b84e5da1fd8fd74f8aab8f6f146a3daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3471c6c9856977fdddff897daa4d58b84e5da1fd8fd74f8aab8f6f146a3daf->enter($__internal_6a3471c6c9856977fdddff897daa4d58b84e5da1fd8fd74f8aab8f6f146a3daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_6a3471c6c9856977fdddff897daa4d58b84e5da1fd8fd74f8aab8f6f146a3daf->leave($__internal_6a3471c6c9856977fdddff897daa4d58b84e5da1fd8fd74f8aab8f6f146a3daf_prof);

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
