<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d592f1c5f8ab11f6c7f0b30c3a475e13b8057432d1011081f98821433d3c9125 extends Twig_Template
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
        $__internal_88b25d93f7e5f9b3dbf1e46df1f99da39e1cdcd1c512aa1e9bc85421a48a7f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b25d93f7e5f9b3dbf1e46df1f99da39e1cdcd1c512aa1e9bc85421a48a7f38->enter($__internal_88b25d93f7e5f9b3dbf1e46df1f99da39e1cdcd1c512aa1e9bc85421a48a7f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_88b25d93f7e5f9b3dbf1e46df1f99da39e1cdcd1c512aa1e9bc85421a48a7f38->leave($__internal_88b25d93f7e5f9b3dbf1e46df1f99da39e1cdcd1c512aa1e9bc85421a48a7f38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
