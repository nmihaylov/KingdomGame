<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_2b1c5a9fceea0600500bbe62290ac1cc6fb8b5fd8ce40f9a62a1bbd67a6b97f8 extends Twig_Template
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
        $__internal_27044052594ca51e3c86a3f146aea2e8a0c114dcced592fb4df42dbd4c186ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27044052594ca51e3c86a3f146aea2e8a0c114dcced592fb4df42dbd4c186ee9->enter($__internal_27044052594ca51e3c86a3f146aea2e8a0c114dcced592fb4df42dbd4c186ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_27044052594ca51e3c86a3f146aea2e8a0c114dcced592fb4df42dbd4c186ee9->leave($__internal_27044052594ca51e3c86a3f146aea2e8a0c114dcced592fb4df42dbd4c186ee9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
