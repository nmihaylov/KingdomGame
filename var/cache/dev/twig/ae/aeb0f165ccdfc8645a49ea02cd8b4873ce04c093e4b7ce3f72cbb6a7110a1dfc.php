<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ad923eedf193f87bde53cfc9e15f96787fe6e41694371971eb3111e289250ce0 extends Twig_Template
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
        $__internal_03c3323b44b54c76af5d8c37d93a656c4a8dc708ee81247e552036a003d37ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c3323b44b54c76af5d8c37d93a656c4a8dc708ee81247e552036a003d37ab2->enter($__internal_03c3323b44b54c76af5d8c37d93a656c4a8dc708ee81247e552036a003d37ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_03c3323b44b54c76af5d8c37d93a656c4a8dc708ee81247e552036a003d37ab2->leave($__internal_03c3323b44b54c76af5d8c37d93a656c4a8dc708ee81247e552036a003d37ab2_prof);

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
