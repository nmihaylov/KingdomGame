<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_d36f159ce0b2616dee94d335f2ca035b36180ad65ffe36aadc17344f8d469301 extends Twig_Template
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
        $__internal_9babd5734e9dfee3655a19405147fd78c93379f95ac85ee2e25ac0dbb56652a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9babd5734e9dfee3655a19405147fd78c93379f95ac85ee2e25ac0dbb56652a3->enter($__internal_9babd5734e9dfee3655a19405147fd78c93379f95ac85ee2e25ac0dbb56652a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9babd5734e9dfee3655a19405147fd78c93379f95ac85ee2e25ac0dbb56652a3->leave($__internal_9babd5734e9dfee3655a19405147fd78c93379f95ac85ee2e25ac0dbb56652a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
