<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9f0f19f736d60bc74864e63597a2c0541571cfa5c884336e46b8977a43a3c8a9 extends Twig_Template
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
        $__internal_e7797692534e3fbd212dccdfb81eb9023c55589a47b8e39cc74ebe7b318d9210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7797692534e3fbd212dccdfb81eb9023c55589a47b8e39cc74ebe7b318d9210->enter($__internal_e7797692534e3fbd212dccdfb81eb9023c55589a47b8e39cc74ebe7b318d9210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e7797692534e3fbd212dccdfb81eb9023c55589a47b8e39cc74ebe7b318d9210->leave($__internal_e7797692534e3fbd212dccdfb81eb9023c55589a47b8e39cc74ebe7b318d9210_prof);

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
