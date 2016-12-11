<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_c538d534518a15b4f949cc7c6b05b2be31f6a496d0ed8daf0c591dde9b3afcaa extends Twig_Template
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
        $__internal_fa282db508c27f0132a068c2e5dbd7df1e3ea2c7adb2c4382681d06278a1092f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa282db508c27f0132a068c2e5dbd7df1e3ea2c7adb2c4382681d06278a1092f->enter($__internal_fa282db508c27f0132a068c2e5dbd7df1e3ea2c7adb2c4382681d06278a1092f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fa282db508c27f0132a068c2e5dbd7df1e3ea2c7adb2c4382681d06278a1092f->leave($__internal_fa282db508c27f0132a068c2e5dbd7df1e3ea2c7adb2c4382681d06278a1092f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
