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
        $__internal_cfbc2a06f3ef0a0a9759978ffef48baeaddf581262ea07840f75827041c68a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfbc2a06f3ef0a0a9759978ffef48baeaddf581262ea07840f75827041c68a94->enter($__internal_cfbc2a06f3ef0a0a9759978ffef48baeaddf581262ea07840f75827041c68a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "battles/sendUnits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfbc2a06f3ef0a0a9759978ffef48baeaddf581262ea07840f75827041c68a94->leave($__internal_cfbc2a06f3ef0a0a9759978ffef48baeaddf581262ea07840f75827041c68a94_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_2a725100dc9efddf77e0c65745742cb3fdd62aad4205eb04d198dd3133ef63ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a725100dc9efddf77e0c65745742cb3fdd62aad4205eb04d198dd3133ef63ae->enter($__internal_2a725100dc9efddf77e0c65745742cb3fdd62aad4205eb04d198dd3133ef63ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        // line 4
        echo "
";
        
        $__internal_2a725100dc9efddf77e0c65745742cb3fdd62aad4205eb04d198dd3133ef63ae->leave($__internal_2a725100dc9efddf77e0c65745742cb3fdd62aad4205eb04d198dd3133ef63ae_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_6df491c2f2131ee472ea60ae70782fd25e869e313dc908d80f2f62e5dc01db4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df491c2f2131ee472ea60ae70782fd25e869e313dc908d80f2f62e5dc01db4e->enter($__internal_6df491c2f2131ee472ea60ae70782fd25e869e313dc908d80f2f62e5dc01db4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
            ";
        // line 70
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <h3>Send units</h3>
            ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <button type=\"submit\" class=\"btn btn-danger\">Fight!</button>
            ";
        // line 74
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_6df491c2f2131ee472ea60ae70782fd25e869e313dc908d80f2f62e5dc01db4e->leave($__internal_6df491c2f2131ee472ea60ae70782fd25e869e313dc908d80f2f62e5dc01db4e_prof);

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
        return array (  181 => 74,  176 => 72,  171 => 70,  167 => 68,  165 => 67,  163 => 66,  161 => 65,  159 => 64,  156 => 62,  154 => 61,  152 => 60,  150 => 59,  148 => 58,  146 => 57,  144 => 56,  142 => 55,  140 => 54,  138 => 53,  136 => 52,  134 => 51,  132 => 50,  130 => 49,  128 => 48,  122 => 43,  113 => 40,  109 => 39,  106 => 38,  102 => 37,  87 => 24,  78 => 21,  74 => 20,  71 => 19,  67 => 18,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
            {{ form_start(form) }}
            <h3>Send units</h3>
            {{ form_widget(form) }}
            <button type=\"submit\" class=\"btn btn-danger\">Fight!</button>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}

";
    }
}
