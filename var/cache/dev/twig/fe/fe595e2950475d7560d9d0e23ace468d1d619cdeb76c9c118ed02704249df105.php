<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f8bf866175b9e89e87e0e9358ef0b6a1c7885d07fb3e658b8a39b3f1fd1903de extends Twig_Template
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
        $__internal_fee802380b270c372bda8fc26ba43d167fa8f3f62d8e77dfd35310e43be0511d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee802380b270c372bda8fc26ba43d167fa8f3f62d8e77dfd35310e43be0511d->enter($__internal_fee802380b270c372bda8fc26ba43d167fa8f3f62d8e77dfd35310e43be0511d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_fee802380b270c372bda8fc26ba43d167fa8f3f62d8e77dfd35310e43be0511d->leave($__internal_fee802380b270c372bda8fc26ba43d167fa8f3f62d8e77dfd35310e43be0511d_prof);

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
