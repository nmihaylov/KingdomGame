<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_6ac2cfdb44f7239f22cd20948af82d0a23b540f9c95de306da33c5e8201fd368 extends Twig_Template
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
        $__internal_4801d8bd33631fee19fafd71f1eab7b36410bfb859359763a6d6dbe8df725b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4801d8bd33631fee19fafd71f1eab7b36410bfb859359763a6d6dbe8df725b2c->enter($__internal_4801d8bd33631fee19fafd71f1eab7b36410bfb859359763a6d6dbe8df725b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4801d8bd33631fee19fafd71f1eab7b36410bfb859359763a6d6dbe8df725b2c->leave($__internal_4801d8bd33631fee19fafd71f1eab7b36410bfb859359763a6d6dbe8df725b2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
