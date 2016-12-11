<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_28ef3c670bb5baa78cadbbeb864c333f4dbb173a11443f83b0450c67cb3294ae extends Twig_Template
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
        $__internal_60e9e58702058165c44a23196eb5f1dad0600555347a4346d9a5e8d8ff5ea1c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e9e58702058165c44a23196eb5f1dad0600555347a4346d9a5e8d8ff5ea1c3->enter($__internal_60e9e58702058165c44a23196eb5f1dad0600555347a4346d9a5e8d8ff5ea1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_60e9e58702058165c44a23196eb5f1dad0600555347a4346d9a5e8d8ff5ea1c3->leave($__internal_60e9e58702058165c44a23196eb5f1dad0600555347a4346d9a5e8d8ff5ea1c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
