<?php

/* battles/sendUnits.html.twig */
class __TwigTemplate_3bdfdfe37f2296465170904809c141ef0a835d5110b369f60a51b4ef452d8974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "battles/sendUnits.html.twig", 1);
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
        $__internal_71507f5b171069403e2cae5c6ce473f72720571f030d8e837941a052424363b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71507f5b171069403e2cae5c6ce473f72720571f030d8e837941a052424363b7->enter($__internal_71507f5b171069403e2cae5c6ce473f72720571f030d8e837941a052424363b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "battles/sendUnits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71507f5b171069403e2cae5c6ce473f72720571f030d8e837941a052424363b7->leave($__internal_71507f5b171069403e2cae5c6ce473f72720571f030d8e837941a052424363b7_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_cb680a2bdf3d4af147e88eee7434aa25a3ac1a00dba132b83d966038dabeb8a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb680a2bdf3d4af147e88eee7434aa25a3ac1a00dba132b83d966038dabeb8a1->enter($__internal_cb680a2bdf3d4af147e88eee7434aa25a3ac1a00dba132b83d966038dabeb8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        // line 4
        echo "
";
        
        $__internal_cb680a2bdf3d4af147e88eee7434aa25a3ac1a00dba132b83d966038dabeb8a1->leave($__internal_cb680a2bdf3d4af147e88eee7434aa25a3ac1a00dba132b83d966038dabeb8a1_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_ea9272655f540b08a2895c24205e77d1134275a0fc3370dc68dc9d822e543012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea9272655f540b08a2895c24205e77d1134275a0fc3370dc68dc9d822e543012->enter($__internal_ea9272655f540b08a2895c24205e77d1134275a0fc3370dc68dc9d822e543012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "    <div class=\"col-sm-6\">
        <h3>My Kingdom</h3>
        <table class=\"table table-striped table-hover \">
            <thead>
            <tr>
                <th>Name</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["myKingdom"]) ? $context["myKingdom"] : $this->getContext($context, "myKingdom")), "units", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 19
            echo "                <tr>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unit"], "unit", array()), "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "amount", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </tbody>
        </table>
    </div>
    <div class=\"col-sm-6\">
        <h3>Destination Kingdom</h3>
        <table class=\"table table-striped table-hover \">
            <thead>
            <tr>
                <th>Name</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["attackedKingdom"]) ? $context["attackedKingdom"] : $this->getContext($context, "attackedKingdom")), "units", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 38
            echo "                <tr>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unit"], "unit", array()), "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "amount", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
        </table>
    </div>
    <div class=\"col-sm-12\">
        ";
        // line 48
        echo "        ";
        // line 49
        echo "        ";
        // line 50
        echo "        ";
        // line 51
        echo "        ";
        // line 52
        echo "        ";
        // line 53
        echo "        ";
        // line 54
        echo "        ";
        // line 55
        echo "        ";
        // line 56
        echo "        ";
        // line 57
        echo "        ";
        // line 58
        echo "        ";
        // line 59
        echo "        ";
        // line 60
        echo "        ";
        // line 61
        echo "        ";
        // line 62
        echo "
        ";
        // line 64
        echo "        ";
        // line 65
        echo "        ";
        // line 66
        echo "        ";
        // line 67
        echo "        ";
        // line 68
        echo "
        <div class=\"col-sm-3\">
            <form method=\"post\">
            <h3>Send units</h3>
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["units"]) ? $context["units"] : $this->getContext($context, "units")));
        foreach ($context['_seq'] as $context["i"] => $context["unit"]) {
            // line 73
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "name", array()), "html", null, true);
            echo "
                <input type=\"hidden\" name=\"battle[battleUnits][";
            // line 74
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "][unit]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "id", array()), "html", null, true);
            echo "\"/>
                <input type=\"number\" name=\"battle[battleUnits][";
            // line 75
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "][amount]\" value=\"0\"/>
                <br/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-danger\">Fight!</button>
            </form>
        </div>
    </div>
";
        
        $__internal_ea9272655f540b08a2895c24205e77d1134275a0fc3370dc68dc9d822e543012->leave($__internal_ea9272655f540b08a2895c24205e77d1134275a0fc3370dc68dc9d822e543012_prof);

    }

    public function getTemplateName()
    {
        return "battles/sendUnits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 78,  188 => 75,  182 => 74,  177 => 73,  173 => 72,  167 => 68,  165 => 67,  163 => 66,  161 => 65,  159 => 64,  156 => 62,  154 => 61,  152 => 60,  150 => 59,  148 => 58,  146 => 57,  144 => 56,  142 => 55,  140 => 54,  138 => 53,  136 => 52,  134 => 51,  132 => 50,  130 => 49,  128 => 48,  122 => 43,  113 => 40,  109 => 39,  106 => 38,  102 => 37,  87 => 24,  78 => 21,  74 => 20,  71 => 19,  67 => 18,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id %}

{% endblock %}

{% block main %}
    <div class=\"col-sm-6\">
        <h3>My Kingdom</h3>
        <table class=\"table table-striped table-hover \">
            <thead>
            <tr>
                <th>Name</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>
            {% for unit in myKingdom.units %}
                <tr>
                    <td>{{ unit.unit.name }}</td>
                    <td>{{ unit.amount }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <div class=\"col-sm-6\">
        <h3>Destination Kingdom</h3>
        <table class=\"table table-striped table-hover \">
            <thead>
            <tr>
                <th>Name</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>
            {% for unit in attackedKingdom.units %}
                <tr>
                    <td>{{ unit.unit.name }}</td>
                    <td>{{ unit.amount }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <div class=\"col-sm-12\">
        {#<table class=\"table table-striped table-hover \">#}
        {#<thead>#}
        {#<tr>#}
        {#<th>Name</th>#}
        {#<th>Available amount</th>#}
        {#<th>Amount to send</th>#}
        {#</tr>#}
        {#</thead>#}
        {#<tbody>#}
        {#{% for unit in attackedKingdom.units %}#}
        {#<tr>#}
        {#<td>{{ unit.unit.name }}</td>#}
        {#<td>{{ unit.amount }}</td>#}
        {#TODO: FINISH THIS#}
        {#<td>#}

        {#</td>#}
        {#</tr>#}
        {#{% endfor %}#}
        {#</tbody>#}
        {#</table>#}

        <div class=\"col-sm-3\">
            <form method=\"post\">
            <h3>Send units</h3>
            {% for i,unit in units %}
                {{ unit.name }}
                <input type=\"hidden\" name=\"battle[battleUnits][{{ i }}][unit]\" value=\"{{ unit.id }}\"/>
                <input type=\"number\" name=\"battle[battleUnits][{{ i }}][amount]\" value=\"0\"/>
                <br/>
            {% endfor %}
            {{  form_row(form._token) }}
            <button type=\"submit\" class=\"btn btn-danger\">Fight!</button>
            </form>
        </div>
    </div>
{% endblock %}

";
    }
}
