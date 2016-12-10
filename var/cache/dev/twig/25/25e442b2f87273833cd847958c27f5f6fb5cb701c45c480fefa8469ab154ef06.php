<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_da3b13313ddd3d66f8c9c00a84ded4b4b3db3d326eb2454bcd1a33fd15917db2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00deed91765443b23122c49905a2b7a36d396b8f1428f3686cd33726667c9201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00deed91765443b23122c49905a2b7a36d396b8f1428f3686cd33726667c9201->enter($__internal_00deed91765443b23122c49905a2b7a36d396b8f1428f3686cd33726667c9201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00deed91765443b23122c49905a2b7a36d396b8f1428f3686cd33726667c9201->leave($__internal_00deed91765443b23122c49905a2b7a36d396b8f1428f3686cd33726667c9201_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_950ea7756c516b4561f64cb38ea9edf76ca396c74e9ba465a9d3df062a151a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950ea7756c516b4561f64cb38ea9edf76ca396c74e9ba465a9d3df062a151a27->enter($__internal_950ea7756c516b4561f64cb38ea9edf76ca396c74e9ba465a9d3df062a151a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_950ea7756c516b4561f64cb38ea9edf76ca396c74e9ba465a9d3df062a151a27->leave($__internal_950ea7756c516b4561f64cb38ea9edf76ca396c74e9ba465a9d3df062a151a27_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_43caa60400a4a3946d8f4997d030c920a39998783547a5f7f5caf53e6251cb2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43caa60400a4a3946d8f4997d030c920a39998783547a5f7f5caf53e6251cb2f->enter($__internal_43caa60400a4a3946d8f4997d030c920a39998783547a5f7f5caf53e6251cb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_43caa60400a4a3946d8f4997d030c920a39998783547a5f7f5caf53e6251cb2f->leave($__internal_43caa60400a4a3946d8f4997d030c920a39998783547a5f7f5caf53e6251cb2f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_99e50d7b711b989857aa89e67c543d487bf591c4021dfb3759f0feb2e70259a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e50d7b711b989857aa89e67c543d487bf591c4021dfb3759f0feb2e70259a6->enter($__internal_99e50d7b711b989857aa89e67c543d487bf591c4021dfb3759f0feb2e70259a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_99e50d7b711b989857aa89e67c543d487bf591c4021dfb3759f0feb2e70259a6->leave($__internal_99e50d7b711b989857aa89e67c543d487bf591c4021dfb3759f0feb2e70259a6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
