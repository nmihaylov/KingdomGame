<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_d2a7d4754d4629e8f582324746f4d549fcd4c9fbf0bf95ac20a7420d11db82ea extends Twig_Template
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
        $__internal_e8645700f60feaef1d8e6494b293bea09002e4a05c4ef705855b7266d41d4df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8645700f60feaef1d8e6494b293bea09002e4a05c4ef705855b7266d41d4df5->enter($__internal_e8645700f60feaef1d8e6494b293bea09002e4a05c4ef705855b7266d41d4df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e8645700f60feaef1d8e6494b293bea09002e4a05c4ef705855b7266d41d4df5->leave($__internal_e8645700f60feaef1d8e6494b293bea09002e4a05c4ef705855b7266d41d4df5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
    }
}
