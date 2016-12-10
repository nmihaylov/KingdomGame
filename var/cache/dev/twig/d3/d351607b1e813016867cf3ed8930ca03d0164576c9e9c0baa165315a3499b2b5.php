<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_fe8f70fc5bf32456636cc4b0d8ec0dee96a6bfb032564c92a68838b9f1c1fdd3 extends Twig_Template
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
        $__internal_2a31dc4c9ca2a41aed3bc2d46cd2889ab325d959679656325018b230169145e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a31dc4c9ca2a41aed3bc2d46cd2889ab325d959679656325018b230169145e5->enter($__internal_2a31dc4c9ca2a41aed3bc2d46cd2889ab325d959679656325018b230169145e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_2a31dc4c9ca2a41aed3bc2d46cd2889ab325d959679656325018b230169145e5->leave($__internal_2a31dc4c9ca2a41aed3bc2d46cd2889ab325d959679656325018b230169145e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
