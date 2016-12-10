<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9bec94290800809139a14485f3e334ede1e4080b213d3c20232e7511197a38ab extends Twig_Template
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
        $__internal_962fa6ea4b277678492a36adbc0bb6833eaed12f76acfd8c7dbd07924eb157b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962fa6ea4b277678492a36adbc0bb6833eaed12f76acfd8c7dbd07924eb157b8->enter($__internal_962fa6ea4b277678492a36adbc0bb6833eaed12f76acfd8c7dbd07924eb157b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_962fa6ea4b277678492a36adbc0bb6833eaed12f76acfd8c7dbd07924eb157b8->leave($__internal_962fa6ea4b277678492a36adbc0bb6833eaed12f76acfd8c7dbd07924eb157b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
