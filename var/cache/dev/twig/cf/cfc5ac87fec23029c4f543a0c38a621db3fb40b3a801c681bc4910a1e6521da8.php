<?php

/* kingdoms/partials/resources.html.twig */
class __TwigTemplate_a1db93e3991775411e40eab53db89618f25723f01525bc8f543f5c5f18c63bd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f421c4a2918ac7af5ee7e930a6d0186b5900c3fa6ca81158fbb53c168e57a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f421c4a2918ac7af5ee7e930a6d0186b5900c3fa6ca81158fbb53c168e57a20->enter($__internal_2f421c4a2918ac7af5ee7e930a6d0186b5900c3fa6ca81158fbb53c168e57a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "kingdoms/partials/resources.html.twig"));

        // line 1
        echo "<li><a>You are in kingdom: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["kingdom"]) ? $context["kingdom"] : $this->getContext($context, "kingdom")), "name", array()), "html", null, true);
        echo "</a></li>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["kingdom"]) ? $context["kingdom"] : $this->getContext($context, "kingdom")), "resources", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["resource"]) {
            // line 3
            echo "    <li><a> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["resource"], "resource", array()), "name", array()), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["resource"], "amount", array()), "html", null, true);
            echo " </a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_2f421c4a2918ac7af5ee7e930a6d0186b5900c3fa6ca81158fbb53c168e57a20->leave($__internal_2f421c4a2918ac7af5ee7e930a6d0186b5900c3fa6ca81158fbb53c168e57a20_prof);

    }

    public function getTemplateName()
    {
        return "kingdoms/partials/resources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  27 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<li><a>You are in kingdom: {{ kingdom.name }}</a></li>
{% for resource in kingdom.resources %}
    <li><a> {{ resource.resource.name }}: {{ resource.amount }} </a></li>
{% endfor %}
";
    }
}
