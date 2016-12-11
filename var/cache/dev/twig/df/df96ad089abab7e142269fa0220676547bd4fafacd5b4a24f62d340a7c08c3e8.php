<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_d8792766c7a71cab0f23d2487e521e25b10a5e102e1eb35f4e565a71ef94253f extends Twig_Template
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
        $__internal_9e960fbe4a99d3fdc1a92e3255d5df0af7f2945c360f2301aad5c6c178630fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e960fbe4a99d3fdc1a92e3255d5df0af7f2945c360f2301aad5c6c178630fbe->enter($__internal_9e960fbe4a99d3fdc1a92e3255d5df0af7f2945c360f2301aad5c6c178630fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9e960fbe4a99d3fdc1a92e3255d5df0af7f2945c360f2301aad5c6c178630fbe->leave($__internal_9e960fbe4a99d3fdc1a92e3255d5df0af7f2945c360f2301aad5c6c178630fbe_prof);

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
