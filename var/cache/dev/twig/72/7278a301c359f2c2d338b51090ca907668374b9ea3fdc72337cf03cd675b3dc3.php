<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_0ccf8e847fa0e4a9cfb7b939b8dbd8d2fb116441034d7ade25f8d98590baa5e5 extends Twig_Template
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
        $__internal_dbf65b26932b5aac00aa2baebb996d4baa06a4e6fcf85094ea0315a7652c1009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf65b26932b5aac00aa2baebb996d4baa06a4e6fcf85094ea0315a7652c1009->enter($__internal_dbf65b26932b5aac00aa2baebb996d4baa06a4e6fcf85094ea0315a7652c1009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_dbf65b26932b5aac00aa2baebb996d4baa06a4e6fcf85094ea0315a7652c1009->leave($__internal_dbf65b26932b5aac00aa2baebb996d4baa06a4e6fcf85094ea0315a7652c1009_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}
