<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_876500e60cd22b60b45ebc53775062267ff982123caa4c80c678050ac6f60118 extends Twig_Template
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
        $__internal_4184b808fd432a0fb9b2a1cfd3bffb730145452076d7ebfd79fda04030ccd98b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4184b808fd432a0fb9b2a1cfd3bffb730145452076d7ebfd79fda04030ccd98b->enter($__internal_4184b808fd432a0fb9b2a1cfd3bffb730145452076d7ebfd79fda04030ccd98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4184b808fd432a0fb9b2a1cfd3bffb730145452076d7ebfd79fda04030ccd98b->leave($__internal_4184b808fd432a0fb9b2a1cfd3bffb730145452076d7ebfd79fda04030ccd98b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
