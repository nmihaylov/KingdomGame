<?php

/* base.html.twig */
class __TwigTemplate_9c2631243bb0af02b79353aa74198e428f9a080ea2ae76b9f6aa9c69043b51f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c00b2e0534e727ba184c18e6def4f32fd295a99b8988831f41c8cea3d9b30a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00b2e0534e727ba184c18e6def4f32fd295a99b8988831f41c8cea3d9b30a61->enter($__internal_c00b2e0534e727ba184c18e6def4f32fd295a99b8988831f41c8cea3d9b30a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 18
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 20
        $this->displayBlock('header', $context, $blocks);
        // line 71
        echo "
<div class=\"container body-container\">
    ";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "</div>

";
        // line 82
        $this->displayBlock('footer', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('javascripts', $context, $blocks);
        // line 94
        echo "
</body>
</html>
";
        
        $__internal_c00b2e0534e727ba184c18e6def4f32fd295a99b8988831f41c8cea3d9b30a61->leave($__internal_c00b2e0534e727ba184c18e6def4f32fd295a99b8988831f41c8cea3d9b30a61_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_f29bbb925fb7b0d597cfbb64802d1ac471d77b38a137700a21f7746662cd2723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29bbb925fb7b0d597cfbb64802d1ac471d77b38a137700a21f7746662cd2723->enter($__internal_f29bbb925fb7b0d597cfbb64802d1ac471d77b38a137700a21f7746662cd2723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Kingdom Game";
        
        $__internal_f29bbb925fb7b0d597cfbb64802d1ac471d77b38a137700a21f7746662cd2723->leave($__internal_f29bbb925fb7b0d597cfbb64802d1ac471d77b38a137700a21f7746662cd2723_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7f26a022bff33c9f1e5b3b05c7feee0d305b3e342ff4a72a9619daa173a28091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f26a022bff33c9f1e5b3b05c7feee0d305b3e342ff4a72a9619daa173a28091->enter($__internal_7f26a022bff33c9f1e5b3b05c7feee0d305b3e342ff4a72a9619daa173a28091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_7f26a022bff33c9f1e5b3b05c7feee0d305b3e342ff4a72a9619daa173a28091->leave($__internal_7f26a022bff33c9f1e5b3b05c7feee0d305b3e342ff4a72a9619daa173a28091_prof);

    }

    // line 18
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_22c3e9d8842af02f43454c82b1d3b318b3a2ffbd29d6c0cabee92635dac9f616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c3e9d8842af02f43454c82b1d3b318b3a2ffbd29d6c0cabee92635dac9f616->enter($__internal_22c3e9d8842af02f43454c82b1d3b318b3a2ffbd29d6c0cabee92635dac9f616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_22c3e9d8842af02f43454c82b1d3b318b3a2ffbd29d6c0cabee92635dac9f616->leave($__internal_22c3e9d8842af02f43454c82b1d3b318b3a2ffbd29d6c0cabee92635dac9f616_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_5da234c0be24453d7fa25c450c1e9db58017c392f13f08ae3676e6ad28b104ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da234c0be24453d7fa25c450c1e9db58017c392f13f08ae3676e6ad28b104ba->enter($__internal_5da234c0be24453d7fa25c450c1e9db58017c392f13f08ae3676e6ad28b104ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("game_index");
        echo "\" class=\"navbar-brand\">Kingdoms</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"navbar-collapse collapse\">
                    ";
        // line 34
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 35
            echo "                        <ul class=\"nav navbar-nav navbar-left\">
                            ";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KingdomGameBundle:KingdomCurrent:resources"));
            // line 38
            echo "
                        </ul>
                    ";
        }
        // line 41
        echo "                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 42
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 43
            echo "                            <li>
                                <a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
            echo "\">
                                    My Dashboard
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                    Logout
                                </a>
                            </li>
                        ";
        } else {
            // line 54
            echo "                            <li>
                                <a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                                    LOGIN
                                </a>
                            </li>
                        ";
        }
        // line 65
        echo "                    </ul>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_5da234c0be24453d7fa25c450c1e9db58017c392f13f08ae3676e6ad28b104ba->leave($__internal_5da234c0be24453d7fa25c450c1e9db58017c392f13f08ae3676e6ad28b104ba_prof);

    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1cddd437dd2a9de41ebe466343ea72e8e6be7d93f3e7d138e4593a674ba8eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1cddd437dd2a9de41ebe466343ea72e8e6be7d93f3e7d138e4593a674ba8eb1->enter($__internal_a1cddd437dd2a9de41ebe466343ea72e8e6be7d93f3e7d138e4593a674ba8eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 74
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 76
        $this->displayBlock('main', $context, $blocks);
        // line 77
        echo "            </div>
        </div>
    ";
        
        $__internal_a1cddd437dd2a9de41ebe466343ea72e8e6be7d93f3e7d138e4593a674ba8eb1->leave($__internal_a1cddd437dd2a9de41ebe466343ea72e8e6be7d93f3e7d138e4593a674ba8eb1_prof);

    }

    // line 76
    public function block_main($context, array $blocks = array())
    {
        $__internal_43779486dc6ee33cbe5f759eddb857375a93e771bcc562c73174c8cd8d98e92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43779486dc6ee33cbe5f759eddb857375a93e771bcc562c73174c8cd8d98e92e->enter($__internal_43779486dc6ee33cbe5f759eddb857375a93e771bcc562c73174c8cd8d98e92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_43779486dc6ee33cbe5f759eddb857375a93e771bcc562c73174c8cd8d98e92e->leave($__internal_43779486dc6ee33cbe5f759eddb857375a93e771bcc562c73174c8cd8d98e92e_prof);

    }

    // line 82
    public function block_footer($context, array $blocks = array())
    {
        $__internal_afa779c3927a6fa5bd3652c0d95f2b399b649544ff9cfc97a8102b8be7c6ca6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa779c3927a6fa5bd3652c0d95f2b399b649544ff9cfc97a8102b8be7c6ca6a->enter($__internal_afa779c3927a6fa5bd3652c0d95f2b399b649544ff9cfc97a8102b8be7c6ca6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 83
        echo "    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Nikolay Mihaylov Kingdoms game</p>
        </div>
    </footer>
";
        
        $__internal_afa779c3927a6fa5bd3652c0d95f2b399b649544ff9cfc97a8102b8be7c6ca6a->leave($__internal_afa779c3927a6fa5bd3652c0d95f2b399b649544ff9cfc97a8102b8be7c6ca6a_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6e3b108aa0d65ccba4f325f9b6e6e6a282a5bcf772d7a82346ba9f536f237830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e3b108aa0d65ccba4f325f9b6e6e6a282a5bcf772d7a82346ba9f536f237830->enter($__internal_6e3b108aa0d65ccba4f325f9b6e6e6a282a5bcf772d7a82346ba9f536f237830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6e3b108aa0d65ccba4f325f9b6e6e6a282a5bcf772d7a82346ba9f536f237830->leave($__internal_6e3b108aa0d65ccba4f325f9b6e6e6a282a5bcf772d7a82346ba9f536f237830_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 92,  270 => 91,  264 => 90,  252 => 83,  246 => 82,  235 => 76,  226 => 77,  224 => 76,  220 => 74,  214 => 73,  202 => 65,  194 => 60,  186 => 55,  183 => 54,  175 => 49,  167 => 44,  164 => 43,  162 => 42,  159 => 41,  154 => 38,  152 => 36,  149 => 35,  147 => 34,  135 => 25,  129 => 21,  123 => 20,  112 => 18,  102 => 13,  96 => 12,  84 => 11,  74 => 94,  72 => 90,  69 => 89,  67 => 82,  63 => 80,  61 => 73,  57 => 71,  55 => 20,  50 => 18,  43 => 15,  41 => 12,  37 => 11,  30 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Kingdom Game{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('game_index') }}\" class=\"navbar-brand\">Kingdoms</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"navbar-collapse collapse\">
                    {%  if app.user  %}
                        <ul class=\"nav navbar-nav navbar-left\">
                            {{ render(controller(
                            'KingdomGameBundle:KingdomCurrent:resources'
                            )) }}
                        </ul>
                    {% endif %}
                    <ul class=\"nav navbar-nav navbar-right\">
                        {% if app.user %}
                            <li>
                                <a href=\"{{ path('dashboard') }}\">
                                    My Dashboard
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('security_logout') }}\">
                                    Logout
                                </a>
                            </li>
                        {% else %}
                            <li>
                                <a href=\"{{ path('user_register') }}\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('security_login') }}\">
                                    LOGIN
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>

{% block footer %}
    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Nikolay Mihaylov Kingdoms game</p>
        </div>
    </footer>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/jquery-3.1.1.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
