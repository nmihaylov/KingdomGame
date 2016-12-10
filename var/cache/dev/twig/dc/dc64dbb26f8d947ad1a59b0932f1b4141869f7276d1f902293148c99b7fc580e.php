<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_03236908244193b11b289b875e5deb62f0d57a099d05f7a3dbd43d6365c1032a extends Twig_Template
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
        $__internal_e2b96e1d36c6069ff63a6eb91bf9da713f314b1c6f450d9e4eb9ae81024d3911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b96e1d36c6069ff63a6eb91bf9da713f314b1c6f450d9e4eb9ae81024d3911->enter($__internal_e2b96e1d36c6069ff63a6eb91bf9da713f314b1c6f450d9e4eb9ae81024d3911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e2b96e1d36c6069ff63a6eb91bf9da713f314b1c6f450d9e4eb9ae81024d3911->leave($__internal_e2b96e1d36c6069ff63a6eb91bf9da713f314b1c6f450d9e4eb9ae81024d3911_prof);

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
