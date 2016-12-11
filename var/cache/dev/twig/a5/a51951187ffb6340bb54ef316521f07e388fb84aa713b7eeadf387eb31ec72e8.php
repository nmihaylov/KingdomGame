<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_3eccdb562cbf9574800cb00f1ba8aa5fbeb6b98ac07aa06c3dd117cd2c387628 extends Twig_Template
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
        $__internal_56e113371e638cee3afca5fb0295ed9b91f42ab09ae04fea6f5a6d8462c833dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e113371e638cee3afca5fb0295ed9b91f42ab09ae04fea6f5a6d8462c833dc->enter($__internal_56e113371e638cee3afca5fb0295ed9b91f42ab09ae04fea6f5a6d8462c833dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_56e113371e638cee3afca5fb0295ed9b91f42ab09ae04fea6f5a6d8462c833dc->leave($__internal_56e113371e638cee3afca5fb0295ed9b91f42ab09ae04fea6f5a6d8462c833dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
