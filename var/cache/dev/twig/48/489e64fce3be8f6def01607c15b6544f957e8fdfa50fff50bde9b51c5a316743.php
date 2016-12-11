<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_da08328d094073c513a932214e34939b3cb05f6585fa51098f5cb261be1e6515 extends Twig_Template
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
        $__internal_aa8529d3d084b7ab18af5cf2a2e8f726eaca8b14d8d6b867b1bdcbbd2d2e3b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8529d3d084b7ab18af5cf2a2e8f726eaca8b14d8d6b867b1bdcbbd2d2e3b88->enter($__internal_aa8529d3d084b7ab18af5cf2a2e8f726eaca8b14d8d6b867b1bdcbbd2d2e3b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_aa8529d3d084b7ab18af5cf2a2e8f726eaca8b14d8d6b867b1bdcbbd2d2e3b88->leave($__internal_aa8529d3d084b7ab18af5cf2a2e8f726eaca8b14d8d6b867b1bdcbbd2d2e3b88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
    }
}
