<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_093fe5e1ec79c971822e092b13afe70b9e88ad7bcdf7468c2ca562b59d438dd4 extends Twig_Template
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
        $__internal_33fdfa1034240454aaeb5c4aa056f076746df6aa45eb4956c67bc3d8231e2636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33fdfa1034240454aaeb5c4aa056f076746df6aa45eb4956c67bc3d8231e2636->enter($__internal_33fdfa1034240454aaeb5c4aa056f076746df6aa45eb4956c67bc3d8231e2636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_33fdfa1034240454aaeb5c4aa056f076746df6aa45eb4956c67bc3d8231e2636->leave($__internal_33fdfa1034240454aaeb5c4aa056f076746df6aa45eb4956c67bc3d8231e2636_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
