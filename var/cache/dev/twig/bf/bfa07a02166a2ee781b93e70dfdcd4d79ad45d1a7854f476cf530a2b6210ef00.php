<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d4c130358ed15d65308f271251af3bd785e5aa7db7e6847ea6c52052e2fce1e8 extends Twig_Template
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
        $__internal_e6af80f4d25962ea2a4fdab041b2bc6b26d066ac14ccc2424945ad57c83876a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6af80f4d25962ea2a4fdab041b2bc6b26d066ac14ccc2424945ad57c83876a0->enter($__internal_e6af80f4d25962ea2a4fdab041b2bc6b26d066ac14ccc2424945ad57c83876a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e6af80f4d25962ea2a4fdab041b2bc6b26d066ac14ccc2424945ad57c83876a0->leave($__internal_e6af80f4d25962ea2a4fdab041b2bc6b26d066ac14ccc2424945ad57c83876a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
