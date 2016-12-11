<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_64d066bfca5bd1ae2a7f127cd022300beac6ede17ab43963967aa781633091b5 extends Twig_Template
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
        $__internal_1ca8b36f5746c5723cefe06cb578053401fa6b938789962634c810c43ca08bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca8b36f5746c5723cefe06cb578053401fa6b938789962634c810c43ca08bd5->enter($__internal_1ca8b36f5746c5723cefe06cb578053401fa6b938789962634c810c43ca08bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1ca8b36f5746c5723cefe06cb578053401fa6b938789962634c810c43ca08bd5->leave($__internal_1ca8b36f5746c5723cefe06cb578053401fa6b938789962634c810c43ca08bd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
