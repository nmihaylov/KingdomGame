<?php

/* battles/report.html.twig */
class __TwigTemplate_64cc6b6bab2e29f42f011d23e66c116cc7ea425e31e4b74065c149b21056b4a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "battles/report.html.twig", 1);
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
        $__internal_ab39d96e8ac613c40c49a9de1b3766c71d05e68a8ca51391a7eb9a63e40574e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab39d96e8ac613c40c49a9de1b3766c71d05e68a8ca51391a7eb9a63e40574e0->enter($__internal_ab39d96e8ac613c40c49a9de1b3766c71d05e68a8ca51391a7eb9a63e40574e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "battles/report.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab39d96e8ac613c40c49a9de1b3766c71d05e68a8ca51391a7eb9a63e40574e0->leave($__internal_ab39d96e8ac613c40c49a9de1b3766c71d05e68a8ca51391a7eb9a63e40574e0_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_83f2913f71cc2af12de1c9d9dea7880dc96807bbcb4cd310fb3f806c784d6d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f2913f71cc2af12de1c9d9dea7880dc96807bbcb4cd310fb3f806c784d6d1d->enter($__internal_83f2913f71cc2af12de1c9d9dea7880dc96807bbcb4cd310fb3f806c784d6d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"col-sm-12\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"thumbnail\">
                    <img src=\"...\" alt=\"some cool picture of battle here\">
                    <div class=\"caption\">
                        <h4><b>ID:</b> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["battle"]) ? $context["battle"] : $this->getContext($context, "battle")), "id", array()), "html", null, true);
        echo "</h4>
                        <h4>Returned units:</h4>
                        <p>
                            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["battle"]) ? $context["battle"] : $this->getContext($context, "battle")), "battleUnits", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["battleUnit"]) {
            // line 14
            echo "                                <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["battleUnit"], "unit", array()), "name", array()), "html", null, true);
            echo ":</b>  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["battleUnit"], "amount", array()), "html", null, true);
            echo "<br/>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['battleUnit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                        </p>
                        <p>
                            <b>Finished:</b>
                            ";
        // line 19
        if ($this->getAttribute((isset($context["battle"]) ? $context["battle"] : $this->getContext($context, "battle")), "finished", array())) {
            // line 20
            echo "                                Yes
                            ";
        } else {
            // line 22
            echo "                                No
                            ";
        }
        // line 24
        echo "                        </p>
                        <p></p>
                        <p></p>
                        <p></p>
                        ";
        // line 29
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_83f2913f71cc2af12de1c9d9dea7880dc96807bbcb4cd310fb3f806c784d6d1d->leave($__internal_83f2913f71cc2af12de1c9d9dea7880dc96807bbcb4cd310fb3f806c784d6d1d_prof);

    }

    public function getTemplateName()
    {
        return "battles/report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  84 => 24,  80 => 22,  76 => 20,  74 => 19,  69 => 16,  58 => 14,  54 => 13,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"col-sm-12\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"thumbnail\">
                    <img src=\"...\" alt=\"some cool picture of battle here\">
                    <div class=\"caption\">
                        <h4><b>ID:</b> {{ battle.id }}</h4>
                        <h4>Returned units:</h4>
                        <p>
                            {% for battleUnit in battle.battleUnits %}
                                <b>{{ battleUnit.unit.name }}:</b>  {{ battleUnit.amount }}<br/>
                            {% endfor %}
                        </p>
                        <p>
                            <b>Finished:</b>
                            {% if battle.finished %}
                                Yes
                            {% else %}
                                No
                            {% endif %}
                        </p>
                        <p></p>
                        <p></p>
                        <p></p>
                        {#<p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Button</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">Button</a></p>#}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}


";
    }
}
