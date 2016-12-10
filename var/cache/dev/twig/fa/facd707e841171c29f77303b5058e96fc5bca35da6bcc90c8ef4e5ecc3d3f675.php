<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_618697f69a24ddab25908a3ab45e23e19b768a439392ab8f8ce24e84e2d2568d extends Twig_Template
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
        $__internal_c7953b0b0f715f4a7d2acb70e5ffbe0c96b25511644768d0e13b72e58e626a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7953b0b0f715f4a7d2acb70e5ffbe0c96b25511644768d0e13b72e58e626a85->enter($__internal_c7953b0b0f715f4a7d2acb70e5ffbe0c96b25511644768d0e13b72e58e626a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c7953b0b0f715f4a7d2acb70e5ffbe0c96b25511644768d0e13b72e58e626a85->leave($__internal_c7953b0b0f715f4a7d2acb70e5ffbe0c96b25511644768d0e13b72e58e626a85_prof);

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
