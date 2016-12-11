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
        $__internal_f63a601287de92960bbd74d8ff486f8965e6456aac671d386034b2efa3ac7933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63a601287de92960bbd74d8ff486f8965e6456aac671d386034b2efa3ac7933->enter($__internal_f63a601287de92960bbd74d8ff486f8965e6456aac671d386034b2efa3ac7933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f63a601287de92960bbd74d8ff486f8965e6456aac671d386034b2efa3ac7933->leave($__internal_f63a601287de92960bbd74d8ff486f8965e6456aac671d386034b2efa3ac7933_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a602ccee4e494325aa8ba2ee33e642b0fce0eb498a200e82a8a6bec7516cd81a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a602ccee4e494325aa8ba2ee33e642b0fce0eb498a200e82a8a6bec7516cd81a->enter($__internal_a602ccee4e494325aa8ba2ee33e642b0fce0eb498a200e82a8a6bec7516cd81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "dashboard";
        
        $__internal_a602ccee4e494325aa8ba2ee33e642b0fce0eb498a200e82a8a6bec7516cd81a->leave($__internal_a602ccee4e494325aa8ba2ee33e642b0fce0eb498a200e82a8a6bec7516cd81a_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_079b36e2a3496911bd8210ebbe7c2db7f29b36ece59122ddaf00dacd35a8abb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_079b36e2a3496911bd8210ebbe7c2db7f29b36ece59122ddaf00dacd35a8abb7->enter($__internal_079b36e2a3496911bd8210ebbe7c2db7f29b36ece59122ddaf00dacd35a8abb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div class=\"col-sm-6\">
        Username: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "username", array()), "html", null, true);
        echo "
        <br>
        Full name:";
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
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kingdom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </div>
    </div>
";
        
        $__internal_079b36e2a3496911bd8210ebbe7c2db7f29b36ece59122ddaf00dacd35a8abb7->leave($__internal_079b36e2a3496911bd8210ebbe7c2db7f29b36ece59122ddaf00dacd35a8abb7_prof);

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
        return array (  108 => 24,  101 => 22,  89 => 20,  79 => 18,  77 => 17,  74 => 16,  70 => 15,  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'dashboard' %}

{% block main %}
    <div class=\"col-sm-6\">
        Username: {{ player.username }}
        <br>
        Full name:{{ player.fullName }}
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
    </div>
{% endblock %}
";
    }
}
