<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9eec9bb26c2f6e0d02d1fc1dc5befd3d02044fe30eff51f9efe4ee51e159e593 extends Twig_Template
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
        $__internal_e2f50dcadc439e2a319e1602bd58252019326f3a02730e61a21bcf60eac297a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f50dcadc439e2a319e1602bd58252019326f3a02730e61a21bcf60eac297a8->enter($__internal_e2f50dcadc439e2a319e1602bd58252019326f3a02730e61a21bcf60eac297a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e2f50dcadc439e2a319e1602bd58252019326f3a02730e61a21bcf60eac297a8->leave($__internal_e2f50dcadc439e2a319e1602bd58252019326f3a02730e61a21bcf60eac297a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
