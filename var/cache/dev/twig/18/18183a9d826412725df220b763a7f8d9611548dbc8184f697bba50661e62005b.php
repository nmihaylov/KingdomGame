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
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_febf6b3bb15312fcaf68b88ca264f9bf39fa657e6d5255d58d15baef34abcff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_febf6b3bb15312fcaf68b88ca264f9bf39fa657e6d5255d58d15baef34abcff8->enter($__internal_febf6b3bb15312fcaf68b88ca264f9bf39fa657e6d5255d58d15baef34abcff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "battles/sendUnits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_febf6b3bb15312fcaf68b88ca264f9bf39fa657e6d5255d58d15baef34abcff8->leave($__internal_febf6b3bb15312fcaf68b88ca264f9bf39fa657e6d5255d58d15baef34abcff8_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_7758f11b731ba7703af8e2e58a62842e116494de273eaca649c964b35c8ef46e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7758f11b731ba7703af8e2e58a62842e116494de273eaca649c964b35c8ef46e->enter($__internal_7758f11b731ba7703af8e2e58a62842e116494de273eaca649c964b35c8ef46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 7
            echo "        <div class=\"alert alert-dismissible alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <strong>";
            // line 9
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</strong>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
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
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["myKingdom"]) ? $context["myKingdom"] : $this->getContext($context, "myKingdom")), "units", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 23
            echo "                <tr>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unit"], "unit", array()), "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "amount", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
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
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["attackedKingdom"]) ? $context["attackedKingdom"] : $this->getContext($context, "attackedKingdom")), "units", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 42
            echo "                <tr>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unit"], "unit", array()), "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "amount", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </tbody>
        </table>
    </div>
    <div class=\"col-sm-12\">
        ";
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
        echo "        ";
        // line 63
        echo "        ";
        // line 64
        echo "        ";
        // line 65
        echo "        ";
        // line 66
        echo "
        ";
        // line 68
        echo "        ";
        // line 69
        echo "        ";
        // line 70
        echo "        ";
        // line 71
        echo "        ";
        // line 72
        echo "
        <div class=\"col-sm-3\">
            <form method=\"post\">
            <h3>Send units</h3>
            ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["units"]) ? $context["units"] : $this->getContext($context, "units")));
        foreach ($context['_seq'] as $context["i"] => $context["unit"]) {
            // line 77
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "name", array()), "html", null, true);
            echo "
                <input type=\"hidden\" name=\"battle[battleUnits][";
            // line 78
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "][unit]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unit"], "id", array()), "html", null, true);
            echo "\"/>
                <input type=\"number\" name=\"battle[battleUnits][";
            // line 79
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "][amount]\" value=\"0\"/>
                <br/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['unit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
            <button type=\"submit\" class=\"btn btn-danger\">Fight!</button>
            </form>
        </div>
    </div>
";
        
        $__internal_7758f11b731ba7703af8e2e58a62842e116494de273eaca649c964b35c8ef46e->leave($__internal_7758f11b731ba7703af8e2e58a62842e116494de273eaca649c964b35c8ef46e_prof);

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
        return array (  200 => 82,  191 => 79,  185 => 78,  180 => 77,  176 => 76,  170 => 72,  168 => 71,  166 => 70,  164 => 69,  162 => 68,  159 => 66,  157 => 65,  155 => 64,  153 => 63,  151 => 62,  149 => 61,  147 => 60,  145 => 59,  143 => 58,  141 => 57,  139 => 56,  137 => 55,  135 => 54,  133 => 53,  131 => 52,  125 => 47,  116 => 44,  112 => 43,  109 => 42,  105 => 41,  90 => 28,  81 => 25,  77 => 24,  74 => 23,  70 => 22,  58 => 12,  49 => 9,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}



{% block main %}
    {% for flash_message in app.session.flashBag.get('error') %}
        <div class=\"alert alert-dismissible alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <strong>{{ flash_message }}</strong>
        </div>
    {% endfor %}
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
