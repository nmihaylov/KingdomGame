<?php

/* :user:dashboard.html.twig */
class __TwigTemplate_58c7ee41128a47acca862f515451b196be8cbfab86ea7a25ff5d68dc786e0330 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:dashboard.html.twig", 1);
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
        $__internal_a5bbfca33e026bf7d8e858e9585aaf0ba04efa9e410337c7b2a70d99c6bd0b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5bbfca33e026bf7d8e858e9585aaf0ba04efa9e410337c7b2a70d99c6bd0b59->enter($__internal_a5bbfca33e026bf7d8e858e9585aaf0ba04efa9e410337c7b2a70d99c6bd0b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5bbfca33e026bf7d8e858e9585aaf0ba04efa9e410337c7b2a70d99c6bd0b59->leave($__internal_a5bbfca33e026bf7d8e858e9585aaf0ba04efa9e410337c7b2a70d99c6bd0b59_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_bcb80cd6bfa4ee089a07d9bdc99c5a742dca33eec0e60a25bc7177ffad880cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb80cd6bfa4ee089a07d9bdc99c5a742dca33eec0e60a25bc7177ffad880cb8->enter($__internal_bcb80cd6bfa4ee089a07d9bdc99c5a742dca33eec0e60a25bc7177ffad880cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_bcb80cd6bfa4ee089a07d9bdc99c5a742dca33eec0e60a25bc7177ffad880cb8->leave($__internal_bcb80cd6bfa4ee089a07d9bdc99c5a742dca33eec0e60a25bc7177ffad880cb8_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_3a82a55134cc99b10737521e8ab01d128e6966b99566cb4c920b86e8d4e39ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a82a55134cc99b10737521e8ab01d128e6966b99566cb4c920b86e8d4e39ff0->enter($__internal_3a82a55134cc99b10737521e8ab01d128e6966b99566cb4c920b86e8d4e39ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div>
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "
        <br>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "
    </div>
";
        
        $__internal_3a82a55134cc99b10737521e8ab01d128e6966b99566cb4c920b86e8d4e39ff0->leave($__internal_3a82a55134cc99b10737521e8ab01d128e6966b99566cb4c920b86e8d4e39ff0_prof);

    }

    public function getTemplateName()
    {
        return ":user:dashboard.html.twig";
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
        {{ user.username }}
        <br>
        {{ user.fullName }}
    </div>
{% endblock %}
";
    }
}
