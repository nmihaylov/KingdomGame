<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_e05e1e2c9abb51e5f724239d23a7bdf9e4a158a3a97bdbc9240f3f4af510d9fb extends Twig_Template
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
        $__internal_40f0915f310596557454e6e7f94368b632b0e022a9c13e58598970a54b765b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f0915f310596557454e6e7f94368b632b0e022a9c13e58598970a54b765b13->enter($__internal_40f0915f310596557454e6e7f94368b632b0e022a9c13e58598970a54b765b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_40f0915f310596557454e6e7f94368b632b0e022a9c13e58598970a54b765b13->leave($__internal_40f0915f310596557454e6e7f94368b632b0e022a9c13e58598970a54b765b13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
