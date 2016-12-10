<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_854c0c57c1b57c31240a1a5b4bb23462a6833512a9c7e692cd6a9e36936cbd90 extends Twig_Template
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
        $__internal_ec03f2f8c201c48dbb419d83c607ca23729c9e211fdfb180f6b1b2800bd671cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec03f2f8c201c48dbb419d83c607ca23729c9e211fdfb180f6b1b2800bd671cf->enter($__internal_ec03f2f8c201c48dbb419d83c607ca23729c9e211fdfb180f6b1b2800bd671cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ec03f2f8c201c48dbb419d83c607ca23729c9e211fdfb180f6b1b2800bd671cf->leave($__internal_ec03f2f8c201c48dbb419d83c607ca23729c9e211fdfb180f6b1b2800bd671cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
