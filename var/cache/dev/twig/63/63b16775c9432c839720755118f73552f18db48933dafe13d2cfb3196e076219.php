<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_4e0202cd7b73dfa9bc13b2e0a335c199fd1b021984b7e1c7c9348157f8595439 extends Twig_Template
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
        $__internal_d80aeee861c756ee30c39f062169a81f94521ec26d69c4879c46ef3b1993885d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80aeee861c756ee30c39f062169a81f94521ec26d69c4879c46ef3b1993885d->enter($__internal_d80aeee861c756ee30c39f062169a81f94521ec26d69c4879c46ef3b1993885d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d80aeee861c756ee30c39f062169a81f94521ec26d69c4879c46ef3b1993885d->leave($__internal_d80aeee861c756ee30c39f062169a81f94521ec26d69c4879c46ef3b1993885d_prof);

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
