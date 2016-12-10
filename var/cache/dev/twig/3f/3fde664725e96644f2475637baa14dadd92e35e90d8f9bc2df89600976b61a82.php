<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_93d1cfcca722e91d85ff61ce70fecb3cf5c9fb34b0d611b9f2141461ca9fd5dc extends Twig_Template
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
        $__internal_47da4d873f94389ed1c1a5b2f834cc5900eb80d1c4a416f6d69dd3913712154d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47da4d873f94389ed1c1a5b2f834cc5900eb80d1c4a416f6d69dd3913712154d->enter($__internal_47da4d873f94389ed1c1a5b2f834cc5900eb80d1c4a416f6d69dd3913712154d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_47da4d873f94389ed1c1a5b2f834cc5900eb80d1c4a416f6d69dd3913712154d->leave($__internal_47da4d873f94389ed1c1a5b2f834cc5900eb80d1c4a416f6d69dd3913712154d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
