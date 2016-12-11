<?php

/* buildings/index.html.twig */
class __TwigTemplate_c289e5ce1d205f2fc5a8d23f654b1b99ba913f4d4bbb2d5d1b741d70c0562ee8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "buildings/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa1bd38767417f836e8fcb491d77fdfcb05ed04dddbdb8de43f01e9b39a65d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1bd38767417f836e8fcb491d77fdfcb05ed04dddbdb8de43f01e9b39a65d3b->enter($__internal_aa1bd38767417f836e8fcb491d77fdfcb05ed04dddbdb8de43f01e9b39a65d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "buildings/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa1bd38767417f836e8fcb491d77fdfcb05ed04dddbdb8de43f01e9b39a65d3b->leave($__internal_aa1bd38767417f836e8fcb491d77fdfcb05ed04dddbdb8de43f01e9b39a65d3b_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_05be5909ff6c7791b55e7a7cf85b6005124dd1056400823d793e466c2793e0da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05be5909ff6c7791b55e7a7cf85b6005124dd1056400823d793e466c2793e0da->enter($__internal_05be5909ff6c7791b55e7a7cf85b6005124dd1056400823d793e466c2793e0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>Name</th>
            <th>Level</th>
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resources"]) ? $context["resources"] : $this->getContext($context, "resources")));
        foreach ($context['_seq'] as $context["_key"] => $context["resource"]) {
            // line 10
            echo "            <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["resource"], "name", array()), "html", null, true);
            echo " </th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            <th>Build next</th>
        </tr>
        </thead>
        <tbody>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["buildings"]) ? $context["buildings"] : $this->getContext($context, "buildings")));
        foreach ($context['_seq'] as $context["_key"] => $context["building"]) {
            // line 17
            echo "                <tr>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["building"], "building", array()), "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["building"], "level", array()), "html", null, true);
            echo "</td>
                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["building"], "building", array()), "costs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cost"]) {
                // line 21
                echo "                    <td>";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["cost"], "amount", array()) * (1.5 * ($this->getAttribute($context["building"], "level", array()) + 1))), "html", null, true);
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cost'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                    <td><a class=\"btn btn-primary btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("building_evolve", array("id" => $this->getAttribute($this->getAttribute($context["building"], "building", array()), "id", array()))), "html", null, true);
            echo "\">Build on ";
            echo twig_escape_filter($this->env, ($this->getAttribute($context["building"], "level", array()) + 1), "html", null, true);
            echo " level</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['building'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>
";
        
        $__internal_05be5909ff6c7791b55e7a7cf85b6005124dd1056400823d793e466c2793e0da->leave($__internal_05be5909ff6c7791b55e7a7cf85b6005124dd1056400823d793e466c2793e0da_prof);

    }

    public function getTemplateName()
    {
        return "buildings/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 26,  94 => 23,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  70 => 17,  66 => 16,  60 => 12,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>Name</th>
            <th>Level</th>
            {% for resource in resources %}
            <th>{{ resource.name }} </th>
            {% endfor %}
            <th>Build next</th>
        </tr>
        </thead>
        <tbody>
            {% for building in buildings %}
                <tr>
                    <td>{{ building.building.name }}</td>
                    <td>{{ building.level }}</td>
                    {% for cost in building.building.costs %}
                    <td>{{ cost.amount * (1.5 * (building.level + 1)) }}</td>
                    {% endfor %}
                    <td><a class=\"btn btn-primary btn-xs\" href=\"{{ path(\"building_evolve\", {id: building.building.id}) }}\">Build on {{ building.level + 1 }} level</a></td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}";
    }
}
