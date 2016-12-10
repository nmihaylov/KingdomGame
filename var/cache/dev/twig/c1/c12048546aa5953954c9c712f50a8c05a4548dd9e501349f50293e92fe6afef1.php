<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_acd9f21593ecb0cdb81bef23ad1a53a8c1f7f968d68e67ee89936e802baad79e extends Twig_Template
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
        $__internal_50eba714a4b0c7af6dc537d12fc7b5b4b4c7b89b88cc21d0472727c6d1db7fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50eba714a4b0c7af6dc537d12fc7b5b4b4c7b89b88cc21d0472727c6d1db7fbd->enter($__internal_50eba714a4b0c7af6dc537d12fc7b5b4b4c7b89b88cc21d0472727c6d1db7fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_50eba714a4b0c7af6dc537d12fc7b5b4b4c7b89b88cc21d0472727c6d1db7fbd->leave($__internal_50eba714a4b0c7af6dc537d12fc7b5b4b4c7b89b88cc21d0472727c6d1db7fbd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
