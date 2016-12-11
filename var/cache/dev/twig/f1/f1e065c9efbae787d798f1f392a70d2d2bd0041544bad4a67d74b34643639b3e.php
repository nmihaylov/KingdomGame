<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_ddad2a82a968396c49f1d7cc72e6c1b24fc146676124266fe79edb988ae211aa extends Twig_Template
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
        $__internal_a86c4a60674b0b349bc70955b2cd20045148e2a86534602778be7a214982268b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86c4a60674b0b349bc70955b2cd20045148e2a86534602778be7a214982268b->enter($__internal_a86c4a60674b0b349bc70955b2cd20045148e2a86534602778be7a214982268b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a86c4a60674b0b349bc70955b2cd20045148e2a86534602778be7a214982268b->leave($__internal_a86c4a60674b0b349bc70955b2cd20045148e2a86534602778be7a214982268b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
    }
}
