<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cde9774f8b59ff31de5e40c707f006e5160470fb35882a0f63907b25df8973af extends Twig_Template
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
        $__internal_daaf85325929ff992463e4e520724609388ae8e19e0640f56a7112b94b796c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daaf85325929ff992463e4e520724609388ae8e19e0640f56a7112b94b796c38->enter($__internal_daaf85325929ff992463e4e520724609388ae8e19e0640f56a7112b94b796c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_daaf85325929ff992463e4e520724609388ae8e19e0640f56a7112b94b796c38->leave($__internal_daaf85325929ff992463e4e520724609388ae8e19e0640f56a7112b94b796c38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
