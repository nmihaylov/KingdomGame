<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_785f948cc6852e878fe627a71d6f65bb5ad29a9c0f1eead595efff5512882591 extends Twig_Template
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
        $__internal_8c1a65f751de34b2f32b13cf88c9f677c85cd8bc07700d1264edf88e9fe49a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1a65f751de34b2f32b13cf88c9f677c85cd8bc07700d1264edf88e9fe49a63->enter($__internal_8c1a65f751de34b2f32b13cf88c9f677c85cd8bc07700d1264edf88e9fe49a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8c1a65f751de34b2f32b13cf88c9f677c85cd8bc07700d1264edf88e9fe49a63->leave($__internal_8c1a65f751de34b2f32b13cf88c9f677c85cd8bc07700d1264edf88e9fe49a63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
