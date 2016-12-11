<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_e5194ea5bf40ab8f0b2a84d179d3a33c064394d98c6454a12e6079784bef5fdd extends Twig_Template
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
        $__internal_5d2ff844145dba86160c1101e546fa0073799127cef3f29f04a37d3d1b3c8f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2ff844145dba86160c1101e546fa0073799127cef3f29f04a37d3d1b3c8f1e->enter($__internal_5d2ff844145dba86160c1101e546fa0073799127cef3f29f04a37d3d1b3c8f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_5d2ff844145dba86160c1101e546fa0073799127cef3f29f04a37d3d1b3c8f1e->leave($__internal_5d2ff844145dba86160c1101e546fa0073799127cef3f29f04a37d3d1b3c8f1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
