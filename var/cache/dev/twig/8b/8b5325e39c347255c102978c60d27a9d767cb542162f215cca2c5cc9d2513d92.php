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
        $__internal_fe220084c93ac12cafcd794286636ef951b101ad7f2a663da801976900771268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe220084c93ac12cafcd794286636ef951b101ad7f2a663da801976900771268->enter($__internal_fe220084c93ac12cafcd794286636ef951b101ad7f2a663da801976900771268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_fe220084c93ac12cafcd794286636ef951b101ad7f2a663da801976900771268->leave($__internal_fe220084c93ac12cafcd794286636ef951b101ad7f2a663da801976900771268_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_891f4d886e92cd2ea4c3cb7a8c5a2caad194784d9d6fc4ef72d04cbbf0c74b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891f4d886e92cd2ea4c3cb7a8c5a2caad194784d9d6fc4ef72d04cbbf0c74b05->enter($__internal_891f4d886e92cd2ea4c3cb7a8c5a2caad194784d9d6fc4ef72d04cbbf0c74b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

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
        
        $__internal_891f4d886e92cd2ea4c3cb7a8c5a2caad194784d9d6fc4ef72d04cbbf0c74b05->leave($__internal_891f4d886e92cd2ea4c3cb7a8c5a2caad194784d9d6fc4ef72d04cbbf0c74b05_prof);

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
