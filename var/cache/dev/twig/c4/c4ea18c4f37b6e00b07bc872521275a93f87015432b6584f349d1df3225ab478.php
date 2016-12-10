<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f9345965cf5053fdbeb4f1d5a2fe7d3aaf5fa0d5112e2f935b098cba19572fe9 extends Twig_Template
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
        $__internal_74578dc313b9225e098f4c49a3a179616dc239dee8e12c1a33b117bc1bf3f7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74578dc313b9225e098f4c49a3a179616dc239dee8e12c1a33b117bc1bf3f7be->enter($__internal_74578dc313b9225e098f4c49a3a179616dc239dee8e12c1a33b117bc1bf3f7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_74578dc313b9225e098f4c49a3a179616dc239dee8e12c1a33b117bc1bf3f7be->leave($__internal_74578dc313b9225e098f4c49a3a179616dc239dee8e12c1a33b117bc1bf3f7be_prof);

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
