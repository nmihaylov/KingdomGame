<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_12124eb30f7c62378c2b3734e5868494a84ee3c60683242af455caddc6c4124e extends Twig_Template
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
        $__internal_1ac63b57a6f223d50bca55ce191635866d69b2b1c5a74162fa31b4aa203f6889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac63b57a6f223d50bca55ce191635866d69b2b1c5a74162fa31b4aa203f6889->enter($__internal_1ac63b57a6f223d50bca55ce191635866d69b2b1c5a74162fa31b4aa203f6889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_1ac63b57a6f223d50bca55ce191635866d69b2b1c5a74162fa31b4aa203f6889->leave($__internal_1ac63b57a6f223d50bca55ce191635866d69b2b1c5a74162fa31b4aa203f6889_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}
