<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_675d63e82f9ab4bb9a4386174d6548496c41d18fcaa1ffd1e18e3fd28337ffda extends Twig_Template
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
        $__internal_96002cee3fcdebb5445ceb6cd125e9c12feb83530ac5dd052b5da66564850e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96002cee3fcdebb5445ceb6cd125e9c12feb83530ac5dd052b5da66564850e2c->enter($__internal_96002cee3fcdebb5445ceb6cd125e9c12feb83530ac5dd052b5da66564850e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_96002cee3fcdebb5445ceb6cd125e9c12feb83530ac5dd052b5da66564850e2c->leave($__internal_96002cee3fcdebb5445ceb6cd125e9c12feb83530ac5dd052b5da66564850e2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
