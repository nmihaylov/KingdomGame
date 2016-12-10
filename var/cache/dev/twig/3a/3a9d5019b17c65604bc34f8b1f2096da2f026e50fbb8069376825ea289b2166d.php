<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_16a18582c9a585174db2f8e03d7233287c91cdedad5339429d9b2086d9bbcc3f extends Twig_Template
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
        $__internal_64de5a4b5fdc67f821b0becf68365e51c5f951338f1a06443c3e3939c29cd90b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64de5a4b5fdc67f821b0becf68365e51c5f951338f1a06443c3e3939c29cd90b->enter($__internal_64de5a4b5fdc67f821b0becf68365e51c5f951338f1a06443c3e3939c29cd90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_64de5a4b5fdc67f821b0becf68365e51c5f951338f1a06443c3e3939c29cd90b->leave($__internal_64de5a4b5fdc67f821b0becf68365e51c5f951338f1a06443c3e3939c29cd90b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
