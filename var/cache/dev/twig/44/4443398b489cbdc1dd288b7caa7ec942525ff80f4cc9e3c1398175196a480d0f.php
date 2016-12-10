<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_26604178e458dd324f54d836fb761ec28d11b2679997a238440bde814bacbcdd extends Twig_Template
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
        $__internal_9c02ab990fe6b5d62e553009049afd9a00c6675b45f4c918e5db9d174e665110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c02ab990fe6b5d62e553009049afd9a00c6675b45f4c918e5db9d174e665110->enter($__internal_9c02ab990fe6b5d62e553009049afd9a00c6675b45f4c918e5db9d174e665110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9c02ab990fe6b5d62e553009049afd9a00c6675b45f4c918e5db9d174e665110->leave($__internal_9c02ab990fe6b5d62e553009049afd9a00c6675b45f4c918e5db9d174e665110_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
