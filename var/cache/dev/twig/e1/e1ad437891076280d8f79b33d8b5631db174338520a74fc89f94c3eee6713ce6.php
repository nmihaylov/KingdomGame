<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_bd1305586b4a17cb90ab3ca6c795ebac643638acdddb740536dd8ed89f988857 extends Twig_Template
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
        $__internal_c700c09c131d7cac650ac0942ce948b2f49e2d96d734ba9354a87fc6427dde5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c700c09c131d7cac650ac0942ce948b2f49e2d96d734ba9354a87fc6427dde5e->enter($__internal_c700c09c131d7cac650ac0942ce948b2f49e2d96d734ba9354a87fc6427dde5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c700c09c131d7cac650ac0942ce948b2f49e2d96d734ba9354a87fc6427dde5e->leave($__internal_c700c09c131d7cac650ac0942ce948b2f49e2d96d734ba9354a87fc6427dde5e_prof);

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
