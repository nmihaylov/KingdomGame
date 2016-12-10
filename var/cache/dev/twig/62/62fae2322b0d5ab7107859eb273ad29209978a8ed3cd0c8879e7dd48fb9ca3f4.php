<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f1f36a3368992866c1bdd66c1fa0ed82121280862b26854c568bccf76536aa6b extends Twig_Template
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
        $__internal_c039a20f3e265e04ce05182e1077d6997df2d1e7048e3966d3b741c7c1bd87a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c039a20f3e265e04ce05182e1077d6997df2d1e7048e3966d3b741c7c1bd87a9->enter($__internal_c039a20f3e265e04ce05182e1077d6997df2d1e7048e3966d3b741c7c1bd87a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c039a20f3e265e04ce05182e1077d6997df2d1e7048e3966d3b741c7c1bd87a9->leave($__internal_c039a20f3e265e04ce05182e1077d6997df2d1e7048e3966d3b741c7c1bd87a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
