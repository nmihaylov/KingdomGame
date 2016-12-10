<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_622998cc3234b36ee11c02c9117118b5f094a432d1eddc50a2fa16552aaa329d extends Twig_Template
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
        $__internal_7c1c98be8d62949459515579db5a932f8aface0a9244c55402636821f3ca2047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1c98be8d62949459515579db5a932f8aface0a9244c55402636821f3ca2047->enter($__internal_7c1c98be8d62949459515579db5a932f8aface0a9244c55402636821f3ca2047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7c1c98be8d62949459515579db5a932f8aface0a9244c55402636821f3ca2047->leave($__internal_7c1c98be8d62949459515579db5a932f8aface0a9244c55402636821f3ca2047_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
