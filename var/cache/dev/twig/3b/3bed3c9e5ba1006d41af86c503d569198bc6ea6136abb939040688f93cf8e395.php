<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_9a8c178dd1ddf96282525e309bf5e7f6a887481214d54f74eb1817f51202a3fa extends Twig_Template
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
        $__internal_890ce5d88a52ae7cf823bb7fb75525c18fd76c89408e0d8eac0556a9187b78fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890ce5d88a52ae7cf823bb7fb75525c18fd76c89408e0d8eac0556a9187b78fb->enter($__internal_890ce5d88a52ae7cf823bb7fb75525c18fd76c89408e0d8eac0556a9187b78fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_890ce5d88a52ae7cf823bb7fb75525c18fd76c89408e0d8eac0556a9187b78fb->leave($__internal_890ce5d88a52ae7cf823bb7fb75525c18fd76c89408e0d8eac0556a9187b78fb_prof);

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
