<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_9fce1ee33bed1448a22461fd4cc8bd835f3323d100bd3725afe43ed66f5bcb39 extends Twig_Template
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
        $__internal_987dc804f9c62e779b67b8c67c5bee8cfd79bb2e19f6a1288796565503a5502b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_987dc804f9c62e779b67b8c67c5bee8cfd79bb2e19f6a1288796565503a5502b->enter($__internal_987dc804f9c62e779b67b8c67c5bee8cfd79bb2e19f6a1288796565503a5502b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_987dc804f9c62e779b67b8c67c5bee8cfd79bb2e19f6a1288796565503a5502b->leave($__internal_987dc804f9c62e779b67b8c67c5bee8cfd79bb2e19f6a1288796565503a5502b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
