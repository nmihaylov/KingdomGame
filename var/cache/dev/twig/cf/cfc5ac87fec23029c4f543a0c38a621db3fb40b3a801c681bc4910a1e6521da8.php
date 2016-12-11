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
        $__internal_f97332dbc1b345fd4707fe567c8608456ab146053d3aeee6e66b938bd2fd31be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97332dbc1b345fd4707fe567c8608456ab146053d3aeee6e66b938bd2fd31be->enter($__internal_f97332dbc1b345fd4707fe567c8608456ab146053d3aeee6e66b938bd2fd31be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "kingdoms/partials/resources.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["kingdom"]) ? $context["kingdom"] : $this->getContext($context, "kingdom")), "resources", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["resource"]) {
            // line 2
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
        
        $__internal_f97332dbc1b345fd4707fe567c8608456ab146053d3aeee6e66b938bd2fd31be->leave($__internal_f97332dbc1b345fd4707fe567c8608456ab146053d3aeee6e66b938bd2fd31be_prof);

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
        return array (  26 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% for resource in kingdom.resources %}
    <li><a> {{ resource.resource.name }}: {{ resource.amount }} </a></li>
{% endfor %}
";
    }
}
