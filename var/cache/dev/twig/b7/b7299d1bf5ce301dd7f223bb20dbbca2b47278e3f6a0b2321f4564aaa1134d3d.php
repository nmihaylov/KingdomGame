<?php

/* game/index.html.twig */
class __TwigTemplate_9658bef3ac65601fa23d9b813aa3d861c2b3cdf756b01b506e17627f5a3837a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "game/index.html.twig", 1);
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
        $__internal_72bbfa1983051eca81097e281034e5ed81dc008df0d62b021824649baa704252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72bbfa1983051eca81097e281034e5ed81dc008df0d62b021824649baa704252->enter($__internal_72bbfa1983051eca81097e281034e5ed81dc008df0d62b021824649baa704252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "game/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72bbfa1983051eca81097e281034e5ed81dc008df0d62b021824649baa704252->leave($__internal_72bbfa1983051eca81097e281034e5ed81dc008df0d62b021824649baa704252_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_a6a21b2f085994bb920ef43756e347a73cc3c2155fe4c061893656bc02d5d1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a21b2f085994bb920ef43756e347a73cc3c2155fe4c061893656bc02d5d1da->enter($__internal_a6a21b2f085994bb920ef43756e347a73cc3c2155fe4c061893656bc02d5d1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        
        $__internal_a6a21b2f085994bb920ef43756e347a73cc3c2155fe4c061893656bc02d5d1da->leave($__internal_a6a21b2f085994bb920ef43756e347a73cc3c2155fe4c061893656bc02d5d1da_prof);

    }

    public function getTemplateName()
    {
        return "game/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}

{% endblock %}
";
    }
}
