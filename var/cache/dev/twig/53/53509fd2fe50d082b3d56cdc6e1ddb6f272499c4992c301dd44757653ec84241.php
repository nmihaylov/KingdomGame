<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e9875071082d6f6542c4a8db753b29263d44df613ce600a7fceec0ef40d61b37 extends Twig_Template
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
        $__internal_e184217c0b64b389b0ea48a8768ea2834b725c66a9b4fd84dde552391969debc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e184217c0b64b389b0ea48a8768ea2834b725c66a9b4fd84dde552391969debc->enter($__internal_e184217c0b64b389b0ea48a8768ea2834b725c66a9b4fd84dde552391969debc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e184217c0b64b389b0ea48a8768ea2834b725c66a9b4fd84dde552391969debc->leave($__internal_e184217c0b64b389b0ea48a8768ea2834b725c66a9b4fd84dde552391969debc_prof);

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
