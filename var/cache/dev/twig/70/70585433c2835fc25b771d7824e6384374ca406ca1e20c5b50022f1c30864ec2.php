<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_2af008f2d741c63225508477b9477826319a29d2107a8df44c941ada3abbb608 extends Twig_Template
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
        $__internal_89e27355e63a238cd91605540673d3e3264983a4fe1523e3bd8414b87f532500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e27355e63a238cd91605540673d3e3264983a4fe1523e3bd8414b87f532500->enter($__internal_89e27355e63a238cd91605540673d3e3264983a4fe1523e3bd8414b87f532500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_89e27355e63a238cd91605540673d3e3264983a4fe1523e3bd8414b87f532500->leave($__internal_89e27355e63a238cd91605540673d3e3264983a4fe1523e3bd8414b87f532500_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
    }
}
