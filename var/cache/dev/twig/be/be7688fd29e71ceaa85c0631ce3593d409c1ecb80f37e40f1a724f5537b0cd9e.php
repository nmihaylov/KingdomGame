<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d1791c31febdf5be4825c5a6dca778ebf120a7ebc4b18906b589b16e3a19c291 extends Twig_Template
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
        $__internal_0dcdc86d27ba9e271ba28767e950b0bd297b9c7c0f8c9af3c30e6aae53c224c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dcdc86d27ba9e271ba28767e950b0bd297b9c7c0f8c9af3c30e6aae53c224c1->enter($__internal_0dcdc86d27ba9e271ba28767e950b0bd297b9c7c0f8c9af3c30e6aae53c224c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0dcdc86d27ba9e271ba28767e950b0bd297b9c7c0f8c9af3c30e6aae53c224c1->leave($__internal_0dcdc86d27ba9e271ba28767e950b0bd297b9c7c0f8c9af3c30e6aae53c224c1_prof);

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
