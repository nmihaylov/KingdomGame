<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_39e8d09118ac66b2b8e865063ff8dec1ed4a2ae584e3f70fc5b3ec199a96eccf extends Twig_Template
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
        $__internal_fb09c5301bfd73d49ed2314312a35e1654b1499d23cdb17ba417b3d6e8eb8ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb09c5301bfd73d49ed2314312a35e1654b1499d23cdb17ba417b3d6e8eb8ee0->enter($__internal_fb09c5301bfd73d49ed2314312a35e1654b1499d23cdb17ba417b3d6e8eb8ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fb09c5301bfd73d49ed2314312a35e1654b1499d23cdb17ba417b3d6e8eb8ee0->leave($__internal_fb09c5301bfd73d49ed2314312a35e1654b1499d23cdb17ba417b3d6e8eb8ee0_prof);

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
