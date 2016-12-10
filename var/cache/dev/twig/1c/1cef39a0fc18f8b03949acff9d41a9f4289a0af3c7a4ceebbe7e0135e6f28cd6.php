<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_0296ce9543a664cc6d2937b674a14f0f56cd937c06c280572793d0608294013b extends Twig_Template
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
        $__internal_1e12eb53c8bdc36766fc0329e56b36cafa7f4bf81423941f61c175c0febb321e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e12eb53c8bdc36766fc0329e56b36cafa7f4bf81423941f61c175c0febb321e->enter($__internal_1e12eb53c8bdc36766fc0329e56b36cafa7f4bf81423941f61c175c0febb321e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_1e12eb53c8bdc36766fc0329e56b36cafa7f4bf81423941f61c175c0febb321e->leave($__internal_1e12eb53c8bdc36766fc0329e56b36cafa7f4bf81423941f61c175c0febb321e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
    }
}
