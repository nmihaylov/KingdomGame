<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_8062f7a35f3996d165afbf5f4bbcc7ed31723ff3d09fbad874546094815c76c0 extends Twig_Template
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
        $__internal_3a87a345985264e1840fe3305b9f1b86d4efea64d50747fd40658eb5e972ac53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a87a345985264e1840fe3305b9f1b86d4efea64d50747fd40658eb5e972ac53->enter($__internal_3a87a345985264e1840fe3305b9f1b86d4efea64d50747fd40658eb5e972ac53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3a87a345985264e1840fe3305b9f1b86d4efea64d50747fd40658eb5e972ac53->leave($__internal_3a87a345985264e1840fe3305b9f1b86d4efea64d50747fd40658eb5e972ac53_prof);

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
