<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_519dd1acb17b0ce80b26dc929ee7dd0a5a7d0b1c9a7411cc666bb5cc068630ca extends Twig_Template
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
        $__internal_2935c768ed85c5f5c3fbe169f2994526b165aa7f741ee3d90ab04ad64b3bdd15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2935c768ed85c5f5c3fbe169f2994526b165aa7f741ee3d90ab04ad64b3bdd15->enter($__internal_2935c768ed85c5f5c3fbe169f2994526b165aa7f741ee3d90ab04ad64b3bdd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_2935c768ed85c5f5c3fbe169f2994526b165aa7f741ee3d90ab04ad64b3bdd15->leave($__internal_2935c768ed85c5f5c3fbe169f2994526b165aa7f741ee3d90ab04ad64b3bdd15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
