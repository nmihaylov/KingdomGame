<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_39c52cccbc0ba96c1a750ce3d26b5f95a151df8c7e8fb51e49c3ac98d953d16a extends Twig_Template
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
        $__internal_7cffcb2dfc6d756f9f499eb2beb0c713e7aec6c8514a0b5c7ff442c4b82fa093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cffcb2dfc6d756f9f499eb2beb0c713e7aec6c8514a0b5c7ff442c4b82fa093->enter($__internal_7cffcb2dfc6d756f9f499eb2beb0c713e7aec6c8514a0b5c7ff442c4b82fa093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7cffcb2dfc6d756f9f499eb2beb0c713e7aec6c8514a0b5c7ff442c4b82fa093->leave($__internal_7cffcb2dfc6d756f9f499eb2beb0c713e7aec6c8514a0b5c7ff442c4b82fa093_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
