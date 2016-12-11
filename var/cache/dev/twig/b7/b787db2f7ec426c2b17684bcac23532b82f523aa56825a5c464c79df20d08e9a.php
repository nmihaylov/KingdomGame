<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_615b5531c14723e94498cbd0f67d944482fcc5b7d3c9a852d36c0dc350bbf26f extends Twig_Template
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
        $__internal_62648a41728a4cc578c042caa436adfad41ec8b929032903905fdc0ea3441bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62648a41728a4cc578c042caa436adfad41ec8b929032903905fdc0ea3441bce->enter($__internal_62648a41728a4cc578c042caa436adfad41ec8b929032903905fdc0ea3441bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_62648a41728a4cc578c042caa436adfad41ec8b929032903905fdc0ea3441bce->leave($__internal_62648a41728a4cc578c042caa436adfad41ec8b929032903905fdc0ea3441bce_prof);

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
