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
        $__internal_888c8ac09e4d70b8f190b35755089e3d273bcc14dcf85301a165f66bee61a513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888c8ac09e4d70b8f190b35755089e3d273bcc14dcf85301a165f66bee61a513->enter($__internal_888c8ac09e4d70b8f190b35755089e3d273bcc14dcf85301a165f66bee61a513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 76
        echo "
<div class=\"container body-container\">
    ";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "</div>

";
        // line 87
        $this->displayBlock('footer', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('javascripts', $context, $blocks);
        // line 99
        echo "
</body>
</html>
";
        
        $__internal_888c8ac09e4d70b8f190b35755089e3d273bcc14dcf85301a165f66bee61a513->leave($__internal_888c8ac09e4d70b8f190b35755089e3d273bcc14dcf85301a165f66bee61a513_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fd7babf33e9cfbde6fed721919a0babf85d69bf89bdf577218767663fb46645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd7babf33e9cfbde6fed721919a0babf85d69bf89bdf577218767663fb46645->enter($__internal_7fd7babf33e9cfbde6fed721919a0babf85d69bf89bdf577218767663fb46645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Kingdom Game";
        
        $__internal_7fd7babf33e9cfbde6fed721919a0babf85d69bf89bdf577218767663fb46645->leave($__internal_7fd7babf33e9cfbde6fed721919a0babf85d69bf89bdf577218767663fb46645_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_651a2216255886dd20628e4d6d3390f0055ff6eb38a4352c172003e2ec88113a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651a2216255886dd20628e4d6d3390f0055ff6eb38a4352c172003e2ec88113a->enter($__internal_651a2216255886dd20628e4d6d3390f0055ff6eb38a4352c172003e2ec88113a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_651a2216255886dd20628e4d6d3390f0055ff6eb38a4352c172003e2ec88113a->leave($__internal_651a2216255886dd20628e4d6d3390f0055ff6eb38a4352c172003e2ec88113a_prof);

    }

    // line 18
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_7667771c952c16eab4c61133354f31ea355843b13228ff167069a7f70d3cc2af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7667771c952c16eab4c61133354f31ea355843b13228ff167069a7f70d3cc2af->enter($__internal_7667771c952c16eab4c61133354f31ea355843b13228ff167069a7f70d3cc2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_7667771c952c16eab4c61133354f31ea355843b13228ff167069a7f70d3cc2af->leave($__internal_7667771c952c16eab4c61133354f31ea355843b13228ff167069a7f70d3cc2af_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_153a21906dc2e3261bae82d030c740e656a651ddf1336f41ffe7d808cf5c1e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_153a21906dc2e3261bae82d030c740e656a651ddf1336f41ffe7d808cf5c1e12->enter($__internal_153a21906dc2e3261bae82d030c740e656a651ddf1336f41ffe7d808cf5c1e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kingdoms");
            echo "\">
                                    View all Kingdoms
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
            echo "\">
                                    My Dashboard
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                    Logout
                                </a>
                            </li>
                        ";
        } else {
            // line 59
            echo "                            <li>
                                <a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                                    LOGIN
                                </a>
                            </li>
                        ";
        }
        // line 70
        echo "                    </ul>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_153a21906dc2e3261bae82d030c740e656a651ddf1336f41ffe7d808cf5c1e12->leave($__internal_153a21906dc2e3261bae82d030c740e656a651ddf1336f41ffe7d808cf5c1e12_prof);

    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
        $__internal_7305bc50c7b4a22b144929d41c47cb5ac11868ad1df7d554dc210167895329b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7305bc50c7b4a22b144929d41c47cb5ac11868ad1df7d554dc210167895329b6->enter($__internal_7305bc50c7b4a22b144929d41c47cb5ac11868ad1df7d554dc210167895329b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 79
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 81
        $this->displayBlock('main', $context, $blocks);
        // line 82
        echo "            </div>
        </div>
    ";
        
        $__internal_7305bc50c7b4a22b144929d41c47cb5ac11868ad1df7d554dc210167895329b6->leave($__internal_7305bc50c7b4a22b144929d41c47cb5ac11868ad1df7d554dc210167895329b6_prof);

    }

    // line 81
    public function block_main($context, array $blocks = array())
    {
        $__internal_7f16555d1885f0a14944c521d431c19bc864776c3de78afee86267de6e158031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f16555d1885f0a14944c521d431c19bc864776c3de78afee86267de6e158031->enter($__internal_7f16555d1885f0a14944c521d431c19bc864776c3de78afee86267de6e158031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_7f16555d1885f0a14944c521d431c19bc864776c3de78afee86267de6e158031->leave($__internal_7f16555d1885f0a14944c521d431c19bc864776c3de78afee86267de6e158031_prof);

    }

    // line 87
    public function block_footer($context, array $blocks = array())
    {
        $__internal_cdfe7e5bd24727d84acf3d992a5976724ec7e275a2881dde9c326bda47f62136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdfe7e5bd24727d84acf3d992a5976724ec7e275a2881dde9c326bda47f62136->enter($__internal_cdfe7e5bd24727d84acf3d992a5976724ec7e275a2881dde9c326bda47f62136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 88
        echo "    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Nikolay Mihaylov Kingdoms game</p>
        </div>
    </footer>
";
        
        $__internal_cdfe7e5bd24727d84acf3d992a5976724ec7e275a2881dde9c326bda47f62136->leave($__internal_cdfe7e5bd24727d84acf3d992a5976724ec7e275a2881dde9c326bda47f62136_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_806ccfa464dfd542664053b56bd1553e2044e43b469de33d97270a67ba43bc06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806ccfa464dfd542664053b56bd1553e2044e43b469de33d97270a67ba43bc06->enter($__internal_806ccfa464dfd542664053b56bd1553e2044e43b469de33d97270a67ba43bc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_806ccfa464dfd542664053b56bd1553e2044e43b469de33d97270a67ba43bc06->leave($__internal_806ccfa464dfd542664053b56bd1553e2044e43b469de33d97270a67ba43bc06_prof);

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
        return array (  283 => 97,  278 => 96,  272 => 95,  260 => 88,  254 => 87,  243 => 81,  234 => 82,  232 => 81,  228 => 79,  222 => 78,  210 => 70,  202 => 65,  194 => 60,  191 => 59,  183 => 54,  175 => 49,  167 => 44,  164 => 43,  162 => 42,  159 => 41,  154 => 38,  152 => 36,  149 => 35,  147 => 34,  135 => 25,  129 => 21,  123 => 20,  112 => 18,  102 => 13,  96 => 12,  84 => 11,  74 => 99,  72 => 95,  69 => 94,  67 => 87,  63 => 85,  61 => 78,  57 => 76,  55 => 20,  50 => 18,  43 => 15,  41 => 12,  37 => 11,  30 => 6,);
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
                                <a href=\"{{ path('kingdoms') }}\">
                                    View all Kingdoms
                                </a>
                            </li>
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
