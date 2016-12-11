<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2701a55b67ba88fd08f7dfcb0799f66fde602787a78a5f0431e860fba8c8f05b extends Twig_Template
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
        $__internal_3d58db6b9d41019bd65fa1d58e42f71eb317bc6838484f7ef2e9f0c1e711dbf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d58db6b9d41019bd65fa1d58e42f71eb317bc6838484f7ef2e9f0c1e711dbf2->enter($__internal_3d58db6b9d41019bd65fa1d58e42f71eb317bc6838484f7ef2e9f0c1e711dbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3d58db6b9d41019bd65fa1d58e42f71eb317bc6838484f7ef2e9f0c1e711dbf2->leave($__internal_3d58db6b9d41019bd65fa1d58e42f71eb317bc6838484f7ef2e9f0c1e711dbf2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
