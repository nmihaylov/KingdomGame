<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_e20fca352c1b3178c9cc73dc7c7f8e1bf6dbc90d8c7a4cd5a699ff661518f48e extends Twig_Template
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
        $__internal_f50e5c349896f4bfb5c4f8306b9a0f63ab1130f8ed716f2c48a6f44ca4472835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50e5c349896f4bfb5c4f8306b9a0f63ab1130f8ed716f2c48a6f44ca4472835->enter($__internal_f50e5c349896f4bfb5c4f8306b9a0f63ab1130f8ed716f2c48a6f44ca4472835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f50e5c349896f4bfb5c4f8306b9a0f63ab1130f8ed716f2c48a6f44ca4472835->leave($__internal_f50e5c349896f4bfb5c4f8306b9a0f63ab1130f8ed716f2c48a6f44ca4472835_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
