<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d4c3b7368c52217f6e7d650e0431ddd0fd961a17d1fea11141ad89a84eb0fdf8 extends Twig_Template
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
        $__internal_d54e82e34ca213426891e9df7866da84f381a6de6f2f39400c3481d33015742e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d54e82e34ca213426891e9df7866da84f381a6de6f2f39400c3481d33015742e->enter($__internal_d54e82e34ca213426891e9df7866da84f381a6de6f2f39400c3481d33015742e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_d54e82e34ca213426891e9df7866da84f381a6de6f2f39400c3481d33015742e->leave($__internal_d54e82e34ca213426891e9df7866da84f381a6de6f2f39400c3481d33015742e_prof);

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
