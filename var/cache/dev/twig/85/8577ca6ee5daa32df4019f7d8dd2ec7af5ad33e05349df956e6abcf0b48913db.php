<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_3298653fe15c85a5522fe37eee2ab51e1d0fef81ce3c611eb984a6d4f0c2e1f7 extends Twig_Template
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
        $__internal_0a9862b342736f030d7b7bd85cdb4e3ff7a67b7c971ec80196abd164f53ca94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9862b342736f030d7b7bd85cdb4e3ff7a67b7c971ec80196abd164f53ca94a->enter($__internal_0a9862b342736f030d7b7bd85cdb4e3ff7a67b7c971ec80196abd164f53ca94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0a9862b342736f030d7b7bd85cdb4e3ff7a67b7c971ec80196abd164f53ca94a->leave($__internal_0a9862b342736f030d7b7bd85cdb4e3ff7a67b7c971ec80196abd164f53ca94a_prof);

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
