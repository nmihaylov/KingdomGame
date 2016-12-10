<?php

/* form/fields.html.twig */
class __TwigTemplate_ecfdec7ed1f24e2811bc4833e36236f0e96f4ec312097dbd99cb362a46270e00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da9474c145c3be4a9b3c244eea9b001d739356f8e6f8a06e494af5730a8a1f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9474c145c3be4a9b3c244eea9b001d739356f8e6f8a06e494af5730a8a1f63->enter($__internal_da9474c145c3be4a9b3c244eea9b001d739356f8e6f8a06e494af5730a8a1f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_da9474c145c3be4a9b3c244eea9b001d739356f8e6f8a06e494af5730a8a1f63->leave($__internal_da9474c145c3be4a9b3c244eea9b001d739356f8e6f8a06e494af5730a8a1f63_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_436f31e898d22d0f274173a880a0ce64ab6a925c8d4c2f6cf5a7c6859e4cb70c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436f31e898d22d0f274173a880a0ce64ab6a925c8d4c2f6cf5a7c6859e4cb70c->enter($__internal_436f31e898d22d0f274173a880a0ce64ab6a925c8d4c2f6cf5a7c6859e4cb70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_436f31e898d22d0f274173a880a0ce64ab6a925c8d4c2f6cf5a7c6859e4cb70c->leave($__internal_436f31e898d22d0f274173a880a0ce64ab6a925c8d4c2f6cf5a7c6859e4cb70c_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
