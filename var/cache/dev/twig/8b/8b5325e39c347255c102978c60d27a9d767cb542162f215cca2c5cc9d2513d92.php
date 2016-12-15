<?php

/* form/fields.html.twig */
class __TwigTemplate_00d98ed6d50427c00e29e4caab75651deb3f02fade00da19b23343d942912657 extends Twig_Template
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
        $__internal_2475f2ecf27f3ce5a64ff4b1244495ec3807bce0bc8926141ef4b2f2172a8970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2475f2ecf27f3ce5a64ff4b1244495ec3807bce0bc8926141ef4b2f2172a8970->enter($__internal_2475f2ecf27f3ce5a64ff4b1244495ec3807bce0bc8926141ef4b2f2172a8970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_2475f2ecf27f3ce5a64ff4b1244495ec3807bce0bc8926141ef4b2f2172a8970->leave($__internal_2475f2ecf27f3ce5a64ff4b1244495ec3807bce0bc8926141ef4b2f2172a8970_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_0dbc3f23155b03c010a2460f34eafced8dc3230e07991e58fb8714e1744d1f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbc3f23155b03c010a2460f34eafced8dc3230e07991e58fb8714e1744d1f27->enter($__internal_0dbc3f23155b03c010a2460f34eafced8dc3230e07991e58fb8714e1744d1f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

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
        
        $__internal_0dbc3f23155b03c010a2460f34eafced8dc3230e07991e58fb8714e1744d1f27->leave($__internal_0dbc3f23155b03c010a2460f34eafced8dc3230e07991e58fb8714e1744d1f27_prof);

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
