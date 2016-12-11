<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_79ee5c73a972f5e8c24277b9178f501d9b74bc39f0b618b7b5b94893c0a536b1 extends Twig_Template
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
        $__internal_2831495050cdfd052bf4c15934eeeabbc8ac3d29e49691061bae4f4af79ad414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2831495050cdfd052bf4c15934eeeabbc8ac3d29e49691061bae4f4af79ad414->enter($__internal_2831495050cdfd052bf4c15934eeeabbc8ac3d29e49691061bae4f4af79ad414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_2831495050cdfd052bf4c15934eeeabbc8ac3d29e49691061bae4f4af79ad414->leave($__internal_2831495050cdfd052bf4c15934eeeabbc8ac3d29e49691061bae4f4af79ad414_prof);

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
