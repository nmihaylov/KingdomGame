<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_247f8bbc6279b4e26d31b83f30033be837c86ec624684fae55b91a40b19457a2 extends Twig_Template
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
        $__internal_47ee201efa62e10a0defe2604652ff618cffeb5e04ef589e7057cf8d28dd800a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ee201efa62e10a0defe2604652ff618cffeb5e04ef589e7057cf8d28dd800a->enter($__internal_47ee201efa62e10a0defe2604652ff618cffeb5e04ef589e7057cf8d28dd800a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_47ee201efa62e10a0defe2604652ff618cffeb5e04ef589e7057cf8d28dd800a->leave($__internal_47ee201efa62e10a0defe2604652ff618cffeb5e04ef589e7057cf8d28dd800a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
