<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_285ab30c5c11b5d674519e6aa3370e8b365c7b364cdbc2d70d02492cf46d5b25 extends Twig_Template
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
        $__internal_8bd46d14126d4f858d0cd715d692bbe951193001d2ee34ee2a30720d3eb3db75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd46d14126d4f858d0cd715d692bbe951193001d2ee34ee2a30720d3eb3db75->enter($__internal_8bd46d14126d4f858d0cd715d692bbe951193001d2ee34ee2a30720d3eb3db75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_8bd46d14126d4f858d0cd715d692bbe951193001d2ee34ee2a30720d3eb3db75->leave($__internal_8bd46d14126d4f858d0cd715d692bbe951193001d2ee34ee2a30720d3eb3db75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
