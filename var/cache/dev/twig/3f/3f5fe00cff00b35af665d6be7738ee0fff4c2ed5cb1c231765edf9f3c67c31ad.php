<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_df28c29d0863dcc724e0a0e8ca819db26693c16c886efeab6b5fdd4cf961b653 extends Twig_Template
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
        $__internal_809ee851ebbc2f5780b4730261b28a63165aebc6e05387702e6771ca2b011d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809ee851ebbc2f5780b4730261b28a63165aebc6e05387702e6771ca2b011d3d->enter($__internal_809ee851ebbc2f5780b4730261b28a63165aebc6e05387702e6771ca2b011d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_809ee851ebbc2f5780b4730261b28a63165aebc6e05387702e6771ca2b011d3d->leave($__internal_809ee851ebbc2f5780b4730261b28a63165aebc6e05387702e6771ca2b011d3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
