<?php

/* :user:profile.html.twig */
class __TwigTemplate_ad445b055457bf5b28ccb9e389b1532bf23612dec481f7f3dfaea17ca6d62499 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:profile.html.twig", 1);
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
        $__internal_fcfdab1ec9abc0766cd5ad1d28e963612bdd1ab1476dee2fb24bb9b4f71fc07e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcfdab1ec9abc0766cd5ad1d28e963612bdd1ab1476dee2fb24bb9b4f71fc07e->enter($__internal_fcfdab1ec9abc0766cd5ad1d28e963612bdd1ab1476dee2fb24bb9b4f71fc07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcfdab1ec9abc0766cd5ad1d28e963612bdd1ab1476dee2fb24bb9b4f71fc07e->leave($__internal_fcfdab1ec9abc0766cd5ad1d28e963612bdd1ab1476dee2fb24bb9b4f71fc07e_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b7286bef6f6353c9ea2054aef32da08f4c25a782dcd87a25e42e56c054923a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7286bef6f6353c9ea2054aef32da08f4c25a782dcd87a25e42e56c054923a1f->enter($__internal_b7286bef6f6353c9ea2054aef32da08f4c25a782dcd87a25e42e56c054923a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_b7286bef6f6353c9ea2054aef32da08f4c25a782dcd87a25e42e56c054923a1f->leave($__internal_b7286bef6f6353c9ea2054aef32da08f4c25a782dcd87a25e42e56c054923a1f_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_e82c68ed2d2076a8637df8d25d7005caebff56a1f75cef21eccf7823d82a638e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82c68ed2d2076a8637df8d25d7005caebff56a1f75cef21eccf7823d82a638e->enter($__internal_e82c68ed2d2076a8637df8d25d7005caebff56a1f75cef21eccf7823d82a638e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div>
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "
        <br>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "
    </div>
";
        
        $__internal_e82c68ed2d2076a8637df8d25d7005caebff56a1f75cef21eccf7823d82a638e->leave($__internal_e82c68ed2d2076a8637df8d25d7005caebff56a1f75cef21eccf7823d82a638e_prof);

    }

    public function getTemplateName()
    {
        return ":user:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'profile' %}

{% block main %}
    <div>
        {{ user.email }}
        <br>
        {{ user.fullName }}
    </div>
{% endblock %}
";
    }
}
