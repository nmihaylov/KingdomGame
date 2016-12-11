<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_efcfc5aba4be029c8e7013ed028cd125289769c08e68d98e45fc8fd2706084f1 extends Twig_Template
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
        $__internal_f44a18e93ce3269b1f581d8498d3ff6a0bfadb86bc3c6e1d727e604840969abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44a18e93ce3269b1f581d8498d3ff6a0bfadb86bc3c6e1d727e604840969abb->enter($__internal_f44a18e93ce3269b1f581d8498d3ff6a0bfadb86bc3c6e1d727e604840969abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f44a18e93ce3269b1f581d8498d3ff6a0bfadb86bc3c6e1d727e604840969abb->leave($__internal_f44a18e93ce3269b1f581d8498d3ff6a0bfadb86bc3c6e1d727e604840969abb_prof);

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
