<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0dd0145ab42d3b462a9901f312b5198c7c34698ef34ea5b0707284363cbf45f5 extends Twig_Template
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
        $__internal_db4b0eebd80550ee086645f27b13b6a1f54568dcf38efe5ad9f3b75862f26756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4b0eebd80550ee086645f27b13b6a1f54568dcf38efe5ad9f3b75862f26756->enter($__internal_db4b0eebd80550ee086645f27b13b6a1f54568dcf38efe5ad9f3b75862f26756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_db4b0eebd80550ee086645f27b13b6a1f54568dcf38efe5ad9f3b75862f26756->leave($__internal_db4b0eebd80550ee086645f27b13b6a1f54568dcf38efe5ad9f3b75862f26756_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
