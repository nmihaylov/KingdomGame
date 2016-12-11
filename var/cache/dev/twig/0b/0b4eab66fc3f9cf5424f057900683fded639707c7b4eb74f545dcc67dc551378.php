<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ec0982eee8402f834e0449ee0f74a8de646d140dcfa2cd68a50c3444d22b2ffc extends Twig_Template
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
        $__internal_a3c7419e3d9fe96fadd671bc042043fe12a7bf0d59aec113e4225126417b9ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c7419e3d9fe96fadd671bc042043fe12a7bf0d59aec113e4225126417b9ac9->enter($__internal_a3c7419e3d9fe96fadd671bc042043fe12a7bf0d59aec113e4225126417b9ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a3c7419e3d9fe96fadd671bc042043fe12a7bf0d59aec113e4225126417b9ac9->leave($__internal_a3c7419e3d9fe96fadd671bc042043fe12a7bf0d59aec113e4225126417b9ac9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
