<?php

/* ::base.html.twig */
class __TwigTemplate_fc62980d0cc493e26df72576e2d31fa3caf03cb4318a95eb5a36d5fc95e75ee3 extends Twig_Template
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
        $__internal_aaf564eaafad22f20060765f9be0cf8a5420524446eef28a925f781ddaf156fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf564eaafad22f20060765f9be0cf8a5420524446eef28a925f781ddaf156fc->enter($__internal_aaf564eaafad22f20060765f9be0cf8a5420524446eef28a925f781ddaf156fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 64
        echo "
<div class=\"container body-container\">
    ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "</div>

";
        // line 75
        $this->displayBlock('footer', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('javascripts', $context, $blocks);
        // line 87
        echo "
</body>
</html>
";
        
        $__internal_aaf564eaafad22f20060765f9be0cf8a5420524446eef28a925f781ddaf156fc->leave($__internal_aaf564eaafad22f20060765f9be0cf8a5420524446eef28a925f781ddaf156fc_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_38d46dc5bf92591602618d3d83da621cb04403429aa035ff531f6326fa1691f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d46dc5bf92591602618d3d83da621cb04403429aa035ff531f6326fa1691f4->enter($__internal_38d46dc5bf92591602618d3d83da621cb04403429aa035ff531f6326fa1691f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Kingdom Game";
        
        $__internal_38d46dc5bf92591602618d3d83da621cb04403429aa035ff531f6326fa1691f4->leave($__internal_38d46dc5bf92591602618d3d83da621cb04403429aa035ff531f6326fa1691f4_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9feba272c6e26c0a31b9820582a096cef063df5c2e73b396b98c6a45b48cd4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9feba272c6e26c0a31b9820582a096cef063df5c2e73b396b98c6a45b48cd4d0->enter($__internal_9feba272c6e26c0a31b9820582a096cef063df5c2e73b396b98c6a45b48cd4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_9feba272c6e26c0a31b9820582a096cef063df5c2e73b396b98c6a45b48cd4d0->leave($__internal_9feba272c6e26c0a31b9820582a096cef063df5c2e73b396b98c6a45b48cd4d0_prof);

    }

    // line 18
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_e0b9f7459989b216ff1187cd08122fb99d29503eee9416425cf8d92c17c247ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b9f7459989b216ff1187cd08122fb99d29503eee9416425cf8d92c17c247ae->enter($__internal_e0b9f7459989b216ff1187cd08122fb99d29503eee9416425cf8d92c17c247ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_e0b9f7459989b216ff1187cd08122fb99d29503eee9416425cf8d92c17c247ae->leave($__internal_e0b9f7459989b216ff1187cd08122fb99d29503eee9416425cf8d92c17c247ae_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_194a7f57afcc26a15ec8b7575bf3fef835df59a71a10680d6fba0036a31a2464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_194a7f57afcc26a15ec8b7575bf3fef835df59a71a10680d6fba0036a31a2464->enter($__internal_194a7f57afcc26a15ec8b7575bf3fef835df59a71a10680d6fba0036a31a2464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 35
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 36
            echo "                            <li>
                                <a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
            echo "\">
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                    Logout
                                </a>
                            </li>
                        ";
        } else {
            // line 47
            echo "                            <li>
                                <a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                                    LOGIN
                                </a>
                            </li>
                        ";
        }
        // line 58
        echo "                    </ul>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_194a7f57afcc26a15ec8b7575bf3fef835df59a71a10680d6fba0036a31a2464->leave($__internal_194a7f57afcc26a15ec8b7575bf3fef835df59a71a10680d6fba0036a31a2464_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c1d7c650958d90ea1f4b5006ccdcf5c15233dd4a79cef1f5742868100fc2a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1d7c650958d90ea1f4b5006ccdcf5c15233dd4a79cef1f5742868100fc2a65->enter($__internal_1c1d7c650958d90ea1f4b5006ccdcf5c15233dd4a79cef1f5742868100fc2a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 67
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 69
        $this->displayBlock('main', $context, $blocks);
        // line 70
        echo "            </div>
        </div>
    ";
        
        $__internal_1c1d7c650958d90ea1f4b5006ccdcf5c15233dd4a79cef1f5742868100fc2a65->leave($__internal_1c1d7c650958d90ea1f4b5006ccdcf5c15233dd4a79cef1f5742868100fc2a65_prof);

    }

    // line 69
    public function block_main($context, array $blocks = array())
    {
        $__internal_e0d8ebdb1cd8d768f416688282f5c09f455883c8582a98d0e9ef9dbb7315a517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d8ebdb1cd8d768f416688282f5c09f455883c8582a98d0e9ef9dbb7315a517->enter($__internal_e0d8ebdb1cd8d768f416688282f5c09f455883c8582a98d0e9ef9dbb7315a517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_e0d8ebdb1cd8d768f416688282f5c09f455883c8582a98d0e9ef9dbb7315a517->leave($__internal_e0d8ebdb1cd8d768f416688282f5c09f455883c8582a98d0e9ef9dbb7315a517_prof);

    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        $__internal_71f895e3e1d0bb7123ded3a991efc6662e9b5eaa4ccf64549a9e54a5ffdcf365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f895e3e1d0bb7123ded3a991efc6662e9b5eaa4ccf64549a9e54a5ffdcf365->enter($__internal_71f895e3e1d0bb7123ded3a991efc6662e9b5eaa4ccf64549a9e54a5ffdcf365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 76
        echo "    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Nikolay Mihaylov Kingdoms game</p>
        </div>
    </footer>
";
        
        $__internal_71f895e3e1d0bb7123ded3a991efc6662e9b5eaa4ccf64549a9e54a5ffdcf365->leave($__internal_71f895e3e1d0bb7123ded3a991efc6662e9b5eaa4ccf64549a9e54a5ffdcf365_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2b310717a7dea86dcd672b575c80917c8e1f4f61d65ff0c7ac95aa07e1022431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b310717a7dea86dcd672b575c80917c8e1f4f61d65ff0c7ac95aa07e1022431->enter($__internal_2b310717a7dea86dcd672b575c80917c8e1f4f61d65ff0c7ac95aa07e1022431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_2b310717a7dea86dcd672b575c80917c8e1f4f61d65ff0c7ac95aa07e1022431->leave($__internal_2b310717a7dea86dcd672b575c80917c8e1f4f61d65ff0c7ac95aa07e1022431_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 85,  256 => 84,  250 => 83,  238 => 76,  232 => 75,  221 => 69,  212 => 70,  210 => 69,  206 => 67,  200 => 66,  188 => 58,  180 => 53,  172 => 48,  169 => 47,  161 => 42,  153 => 37,  150 => 36,  148 => 35,  135 => 25,  129 => 21,  123 => 20,  112 => 18,  102 => 13,  96 => 12,  84 => 11,  74 => 87,  72 => 83,  69 => 82,  67 => 75,  63 => 73,  61 => 66,  57 => 64,  55 => 20,  50 => 18,  43 => 15,  41 => 12,  37 => 11,  30 => 6,);
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
                    <ul class=\"nav navbar-nav navbar-right\">
                        {% if app.user %}
                            <li>
                                <a href=\"{{ path('user_profile') }}\">
                                    My Profile
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
