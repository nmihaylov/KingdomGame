<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c00d005a50ac05ad271ba3e474f939df496b5f3b035927d41f9ece55794994d8 extends Twig_Template
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
        $__internal_9002b36477aaa0ef360e181be7556bddf3bf14ebcfd402414bdaf8a229dbfe45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9002b36477aaa0ef360e181be7556bddf3bf14ebcfd402414bdaf8a229dbfe45->enter($__internal_9002b36477aaa0ef360e181be7556bddf3bf14ebcfd402414bdaf8a229dbfe45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9002b36477aaa0ef360e181be7556bddf3bf14ebcfd402414bdaf8a229dbfe45->leave($__internal_9002b36477aaa0ef360e181be7556bddf3bf14ebcfd402414bdaf8a229dbfe45_prof);

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
