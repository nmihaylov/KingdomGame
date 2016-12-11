<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_d675b0574e8c75610579f8f72f5f0003f5a1a836b13cae588170a5296dbc869c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_6c798d662aaed5a79747028a9b640e58b7fa0030851025a0cc5bc6ee179f7a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c798d662aaed5a79747028a9b640e58b7fa0030851025a0cc5bc6ee179f7a04->enter($__internal_6c798d662aaed5a79747028a9b640e58b7fa0030851025a0cc5bc6ee179f7a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c798d662aaed5a79747028a9b640e58b7fa0030851025a0cc5bc6ee179f7a04->leave($__internal_6c798d662aaed5a79747028a9b640e58b7fa0030851025a0cc5bc6ee179f7a04_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fc72fea2b0e752df2319fa4d5c7f1824bccf65c6a2867f5dfc601637ae8d9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc72fea2b0e752df2319fa4d5c7f1824bccf65c6a2867f5dfc601637ae8d9a5->enter($__internal_0fc72fea2b0e752df2319fa4d5c7f1824bccf65c6a2867f5dfc601637ae8d9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0fc72fea2b0e752df2319fa4d5c7f1824bccf65c6a2867f5dfc601637ae8d9a5->leave($__internal_0fc72fea2b0e752df2319fa4d5c7f1824bccf65c6a2867f5dfc601637ae8d9a5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_44ecd2eab8af7bdbc93d257f8c46a6fea918f679fc49b6b00c3c5859ff44451c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ecd2eab8af7bdbc93d257f8c46a6fea918f679fc49b6b00c3c5859ff44451c->enter($__internal_44ecd2eab8af7bdbc93d257f8c46a6fea918f679fc49b6b00c3c5859ff44451c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_44ecd2eab8af7bdbc93d257f8c46a6fea918f679fc49b6b00c3c5859ff44451c->leave($__internal_44ecd2eab8af7bdbc93d257f8c46a6fea918f679fc49b6b00c3c5859ff44451c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
