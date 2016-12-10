<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_f6d021409d1d2da978099a8569e867b118e9bc5443aca9b8f5f453603243dee4 extends Twig_Template
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
        $__internal_f16e33d3d3367f443f2f1226beab8028f32609d2d7759bc808c015086080386e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16e33d3d3367f443f2f1226beab8028f32609d2d7759bc808c015086080386e->enter($__internal_f16e33d3d3367f443f2f1226beab8028f32609d2d7759bc808c015086080386e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_f16e33d3d3367f443f2f1226beab8028f32609d2d7759bc808c015086080386e->leave($__internal_f16e33d3d3367f443f2f1226beab8028f32609d2d7759bc808c015086080386e_prof);

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
