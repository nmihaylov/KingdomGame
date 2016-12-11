<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_2c8dac3eeaec99ebb1aada5eb30b2405a75fe605e09e8e23f803a5b7816634ff extends Twig_Template
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
        $__internal_07a91f656f0664c96f5a60443be82d3450bb3dab86baa01fae1435fb7c228247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a91f656f0664c96f5a60443be82d3450bb3dab86baa01fae1435fb7c228247->enter($__internal_07a91f656f0664c96f5a60443be82d3450bb3dab86baa01fae1435fb7c228247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_07a91f656f0664c96f5a60443be82d3450bb3dab86baa01fae1435fb7c228247->leave($__internal_07a91f656f0664c96f5a60443be82d3450bb3dab86baa01fae1435fb7c228247_prof);

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
