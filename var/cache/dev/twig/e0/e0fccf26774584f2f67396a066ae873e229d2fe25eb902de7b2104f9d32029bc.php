<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_1af242210064be9e97bf15fbaca03f80592e61f5fd9e14239c21c326204119aa extends Twig_Template
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
        $__internal_3d3bb16b71899989384bfb333651af3bce4f13d7715ce451ca30b308030dc168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3bb16b71899989384bfb333651af3bce4f13d7715ce451ca30b308030dc168->enter($__internal_3d3bb16b71899989384bfb333651af3bce4f13d7715ce451ca30b308030dc168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3d3bb16b71899989384bfb333651af3bce4f13d7715ce451ca30b308030dc168->leave($__internal_3d3bb16b71899989384bfb333651af3bce4f13d7715ce451ca30b308030dc168_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
