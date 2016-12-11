<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_6a5a48ee5873ed4435f3a0039c671fa3a420ab34b2542499c1b897bcccfaee90 extends Twig_Template
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
        $__internal_284376dca8d5c9b1df80734e25328c175c363cde11f3b6abbf5bb35fcd36b85d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284376dca8d5c9b1df80734e25328c175c363cde11f3b6abbf5bb35fcd36b85d->enter($__internal_284376dca8d5c9b1df80734e25328c175c363cde11f3b6abbf5bb35fcd36b85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_284376dca8d5c9b1df80734e25328c175c363cde11f3b6abbf5bb35fcd36b85d->leave($__internal_284376dca8d5c9b1df80734e25328c175c363cde11f3b6abbf5bb35fcd36b85d_prof);

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
