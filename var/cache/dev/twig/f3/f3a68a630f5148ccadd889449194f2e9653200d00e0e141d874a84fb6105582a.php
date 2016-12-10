<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_39d8f7ceb87cf8ca9f39fa95c96b0ef38e3adb3d6fb02b0897b204ab50a7f056 extends Twig_Template
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
        $__internal_04c1fab0d02ff4f3b9e8d1e38e96173792724567b92ac1e92de23459daeb2bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c1fab0d02ff4f3b9e8d1e38e96173792724567b92ac1e92de23459daeb2bdc->enter($__internal_04c1fab0d02ff4f3b9e8d1e38e96173792724567b92ac1e92de23459daeb2bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_04c1fab0d02ff4f3b9e8d1e38e96173792724567b92ac1e92de23459daeb2bdc->leave($__internal_04c1fab0d02ff4f3b9e8d1e38e96173792724567b92ac1e92de23459daeb2bdc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
