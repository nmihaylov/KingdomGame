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
        $__internal_9747038a66ffacfdcd80e8bd30c968e733a9d79b182ccdfe34ec7f10b51b06c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9747038a66ffacfdcd80e8bd30c968e733a9d79b182ccdfe34ec7f10b51b06c7->enter($__internal_9747038a66ffacfdcd80e8bd30c968e733a9d79b182ccdfe34ec7f10b51b06c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "buildings/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9747038a66ffacfdcd80e8bd30c968e733a9d79b182ccdfe34ec7f10b51b06c7->leave($__internal_9747038a66ffacfdcd80e8bd30c968e733a9d79b182ccdfe34ec7f10b51b06c7_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_4025f4bde500eb693a4de8aaf648af8c2b093a9d5e036098d1b33893943010e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4025f4bde500eb693a4de8aaf648af8c2b093a9d5e036098d1b33893943010e5->enter($__internal_4025f4bde500eb693a4de8aaf648af8c2b093a9d5e036098d1b33893943010e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    ";
        // line 5
        echo "        ";
        // line 6
        echo "        ";
        // line 7
        echo "            ";
        // line 8
        echo "            ";
        // line 9
        echo "            ";
        // line 10
        echo "                ";
        // line 11
        echo "            ";
        // line 12
        echo "            ";
        // line 13
        echo "        ";
        // line 14
        echo "        ";
        // line 15
        echo "        ";
        // line 16
        echo "        ";
        // line 17
        echo "            ";
        // line 18
        echo "                ";
        // line 19
        echo "                ";
        // line 20
        echo "                ";
        // line 21
        echo "                    ";
        // line 22
        echo "                ";
        // line 23
        echo "                ";
        // line 24
        echo "                        ";
        // line 25
        echo "            ";
        // line 26
        echo "        ";
        // line 27
        echo "        ";
        // line 28
        echo "    ";
        // line 29
        echo "
    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>Name</th>
            <th>Level</th>
            <th>Costs</th>
            <th>Build next</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["buildings"]) ? $context["buildings"] : $this->getContext($context, "buildings")));
        foreach ($context['_seq'] as $context["_key"] => $context["building"]) {
            // line 41
            echo "            <tr>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["building"], "building", array()), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["building"], "level", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["building"], "building", array()), "costs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["building_cost"]) {
                // line 46
                echo "                        <b>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["building_cost"], "resource", array()), "name", array()), "html", null, true);
                echo "</b>: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["building_cost"], "amount", array()) * (($this->getAttribute($context["building"], "level", array()) + 1) / 2)), "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['building_cost'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                </td>
                <td><a class=\"btn btn-primary btn-xs\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("building_evolve", array("id" => $this->getAttribute($this->getAttribute($context["building"], "building", array()), "id", array()))), "html", null, true);
            echo "\">Build
                        on ";
            // line 50
            echo twig_escape_filter($this->env, ($this->getAttribute($context["building"], "level", array()) + 1), "html", null, true);
            echo " level</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['building'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>

";
        
        $__internal_4025f4bde500eb693a4de8aaf648af8c2b093a9d5e036098d1b33893943010e5->leave($__internal_4025f4bde500eb693a4de8aaf648af8c2b093a9d5e036098d1b33893943010e5_prof);

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
        return array (  150 => 53,  141 => 50,  137 => 49,  134 => 48,  123 => 46,  119 => 45,  114 => 43,  110 => 42,  107 => 41,  103 => 40,  90 => 29,  88 => 28,  86 => 27,  84 => 26,  82 => 25,  80 => 24,  78 => 23,  76 => 22,  74 => 21,  72 => 20,  70 => 19,  68 => 18,  66 => 17,  64 => 16,  62 => 15,  60 => 14,  58 => 13,  56 => 12,  54 => 11,  52 => 10,  50 => 9,  48 => 8,  46 => 7,  44 => 6,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    {#<table class=\"table table-striped table-hover \">#}
        {#<thead>#}
        {#<tr>#}
            {#<th>Name</th>#}
            {#<th>Level</th>#}
            {#{% for resource in resources %}#}
                {#<th>{{ resource.name }} </th>#}
            {#{% endfor %}#}
            {#<th>Build next</th>#}
        {#</tr>#}
        {#</thead>#}
        {#<tbody>#}
        {#{% for building in buildings %}#}
            {#<tr>#}
                {#<td>{{ building.building.name }}</td>#}
                {#<td>{{ building.level }}</td>#}
                {#{% for cost in building.building.costs %}#}
                    {#<td>{{ cost.amount * (1.5 * (building.level + 1)) }}</td>#}
                {#{% endfor %}#}
                {#<td><a class=\"btn btn-primary btn-xs\" href=\"{{ path(\"building_evolve\", {id: building.building.id}) }}\">Build#}
                        {#on {{ building.level + 1 }} level</a></td>#}
            {#</tr>#}
        {#{% endfor %}#}
        {#</tbody>#}
    {#</table>#}

    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>Name</th>
            <th>Level</th>
            <th>Costs</th>
            <th>Build next</th>
        </tr>
        </thead>
        <tbody>
        {% for building in buildings %}
            <tr>
                <td>{{ building.building.name }}</td>
                <td>{{ building.level }}</td>
                <td>
                    {% for building_cost in building.building.costs %}
                        <b>{{ building_cost.resource.name }}</b>: {{ building_cost.amount * ((building.level + 1 ) / 2) }}
                    {% endfor %}
                </td>
                <td><a class=\"btn btn-primary btn-xs\" href=\"{{ path(\"building_evolve\", {id: building.building.id}) }}\">Build
                        on {{ building.level + 1 }} level</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}";
    }
}
