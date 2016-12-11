<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7fda0ca0c5a9490373c366b9dd3f1a75e4fdd192c7ec30c445f015b8c117f7d4 extends Twig_Template
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
        $__internal_679befa65589d1e15b9cce4e8e53abbf0e7c12244a5525366bfe51efca32be33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679befa65589d1e15b9cce4e8e53abbf0e7c12244a5525366bfe51efca32be33->enter($__internal_679befa65589d1e15b9cce4e8e53abbf0e7c12244a5525366bfe51efca32be33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_679befa65589d1e15b9cce4e8e53abbf0e7c12244a5525366bfe51efca32be33->leave($__internal_679befa65589d1e15b9cce4e8e53abbf0e7c12244a5525366bfe51efca32be33_prof);

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
