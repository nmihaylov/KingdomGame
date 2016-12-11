<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_dff64d3f10da522947f21987edad2dbba47129cede596875360ebac438387acc extends Twig_Template
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
        $__internal_8305e2e8fd37f30e6bdb6f9f7190f48b767b8f481724d0c9281ae137fe15f4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8305e2e8fd37f30e6bdb6f9f7190f48b767b8f481724d0c9281ae137fe15f4a6->enter($__internal_8305e2e8fd37f30e6bdb6f9f7190f48b767b8f481724d0c9281ae137fe15f4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8305e2e8fd37f30e6bdb6f9f7190f48b767b8f481724d0c9281ae137fe15f4a6->leave($__internal_8305e2e8fd37f30e6bdb6f9f7190f48b767b8f481724d0c9281ae137fe15f4a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
