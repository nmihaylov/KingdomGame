<?php

/* ::base.html.twig */
class __TwigTemplate_d73a649f801344d551b6731cc42223c60156f85c2711f68c55090e08e7ccca0b extends Twig_Template
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
        $__internal_96e51e0fb6c2a41859cea251ccbeb408c816f63542cb968e86b81aaf9d45acdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e51e0fb6c2a41859cea251ccbeb408c816f63542cb968e86b81aaf9d45acdc->enter($__internal_96e51e0fb6c2a41859cea251ccbeb408c816f63542cb968e86b81aaf9d45acdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_96e51e0fb6c2a41859cea251ccbeb408c816f63542cb968e86b81aaf9d45acdc->leave($__internal_96e51e0fb6c2a41859cea251ccbeb408c816f63542cb968e86b81aaf9d45acdc_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_24c329bd9dec525f4c5b080ade3d14ca86ee4785ee83c29c88ba14279591dba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c329bd9dec525f4c5b080ade3d14ca86ee4785ee83c29c88ba14279591dba5->enter($__internal_24c329bd9dec525f4c5b080ade3d14ca86ee4785ee83c29c88ba14279591dba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SoftUni Blog";
        
        $__internal_24c329bd9dec525f4c5b080ade3d14ca86ee4785ee83c29c88ba14279591dba5->leave($__internal_24c329bd9dec525f4c5b080ade3d14ca86ee4785ee83c29c88ba14279591dba5_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dbc1e04162e6007fca32f67f6f6ace68c2a49ef02388b5bd7d089f0c60dd9a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc1e04162e6007fca32f67f6f6ace68c2a49ef02388b5bd7d089f0c60dd9a16->enter($__internal_dbc1e04162e6007fca32f67f6f6ace68c2a49ef02388b5bd7d089f0c60dd9a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_dbc1e04162e6007fca32f67f6f6ace68c2a49ef02388b5bd7d089f0c60dd9a16->leave($__internal_dbc1e04162e6007fca32f67f6f6ace68c2a49ef02388b5bd7d089f0c60dd9a16_prof);

    }

    // line 18
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_d0d330797c7b45dc9bf3b33d8763718028cdffe8f280eac0ade87d6f96074ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d330797c7b45dc9bf3b33d8763718028cdffe8f280eac0ade87d6f96074ab7->enter($__internal_d0d330797c7b45dc9bf3b33d8763718028cdffe8f280eac0ade87d6f96074ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_d0d330797c7b45dc9bf3b33d8763718028cdffe8f280eac0ade87d6f96074ab7->leave($__internal_d0d330797c7b45dc9bf3b33d8763718028cdffe8f280eac0ade87d6f96074ab7_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_8b61635b8c76495fef8e871a5bfb0387683b80cb9df3dea99391a1fba6e24a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b61635b8c76495fef8e871a5bfb0387683b80cb9df3dea99391a1fba6e24a5c->enter($__internal_8b61635b8c76495fef8e871a5bfb0387683b80cb9df3dea99391a1fba6e24a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_8b61635b8c76495fef8e871a5bfb0387683b80cb9df3dea99391a1fba6e24a5c->leave($__internal_8b61635b8c76495fef8e871a5bfb0387683b80cb9df3dea99391a1fba6e24a5c_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f567c381fb4f1d998b8d63d00a2d4ed8d31405641db1ae59db77c90f1465c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f567c381fb4f1d998b8d63d00a2d4ed8d31405641db1ae59db77c90f1465c28->enter($__internal_7f567c381fb4f1d998b8d63d00a2d4ed8d31405641db1ae59db77c90f1465c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7f567c381fb4f1d998b8d63d00a2d4ed8d31405641db1ae59db77c90f1465c28->leave($__internal_7f567c381fb4f1d998b8d63d00a2d4ed8d31405641db1ae59db77c90f1465c28_prof);

    }

    // line 69
    public function block_main($context, array $blocks = array())
    {
        $__internal_e6f5911e8a614c15431940d7728b07d5e826f922058fefa42de1f661fdaac589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f5911e8a614c15431940d7728b07d5e826f922058fefa42de1f661fdaac589->enter($__internal_e6f5911e8a614c15431940d7728b07d5e826f922058fefa42de1f661fdaac589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_e6f5911e8a614c15431940d7728b07d5e826f922058fefa42de1f661fdaac589->leave($__internal_e6f5911e8a614c15431940d7728b07d5e826f922058fefa42de1f661fdaac589_prof);

    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        $__internal_11a7f2970e408780132a1d95345000ef4d1617859fd892f2bd92176a777ad969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a7f2970e408780132a1d95345000ef4d1617859fd892f2bd92176a777ad969->enter($__internal_11a7f2970e408780132a1d95345000ef4d1617859fd892f2bd92176a777ad969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 76
        echo "    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Software University Foundation</p>
        </div>
    </footer>
";
        
        $__internal_11a7f2970e408780132a1d95345000ef4d1617859fd892f2bd92176a777ad969->leave($__internal_11a7f2970e408780132a1d95345000ef4d1617859fd892f2bd92176a777ad969_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5292af317168ce095c90080f52dbfab2b37fc99ffdd87c75e7e7b6bb2f82e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5292af317168ce095c90080f52dbfab2b37fc99ffdd87c75e7e7b6bb2f82e3c->enter($__internal_e5292af317168ce095c90080f52dbfab2b37fc99ffdd87c75e7e7b6bb2f82e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_e5292af317168ce095c90080f52dbfab2b37fc99ffdd87c75e7e7b6bb2f82e3c->leave($__internal_e5292af317168ce095c90080f52dbfab2b37fc99ffdd87c75e7e7b6bb2f82e3c_prof);

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
