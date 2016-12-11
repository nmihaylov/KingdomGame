<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_c36d4cba6a54076b28ee713f609a05732d0e9c1710e3fbc6362ecde73358fe24 extends Twig_Template
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
        $__internal_e158af063914da8cb248a6389c407e39b60b821ab2d60dac7399f392815e96f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e158af063914da8cb248a6389c407e39b60b821ab2d60dac7399f392815e96f9->enter($__internal_e158af063914da8cb248a6389c407e39b60b821ab2d60dac7399f392815e96f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_e158af063914da8cb248a6389c407e39b60b821ab2d60dac7399f392815e96f9->leave($__internal_e158af063914da8cb248a6389c407e39b60b821ab2d60dac7399f392815e96f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
