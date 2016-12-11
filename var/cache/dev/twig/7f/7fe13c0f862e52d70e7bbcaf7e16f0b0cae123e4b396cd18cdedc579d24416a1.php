<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_c6316e8dfccef70a257408022390415195eb65d0947e453126701d4414697d47 extends Twig_Template
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
        $__internal_52a2b69a44444d4386db9ff2039248fc2bc2dc3c3cacfcacefcf910930b95a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a2b69a44444d4386db9ff2039248fc2bc2dc3c3cacfcacefcf910930b95a45->enter($__internal_52a2b69a44444d4386db9ff2039248fc2bc2dc3c3cacfcacefcf910930b95a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_52a2b69a44444d4386db9ff2039248fc2bc2dc3c3cacfcacefcf910930b95a45->leave($__internal_52a2b69a44444d4386db9ff2039248fc2bc2dc3c3cacfcacefcf910930b95a45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
