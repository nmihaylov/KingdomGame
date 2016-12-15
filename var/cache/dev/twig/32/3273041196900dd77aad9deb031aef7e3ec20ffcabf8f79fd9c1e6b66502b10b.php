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
        $__internal_84e0091b184e9afa200983544a1f844cb00747c3f004b880050aa5f2f50b0429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e0091b184e9afa200983544a1f844cb00747c3f004b880050aa5f2f50b0429->enter($__internal_84e0091b184e9afa200983544a1f844cb00747c3f004b880050aa5f2f50b0429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_84e0091b184e9afa200983544a1f844cb00747c3f004b880050aa5f2f50b0429->leave($__internal_84e0091b184e9afa200983544a1f844cb00747c3f004b880050aa5f2f50b0429_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ea4a1096eaa3bc86f817f2f09421076a3b6d3521f4778d82e4c090d12d8c776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea4a1096eaa3bc86f817f2f09421076a3b6d3521f4778d82e4c090d12d8c776->enter($__internal_5ea4a1096eaa3bc86f817f2f09421076a3b6d3521f4778d82e4c090d12d8c776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Kingdom Game";
        
        $__internal_5ea4a1096eaa3bc86f817f2f09421076a3b6d3521f4778d82e4c090d12d8c776->leave($__internal_5ea4a1096eaa3bc86f817f2f09421076a3b6d3521f4778d82e4c090d12d8c776_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d81191751f9932af0e47e2e74cdc416c52705972bc2966404718fb60b284a2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d81191751f9932af0e47e2e74cdc416c52705972bc2966404718fb60b284a2ed->enter($__internal_d81191751f9932af0e47e2e74cdc416c52705972bc2966404718fb60b284a2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_d81191751f9932af0e47e2e74cdc416c52705972bc2966404718fb60b284a2ed->leave($__internal_d81191751f9932af0e47e2e74cdc416c52705972bc2966404718fb60b284a2ed_prof);

    }

    // line 18
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_58673629bc706266f24bfd582e244922e37a06794bc9699dcde7f41454debec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58673629bc706266f24bfd582e244922e37a06794bc9699dcde7f41454debec9->enter($__internal_58673629bc706266f24bfd582e244922e37a06794bc9699dcde7f41454debec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_58673629bc706266f24bfd582e244922e37a06794bc9699dcde7f41454debec9->leave($__internal_58673629bc706266f24bfd582e244922e37a06794bc9699dcde7f41454debec9_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_8ac9bd24af07967d95031c220cc7941ba211cb2eaefc267e17210c170685a827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac9bd24af07967d95031c220cc7941ba211cb2eaefc267e17210c170685a827->enter($__internal_8ac9bd24af07967d95031c220cc7941ba211cb2eaefc267e17210c170685a827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_8ac9bd24af07967d95031c220cc7941ba211cb2eaefc267e17210c170685a827->leave($__internal_8ac9bd24af07967d95031c220cc7941ba211cb2eaefc267e17210c170685a827_prof);

    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
        $__internal_30aefe5c9c5352aeaed2bb5d136662a21689cf33cb941852affde7b1b099426a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30aefe5c9c5352aeaed2bb5d136662a21689cf33cb941852affde7b1b099426a->enter($__internal_30aefe5c9c5352aeaed2bb5d136662a21689cf33cb941852affde7b1b099426a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_30aefe5c9c5352aeaed2bb5d136662a21689cf33cb941852affde7b1b099426a->leave($__internal_30aefe5c9c5352aeaed2bb5d136662a21689cf33cb941852affde7b1b099426a_prof);

    }

    // line 81
    public function block_main($context, array $blocks = array())
    {
        $__internal_fcf0ac1cd4e47c0b95d44f3f21107076bafa119f04dd1bb9645a5b8fe559d1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf0ac1cd4e47c0b95d44f3f21107076bafa119f04dd1bb9645a5b8fe559d1da->enter($__internal_fcf0ac1cd4e47c0b95d44f3f21107076bafa119f04dd1bb9645a5b8fe559d1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_fcf0ac1cd4e47c0b95d44f3f21107076bafa119f04dd1bb9645a5b8fe559d1da->leave($__internal_fcf0ac1cd4e47c0b95d44f3f21107076bafa119f04dd1bb9645a5b8fe559d1da_prof);

    }

    // line 87
    public function block_footer($context, array $blocks = array())
    {
        $__internal_47ffaa1b4a88ddb8d343721ecddd71a694d46748524eae49e8814706ccb62bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ffaa1b4a88ddb8d343721ecddd71a694d46748524eae49e8814706ccb62bee->enter($__internal_47ffaa1b4a88ddb8d343721ecddd71a694d46748524eae49e8814706ccb62bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 88
        echo "    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Nikolay Mihaylov Kingdoms game</p>
        </div>
    </footer>
";
        
        $__internal_47ffaa1b4a88ddb8d343721ecddd71a694d46748524eae49e8814706ccb62bee->leave($__internal_47ffaa1b4a88ddb8d343721ecddd71a694d46748524eae49e8814706ccb62bee_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_734711fd10e1d06b8563c18f3f5ad44648964f9a042988151067b3482d8746e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734711fd10e1d06b8563c18f3f5ad44648964f9a042988151067b3482d8746e0->enter($__internal_734711fd10e1d06b8563c18f3f5ad44648964f9a042988151067b3482d8746e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_734711fd10e1d06b8563c18f3f5ad44648964f9a042988151067b3482d8746e0->leave($__internal_734711fd10e1d06b8563c18f3f5ad44648964f9a042988151067b3482d8746e0_prof);

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
