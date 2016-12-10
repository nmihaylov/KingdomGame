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
        $__internal_1e76d559784870b954dac5f755b6655d6d90c2b109396fd21e863c17ed786279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e76d559784870b954dac5f755b6655d6d90c2b109396fd21e863c17ed786279->enter($__internal_1e76d559784870b954dac5f755b6655d6d90c2b109396fd21e863c17ed786279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1e76d559784870b954dac5f755b6655d6d90c2b109396fd21e863c17ed786279->leave($__internal_1e76d559784870b954dac5f755b6655d6d90c2b109396fd21e863c17ed786279_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7856be7ef6aecf4340d875eaef40aa9f1a2150e82ec4564da6ef4d6edf4eac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7856be7ef6aecf4340d875eaef40aa9f1a2150e82ec4564da6ef4d6edf4eac8->enter($__internal_d7856be7ef6aecf4340d875eaef40aa9f1a2150e82ec4564da6ef4d6edf4eac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SoftUni Blog";
        
        $__internal_d7856be7ef6aecf4340d875eaef40aa9f1a2150e82ec4564da6ef4d6edf4eac8->leave($__internal_d7856be7ef6aecf4340d875eaef40aa9f1a2150e82ec4564da6ef4d6edf4eac8_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eab353f7b00464ded844deaa729f0d06fa802899a47df93ad19f3030b34a0d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab353f7b00464ded844deaa729f0d06fa802899a47df93ad19f3030b34a0d0e->enter($__internal_eab353f7b00464ded844deaa729f0d06fa802899a47df93ad19f3030b34a0d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_eab353f7b00464ded844deaa729f0d06fa802899a47df93ad19f3030b34a0d0e->leave($__internal_eab353f7b00464ded844deaa729f0d06fa802899a47df93ad19f3030b34a0d0e_prof);

    }

    // line 18
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_2f8ae4e8294624b36780d666c97c0695408b650282cae018c0ccff36ec1352fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f8ae4e8294624b36780d666c97c0695408b650282cae018c0ccff36ec1352fb->enter($__internal_2f8ae4e8294624b36780d666c97c0695408b650282cae018c0ccff36ec1352fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_2f8ae4e8294624b36780d666c97c0695408b650282cae018c0ccff36ec1352fb->leave($__internal_2f8ae4e8294624b36780d666c97c0695408b650282cae018c0ccff36ec1352fb_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_fdc90601310c634dbc44e829c1d97c9030cd0085254d8a171e5c50290c23dc04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc90601310c634dbc44e829c1d97c9030cd0085254d8a171e5c50290c23dc04->enter($__internal_fdc90601310c634dbc44e829c1d97c9030cd0085254d8a171e5c50290c23dc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\" class=\"navbar-brand\">SOFTUNI BLOG</a>

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
        
        $__internal_fdc90601310c634dbc44e829c1d97c9030cd0085254d8a171e5c50290c23dc04->leave($__internal_fdc90601310c634dbc44e829c1d97c9030cd0085254d8a171e5c50290c23dc04_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e592f56047ec263770aafd50a3b2ce0c9d3776f3dfe678ed1b524c4310ceb5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e592f56047ec263770aafd50a3b2ce0c9d3776f3dfe678ed1b524c4310ceb5a->enter($__internal_4e592f56047ec263770aafd50a3b2ce0c9d3776f3dfe678ed1b524c4310ceb5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4e592f56047ec263770aafd50a3b2ce0c9d3776f3dfe678ed1b524c4310ceb5a->leave($__internal_4e592f56047ec263770aafd50a3b2ce0c9d3776f3dfe678ed1b524c4310ceb5a_prof);

    }

    // line 69
    public function block_main($context, array $blocks = array())
    {
        $__internal_fbb80b71403b75c9104ab06f6a6cf79a2f16c1c35d8bed91030bd8fb5d762064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb80b71403b75c9104ab06f6a6cf79a2f16c1c35d8bed91030bd8fb5d762064->enter($__internal_fbb80b71403b75c9104ab06f6a6cf79a2f16c1c35d8bed91030bd8fb5d762064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_fbb80b71403b75c9104ab06f6a6cf79a2f16c1c35d8bed91030bd8fb5d762064->leave($__internal_fbb80b71403b75c9104ab06f6a6cf79a2f16c1c35d8bed91030bd8fb5d762064_prof);

    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        $__internal_fcc71924b50e13d779521fdaeb4290b018613c4bce1fd5281860aa60428542d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc71924b50e13d779521fdaeb4290b018613c4bce1fd5281860aa60428542d0->enter($__internal_fcc71924b50e13d779521fdaeb4290b018613c4bce1fd5281860aa60428542d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 76
        echo "    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Software University Foundation</p>
        </div>
    </footer>
";
        
        $__internal_fcc71924b50e13d779521fdaeb4290b018613c4bce1fd5281860aa60428542d0->leave($__internal_fcc71924b50e13d779521fdaeb4290b018613c4bce1fd5281860aa60428542d0_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_239473d87fdea1c77a585248cf30fac3cff14c5d532eda263c646766e1fe19f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239473d87fdea1c77a585248cf30fac3cff14c5d532eda263c646766e1fe19f6->enter($__internal_239473d87fdea1c77a585248cf30fac3cff14c5d532eda263c646766e1fe19f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_239473d87fdea1c77a585248cf30fac3cff14c5d532eda263c646766e1fe19f6->leave($__internal_239473d87fdea1c77a585248cf30fac3cff14c5d532eda263c646766e1fe19f6_prof);

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
    <title>{% block title %}SoftUni Blog{% endblock %}</title>
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
                    <a href=\"{{ path('blog_index') }}\" class=\"navbar-brand\">SOFTUNI BLOG</a>

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
            <p>&copy; 2016 - Software University Foundation</p>
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
