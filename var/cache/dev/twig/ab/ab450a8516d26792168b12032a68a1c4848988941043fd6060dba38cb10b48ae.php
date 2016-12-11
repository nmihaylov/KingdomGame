<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_eacd0a89aeb96ce765f4fc6640c119b05da0d5244ede5a7eaca322be6f75e000 extends Twig_Template
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
        $__internal_b614dccff414b8d078ce2ec9009430d6f9c5ede75438d00ddbd760cdd39ec27c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b614dccff414b8d078ce2ec9009430d6f9c5ede75438d00ddbd760cdd39ec27c->enter($__internal_b614dccff414b8d078ce2ec9009430d6f9c5ede75438d00ddbd760cdd39ec27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b614dccff414b8d078ce2ec9009430d6f9c5ede75438d00ddbd760cdd39ec27c->leave($__internal_b614dccff414b8d078ce2ec9009430d6f9c5ede75438d00ddbd760cdd39ec27c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
