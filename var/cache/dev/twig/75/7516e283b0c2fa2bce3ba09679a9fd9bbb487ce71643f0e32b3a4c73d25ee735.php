<?php

/* battles/allKingdoms.html.twig */
class __TwigTemplate_b682fa95b04936f123c630d7ae38e38336cff1eb18ffb49ca245ec1b0c6fe7a7 extends Twig_Template
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
        $__internal_79d5b78e6e83438d4b12c79c7ccd66ab8942935844bb4b7d3033772a3d787c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d5b78e6e83438d4b12c79c7ccd66ab8942935844bb4b7d3033772a3d787c92->enter($__internal_79d5b78e6e83438d4b12c79c7ccd66ab8942935844bb4b7d3033772a3d787c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "battles/allKingdoms.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79d5b78e6e83438d4b12c79c7ccd66ab8942935844bb4b7d3033772a3d787c92->leave($__internal_79d5b78e6e83438d4b12c79c7ccd66ab8942935844bb4b7d3033772a3d787c92_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_cd72f27f225f29d00ff901e8b0c93e03598e012cb9499588eec2e00cd16cf7d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd72f27f225f29d00ff901e8b0c93e03598e012cb9499588eec2e00cd16cf7d4->enter($__internal_cd72f27f225f29d00ff901e8b0c93e03598e012cb9499588eec2e00cd16cf7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "map";
        
        $__internal_cd72f27f225f29d00ff901e8b0c93e03598e012cb9499588eec2e00cd16cf7d4->leave($__internal_cd72f27f225f29d00ff901e8b0c93e03598e012cb9499588eec2e00cd16cf7d4_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_4d0d6db94f27f2e37b6fa855c9f2286d07482d42a81a688bcd16a299f744304f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0d6db94f27f2e37b6fa855c9f2286d07482d42a81a688bcd16a299f744304f->enter($__internal_4d0d6db94f27f2e37b6fa855c9f2286d07482d42a81a688bcd16a299f744304f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
<h2>Map</h2>

<div class=\"col-sm-12\">
    <table>
        <thead>
        <th>Kingdom name</th>
        <th>Coordinates</th>
        </thead>
        <tboday>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kingdoms"]) ? $context["kingdoms"] : $this->getContext($context, "kingdoms")));
        foreach ($context['_seq'] as $context["_key"] => $context["kingdom"]) {
            // line 17
            echo "            <tr>
                ";
            // line 18
            if (twig_in_filter($context["kingdom"], (isset($context["myKingdoms"]) ? $context["myKingdoms"] : $this->getContext($context, "myKingdoms")))) {
                // line 19
                echo "                <td class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "name", array()), "html", null, true);
                echo "</td>
                ";
            } else {
                // line 21
                echo "                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "name", array()), "html", null, true);
                echo "</td>
                ";
            }
            // line 23
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "x", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["kingdom"], "y", array()), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kingdom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tboday>

    </table>
</div>

";
        
        $__internal_4d0d6db94f27f2e37b6fa855c9f2286d07482d42a81a688bcd16a299f744304f->leave($__internal_4d0d6db94f27f2e37b6fa855c9f2286d07482d42a81a688bcd16a299f744304f_prof);

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
        return array (  98 => 26,  86 => 23,  80 => 21,  74 => 19,  72 => 18,  69 => 17,  65 => 16,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'map' %}

{% block main %}

<h2>Map</h2>

<div class=\"col-sm-12\">
    <table>
        <thead>
        <th>Kingdom name</th>
        <th>Coordinates</th>
        </thead>
        <tboday>
            {% for kingdom in kingdoms %}
            <tr>
                {% if kingdom in myKingdoms %}
                <td class=\"text-danger\">{{ kingdom.name }}</td>
                {% else %}
                <td>{{ kingdom.name }}</td>
                {% endif %}
                <td>{{ kingdom.x }} : {{ kingdom.y }}</td>
            </tr>
            {% endfor %}
        </tboday>

    </table>
</div>

{% endblock %}
";
    }
}
