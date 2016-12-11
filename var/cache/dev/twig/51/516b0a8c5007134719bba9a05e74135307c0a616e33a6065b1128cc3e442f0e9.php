<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c5e523c0d30762c3f1808b8da1707f2bf5deef3686c7f67fbdb8c4ee268dae0b extends Twig_Template
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
        $__internal_5458793d871fb080bf36b1a65f078d5f6c0d510f3fbe79da7849830c582ead1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5458793d871fb080bf36b1a65f078d5f6c0d510f3fbe79da7849830c582ead1d->enter($__internal_5458793d871fb080bf36b1a65f078d5f6c0d510f3fbe79da7849830c582ead1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5458793d871fb080bf36b1a65f078d5f6c0d510f3fbe79da7849830c582ead1d->leave($__internal_5458793d871fb080bf36b1a65f078d5f6c0d510f3fbe79da7849830c582ead1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
